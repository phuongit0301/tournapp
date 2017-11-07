import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Header extends Component {

    constructor(props) {
        super(props);
        
    }

	render() {

		return (
			<div className="header">
				<button className="btn-hamburger"><img src={ '../src/image/menu-option.png' } /></button>
                <div className="text-center">
                    <ul className="menu-header menu-header-right user-wrapper">
                        <li className='border-right'>
                            <a href="#" className="links-profile">
                                <img className="pull-left avatar" src={ '../src/image/avt.jpg' } />
                                <div className="pull-left">
                                    <p className="text-left">Brad Milosevic</p>
                                    <p className="text-left text-active">New York Open 2017</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a className="links-logout" href="{{url('/logout')}}">
                                <span>Logout</span>
                                <i className="logout-button"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div className="header-filter">
                    <div className="title-wrapper">
                        <h1>{this.props.title}</h1>
                        <h3>NEW YORK STATE OPEN</h3>
                    </div>               

                </div>{/* end header-filter */}

            </div>
		)
	}
}