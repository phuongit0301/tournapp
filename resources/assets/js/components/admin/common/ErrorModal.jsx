import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Modal, ButtonToolbar, DropdownButton, MenuItem, Table, Button } from 'react-bootstrap';

export default class ErrorModal extends Component {
	
	constructor(props) {
		super(props);
		this.toggleModal = this.toggleModal.bind(this);
	}

	toggleModal() {
		const {toggleModal, show} = this.props;
		toggleModal(!show);
	}

	render() {
		const {message, titleError} = this.props.errors;

		return(
			<Modal show={this.props.show} onHide={this.toggleModal} bsSize="sm" dialogClassName="modal-wrapper modal-error" aria-labelledby="contained-modal-title-lg" backdrop="static">
				<Modal.Header closeButton>
		        </Modal.Header>
		        <Modal.Body bsClass="modal-body-wrapper modal-body-error">
					<h2 className="group-title text-red">{titleError}</h2>
					<h2 className="group-title">{message}</h2>
					<div className="group-content text-left group-button">
         				<Button bsClass="btns btn-close" onClick={this.toggleModal}>Cancel</Button>
					</div>
		        </Modal.Body>
			</Modal>
		)
	}
}