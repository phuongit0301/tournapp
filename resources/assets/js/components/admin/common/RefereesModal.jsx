import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Modal, ButtonToolbar, DropdownButton, MenuItem, Table, Button } from 'react-bootstrap';

export default class RefereesModal extends Component {
	
	constructor(props) {

		super(props);
		
		this.toggleModal = this.toggleModal.bind(this);
	}

	toggleModal() {
		const {toggleModal, show} = this.props;
		toggleModal(!show);
	}

	render() {
		return(
			<Modal show={this.props.show} onHide={this.toggleModal} bsSize="lg" dialogClassName="modal-wrapper" aria-labelledby="contained-modal-title-lg" backdrop="static">
				<Modal.Header closeButton>
		          <Modal.Title id="contained-modal-title-lg">Referees List</Modal.Title>
		        </Modal.Header>
		        <Modal.Body bsClass="modal-body-referees">
					<h4 className="title-refer text-blue">SEVEV ISRAEL 5 - NORTH</h4>
					<p className="title-refer">Referee list</p>
					<ol className="margin-modal-default list-number">
						<li>Haim Moshe</li>
						<li>Ian Morison</li>
					</ol>

					<form role="search" className="form-horizontal ">
					  <div className="form-group">
				  		<div className="col-md-5">
					    	<input type="text" className="search-preferees-list form-control" placeholder="Search" />
					    </div>
					  </div>
					</form>
					
					<p className="title-add-referee text-blue">Add referee to the list </p>

					<div className="dropdown clearfix">
						<button className="btn btn-default dropdown-toggle col-md-4" type="button" id="menu-referee" data-toggle="dropdown">
						  <span className="col-lg-10 text-left dropdown-referee">Find a referee</span>
						  <span className="col-lg-2"><span className="caret"></span></span>
						</button>
						<ul className="dropdown-menu" role="menu" aria-labelledby="menu-referee">
							<li role="presentation"><a role="menuitem" href="#">Carlca Hilton</a></li>
							<li role="presentation"><a role="menuitem" href="#">Mark Steve</a></li>
							<li role="presentation"><a role="menuitem" href="#">Billy Thomes</a></li>
							<li role="presentation"><a role="menuitem" href="#">Jack JasonJason</a></li>
							<li role="presentation"><a role="menuitem" href="#">William MI</a></li>
						</ul>
					</div>
		        </Modal.Body>
			</Modal>
		)
	}
}