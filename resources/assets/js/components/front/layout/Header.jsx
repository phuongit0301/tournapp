import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Header extends Component {

    constructor(props) {
        super(props);
        
    }

	render() {

		return (
			<div className="header">
                <div className="col-md-12 header-wrapper text-right">
                    <ul className="front-header">
                        <li>FAQ</li>
                        <li>Login</li>
                        <li>Sign up</li>
                        <li>Forgot Password?</li>
                    </ul>
                </div>
            </div>
		)
	}
}