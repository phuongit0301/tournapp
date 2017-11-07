import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class FinishStep extends Component{
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
			<div className={hidden ? 'hidden' : "col-md-12 finish-step-container text-center"}>
				<div className="col-md-12 text-center message-wrapper">
                    <p className="text-thankyou">Thank you!</p>
                    <p className="text-message">WE’RE RECEIVED YOUR ENROLL INFORMATION.</p>
                    <p className="text-message">OUR STAFF WILL CONTACT YOU IN SHORTLY TO CONFIRM YOUR ENROLL.</p>
                </div>
                <div className="col-md-12 button-container text-center">
                    <button className="btn btn-green">Go to Home</button>
                </div>
			</div>
		)
	}
}