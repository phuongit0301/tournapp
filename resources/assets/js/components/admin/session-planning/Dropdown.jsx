import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Dropdown extends Component{
	constructor(props){
		super(props);
		this.state = {};
	}

	render(){
		return (
			<div className="dropdown clearfix">
                <button className="btn btn-default dropdown-toggle col-md-6" type="button" id="menu1" data-toggle="dropdown">
                    <span className="col-lg-9 text-left">Mass</span>
                    <span className="col-lg-2"><span className="caret"></span></span>
                </button>
                <ul className="dropdown-menu" role="menu" aria-labelledby="menu1">
                    <li role="presentation"><a role="menuitem" href="#">Mass</a></li>
                    <li role="presentation"><a role="menuitem" href="#">Sessions 2</a></li>
                    <li role="presentation"><a role="menuitem" href="#">Sessions 3</a></li>
                    <li role="presentation"><a role="menuitem" href="#">Sessions 4</a></li>
                </ul>
            </div>
		)
	}
}