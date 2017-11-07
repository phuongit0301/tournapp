import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import vis from 'vis';
import _ from 'lodash';
import moment from 'moment';
import ContentModal from '../common/ContentModal';
import ConfirmModal from '../common/ConfirmModal';
import SmsModal from '../common/SmsModal';
import RefereesModal from '../common/RefereesModal';
import PlayerProfileModal from '../common/PlayerProfileModal';
import ErrorModal from '../common/ErrorModal';
import SuccessModal from '../common/SuccessModal';
import DataPlayer from './DataPlayer';
import DataUser from './DataUser';
import { connect } from 'react-redux';
import { receiveAvailables, handleTimePlus, receiveGroupsIfNeed, receiveItemsIfNeed, addItems, processSession, getLastMatch  } from '../actions/contents';
import { Modal, ButtonToolbar, DropdownButton, MenuItem, Table, Button, FormGroup, ControlLabel, FormControl } from 'react-bootstrap';
let timeGroupsStart = [];
let timeGroupsEnd = [];
let count = 1 ;

export class Content extends Component {
	
	constructor(props) {

	    super(props);
	    this.state = {
	    	showModal: false,
	    	showModalConfirm: false,
	    	showModalReferees: false,
	    	showModalSms: false,
	    	showModalProfile: false,
	    	available: true,
	    	dataModalPlayer: {},
	    	arrSelectedCourt: [],
			selectedCourt: '',
			selectedTime: '',
			searchValue: '',
			loading: false,
			selectedSession: 1,
			showError: false,
			showSuccess: false,
		  	matchStatus: [],
		  	itemSms: {},
		  	itemMatch: {},
		  	selectedPlayer: {},
		  	successTitle: '',
		  	successMessage: '',
	    }

	    this.updateGraph = this.updateGraph.bind(this);
	    this.toggleModal = this.toggleModal.bind(this);
	    this.toggleModalConfirm = this.toggleModalConfirm.bind(this);
	    this.toggleModalSms = this.toggleModalSms.bind(this);
	    this.toggleModalReferees = this.toggleModalReferees.bind(this);
	    this.toggleModalError = this.toggleModalError.bind(this);
	    this.toggleModalSuccess = this.toggleModalSuccess.bind(this);
	    this.toggleModalProfile = this.toggleModalProfile.bind(this);
	    this._onChangeAvailable = this._onChangeAvailable.bind(this);
	    this._receiveItemsOfCourt = this._receiveItemsOfCourt.bind(this);
		this.setHours = this.setHours.bind(this);
		this.refreshWhenDragAndDrop = this.refreshWhenDragAndDrop.bind(this);
	}

	componentDidMount() {
		this.updateGraph();
	}

	componentDidUpdate(prevProps, prevState) {
		const {errors, available, itemsData} = this.props;

		if( prevProps.errors != errors && errors.error == 1 ) {
			this.setState({showError: true});
		}

		if(prevProps.available != available || itemsData != prevProps.itemsData) {
			this.updateGraph();	
		}
		// this function can cause infinitive loop
		// this.updateGraph();
	}

	toggleModal(showModal, itemMatch) {
		this.setState({ showModal: showModal, itemMatch })
	}

	toggleModalConfirm(showModal, item, selectedTime, selectedCourt) {
		const {receiveItemsIfNeed, playersData, itemsData, processMessage, processSession } = this.props;
		const {selectedSession} = this.state;

		receiveItemsIfNeed(itemsData, item, selectedSession);
		processSession();
		this.updateGraph();
		this.setState({item, selectedTime, });
	}

	toggleModalReferees(showModal) {
		this.setState({showModalReferees: showModal})
	}

	toggleModalSms(showModal, itemSms) {
		this.setState({showModalSms: showModal, itemSms})
	}

	toggleModalError(showModal) {
		this.setState({showError: showModal})
	}

	toggleModalSuccess(showModal, title, message) {
		this.setState({showSuccess: showModal, successTitle: title, successMessage: message })
	}

