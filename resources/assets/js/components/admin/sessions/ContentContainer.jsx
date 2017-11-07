import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Header extends Component {
	render() {
		const { toggleMenu } = this.props;
		let classWhenToggleMenu = toggleMenu ? "col-sm-9 col-md-10 col-lg-10 nopadding" : "col-sm-12 col-md-12 col-lg-12 nopadding";

		return (
			<div className={classWhenToggleMenu}>
	            <div className="box-content">
	                {this.props.children}
	          	</div>
	        </div>
		)
	}
}