import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Dropdown from './Dropdown';
import SessionBoxContainer from './SessionBoxContainer';
import SessionBox from './SessionBox';
import SessionChartContainer from './SessionChartContainer';
import SessionChartKnockOut from './SessionChartKnockOut';
import SessionChartRobin from './SessionChartRobin';
import Footer from './Footer';
export default class Content extends Component{
	constructor(props){
		super(props);
		this.state = {};
	}

	render(){
		return (
			<div className="content-wrapper">
				<div className="container-fluid">
				    <div className="row">
						<div className="col-md-12">
							<div className="form-group">
								<div className="col-md-1">
									<label htmlFor="">Region:</label>
								</div>
								<div className="col-md-5">
									<Dropdown />
								</div>
							</div>
						</div>
						<div className="col-md-12">
							<div className="form-group">
								<div className="col-md-1">
									<label htmlFor="">Venues:</label>
								</div>
								<div className="col-md-5">
									<Dropdown />
								</div>
							</div>
						</div>
					</div>
					<hr/>
					<div className="row">
						<SessionBoxContainer>
							<SessionBox />
							<SessionBox />
							<SessionBox />
							<SessionBox />
							<SessionBox />
							<SessionBox />
							<li className="bg-active add-session-button-li">
								<div className="add-session-button-container">
									<button className="add-session-button"></button>
								</div>
								Add Session
							</li>
						</SessionBoxContainer>
					</div>
					<hr/>
					<div className="row"> 
						<div className="col-md-12">
							<div className="col-md-4">
								<label htmlFor="" className="label-play">play</label>
								<label htmlFor="" className="label-by">by</label>
							</div>
						</div>
						<SessionChartContainer>
							<SessionChartKnockOut />
							<SessionChartKnockOut />
							<SessionChartKnockOut />
							<SessionChartRobin />
							<SessionChartRobin />
							<SessionChartKnockOut />
						</SessionChartContainer>
					</div>
					<hr/>
					<div className="row">
						<Footer />
					</div>
				</div>
			</div>
		)
	}
}