	toggleModalProfile(showModal, player) {
		this.setState({ showModalProfile: showModal, selectedPlayer: player })
	}

	refreshWhenDragAndDrop() {
		const {processSession } = this.props;
		processSession();
	}

	_onCheckboxChange(e) {

		const target = e.target;

	    let matchStatus = this.state.matchStatus;

	    if( target.type === 'checkbox' ) {
	    	
	    	const value = target.value;

	    	if( target.checked ) {
	    		matchStatus.push(value);
	    	} else {
	    		matchStatus = (matchStatus.length > 0) && matchStatus.filter((item) => item != value);
	    	}
	    }

	    this.setState({
	    	matchStatus: matchStatus
	    });
	}

    searchPlayer(e) {
    	// let input = ReactDOM.findDOMNode( this.searchInput );
    	this.setState({ searchValue: e.target.value });
	}

	_onSelect(e) {
        this.setState({ selectedSession: e.target.value });
	}

	_onCheckboxPlayerListChange(e){

	}
	_onChangeAvailable() {
		const {receiveAvailables, available} = this.props;
		receiveAvailables({available: !available});
	}

	_receiveItemsOfCourt(court) {
		this.setState(court);
	}

	/**
     * Update match details
     */
    updateMatchDetails(item, val) {
    	const self = this;
    	let $data = {
    		_token: window.Laravel.csrfToken,
    		id: item.id,
    		estimated_time: val,
    		court: item.group,
    	}
    	
    	axios.post( `${APP_URL}/api/update_match`, $data )
	    	.then(function(r){
				// self.forceUpdate();
				self.refreshWhenDragAndDrop();
			})
			.catch(function(err){
				console.log('Error', err);
			});
    		
    	return false;
    }

    updateSession(group) {
    	const {processSession} = this.props;

    	const self = this;

    	let $dataSession = {
    		court: {
	    		id: group.id,
			    content: group.content,
				statusReady: group.available,
				available: group.available,
				value: group.value,
    		}
    	}
    	
		axios.post( `${APP_URL}/api/session/92939d9c-a6a6-11e7-9346-1f572eaa7f24`, $dataSession )
    		.then(function(r){
    			processSession();
    			self.forceUpdate();
			})
			.catch(function(err) {
				console.log('Error', err);
			});

		return false;
    }

	getDay(start) {
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1;
		var yyyy = today.getFullYear();

		if(dd<10) {
		  dd='0'+dd
		} 
		if(mm<10) {
		  mm='0'+mm
		} 
		if(start) {
			today = mm+'/'+dd+'/'+yyyy;
		} else {
			today = mm+'/'+(dd + 1)+'/'+yyyy;
		}
		return today;
	}

	setHours(time) {
		var today = new Date();
		today.setHours(today.getHours());
		today.setMinutes(time + 5);
		return today;
	}

		/* Creates a date and sets the minutes
		* @param {int} time
		*/
	setMins(time) {
		var date = new Date();
		date.setHours(8);
		date.setMinutes(time);
		return date;
	}

	setTimesStart() {
		var today = new Date();
		today.setHours(0);
		today.setMinutes(0);
		return today;
	}

	setTimesEnd() {
		var today = new Date();
		today.setHours(24);
		today.setMinutes(0);
		return today;
	}

	compareTime(current) {
    	let dataItem = current.split(':');
		
		let hours = parseInt(dataItem[0]);
		let minutes = parseInt(dataItem[1]);
		let dateNow = new Date();
		let hoursCurrent = dateNow.getHours();
		let minutesCurrent = dateNow.getMinutes();

		if(hours < hoursCurrent) {
			return false;
		} else if(hours == hoursCurrent) {
			if(minutes < minutesCurrent) {
				return false;
			}
			return true;
		} else {
			return true;
		}

    }

