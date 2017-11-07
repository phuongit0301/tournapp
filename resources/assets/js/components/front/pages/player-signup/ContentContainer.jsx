import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class ContentContainer extends Component {
	render() {
		return (
			<div className="col-sm-12 col-md-12 col-lg-12 nopadding">
				{this.props.children}
			</div>
		)
	}
}