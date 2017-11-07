import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import FirstTimeSignUpForm from './sign-up-step/FirstTimeSignUpForm';
import ProgressBar from './sign-up-step/ProgressBar';
import ProfileStep from './sign-up-step/ProfileStep';
import CategoriesStep from './sign-up-step/CategoriesStep';
import ProductStep from './sign-up-step/ProductStep';
import PaymentStep from './sign-up-step/PaymentStep';
import FinishStep from './sign-up-step/FinishStep';
export default class PlayerSignUpBody extends Component{
	constructor(props){
		super(props);
		this.state = {
			signUpStep: 0,
			hideFirstTimeSignUp: false,
			hideProfileStep: true,
			hideCategoriesStep: true,
			hideProductStep: true,
			hidePaymentStep: true,
			hideFinishStep: true
		};
		
		this.signUpButtonClick = this.signUpButtonClick.bind(this);
		this.ProfileStepSubmit = this.ProfileStepSubmit.bind(this);
		this.CategoriesStepSubmit = this.CategoriesStepSubmit.bind(this);
		this.ProductStepSubmit = this.ProductStepSubmit.bind(this);
		this.PaymentStepSubmit = this.PaymentStepSubmit.bind(this);
		
	}
	
	signUpButtonClick(){
		
		this.setState({
			signUpStep: 1,
			hideFirstTimeSignUp: true,
			hideProfileStep: false
		});
	}

	ProfileStepSubmit(){
		this.setState({signUpStep: 2});
		this.setState({hideProfileStep: true});
		this.setState({hideCategoriesStep: false});
	}
	CategoriesStepSubmit(){
		this.setState({signUpStep: 3});
		this.setState({hideCategoriesStep: true});
		this.setState({hideProductStep: false});
	}
	ProductStepSubmit(){
		this.setState({signUpStep: 4});
		this.setState({hideProductStep: true});
		this.setState({hidePaymentStep: false});
	}
	PaymentStepSubmit(){
		this.setState({signUpStep: 5});
		this.setState({hidePaymentStep: true});
		this.setState({hideFinishStep: false});
	}
	render(){
		
		console.log(this.state.hideFirstTimeSignUp);
		return (
			<div className="col-md-12 player-signup-body">
                <div className="col-md-12 text-center text-player-wrapper ">
                    <span className="text-player-signup">Player Sign Up</span>
                </div>
                <FirstTimeSignUpForm hidden={this.state.hideFirstTimeSignUp} signUpButtonClick={this.signUpButtonClick}></FirstTimeSignUpForm>
                <ProgressBar hidden={!this.state.hideFirstTimeSignUp} signUpStep={this.state.signUpStep}></ProgressBar>
				<ProfileStep hidden={this.state.hideProfileStep} ProfileStepSubmit={this.ProfileStepSubmit}></ProfileStep>
				<CategoriesStep hidden={this.state.hideCategoriesStep} CategoriesStepSubmit={this.CategoriesStepSubmit}></CategoriesStep>
				<ProductStep hidden={this.state.hideProductStep} ProductStepSubmit={this.ProductStepSubmit}></ProductStep>
				<PaymentStep hidden={this.state.hidePaymentStep} PaymentStepSubmit={this.PaymentStepSubmit}></PaymentStep>
				<FinishStep hidden={this.state.hideFinishStep}></FinishStep>
			</div>
		)
	}
}