    roundFive(x)
	{
	    return (x % 5) >= 1 ? parseInt(x / 5) * 5 + 5 : parseInt(x / 5) * 5;
	}

  	updateGraph() {

  		let { matchStatus, available, itemsData, groupsData, playersData, receiveGroupsIfNeed, receiveItemsIfNeed, addItems, matchStatusData } = this.props;
  		let { selectedCourt, arrSelectedCourt, selectedSession } = this.state;
  		let updated = false;
		let dataItems = [];
		let arrGroups = []; //
  		let self = this;
  		let timeNow = moment().hours() * 60 + moment().minutes();
  		let itemsStartTime = [];

  		if( itemsData.length > 0) {
  			dataItems = itemsData[selectedSession - 1];

  			if(dataItems && dataItems.length > 0) {

  				dataItems = dataItems.filter(item => {
  					playersData.filter(playerData => {
						if(playerData.scheduled_time !== null) {
							let playerTimeCompare = playerData.scheduled_time.split(':');
							playerTimeCompare = parseInt(playerTimeCompare[0] * 60) + parseInt(playerTimeCompare[1]);

							item.editable = true;

							if(playerTimeCompare >= timeNow) {
								return item;
							}
							itemsStartTime[item.id] = item.start;
						}
					});
					return item;
				})

			}
  		}
		//filter data available
		if(available) {
			groupsData = groupsData.filter((group) => { 
				return group.available;
			});
		}

	    let container = document.getElementById('vis-timeline');
	    container.innerHTML = '';

	    let items = new vis.DataSet(dataItems);
		let groups = new vis.DataSet(groupsData);
		let timeline = new vis.Timeline(container);

		let arr = [];
		// Time options
		let options = 
		{
			editable: {
				add: true,
				remove: false,
				updateTime: true,  // drag items horizontally
				updateGroup: true, // drag items from one group to another
			},

			align: 'left',
			showCurrentTime: true,
			rollingMode: {
				follow: false,
				offset: 0
			},

			// option groupOrder can be a property name or a sort function
			// the sort function must compare two groups and return a value
			//     > 0 when a > b
			//     < 0 when a < b
			//       0 when a == b
			groupOrder: function (a, b) {
				return a.value - b.value;
			},

			groupOrderSwap: function (a, b, groups) {
				let v = a.value;
				a.value = b.value;
				b.value = v;
			},

			groupTemplate: function(group) {
				let container = document.createElement('div');
				container.className = "vis-inner-wrapper";
				let form = document.createElement('form');
				form.setAttribute('method', 'post');
				form.className = "form-group";
				container.insertAdjacentElement('afterBegin', form);

				let label = document.createElement('span');
				label.innerHTML = group.content;
				form.insertAdjacentElement('afterBegin',label);

				let type = document.createElement('span');
				type.className = group.class;
				form.insertAdjacentElement('beforeEnd', type);

				let inputCheckbox = document.createElement('input');
				inputCheckbox.setAttribute('type', 'checkbox');
				inputCheckbox.name = 'rdCourtStatus';
				inputCheckbox.className = group.statusReady ? 'circle circle-ready' : 'circle';
				inputCheckbox.value = group.available ? '1' : '0';

				inputCheckbox.checked = (group.available) ? 'checked' : '';
				//get time higher in row after compare with date now

				inputCheckbox.addEventListener('change', function(e) {
					e.preventDefault();
					
					// let itemFilter = [];
					let itemClassName = '';
					// let groupClassName = '';
					// let available = true;

					// itemFilter = dataItems.filter(item => {
					// 	return group.id == item.group;
					// });

					// itemFilter.available = !itemFilter.available;

					if(!group.available && !available) {
						//groupClassName = 'circle timelines-bg-white';
						if(this.checked) {
							itemClassName = 'bg-white';
						} else {
							itemClassName = 'bg-red-light';
						}
						group.available = true;
					} else {
						group.available = false;
					}

					self.updateSession(group);
				});
				form.insertAdjacentElement('afterBegin',inputCheckbox);

				let check = document.createElement('label');
				check.className = 'check';
				inputCheckbox.insertAdjacentElement('afterEnd',check);

				return container;
		    },

		  // always snap to full minutes, independent of the scale
		  snap: function (date, scale, step) {
			//let minutes = 60 * 1000;
			// var seconds = 1000;
			//let m = Math.round(date / minutes) * minutes;
			let clone = new Date(date.valueOf());

			if(scale === 'minute') {
				clone.setMinutes(self.roundFive(clone.getMinutes()));
			}
			return clone;
		  },

		  onMoving: function (item, callback) {
	  		let t = itemsStartTime[item.id] === undefined ? 0 : itemsStartTime[item.id].valueOf();
		  	let now = moment().valueOf();

		  	if(item.start.valueOf() < t && t < now) {
		  		return false;
		  	}
		  	callback(item);
		  },

		  onMove: function (item, callback) {
		  	let val = (`0${item.start.getHours()}`).slice(-2) + ":" + (`0${item.start.getMinutes()}`).slice(-2);
		  	// item.start = new Date();
		  	self.updateMatchDetails(item, val);
		  	self.refreshWhenDragAndDrop();
		  	callback(item);
		  },

		  onAdd: function(item, callback) {
			  	
		  	timeline.on('drop', function (props) {
			    props.event.preventDefault();

			    let dNow = new Date();
		  	    let dragTime = props.snappedTime.valueOf();

			  	if(dragTime < dNow.valueOf()) {
			  		return false;
			  	}

		  	  	let val = (`0${props.snappedTime.getHours()}`).slice(-2) + ":" + (`0${props.snappedTime.getMinutes()}`).slice(-2);
			  	let itemData = {
			  		id: item.item.id,
			  		group: props.group,
			  	}

			  	self.updateMatchDetails(itemData, val);
			  	// self.refreshWhenDragAndDrop();
			  	// self.fetchDatasIfNeed();
			});
		  	callback(item);
		  },

		  stack: false,
		  autoResize: true,
		  orientation: 'both',
		  groupEditable: true,
		  start: this.setHours(0),
		  end: this.setHours(60),
		  min: this.getDay(true),
		  max: this.getDay(false),
		  zoomable: true,
		  zoomMax: 86400000,
		  zoomMin: 300000,
		  showMajorLabels: false,
		  showMinorLabels: true
		};

		timeline.on('drop', function (props) {
			  props.event.preventDefault();

			  if(props.what === 'item') {
			  	let dNow = new Date();
			  	let dragTime = props.snappedTime.valueOf();

			  	if(dragTime < dNow.valueOf()) {
			  		return false;
			  	}

		  		let val = (`0${props.snappedTime.getHours()}`).slice(-2) + ":" + (`0${props.snappedTime.getMinutes()}`).slice(-2)
		  		let dt = props.event.dataTransfer.getData("text");
		  		dt = JSON.parse(dt);

			  	let itemData = {
			  		id: dt.item.id,
			  		group: props.group,
			  	}

			  	self.updateMatchDetails(itemData, val);
			  	self.refreshWhenDragAndDrop();
			  	
		  		self.timelineCurrentWindows = timeline.getWindow();
			  }
			});

		timeline.on('select', function(items, evt)
		{
		  	self.timelineCurrentWindows = timeline.getWindow();
		});

		timeline.setItems(items);
		timeline.setOptions(options);
		timeline.setGroups(groups);	

		timeline.on('changed', function()
		{
			if ( typeof self.timelineCurrentWindows != 'undefined' ) 
			{
				timeline.setWindow( 
					self.timelineCurrentWindows.start, 
					self.timelineCurrentWindows.end, 
					{ duration: 0, easingFunction: 'linear'}, 
					function() {
						self.timelineCurrentWindows = undefined;
					}
				);	
			}
		});	

		timeline.on('doubleClick', (properties) => {
			let itemMatch = {};

			dataItems.map((item) => {
				
				/*
				* Check current item click to get start time and end time.
				* Compare with schedule time and schedule end time.
				* In case true: return player information
				 */
				
				if(item.id == properties.item) {
					let itemTimeStart = item.start.getHours() * 60 + item.start.getMinutes();
					let itemTimeEnd = item.end.getHours() * 60 + item.end.getMinutes();

					playersData.map(player => {
						if(item.group === player.court) {
							let playerTimeStart = parseInt(player.estimated_time.split(':')[0] * 60) + parseInt(player.estimated_time.split(':')[1]);
							let playerTimeEnd = parseInt(player.scheduled_end_time.split(':')[0] * 60) + parseInt(player.scheduled_end_time.split(':')[1]);
							if(itemTimeStart === playerTimeStart && itemTimeEnd === playerTimeEnd) {
								itemMatch = player;
							}
						}
					});
				}
			});

			if(itemMatch && Object.keys(itemMatch).length > 0) {
				this.setState({showModal: !this.state.showModal, itemMatch: itemMatch});
			}
		});
    }

