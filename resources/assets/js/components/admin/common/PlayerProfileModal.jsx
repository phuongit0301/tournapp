import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import moment from 'moment';
import axios from 'axios';
import { Modal, ButtonToolbar, DropdownButton, MenuItem, Table, Button, FormGroup, ControlLabel, FormControl, Tabs, Tab } from 'react-bootstrap';

export default class PlayerProfileModal extends Component {
	
	constructor(props) {

		super(props);

		const { player } = this.props;

		this.state = { paid: player.paid, tabKey: 1 }
		this.toggleModal = this.toggleModal.bind(this);
	}

	toggleModal() {
		const { toggleModal, show, player } = this.props;
		toggleModal( !show, player );
	}

	changePaidStatus(e) {
		this.setState({ paid: e.target.value })
	}

	saveData(e) {
		
		const { player, successModal, refreshWhenDragAndDrop } = this.props;

		const $data = {
			team_id: player.id,
			status: this.state.paid,
    		_token: window.Laravel.csrfToken
		}

		axios.post( `${APP_URL}/api/update_payment_status`, $data )
			.then( r => {
				successModal( true, 'Profile updated!', '' )
				refreshWhenDragAndDrop();
				this.toggleModal();
			})
			.catch(function(err){
				console.log('Error', err);
			});
    		
    	return false;
	}

	handleTabSelect( tabKey ) {
		this.setState({ tabKey });
	}

