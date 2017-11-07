import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class ProgressBar extends Component{
	constructor(props){
        super(props);
        
		this.state = {
            signUpStep: props.signUpStep,
            hidden: props.hidden
        };
        
	}
    componentWillReceiveProps(nextProps){
        this.setState({
            hidden:nextProps.hidden,
            signUpStep: nextProps.signUpStep
        });
    }
	render(){
        let signUpStep = this.state.signUpStep;
        let hidden = this.state.hidden;
        let step_1 = 'disabled';
        let step_2 = 'disabled'; 
        let step_3 = 'disabled'; 
        let step_4 = 'disabled';
        let step_5 = 'disabled';
        let class_step_1 = 'col-xs-2 col-xs-offset-1 bs-wizard-step ';
        let class_step = 'col-xs-2 bs-wizard-step ';
        switch( signUpStep ){
            case 1: 
                 step_1 = class_step_1 + 'active';
                 step_2 = class_step + 'disabled'; 
                 step_3 = class_step + 'disabled'; 
                 step_4 = class_step + 'disabled';
                 step_5 = class_step + 'disabled';
                 break;
            case 2: 
                 step_1 = class_step_1 + 'complete';
                 step_2 = class_step + 'active'; 
                 step_3 = class_step + 'disabled'; 
                 step_4 = class_step + 'disabled';
                 step_5 = class_step + 'disabled';
                 break;
            case 3: 
                 step_1 = class_step_1 + 'complete';
                 step_2 = class_step + 'complete'; 
                 step_3 = class_step + 'active'; 
                 step_4 = class_step + 'disabled';
                 step_5 = class_step + 'disabled';
                 break;
            case 4: 
                 step_1 = class_step_1 + 'complete';
                 step_2 = class_step + 'complete'; 
                 step_3 = class_step + 'complete'; 
                 step_4 = class_step + 'active';
                 step_5 = class_step + 'disabled';
                 break;
            case 5: 
                 step_1 = class_step_1 + 'complete';
                 step_2 = class_step + 'complete'; 
                 step_3 = class_step + 'complete'; 
                 step_4 = class_step + 'complete';
                 step_5 = class_step + 'complete';
                 break;
        }
		return (
                <div className={hidden ? 'hidden' : "col-md-12 progress-bar-container text-center"}>
                    <div className="row bs-wizard">
                        <div className={step_1}>
                            <div className="progress"><div className="progress-bar"></div></div>
                            <a href="#" className="bs-wizard-dot"></a>
                            <div className="bs-wizard-info text-center">Your Profile</div>
                        </div>
                        
                        <div className={step_2}>
                            <div className="progress"><div className="progress-bar"></div></div>
                            <a href="#" className="bs-wizard-dot"></a>
                            <div className="bs-wizard-info text-center">Categories</div>
                        </div>
                        
                        <div className={step_3}>
                            <div className="progress"><div className="progress-bar"></div></div>
                            <a href="#" className="bs-wizard-dot"></a>
                            <div className="bs-wizard-info text-center">Products</div>
                        </div>
                        
                        <div className={step_4}>
                            <div className="progress"><div className="progress-bar"></div></div>
                            <a href="#" className="bs-wizard-dot"></a>
                            <div className="bs-wizard-info text-center">Payment</div>
                        </div>
                        <div className={step_5}>
                            <div className="progress"><div className="progress-bar"></div></div>
                            <a href="#" className="bs-wizard-dot"></a>
                            <div className="bs-wizard-info text-center">Finish</div>
                        </div>
                    </div>
			</div>
		)
	}
}