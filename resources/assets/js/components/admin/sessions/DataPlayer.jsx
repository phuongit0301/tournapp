import React, { Component } from 'react';
import moment from 'moment';
import axios from 'axios';
import { Modal, ButtonToolbar, DropdownButton, MenuItem, Table, Button, FormGroup, ControlLabel, FormControl } from 'react-bootstrap';
import ConfirmModal from '../common/ConfirmModal';
import _ from 'lodash';
//let arrSelectedCourt = [];

export default class DataPlayer extends Component {

	constructor(props) {

        super(props);

        const { item } = this.props;

        this.item = item;

        this.isUpdating = false;
        /**
         * @TODO : The time dropdown value = start time - end time of session object (5 mins distances)
         */
        this.state = { 
    		selectedCourt: ( item.court ? item.court : '' ), 
    		selectedTime: ( item.scheduled_time ? item.scheduled_time : '' ),
    		matchStatus: ( item.match_status ) ? item.match_status : '',
    		estimated_time: ( item.estimated_time ? item.estimated_time : '' ),
    		showModal: false, 
    		arrSelectedCourt: [], 
    		item: {}
		}
    }

    /**
     * Set interval to check for match late
     */
    componentDidMount() {
    	let intervalId = setInterval( this.timer.bind(this), 1000 );
    }

    /**
     * Interval function to check if match is late or not
     */
    timer() 
    {
    	const { item, toggleModalConfirm } = this.props;
    	// Only affect Pre-Match
    	if ( item.id == 4 && this.state.matchStatus == 5 && item.estimated_time ) 
    	{
    		if ( this.isUpdating ) {
    			return;
    		}

    		

    		let tt = item.estimated_time.split(":");
    		let matchTime = moment();
    		matchTime = matchTime
    						.set({ hour: tt[0], minute: tt[1] })
    		let now = moment( moment().format('hh:mm') );
    		let diff = matchTime.diff( moment(), 'minutes' );
    		
    		if ( diff <= 0 ) 
    		{
    			this.isUpdating = true;
    			axios
					.post( `${APP_URL}/api/update_match`, {
						id: item.id,
			    		match_status: 6, // Match late
			    		_token: window.Laravel.csrfToken,
					} )
					.then((r) => 
					{
						let response = r.data;
						if ( response.status == 'success' ) {
							this.item = response.match;
							this.setState({ matchStatus: 6 });
							toggleModalConfirm( true, item, this.state.selectedTime, this.state.selectedCourt );
							this.forceUpdate();
						}

						this.isUpdating = false;
					})
					.catch((err) => {
						console.log('Error', err);
						this.isUpdating = false;
					}); 
    		}
    	}
    }

    _onSelect(e) {
    	// const {_receiveItemsOfCourt} = this.props;
    	// arrSelectedCourt.push(e.target.value);
    	const { toggleModalConfirm, toggleModalSuccess, item } = this.props;
    	
    	e.preventDefault();

    	let val = e.target.value;
    	let prev = this.state.selectedCourt;

    	axios
			.post( `${APP_URL}/api/update_match`, {
				id: item.id,
	    		court: val,
	    		_token: window.Laravel.csrfToken,
			} )
			.then((r) => 
			{
				let response = r.data;
				if ( response.status == 'error' ) 
				{
					toggleModalSuccess( true, response.message );
					this.setState({ selectedCourt: prev });
				}
				else
				{
					this.item = response.match;
					this.setState({ selectedCourt: val });
					toggleModalConfirm( true, response.match, this.state.selectedTime, val );
				}
			})
			.catch((err) => {
				console.log('Error', err);
			});    	

        // if( Object.keys(item).length > 0 ) {
        // 	item.scheduled_time = time;
        // 	toggleModalConfirm(true, item, e.target.value);
        // }
    }

    toggleModal(item) {
    	const { toggleModal, matchStatusData } = this.props;
		toggleModal(true, item);
	}


    toggleModalConfirm(e) {

    	const { selectedCourt } = this.state;
    	const { toggleModalConfirm, toggleModalSuccess, item } = this.props;

    	let val = e.target.value;
    	let prev = this.state.selectedTime;

    	axios
			.post( `${APP_URL}/api/update_match`, {
				id: item.id,
	    		scheduled_time: val,
	    		_token: window.Laravel.csrfToken,
			} )
			.then((r) => 
			{
				let response = r.data;

				if ( response.status == 'error' ) 
				{
					toggleModalSuccess( true, response.message );
					this.setState({ selectedTime: prev });
				}
				else {

					this.item = response.match;
					this.setState({ estimated_time: response.match.estimated_time, selectedTime: val });

					// if (  response.status == 'success' && this.state.selectedTime && this.state.selectedCourt ) {
					// 	// console.log(this.state.selectedTime);
					// 	// console.log(item);	
						
					// }
					toggleModalConfirm( true, item, this.state.selectedTime, selectedCourt );
					this.forceUpdate();
				}
			})
			.catch((err) => {
				console.log('Error', err);
			});    	  	
	}

