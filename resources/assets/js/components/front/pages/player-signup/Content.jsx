import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import TournamentInfo from './TournamentInfo';
import PlayerSignUpBody from './PlayerSignUpBody';

export default class Content extends Component{
	constructor(props){
		super(props);
		this.state = {};
	}

	render(){
		return (
			<div className="col-md-10 col-md-offset-1 content-wrapper">
				<TournamentInfo></TournamentInfo>
                <PlayerSignUpBody></PlayerSignUpBody>
			</div>
		)
	}
}