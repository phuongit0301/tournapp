import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class SidebarNav extends Component {
	render() {
        const {toggleMenu} = this.props;
        let classAnimate = !toggleMenu ? ' animation-menu' : '';

		return (
			 <div className={"col-sm-3 col-md-2 col-lg-2 nopadding" + classAnimate}>
                <div className="box-left">
                    <div className="logo">
                        <img src={ '../src/image/logo1x.png' } />
                    </div>
                    <div className="logo-small">
                        <img src={ '../src/image/logo-icon-small.png' } />
                    </div>
                    <div className="mCustomScrollbar" id="left-sidebar-scroll" data-mcs-theme="light">
                        <ul className="sidebar">
                            <li>
                                <a href="#" className="text-upper"> <img src={ '../src/image/iconmenu1.png' } />Organization </a>
                                    <ul className="sidebar-child-first">
                                    <li><a href="{{url('/organization')}}">Configurations</a></li>
                                    <li><a href="#">Site Content</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" className="text-upper">
                                    <img src={ '../src/image/iconmenu2.png' } /> Competitions
                                </a>
                                <ul className="sidebar-child-first">
                                    <li><a className="have-active" href="{{url('/tournament')}}">Tournaments</a>
                                        <ul className="sidebar-child-second">
                                            <li>
                                                <a href="#" id="1" className="sidebar-red-text dropdown-toggle" data-toggle-slide>
                                                    NY State Open<span className="caret"></span>
                                                </a>
                                                    <ul className="sidebar-child-third" role="menu">
                                                        <li><a href="{{url('/competition_setup?t_id=1')}}">Setup</a></li>
                                                        <li><a href="{{url('/competition_category?t_id=1')}}">Categories</a></li>
                                                        <li><a href="#">Signup</a></li>
                                                        <li><a href="{{url('/competition_stages?t_id=1')}}">Stages</a></li>
                                                        <li><a href="#">Draws</a></li>
                                                        <li><a href="#">Session Planning</a></li>
                                                        <li><a href="#">Session Managing</a></li>
                                                        <li><a className="text-upper dropdown-toggle" data-toggle-slide href="#">Design <span className="caret"></span></a>
                                                            <ul className="sidebar-child-third" role="menu">
                                                                <li><a href="{{url('/competition_setup?t_id=1')}}">Setup</a></li>
                                                                <li><a href="{{url('/competition_category?t_id=1')}}">Categories</a></li>
                                                                <li><a href="#">Signup</a></li>
                                                                <li><a href="{{url('/competition_stages?t_id=1')}}">Stages</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                            </li>
                                            <li>
                                                <a href="#" className="sidebar-red-text dropdown-toggle" data-toggle-slide>Boston Open <span className="caret"></span>
                                                </a>
                                                <ul className="sidebar-child-third " role="menu">
                                                    <li><a href="#">test</a></li>
                                                    <li><a href="#">test</a></li>
                                                    <li><a href="#">test</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a className="have-active" href="{{url('/leagues')}}">Leagues  </a>
                                        <ul className="sidebar-child-second">
                                            <li>
                                                <a href="#" className="sidebar-red-text dropdown-toggle" data-toggle-slide>
                                                    NE Youth <span className="caret"></span>
                                                </a>
                                                <ul className="sidebar-child-third dropdown-menu" role="menu">
                                                    <li><a href="#">test</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" id="ranking-menu" className="text-upper"> <img src={ '../src/image/iconmenu3.png' } />Rankings</a>
                            </li>
                            <li>
                                <a href="#" className="text-upper"> <img src={ '../src/image/iconmenu4.png' } />Entities</a>
                                <ul className="sidebar-child-first">
                                    <li><a href="#">Players</a></li>
                                    <li><a href="#">Teams</a></li>
                                    <li><a href="#">Clubs</a></li>
                                    <li><a href="#">Referees</a></li>
                                    <li><a href="#">Coaches</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" className="text-upper"> <img src={ '../src/image/report-icon.png' } />Reports</a>
                            </li>
                        </ul>
                    </div>
                    <div className="footer-left text-center">
                        <span>All rights reserved</span>
                    </div>
                </div>
            </div>
		)
	}
}