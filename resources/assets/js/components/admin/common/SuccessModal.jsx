import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Modal, ButtonToolbar, DropdownButton, MenuItem, Table, Button } from 'react-bootstrap';

export default class SuccessModal extends Component {
	
	constructor(props) {
		super(props);
		this.toggleModal = this.toggleModal.bind(this);
	}

	toggleModal() {
		const { toggleModal, show } = this.props;
		toggleModal(!show);
	}

	render() {

		const {message, title} = this.props;

		return(
			<Modal show={this.props.show} onHide={this.toggleModal} bsSize="sm" dialogClassName="modal-wrapper modal-error" aria-labelledby="contained-modal-title-lg" backdrop="static">
				<Modal.Header closeButton>
		        </Modal.Header>
		        <Modal.Body bsClass="modal-body-wrapper modal-body-error">
					<h2 style={{textAlign:'center'}} className="group-title">{title}</h2>
					<p style={{textAlign:'center'}}>{message}</p>
					<div style={{textAlign:'center'}} className="group-content text-left group-button">
         				<Button bsClass="btns btn-update btn-update-default" onClick={this.toggleModal}>OK</Button>
					</div>
		        </Modal.Body>
			</Modal>
		)
	}
}