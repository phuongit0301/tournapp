import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class TournamentInfo extends Component{
	constructor(props){
		super(props);
		this.state = {};
	}

	render(){
		return (
			<div className="col-md-12 tournament-info">
				<div className="col-md-4 tournament-image-warpper">
					<img src="http://www.wtatennis.com/sites/default/files/styles/highlight_news_mobile_1_33_1_2x/public/wta-hong_kong-1074.jpg" alt=""/>
				</div>
				<div className="col-md-8 tournament-info-wrapper">
					<div className="col-md-12 tournament-name-wrapper"><span className="text-tournament-name">NY Open 2017</span><img className="country-flag" src="https://ae01.alicdn.com/kf/HTB1HW69LpXXXXXLXXXXq6xXFXXX5/202186984/HTB1HW69LpXXXXXLXXXXq6xXFXXX5.jpg" alt=""/></div>
					<div className="col-md-12 info">
						<p>
							<label className="info-label" htmlFor="">Venue: </label>
							<span className="text-venue">ITC Ramat Hasharon</span>
						</p>
						<p>
							<label className="info-label" htmlFor="">Date: </label>
							<span className="text-date">From 28 June to 5 Junly 2017</span>
						</p>
						<p>
							<label className="info-label" htmlFor="">Last updated: </label>
							<span className="text-last-update">Tuesday, 27, June 2017 6:21 PM</span>
						</p>
						<p>
							<label className="info-label" htmlFor="">Organizer: </label>
							<span className="text-organizer">Israel Tennis Association</span>
						</p>
					</div>
				</div>
			</div>
		)
	}
}