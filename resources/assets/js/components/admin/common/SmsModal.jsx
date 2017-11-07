import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Modal, ButtonToolbar, DropdownButton, MenuItem, Table, Button } from 'react-bootstrap';

export default class SmsModal extends Component {
	
	constructor(props) {
		super(props);
		this.toggleModal = this.toggleModal.bind(this);
	}

	toggleModal() {
		const {toggleModal, show} = this.props;
		toggleModal(!show);
	}


	render() {

		const {itemSms} = this.props;

		return(
			<Modal show={this.props.show} onHide={this.toggleModal} bsSize="lg" dialogClassName="modal-wrapper" aria-labelledby="contained-modal-title-lg" backdrop="static">
				<Modal.Header closeButton>
		          <Modal.Title id="contained-modal-title-lg">MESSSAGE BOX</Modal.Title>
		        </Modal.Header>
		        <Modal.Body bsClass="modal-body-sms">
					<form className="form sms-form" role="form">
		                <label className="checkbox text-black text-status"><input type="checkbox" value="" className="checkbox-status" /><span className="c-indicator c-indicator-black"></span><span className="title-normal"><strong>Player 1: </strong>{itemSms.teams[0].name}</span></label>
		                <label className="checkbox text-black text-status"><input type="checkbox" value="" className="checkbox-status" /><span className="c-indicator c-indicator-black"></span><span className="title-normal"><strong>Player 2: </strong>{itemSms.teams[1].name}</span></label>
					
					
						<p className="title-message-sms text-black">Message</p>
						<p><textarea className="form-control" rows="5" id="sms-message"></textarea></p>
						<div className="group-button">
							<Button bsSize="xsmall" bsClass='btns btn-cancel' onClick={this.toggleModal}>Cancel</Button>
							<button className="btns btn-save">Send</button>
				        </div>
						
					</form>
		        </Modal.Body>
			</Modal>
		)
	}
}