	render() {
		let { state, playersData, groupsData, usersData, matchStatusData, datas, fetchDatasIfNeed } = this.props;

		let tempPlayerData = playersData;
		const { matchStatus, searchValue } = this.state;

		let dataUsers = "";
		let rowMatch = [];
		let dateNow = moment().format('DD/MM/YYYY');

		matchStatusData.map((match, i) => {
			let className = "checkbox-inline "+ match.class_name +" text-status";
			rowMatch.push(<label key={i} className={className}><input type="checkbox" value={match.id} className="checkbox-status" onChange={this._onCheckboxChange.bind(this)} /><span className="c-indicator"></span>{match.name}</label>)
		})

		if( matchStatus && matchStatus.length > 0 ) 
		{
			playersData = playersData.filter( (item) => {
				return _.includes( matchStatus, _.toString(item.match_status) );
			});
		}

		let playerData = playersData.map( (item, i) => 
					<DataPlayer 
						item={item} key={i} toggleModal={this.toggleModal} toggleModalConfirm={this.toggleModalConfirm} toggleModalSms={this.toggleModalSms}
						_receiveItemsOfCourt={this._receiveItemsOfCourt} {...this.props} matchStatus={matchStatus} selectedSession={this.state.selectedSession}
						toggleModalProfile={this.toggleModalProfile} toggleModalSuccess={this.toggleModalSuccess} containerDropType={"custom_container_type"} 
					/>
		)
		
		/**
		 * Parse dataUsers - group by times
		 */		
		let playersTimeGroup = []; 
		if ( tempPlayerData.length )
		{
			let idx = 1;
			tempPlayerData.map( match => 
			{
				if ( match.scheduled_time ) 
				{
					let exists = false;
					playersTimeGroup.map( (group, i) => {
						if ( group.time == match.scheduled_time ) {
							exists = i;
						}
					});

					let player1 = match.teams[0]; 
					let player2 = match.teams[1];

					let players = [
						{
							name: player1.name,
							late: ( player1.team_status ),
							paid: player1.paid,
							team_id: player1.id,
							match_id: match.id,
							ref: player1
						},
						{
							name: player2.name,
							late: ( player2.team_status ),
							paid: player2.paid,
							team_id: player2.id,
							match_id: match.id,
							ref: player2
						}
					];

					if ( this.state.searchValue && this.state.searchValue !== '') 
					{			
						if( player1.name.toLowerCase().search(this.state.searchValue.toLowerCase()) == -1 ) {
							players.splice( 0, 1 );
						} 

						if( player2.name.toLowerCase().search(this.state.searchValue.toLowerCase()) == -1 ) 
						{
							if ( players.length < 2 )
								players = [];
							else 
								players.splice( 1, 1 );
						}
					}

					if ( exists === false )
					{
						playersTimeGroup.push({
							id: idx,
							time: match.scheduled_time,
							player: players
						})
					}
					else 
					{
						playersTimeGroup[exists]['player'].concat( players )
					}
					idx++;
				}
			});
		}
		if( playersTimeGroup.length ) 
		{
			dataUsers = playersTimeGroup.map( (items, i) => 
				<DataUser successModal={this.toggleModalSuccess} items={items} key={i} {...this.props} toggleModalProfile={ this.toggleModalProfile } refreshWhenDragAndDrop={this.refreshWhenDragAndDrop} />
			);				
		}

		const referees = datas.referees;

		return (
			<div className="content-wrapper panel-container-vertical">
				<div className="panel-top">
					<div className="container-fluid">
					    <div className="row">    
							<div className="col-lg-12 col-md-12 col-sm-12">
						        	
						        	<div className="header-court-wrapper">
							        	<div className="container-fluid">
											<div className="row">
												<div className="col-lg-12">
													<div className="header-wrapper">
														<div className="dropdown clearfix">
															<FormGroup controlId="formControlsSelectSessions"
																onChange={this._onSelect.bind(this)}
																ref={ el => this.inputEl=el }
															>
															<FormControl componentClass="select" placeholder="Select Sessions" readOnly value={this.state.selectedSession}>
																<option value="1">Sessions 1 {dateNow}</option>
															</FormControl>
															</FormGroup>
														</div>
														<div className="border-right available-court-area">
															<label className="text-red text-default">Unavailable Court:</label>
															<div className="unavailable-switch-wrapper">
									                            <input id="unavailable-switch" name="unavailable-switch" type="checkbox" onChange={this._onChangeAvailable} />
									                            <label htmlFor="unavailable-switch" className="label-unavailable-switch label-success"></label>
									                        </div>
								                        </div>
								                        <div className="group-text">
															<label className="text-late text-medium">Match Late</label>
															<label className="text-active text-medium">Ready to go</label>
															<label className="text-process text-medium">In Progress</label>
															<label className="text-waiting text-medium">Waiting</label>
															<label className="text-match text-medium">Match Over</label>
														</div>
														{/*
														<Button bsSize="xsmall" bsClass='btn btn-default btn-referees-list' onClick={() => this.toggleModalReferees(!this.state.showModalReferees)}>Referees list</Button>
														<button type="button" className="btn btn-default">
															<a href="#" className="text-draws" data-toggle="modal" data-target="#referees-list">Draws</a>
														</button>
														*/}
													</div>
												</div>
											</div>
							    		</div>
						    		</div>
									
									<div id="container-vis-timeline">
										<span className="title-vis">Court Name</span>
										<div id="vis-timeline"></div>
									</div>
									
					        </div>
					        
					    </div>
					</div>
				</div>

				<div className="splitter-horizontal"></div>

				<div className="panel-bottom">
					<div className="container-fluid">
						<div className="row">
							<div className="col-lg-12 col-md-12 col-sm-12">
									<form className="form-inline" role="form">
										<div id="match-status-container" className="col-md-12 match-status-container">
											<div className="col-md-6">
												<label className="col-md-3 control-label label-match-status">Match Status:</label>
												<div className="col-md-9 checkbox match-status-area">
													{rowMatch}
												</div>
											</div>
											<div className="col-md-3 player-status-wrapper">
												<label className="col-md-4 control-label text-search-player">Player Status:</label>
												<span className="text-red player-late">Late</span>
												<span className="text-active player-arrived">Arrived</span>
											</div>
											<div className="col-md-3 search-player-container">
												<div id="search-container"> 
													<label className="col-md-4 control-label text-search-player">Search Player:</label>
													<div className="col-md-8">
														<div className="icon-addon addon-lg">
															<input type="text" placeholder="Search" className="form-control" id="search" value={ this.state.searchValue } onChange={this.searchPlayer.bind(this)} />
															<label htmlFor="search" className="fa fa-search" rel="tooltip" title="search"></label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
						            <div className="col-md-6 table-responsive match-status-table-wrapper"> 
								        <table className="table table-bordered table-striped table-player-wrapper">
								        	<thead>
									            <tr>
									            	<th>(ES) Time</th>
									                <th>(S) Time</th>
									                <th>Category</th>
									                <th>Round</th>
									                <th>Player 1</th>
									                <th>Player 2</th>
									                <th>Court #</th>
									                <th></th>
									            </tr>
									        </thead>
								            <tbody className="items">
								            	{playerData}
								            </tbody>
								        </table>
								    </div>
									<div className="col-md-6 player-list-container">{dataUsers}</div>
					        </div>
						</div>
					</div>
				</div>
				{
					this.state.showModalSms &&
						<SmsModal show={this.state.showModalSms} itemSms={this.state.itemSms} toggleModal={this.toggleModalSms}  />
				}
				{
					this.state.showModal &&
						<ContentModal togglePlayerModal={this.toggleModalProfile} successModal={this.toggleModalSuccess} 
							show={this.state.showModal} fetchDatasIfNeed={fetchDatasIfNeed} toggleModal={this.toggleModal} 
							referees={referees} matchStatusData={matchStatusData} playersData={this.state.dataModalPlayer} 
							groupsData={groupsData} itemMatch={this.state.itemMatch} refreshWhenDragAndDrop={this.refreshWhenDragAndDrop} />
				}
				{
					this.state.showModalConfirm &&
						<ConfirmModal show={this.state.showModalConfirm} toggleModal={this.toggleModalConfirm} />
				}
				{
					this.state.showModalReferees &&
						<RefereesModal show={this.state.showModalReferees} toggleModal={this.toggleModalReferees} />
				}
				{
					this.state.showModalProfile &&
						<PlayerProfileModal successModal={this.toggleModalSuccess} refreshWhenDragAndDrop={this.refreshWhenDragAndDrop} player={this.state.selectedPlayer} show={this.state.showModalProfile} toggleModal={this.toggleModalProfile}  />
				}
				{
					this.state.showError &&
						<ErrorModal show={this.state.showError} toggleModal={this.toggleModalError} errors={this.props.errors}  />
				}
				{
					this.state.showSuccess &&
						<SuccessModal show={this.state.showSuccess} title={this.state.successTitle} message={this.state.successMessage} toggleModal={this.toggleModalSuccess}   />
				}

			</div>
		)
	}
}

