import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Modal, ButtonToolbar, DropdownButton, MenuItem, Table, Button } from 'react-bootstrap';

export default class ConfirmModal extends Component {
	
	constructor(props) {
		super(props);
		this.toggleModal = this.toggleModal.bind(this);
		this.processUpdateMatchTime = this.processUpdateMatchTime.bind(this);
	}

	toggleModal() {
		const {toggleModal, show} = this.props;
		toggleModal(!show);
	}

	processUpdateMatchTime() {
		console.log(123);
	}

	render() {
		return(
			<Modal show={this.props.show} onHide={this.toggleModal} bsSize="lg" dialogClassName="modal-wrapper modal-confirm" aria-labelledby="contained-modal-title-lg" backdrop="static">
				<Modal.Header closeButton>
		        </Modal.Header>
		        <Modal.Body bsClass="modal-body-wrapper modal-body-confirm">
					<h2 className="group-title">Are you sure you want to change match time?</h2>
					<h2 className="group-title">It will change match position in the list!</h2>
					<div className="group-content text-center group-button">
						<Button bsClass="btns btn-update" onClick={this.processUpdateMatchTime}>Change</Button>
         				<Button bsClass="btns btn-close" onClick={this.toggleModal}>Cancel</Button>
					</div>
		        </Modal.Body>
			</Modal>
		)
	}
}