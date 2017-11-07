import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import moment from 'moment';
import { Modal, ButtonToolbar, DropdownButton, MenuItem, Table, Button, FormGroup, ControlLabel, FormControl, Radio } from 'react-bootstrap';

const dataPoints = ["0", "15", "30", "40", "Ad", "-"];

// axios.defaults.headers.post['X-CSRF-Token'] = window.Laravel.csrfToken;

export default class ContentModal extends Component {
	
	constructor(props) {

		super(props);

		const { itemMatch } = this.props;
		const matchResutls = itemMatch.match_results;

		if ( matchResutls ) 
		{
			const game1 = matchResutls[0];
			const game2 = matchResutls[1];
			const game3 = matchResutls[2];

			this.state = {
				winner_id: '', selectedReferee: itemMatch.referee_id, selectedCourt: itemMatch.court,
				point_1_1: game1.points[0],
				point_1_2: game2.points[0],
				point_1_3: game3.points[0],
				point_2_1: game1.points[1],
				point_2_2: game2.points[1],
				point_2_3: game3.points[1],
				game_1_1: game1.games[0],
				game_1_2: game2.games[0],
				game_1_3: game3.games[0],
				game_2_1: game1.games[1],
				game_2_2: game2.games[1],
				game_2_3: game3.games[1],
				tb_1_1: game1.tb[0],
				tb_1_2: game2.tb[0],
				tb_1_3: game3.tb[0],
				tb_2_1: game1.tb[1],
				tb_2_2: game2.tb[1],
				tb_2_3: game3.tb[1],
			}
		} else {
			this.state = {
				winner_id: '', selectedReferee: itemMatch.referee_id, selectedCourt: itemMatch.court,
				point_1_1: 0, point_1_2: 0, point_1_3: 0,
				point_2_1: 0, point_2_2: 0, point_2_3: 0,
				game_1_1: 0, game_1_2: 0, game_1_3: 0,
				game_2_1: 0, game_2_2: 0, game_2_3: 0,
				tb_1_1: 0, tb_1_2: 0, tb_1_3: 0,
				tb_2_1: 0, tb_2_2: 0, tb_2_3: 0,
			}
		}

		this.toggleModal = this.toggleModal.bind(this);
		this._onSelect = this._onSelect.bind(this);
		this._onSelectResult = this._onSelectResult.bind(this);
	}

	toggleModal() {
		const {toggleModal, show} = this.props;
		toggleModal(!show);
	}

	togglePlayerModal(idx, e) {

		const { itemMatch, togglePlayerModal } = this.props;

		const teams = itemMatch.teams;
		const team = teams[ idx ];

		togglePlayerModal( true, team );
	}

	_onSelect(e) {
        this.setState({ selectedCourt: e.target.value });
    }

    _onSelectMatchStatus(e) {
        this.setState({ selectedMatchStatus: e.target.value });
    }

    onSelectReferee(e) {
    	this.setState({ selectedReferee: e.target.value });
    }

    _onSelectResult(state, e) {

    	this.setState({ [state]: ReactDOM.findDOMNode(e.target).value });

    	let value = ReactDOM.findDOMNode(e.target).value;
    	switch( state ) {
    		case 'game_1_1':
    		case 'game_2_1':
    			this.setState({ point_1_1: 0, point_2_1: 0 })
    			break;
			case 'game_1_2':
    		case 'game_2_2':
    			this.setState({ point_1_2: 0, point_2_2: 0 })
    			break;

			case 'game_1_3':
    		case 'game_2_3':
    			this.setState({ point_1_3: 0, point_2_3: 0 })
    			break;

			case 'point_1_1':
				if ( value == 'Ad')
					this.setState({ point_2_1: '-' }) 
				break;
			case 'point_1_2':
				if ( value == 'Ad')
					this.setState({ point_2_2: '-' }) 
				break;
			case 'point_1_3':
				if ( value == 'Ad')
					this.setState({ point_2_3: '-' }) 
				break;
			case 'point_2_1':
				if ( value == 'Ad')
					this.setState({ point_1_1: '-' }) 
				break;
			case 'point_2_2':
				if ( value == 'Ad')
					this.setState({ point_1_2: '-' }) 
				break;
			case 'point_2_3':
				if ( value == 'Ad')
					this.setState({ point_1_3: '-' }) 
				break;
    	}
    }

