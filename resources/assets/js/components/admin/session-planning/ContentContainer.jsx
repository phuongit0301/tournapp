import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class ContentContainer extends Component {
	render() {
		return (
			<div className="col-sm-9 col-md-10 col-lg-10 nopadding">
				<div className="box-content">
				{this.props.children}
				</div>
			</div>
		)
	}
}