	render() {

		const { player } = this.props;

		let statusHTML = '';
		if ( player.team_status == 1 ) {
			statusHTML = <span className="text-blue circle-arrived">Arrived</span>
		}

		let member = player.members[0];
		let resigtered_date = moment(member.created_date).format('DD MMM, YYYY');		
		let date_of_birth = moment(member.date_of_birth).format('DD MMM, YYYY');

		let photo = member.photo;
		if ( !photo )
			photo = '../src/image/avatar-profile.png';

		let clubMailTo = '';

		if ( member.club ) {
			let href = 'mailto:' + member.club.email;
			clubMailTo = () => {
				return (
					<a className="btn-envelop-modal bg-transparent" href={href}><img src={ '../src/image/icon-envelop.png' } alt="envelop" /></a>
				)
			}
		}

		return(
			<Modal restoreFocus={true} show={this.props.show} onHide={this.toggleModal} bsSize="lg" dialogClassName="modal-wrapper modal-profile" aria-labelledby="contained-modal-title-lg" backdrop="static">
				<Modal.Header closeButton>
		          <Modal.Title id="contained-modal-title-lg">PLAYER PROFILE</Modal.Title>
		        </Modal.Header>
		        <Modal.Body bsClass="modal-body-profile">

		        	<div className="row">
		        		<div className="col-sm-6 avatar">
							<img src={photo} className="pull-left" />
							<div className="pull-left name-info">
								<div className="group-title">
									<h3 className="title-modal">{member.first_name} {member.last_name}</h3>
									{statusHTML}
								</div>								
								<p><strong>Signup date:</strong>{resigtered_date}</p>
							</div>	
		        		</div>
		        		<div className="col-sm-6">
							<div className="profile-info">
			        			<h3 className="title-modal">Info</h3>
			        			<p><strong>Gender:</strong>{member.gendder}</p>
			        			<p><strong>Nationality:</strong>{member.country_name}</p>
			        			<p><strong>Date Of Birth:</strong>{date_of_birth}</p>
		        			</div>
		        		</div>
		        	</div>

		        	<div className="row">
		        		<div className="col-md-8 col-sm-12">
		        			<div className="rows-profile">
			        			<p><strong>Email:</strong>{member.email}</p>
			        			<p><strong>Phone:</strong>{member.phone}</p>
			        			<p><strong>Other Phone:</strong>{member.phone_2}</p>
			        			<p><strong>Address:</strong>{member.address}</p>
		        			</div>
		        		</div>
		        		<div className="col-md-4 col-sm-12">
		        			<div className="rows-profile">
		        				<p><strong>Club:</strong>{member.club.name}</p>
								<p><strong>Coach:</strong>N/A</p>
								<p>
									<strong>Contact:</strong>
									{ clubMailTo() }
									<Button bsSize="xsmall" bsClass='btn-sms-modal bg-transparent'><img src={ '../src/image/sms.png' } alt="sms" /></Button>
								</p>
		        			</div>
		        		</div>
		        	</div>

		        	<Tabs defaultActiveKey={this.state.tabKey} onSelect={this.handleTabSelect} id="controlled-profile-tab">
						<Tab eventKey={1} title="Tournament Info">
							<div className="col-sm-12">
			        			<div className="rows-profile">
				        			<div className="paid-area">
				        				<h3 className="title-modal pull-left">Paid</h3>
				        				<div className="dropdown clearfix pull-left">
											<FormGroup controlId="formControlsPaid">
												<FormControl onChange={ this.changePaidStatus.bind(this) } defaultValue={ this.state.paid } componentClass="select" placeholder="Not Paid" readOnly>
													<option value="0">Not Paid</option>
													<option value="0">Credit Online</option>
													<option value="0">Cash</option>
													<option value="0">Paid to coach</option>
													<option value="0">Checked</option>
													<option value="1">Phone Credit</option>
												</FormControl>
											</FormGroup>
										</div>
										<span className="text-blue circle-arrived">Arrived</span>
				        			</div>
			        			</div>
		        			</div>

		        			<div className="col-sm-12">
		        				<div className="rows-profile">
				        			<h3 className="title-modal">Product</h3>
				        			<table className="table table-bordered table-striped">
							        	<thead>
								            <tr>
								                <th>Health permit</th>
								                <th>
								                	<select>
								                		<option value="valid">Valid</option>
								                	</select>
								                </th>
								                <th>
								                	<span>Feb 28th 2017</span>
								                	<Button bsSize="xsmall" bsClass='btn-plus-modal bg-transparent pull-right'><img src={ '../src/image/icon-plus.png' } alt="plus" /></Button>
								                </th>
								            </tr>
								        </thead>
							            <tbody>
							            	<tr>
							            		<td>Membership card</td>
								                <th>
								                	<select>
								                		<option value="valid">Valid</option>
								                	</select>
								                </th>
							            		<td>
							            			<span>Expired</span>
							            			<Button bsSize="xsmall" bsClass='btn-attach-modal bg-transparent pull-right'><img src={ '../src/image/icon-attach.png' } alt="attach" /></Button>
						            			</td>
							            	</tr>
							            	<tr>
							            		<td>Insurance</td>
								                <th>
								                	<select>
								                		<option value="valid">Valid</option>
								                		<option checked value="expired">Expired</option>
								                	</select>
								                </th>
							            		<td>
							            			<span>Dec 24th 2018</span>
							            			<Button bsSize="xsmall" bsClass='btn-attach-modal bg-transparent pull-right'><img src={ '../src/image/icon-attach.png' } alt="attach" /></Button>
						            			</td>
							            	</tr>
							            	<tr>
							            		<td>Tennis ball</td>
								                <th>
								                	<select>
								                		<option value="paid">Paid</option>
								                	</select>
								                </th>
							            		<td>2</td>
							            	</tr>
							            	<tr>
							            		<td>Hat</td>
								                <th>
								                	<select>
								                		<option value="paid">Paid</option>
								                	</select>
								                </th>
							            		<td>2</td>
							            	</tr>
							            	<tr>
							            		<td>T-Shirt</td>
								                <th>
								                	<select>
								                		<option value="paid">Paid</option>
								                	</select>
								                </th>
							            		<td>1 - <select>
								                			<option value="xl">X L</option>
								                		</select>
						                		</td>
							            	</tr>
							            </tbody>
						            </table>
					            </div>
		        			</div>
						</Tab>

						<Tab eventKey={2} title="Ranking">
	        				<div className="rows-profile">
			        			<h3 className="title-modal">Rankings</h3>
			        			<div className="col-sm-12 col-md-6 rankings-table">
			        			<table className="table table-bordered table-striped">
						        	<thead>
							            <tr>
							                <th>SINGLES</th>
							                <th>RANKED</th>
							                <th>POINTS</th>
							            </tr>
							        </thead>
						            <tbody>
						            	<tr>
						            		<td>Isarel Circuit</td>
						            		<td>2</td>
						            		<td>1011</td>
						            	</tr>
						            	<tr>
						            		<td>Isarel Federation</td>
						            		<td>22</td>
						            		<td>120</td>
						            	</tr>
						            </tbody>
					            </table>
					            </div>


			        			<div className="col-sm-12 col-md-6 rankings-table">
					            <table className="table table-bordered table-striped">
						        	<thead>
							            <tr>
							                <th>DOUBLES</th>
							                <th>RANKED</th>
							                <th>POINTS</th>
							            </tr>
							        </thead>
						            <tbody>
						            	<tr>
						            		<td>Isarel Circuit</td>
						            		<td>2</td>
						            		<td>1011</td>
						            	</tr>
						            	<tr>
						            		<td>Isarel Federation</td>
						            		<td>22</td>
						            		<td>120</td>
						            	</tr>
						            </tbody>
					            </table>
					            </div>
				            </div>
						</Tab>

						<Tab eventKey={3} title="Tournament Results">
							<div className="rows-profile">
			        			<h3 className="title-modal">Tournament Results</h3>
			        			<Tabs defaultActiveKey={this.state.tabKey} id="controlled-tournament-tabs">
									<Tab eventKey={1} title="2015">
										<table className="table table-bordered table-striped">
								        	<thead>
									            <tr>
									                <th>Tournaments</th>
									                <th>Date</th>
									                <th>Categories</th>
									                <th>Place</th>
									                <th>Points</th>
									            </tr>
									        </thead>
								            <tbody>
								            	<tr>
								            		<td>NY Open 2015</td>
								            		<td>17.1.15</td>
								            		<td>Boys 12</td>
								            		<td>1/4 Final</td>
								            		<td>120</td>
								            	</tr>
								            </tbody>
							            </table>
									</Tab>
									<Tab eventKey={2} title="2016">
										<table className="table table-bordered table-striped">
								        	<thead>
									            <tr>
									                <th>Tournaments</th>
									                <th>Date</th>
									                <th>Categories</th>
									                <th>Place</th>
									                <th>Points</th>
									            </tr>
									        </thead>
								            <tbody>
								            	<tr>
								            		<td>NY Open 2016</td>
								            		<td>17.1.16</td>
								            		<td>Boys 12</td>
								            		<td>1/4 Final</td>
								            		<td>120</td>
								            	</tr>
								            </tbody>
							            </table>
									</Tab>
									<Tab eventKey={3} title="2017">
										<table className="table table-bordered table-striped">
								        	<thead>
									            <tr>
									                <th>Tournaments</th>
									                <th>Date</th>
									                <th>Categories</th>
									                <th>Place</th>
									                <th>Points</th>
									            </tr>
									        </thead>
								            <tbody>
								            	<tr>
								            		<td>NY Open 2017</td>
								            		<td>17.1.17</td>
								            		<td>Boys 12</td>
								            		<td>1/4 Final</td>
								            		<td>120</td>
								            	</tr>
								            </tbody>
							            </table>
									</Tab>
								</Tabs>
				            </div>
						</Tab>

						<Tab eventKey={4} title="Leauges Results">
							<div className="rows-profile">
			        			<h3 className="title-modal">Tournament Results</h3>
			        			<Tabs defaultActiveKey={this.state.tabKey} id="controlled-tournament-tabs">
									<Tab eventKey={1} title="2015">
										<table className="table table-bordered table-striped">
								        	<thead>
									            <tr>
									                <th>Tournaments</th>
									                <th>Date</th>
									                <th>Categories</th>
									                <th>Team</th>
									                <th>Points</th>
									            </tr>
									        </thead>
								            <tbody>
								            	<tr>
								            		<td>NY Open 2015</td>
								            		<td>17.1.15</td>
								            		<td>Boys 12</td>
								            		<td>Haifa Tennis Club 1</td>
								            		<td>120</td>
								            	</tr>
								            </tbody>
							            </table>
									</Tab>
									<Tab eventKey={2} title="2016">
										<table className="table table-bordered table-striped">
								        	<thead>
									            <tr>
									                <th>Tournaments</th>
									                <th>Date</th>
									                <th>Categories</th>
									                <th>Team</th>
									                <th>Points</th>
									            </tr>
									        </thead>
								            <tbody>
								            	<tr>
								            		<td>NY Open 2016</td>
								            		<td>17.1.16</td>
								            		<td>Boys 12</td>
								            		<td>Haifa Tennis Club 1</td>
								            		<td>120</td>
								            	</tr>
								            </tbody>
							            </table>
									</Tab>
									<Tab eventKey={3} title="2017">
										<table className="table table-bordered table-striped">
								        	<thead>
									            <tr>
									                <th>Tournaments</th>
									                <th>Date</th>
									                <th>Categories</th>
									                <th>Team</th>
									                <th>Points</th>
									            </tr>
									        </thead>
								            <tbody>
								            	<tr>
								            		<td>NY Open 2017</td>
								            		<td>17.1.17</td>
								            		<td>Boys 12</td>
								            		<td>Haifa Tennis Club 1</td>
								            		<td>120</td>
								            	</tr>
								            </tbody>
							            </table>
									</Tab>
								</Tabs>
				            </div>
						</Tab>
					</Tabs>
					
					<div className="group-content text-right group-button">
						<Button onClick={ this.saveData.bind(this) } bsClass="btns btn-update">Update</Button>
         				<Button bsClass="btns btn-close" onClick={ this.toggleModal }>Close</Button>
					</div>
		        </Modal.Body>
			</Modal>
		)
	}
}