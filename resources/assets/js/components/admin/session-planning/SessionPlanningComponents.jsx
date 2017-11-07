import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import SidebarNav from '../common/SidebarNav';
import Header from '../common/Header2';
import ContentContainer from './ContentContainer';
import Content from './Content';

export default class SessionPlanningComponents extends Component {

	constructor(props) {
		super(props);

		this.state = {
			pageTitle: 'Session Planning'
		};
		this._getPageTitle = this._getPageTitle.bind(this);

	}


	_getPageTitle() {
		this.setState({
			pageTitle: 'asdjh'
		})
		// return this.state.pageTitle;
	}

    render() {

        return (
        	<div id="session-planning">
	            <div className="container-fluid nopadding">
	            	<div className="row nopadding">
		                <SidebarNav />
		                <ContentContainer>
			            	<Header title={this.state.pageTitle} />
			            	<Content />
		                </ContentContainer>
						<button onClick={this._getPageTitle} ></button>
	                </div>
	            </div>
            </div>
        );
    }
}