import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class FirstTimeSignUpForm extends Component{
	constructor(props){
        super(props);
        
		this.state = {
            hidden: props.hidden
        };
        
	}
    componentWillReceiveProps(nextProps){
        this.setState({hidden:nextProps.hidden});
    }
    
	render(){
        let hidden = this.state.hidden;
		return (
			<div className={hidden ? 'hidden' : "col-md-12 first-time-signup-form text-center"}>
				<div className="col-md-12 signup-wrapper">
                    <label htmlFor="">First time players please sign up:</label><br/>
                    <button className="btn btn-green" onClick={this.props.signUpButtonClick}>SIGN UP</button>
                </div>
                <div className="col-md-12 login-wrapper">
                    <label htmlFor="">Repeating players please log in:</label><br/>
                    <button className="btn btn-green">LOGIN</button>
                </div>
			</div>
		)
	}
}