    selectWinner(e) {
    	let winner_id = e.target.value;
    	this.setState({ winner_id: winner_id })
    }

    /**
     * Update match details
     */
    updateMatchDetails(e) {

    	e.preventDefault();

    	const { itemMatch, refreshWhenDragAndDrop, successModal, errorModal } = this.props;

    	const self = this;

    	const state = this.state;

    	let $data = {
    		id: itemMatch.id,
    		match_status: state.selectedMatchStatus,
    		court: state.selectedCourt,
    		referee_id: state.selectedReferee,
    		winner_id: self.state.winner_id,
    		_token: window.Laravel.csrfToken,
    		games: [
    			{
    				games: [ self.state.game_1_1, self.state.game_2_1 ],
    				points: [ self.state.point_1_1, self.state.point_2_1 ],
    				tb: [ self.state.tb_1_1, self.state.tb_2_1 ]
    			},
    			{
    				games: [ self.state.game_1_2, self.state.game_2_2 ],
    				points: [ self.state.point_1_2, self.state.point_2_2],
    				tb: [ self.state.tb_1_2, self.state.tb_2_2 ]
    			},
    			{
    				games: [ self.state.game_1_3, self.state.game_2_3 ],
    				points: [ self.state.point_1_3, self.state.point_2_3 ],
    				tb: [ self.state.tb_1_3, self.state.tb_2_3 ]
    			}
    		]
    	}
    	
    	axios.post( `${APP_URL}/api/update_match`, $data )
	    	.then(function(r)
	    	{
	    		let response = r.data;
	    		if ( response.status == 'success' ) 
	    		{	    			
		    		successModal( true, 'Match updated!', '' )
		    		refreshWhenDragAndDrop();

					self.toggleModal();
	    		}
	    		else {
	    			successModal( true, response.message, '' );
	    		}
			})
			.catch(function(err){
				console.log('Error', err);
			});
    		
    	return false;
    }

