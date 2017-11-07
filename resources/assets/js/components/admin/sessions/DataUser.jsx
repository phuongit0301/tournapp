import React, { Component } from 'react';
import axios from 'axios';
import { Modal, ButtonToolbar, DropdownButton, MenuItem, Table, Button, FormGroup, ControlLabel, FormControl } from 'react-bootstrap';


class RowPlayer extends Component {

	constructor(props) {

		super(props);

		this.item = this.props.data;		
		this.state = { lateStyle: '', name: this.item.name, late: this.item.late, paid: this.item.paid, item: this.props.data }
	}

    /**
     * Update team status
     */
    updateStatus(e) {

    	const {successModal} = this.props;

		let selected = e.target.checked;
		let value = e.target.value;

		let $data = {
			team_id: this.item.team_id,
			match_id: this.item.match_id, 
			team_status: selected,
    		_token: window.Laravel.csrfToken
		}

		const {refreshWhenDragAndDrop} = this.props;
		const self = this;

		axios
			.post( `${APP_URL}/api/update_team_status`, $data )
			.then((r) => 
			{
				r = r.data;
				/**
				 * @TODO Update team color in "Match status" table
				 * green (arrived) | white (late or not updated status yet)
				 */
				if ( r.status == 'error' )
				{
					selected = !selected ? 1 : 0;
					self.refs[value].checked = selected == 1 ? true : false;

					successModal( true, 'Could not update user status!', '' );	
					
				}
				else 
				{
					selected = selected ? 1 : 0;
					self.setState({ late: selected });
					// self.forceUpdate();
					if ( r.matchUpdated )  {
						// @TODO dispatch team status changed ( effect Match Results table - Auto updated match to Ready to go if 2 team arrived )
						refreshWhenDragAndDrop();
					}
				}
			})
			.catch((err) => {
				console.log('Error', err);
			});
    }

    toggleModal( e ) {
		const { item, toggleModal, data } = this.props;
		toggleModal( true, data.ref );
	}

	render() {

		const { data } = this.props;

		let paid = ( this.state.paid != data.paid ) ? data.paid : this.state.paid;
		// let late = ( this.state.late != data.late ) ? data.late : this.state.late;
		let name = ( this.state.name != data.name ) ? data.name : this.state.name;

		let lateStyle = ( this.state.late == 2 ) ? 'text-late' : ( this.state.late == 1 ? 'text-arrived' : '' );
		let checked = ( this.state.late == 1 ) ? true : false;

		return (
			<li>
				<div>
					<input defaultChecked={checked} className="checkbox-custom-circle" type="checkbox" onClick={ this.updateStatus.bind(this) } ref={data.team_id} value={data.team_id} />
					<label className="checkbox-custom-circle-label">
						<Button bsSize="xsmall" bsClass='btn-player-modal bg-transparent' onClick={ this.toggleModal.bind(this) }>
							<span className={ lateStyle }>{ name }</span> 
							<span className={ paid ? "text-paid" : "text-not-paid" }> ({ paid ? 'Paid' : 'Not paid' })</span>
						</Button>
					</label>
				</div>
			</li>
		)
	}
}

export default class DataUser extends Component {

	constructor(props) {

        super(props);

        /**
         * @TODO set props.item = member data ( team data base on session json )
         */
        this.state = { selectedCourt: "", showModal: false, arrSelectedCourt: [], lateStyle: '' };
    }

	render() {
		
		const { items, toggleModalProfile, toggleSuccess } = this.props;

		let html = '';

		if ( items.player.length ) {
			html = items.player.map( (player, i) => {
			    return (
			    	<RowPlayer toggleSuccess={ toggleSuccess } toggleModal={ toggleModalProfile } key={i} data={player} {...this.props} />
		    	)
			});
		}

		return (
			<div className="time-col">
				<div className="time">{(items && items.time) && items.time}</div>
				<div className="player-list">
					<ul className="list-group list-group-striped">
						{ html }				
					</ul>
				</div>
			</div>
		)		
	}
}
