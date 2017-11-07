import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Footer extends Component{
	constructor(props){
		super(props);
		this.state = {};
	}

	render(){
		return (
			<div className="col-md-12 footer">
				<div className="col-md-12 text-center">
                    <ul className="menu-footer">
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
			</div>
		)
	}
}