	render() {

		const { groupsData, itemMatch, matchStatusData, referees } = this.props;

		let option = groupsData.map(group => {
			return <option key={group.id} value={group.value}>{group.content}</option>
		})

		let optionGames = [];
		let optionTb = [];
		let now = new Date();

		for( let i=0; i <= 40; i++ ) {
			if( i<=20 ) {
				optionGames.push(<option key={"games"+i+now} value={i}>{i}</option>);
			}
			optionTb.push(<option key={"tb"+i+now} value={i}>{i}</option>);
		}

		let optionPoint = dataPoints.map((point, i) => {
			return <option key={point+""+i} value={point}>{point}</option>
		})

		let matchStatusOptions = matchStatusData.map( (status, i) => {
			return <option key={i} value={status.id}>{status.name}</option>
		})

		let refereesOptions = referees.map( (referee, i) => {
			return <option key={i} value={referee.id}>{referee.first_name} {referee.last_name}</option>
		})

		let results = itemMatch.results;

		return(
			<Modal restoreFocus={true} show={this.props.show} onHide={this.toggleModal} bsSize="large" dialogClassName="modal-detail-wrapper" aria-labelledby="contained-modal-title-lg" backdrop="static">
				<Modal.Header closeButton>
		          <Modal.Title id="contained-modal-title-lg">MATCH DETAIL</Modal.Title>
		        </Modal.Header>
		        <Modal.Body bsClass="modal-body-wrapper">
		        	<form method="POST" onSubmit={ this.updateMatchDetails.bind(this) }>
					<h2 className="group-title">{itemMatch.category_name} - {itemMatch.round}</h2>
					<div className="group-content">
						<div className="area-inline">
							<label className="row-inline row-title">Court</label>
							<FormGroup controlId="formControlsSelect"  bsClass="row-inline select-md" onChange={this._onSelect.bind(this)}>
	                          <FormControl defaultValue={ itemMatch.court ? itemMatch.court : '' } componentClass="select" placeholder="Select Court">
	                          	<option value=""></option>
	                          	{option}
	                          </FormControl>
	                        </FormGroup>
                        </div>
                        <div className="area-inline">
							<label className="row-inline row-title">Match Status</label>
							<FormGroup controlId="formControlsMatchStatus"  bsClass="row-inline select-md" onChange={ this._onSelectMatchStatus.bind(this) }>
	                          <FormControl defaultValue={itemMatch.match_status} componentClass="select">
                          		{matchStatusOptions}
	                          </FormControl>
	                        </FormGroup>
                        </div>
					</div>
					<div className="group-content">
						<label className="row-inline row-title">Start time</label>
						<span className="row-info">{itemMatch.scheduled_time}</span>
					</div>
					<div className="group-content">
						<label className="row-inline row-title">Elapsed time</label>
						<span className="row-info">{itemMatch.scheduled_end_time}</span>
					</div>
					<div className="group-content">
						<label className="row-inline row-title">Referee</label>
						<FormGroup controlId="formControlsSelectReferee" bsClass="row-inline select-md" onChange={ this.onSelectReferee.bind(this) }>
                          <FormControl defaultValue={ itemMatch.referee_id ? itemMatch.referee_id : '' } componentClass="select" placeholder="Select Sessions">
                          	{refereesOptions}
                          </FormControl>
                        </FormGroup>
					</div>
					<div className="group-content group-player-wrapper">
						<div className="group-player group-player-1">
							<label className="row-title-md">Players 1</label>
							<div className="group-information">
								<img src="../src/image/avatar-player-1.png" alt="player 1" />
								<span className="row-title-sm" onClick={ this.togglePlayerModal.bind(this, 0) }>{itemMatch.teams[0].name}</span>
								{ itemMatch.teams[0].team_status == '1' ? <span className="text-blue circle-arrived">Arrived</span> : '' }
							</div>
						</div>
						<div className="group-player group-player-2">
							<label className="row-title-md">Players 2</label>
							<div className="group-information">
								<img src="../src/image/avatar-player-2.png" alt="player 2" />
								<span className="row-title-sm" onClick={ this.togglePlayerModal.bind(this, 1) }>{itemMatch.teams[1].name}</span>
								{ itemMatch.teams[1].team_status == '1' ? <span className="text-blue circle-arrived">Arrived</span> : '' }
							</div>
						</div>
					</div>
					<div className="group-content">
						<label className="row-title-md">Match Score</label>
						<div className="group-player-2 match-score-area table-detail">
							<Table striped bordered condensed hover>
							    <thead>
							      <tr>
							        <th>W</th>
							        <th className="text-center" colSpan="3">1</th>
							        <th className="text-center" colSpan="3">2</th>
							        <th className="text-center" colSpan="3">3</th>
							      </tr>
							    </thead>
							    <tbody>
						    	  <tr>
						    	  	<td></td>
						    	  	<td className="text-center">game</td>
						    	  	<td className="text-center">points</td>
						    	  	<td className="text-center">TB</td>
						    	  	<td className="text-center">game</td>
						    	  	<td className="text-center">points</td>
						    	  	<td className="text-center">TB</td>
						    	  	<td className="text-center">game</td>
						    	  	<td className="text-center">points</td>
						    	  	<td className="text-center">TB</td>
						    	  </tr>
							      <tr>
							        <td>
							        	<FormGroup>
							        		<Radio defaultChecked={ this.state.winner_id==itemMatch.teams[0].id ? true : false } onClick={ this.selectWinner.bind(this) } value={itemMatch.teams[0].id} name="radioGroup" inline></Radio>
							        		<span className="link">{itemMatch.teams[0].name}</span>
						        		</FormGroup>
						        	</td>
							        <td>
							        	<div className="form-group form-group-sm">
								        	<select value={this.state.game_1_1} onChange={ this._onSelectResult.bind(this, 'game_1_1') } className="form-control">
								        		{optionGames}
								        	</select>
							        	</div>
							        </td>
							        <td>
							        	<div className="form-group form-group-sm">
								        	<select value={this.state.point_1_1} onChange={ this._onSelectResult.bind(this, 'point_1_1') } className="form-control">
								        		{optionPoint}
								        	</select>
							        	</div>
							        </td>
							        <td>
							        	<div className="form-group form-group-sm">
								        	<select value={this.state.tb_1_1} onChange={this._onSelectResult.bind(this, 'tb_1_1') }  className="form-control">
								        		{optionTb}
								        	</select>
							        	</div>
							        </td>
							        <td>
							        	<div className="form-group form-group-sm">
								        	<select value={this.state.game_1_2} onChange={this._onSelectResult.bind(this, 'game_1_2')} className="form-control">
								        		{optionGames}
								        	</select>
							        	</div>
							        </td>
							        <td>
							        	<div className="form-group form-group-sm">
								        	<select value={this.state.point_1_2} onChange={this._onSelectResult.bind(this, 'point_1_2')} className="form-control">
								        		{optionPoint}
								        	</select>
							        	</div>
							        </td>
							        <td>
							        	<div className="form-group form-group-sm">
								        	<select value={this.state.tb_1_2} onChange={this._onSelectResult.bind(this, 'tb_1_2')}  className="form-control">
								        		{optionTb}
								        	</select>
							        	</div>
							        </td>
							        <td>
							        	<div className="form-group form-group-sm">
								        	<select value={this.state.game_1_3} onChange={this._onSelectResult.bind(this, 'game_1_3')} className="form-control">
								        		{optionGames}
								        	</select>
							        	</div>
							        </td>
							        <td>
							        	<div className="form-group form-group-sm">
								        	<select value={this.state.point_1_3} onChange={this._onSelectResult.bind(this, 'point_1_3')} className="form-control">
								        		{optionPoint}
								        	</select>
							        	</div>
							        </td>
							        <td>
							        	<div className="form-group form-group-sm">
								        	<select value={this.state.tb_1_3} onChange={this._onSelectResult.bind(this, 'tb_1_3')}  className="form-control">
								        		{optionTb}
								        	</select>
							        	</div>
							        </td>
							      </tr>
							      <tr>

							        <td>
							        	<FormGroup>
							        		<Radio defaultChecked={ this.state.winner_id==itemMatch.teams[1].id ? true : false } onClick={ this.selectWinner.bind(this) } value={itemMatch.teams[1].id} name="radioGroup" inline></Radio>
							        		<span className="link">{itemMatch.teams[1].name}</span>
						        		</FormGroup>
						        	</td>
							        <td>
							        	<div className="form-group form-group-sm">
								        	<select value={this.state.game_2_1} onChange={this._onSelectResult.bind(this, 'game_2_1')} className="form-control">
								        		{optionGames}
								        	</select>
							        	</div>
							        </td>
							        <td>
							        	<div className="form-group form-group-sm">
								        	<select value={this.state.point_2_1} onChange={this._onSelectResult.bind(this, 'point_2_1')} className="form-control">
								        		{optionPoint}
								        	</select>
							        	</div>
							        </td>
							        <td>
							        	<div className="form-group form-group-sm">
								        	<select value={this.state.tb_2_1} onChange={this._onSelectResult.bind(this, 'tb_2_1')}  className="form-control">
								        		{optionTb}
								        	</select>
							        	</div>
							        </td>
							        <td>
							        	<div className="form-group form-group-sm">
								        	<select value={this.state.game_2_2} onChange={this._onSelectResult.bind(this, 'game_2_2')} className="form-control">
								        		{optionGames}
								        	</select>
							        	</div>
							        </td>
							        <td>
							        	<div className="form-group form-group-sm">
								        	<select value={this.state.point_2_2} onChange={this._onSelectResult.bind(this, 'point_2_2')} className="form-control">
								        		{optionPoint}
								        	</select>
							        	</div>
							        </td>
							        <td>
							        	<div className="form-group form-group-sm">
								        	<select value={this.state.tb_2_2} onChange={this._onSelectResult.bind(this, 'tb_2_2')}  className="form-control">
								        		{optionTb}
								        	</select>
							        	</div>
							        </td>
							        <td>
							        	<div className="form-group form-group-sm">
								        	<select value={this.state.game_2_3} onChange={this._onSelectResult.bind(this, 'game_2_3')} className="form-control">
								        		{optionGames}
								        	</select>
							        	</div>
							        </td>
							        <td>
							        	<div className="form-group form-group-sm">
								        	<select value={this.state.point_2_3} onChange={this._onSelectResult.bind(this, 'point_2_3')} className="form-control">
								        		{optionPoint}
								        	</select>
							        	</div>
							        </td>
							        <td>
							        	<div className="form-group form-group-sm">
								        	<select value={this.state.tb_2_3} onChange={this._onSelectResult.bind(this, 'tb_2_3')}  className="form-control">
								        		{optionTb}
								        	</select>
							        	</div>
							        </td>
							      </tr>
							    </tbody>
							  </Table>
						</div>
					</div>
					<div className="group-content text-right group-button">
						<Button bsClass="btns btn-update" type="submit">Update</Button>
         				<Button bsClass="btns btn-close" onClick={this.toggleModal}>Close</Button>
					</div>
					</form>
		        </Modal.Body>
			</Modal>
		)
	}
}