const mapStateToProps = ({getGroupsData, getItemsData, getPlayersData, receiveAvailables, receiveTime, errors, 
							receiveDataGroupsIfNeed, receiveDataItemsIfNeed, addItemsData, getDatas, }, ownProps) => {

	let itemsData = ownProps.itemsData;

	if(receiveTime.itemsData && receiveTime.itemsData.length > 0) {
		itemsData = receiveTime.itemsData;
	} 

	if (getDatas.itemsData && getDatas.itemsData.length > 0) {
		itemsData = getDatas.itemsData;
	}

	if(receiveDataItemsIfNeed.itemsData && receiveDataItemsIfNeed.itemsData.length > 0) {
		itemsData = receiveDataItemsIfNeed.itemsData;
	}

  return {
  	available: receiveAvailables.available ? receiveAvailables.available : false,
    itemsData: itemsData,
    groupsData: (receiveDataGroupsIfNeed.groupsData && receiveDataGroupsIfNeed.groupsData.length > 0) ? receiveDataGroupsIfNeed.groupsData : ownProps.groupsData,
    //playersData: (getPlayersData.playersData && getPlayersData.playersData.length > 0) ? getPlayersData.playersData : [],
    errors: receiveTime.errors,
  }
}

export default connect(
  mapStateToProps,
  { receiveAvailables, handleTimePlus, receiveGroupsIfNeed, receiveItemsIfNeed, addItems, processSession }
)(Content)