	toggleModalSms(item) {
    	const {toggleModalSms} = this.props;
		toggleModalSms(true, item);
	}

	toggleModalProfile(item) {
		const {toggleModalProfile} = this.props;
		toggleModalProfile(true, item);
	}

	handleDragStart(e) {

		var dragSrcEl = e.target;

	    //e.dataTransfer.effectAllowed = 'move';

	    const {item} = this.props;

	    let $data = {
	      id: new Date(),
	      type: 'range',
	      content: "Drag Content",
	      start: new Date(),
	      end: new Date(1000*60*30 + (new Date()).valueOf()),
	      item
	    };
	    e.dataTransfer.setData("text", JSON.stringify($data));
	}

	render() {

		const { groupsData, toggleModalSms, matchStatus, datas, matchStatusData, item } = this.props;
		let options = [];
		let arrClassName = [];
		let className = "";

		groupsData.map(data => {
			if ( data.value && data.available ) {
				options.push(<option value={data.value} key={data.id}>{data.content}</option>);
				if(arrClassName[data.value] === undefined)
					arrClassName[data.ivalued] = new Array();
				arrClassName[data.value] = data.class;
			}
		});
		
		className = arrClassName[item.court] === undefined ? 'circle bg-white' : arrClassName[item.court];

		let hours = moment().hours();
		let minutes = moment().minutes();
		let timeStep = 5;
		let optionTimes = [];
		let i = 0;

		datas.times.map((time, i) => {
			if (time !== null) {
				optionTimes.push(<option key={i} value={time}>{time}</option>);
			}
		});

		let current_match_status = ( this.state.matchStatus != item.match_status ) ? item.match_status : this.state.matchStatus
		let dataMatch = _.find (matchStatusData, function(obj) {
			return obj.id == current_match_status;
		});

		let court = item.court ? item.court : '';

		let estimated_time = (this.state.estimated_time != item.estimated_time) ? item.estimated_time : this.state.estimated_time;
		let selectedCourt = (this.state.selectedCourt != item.court) ? item.court : this.state.selectedCourt;		
		let selectedTime = (this.state.selectedTime != item.scheduled_time) ? item.scheduled_time : this.state.selectedTime;
		selectedTime = selectedTime === null ? "0" : selectedTime;

		return (
			<tr draggable="true" onDragStart={this.handleDragStart.bind(this)} >
				<td>{ estimated_time }</td>
	            <td>
	            	<div className="time-wrapper">
	            		<select onChange={this.toggleModalConfirm.bind(this)} value={ selectedTime }>
			                <option value="0"></option>
                    		{ optionTimes }
                		</select>

	            	</div>
	        	</td>
	            <td><Button bsSize="xsmall" bsClass='btn-category bg-transparent' onClick={this.toggleModal.bind(this, item)}>{item.category_name}</Button></td>
	            <td className="item"><Button bsSize="xsmall" bsClass='btn-round bg-transparent' onClick={this.toggleModal.bind(this, item)}>{item.round}</Button></td>
	            <td style={{backgroundColor: dataMatch.color}}>
	            	<Button bsSize="xsmall" bsClass='btn-player-modal bg-transparent' onClick={ this.toggleModalProfile.bind(this, item.teams[0]) }>
	            		{item.teams[0].name} { (item.teams[0].paid == 1) ? <span className={item.teams[0].textPaidStatus}>(PAID)</span> : null }
	            	</Button>
            	</td>
	            <td style={{backgroundColor: dataMatch.color}} onClick={ this.toggleModalProfile.bind(this, item.teams[1]) }>
	            	<Button bsSize="xsmall" bsClass='btn-player-modal bg-transparent'>
	            		{item.teams[1].name} { (item.teams[1].paid == 1) ? <span className={item.teams[1].textPaidStatus}>(PAID)</span> : null }
            		</Button>
        		</td>
	            <td>
	            	<div className="match-circle-area">
	            		<span className={className}></span>
	            	</div>
	            	<select className={ item.court ? '' : 'has-border-red' } value={ selectedCourt } onChange={ this._onSelect.bind(this) }>
	            		<option value="0"></option>
                    	{options}
	            	</select>
	            </td>
	            <td><Button bsSize="xsmall" bsClass='btn-sms-modal' onClick={this.toggleModalSms.bind(this, item)}><img src={ '../src/image/sms.png' } alt="sms" /></Button></td>
	        </tr>
		)
		
	}
}
