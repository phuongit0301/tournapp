import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Modal, ButtonToolbar, DropdownButton, MenuItem, Table, Button, FormGroup, ControlLabel, FormControl } from 'react-bootstrap';
import ReCAPTCHA from 'react-google-recaptcha';
export default class ProfileStep extends Component{
	constructor(props){
        super(props);
        
		this.state = {
            hidden: props.hidden
        };

        this.verifyReCaptCha = this.verifyReCaptCha.bind(this);
    }
    
    verifyReCaptCha(rs){

    }

    componentWillReceiveProps(nextProps){
        this.setState({hidden:nextProps.hidden});
    }

	render(){
        let hidden = this.state.hidden;
		return (
			<div className={hidden ? 'hidden' : "col-md-12 profile-form-container text-center"}>
                <div className="col-md-12">
                    <div className="col-md-6 profile-wrapper">
                        <div className="col-md-12 header-wrapper text-left">
                            <span className="text-header">Profile</span>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">First Name: <span className="red-flower">*</span></label>
                            <div className="col-md-8">
                                <input type="text" className="form-control"/>
                            </div>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">Last Name: <span className="red-flower">*</span></label>
                            <div className="col-md-8">
                                <input type="text" className="form-control"/>
                            </div>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">Email Address: <span className="red-flower">*</span></label>
                            <div className="col-md-8">
                                <input type="text" className="form-control"/>
                            </div>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">Password: <span className="red-flower">*</span></label>
                            <div className="col-md-8">
                                <input type="text" className="form-control"/>
                            </div>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">Confirmed Password: <span className="red-flower">*</span></label>
                            <div className="col-md-8">
                                <input type="text" className="form-control"/>
                            </div>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">Date of Birth: <span className="red-flower">*</span></label>
                            <div className="col-md-8 datepicker-container">
                                <input type="text" className="form-control"/>
                                <span ></span>
                            </div>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">Gender: <span className="red-flower">*</span></label>
                            <div className="col-md-8">
                                <div className="col-md-4 text-left">
                                    <input className="radio-custom" id="male" type="radio"/>
                                    <label htmlFor="male" className="radio-custom-label" name="gender">Male</label>
                                </div>
                                <div className="col-md-4 text-left">
                                    <input className="radio-custom" id="female" type="radio"/>
                                    <label htmlFor="female" className="radio-custom-label" name="gender">Female</label>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">Your Photo: <span className="red-flower">*</span></label>
                            <div className="col-md-8">
                                <div className="col-md-4">
                                    <div className="avatar">
                                        <img src="../src/image/default-logo.png" alt=""/>
                                    </div>
                                </div>
                                <div className="col-md-6 custom-file-upload">
                                    <input type="file" name="" id="logo" className="inputfile" accept="image/*"  />
                                    <label htmlFor="logo" className="label-file">Upload Logo</label> 
                                    <button className="btn-remove" id="btn-remove-logo" type="button">Remove Logo</button>   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-6 ranking-wrapper">
                        <div className="col-md-12 header-wrapper text-left">
                            <span className="text-header">Ranking</span>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">ATP: <span className="red-flower">*</span></label>
                            <div className="col-md-8">
                                <input type="text" className="form-control"/>
                            </div>
                        </div>
                        <div className="col-md-12 text-national-wrapper text-left">
                            <span className="text-national">National</span>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">Single: <span className="red-flower">*</span></label>
                            <div className="col-md-8">
                                <input type="text" className="form-control"/>
                            </div>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">Doubles: <span className="red-flower">*</span></label>
                            <div className="col-md-8">
                                <input type="text" className="form-control"/>
                            </div>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">As a team: <span className="red-flower">*</span></label>
                            <div className="col-md-8">
                                <input type="text" className="form-control"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="col-md-12">
                    <div className="col-md-6 contact-info-wrapper">
                        <div className="col-md-12 header-wrapper text-left">
                            <span className="text-header">Contact Info</span>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">Phone 1: <span className="red-flower">*</span></label>
                            <div className="col-md-8">
                                <input type="text" className="form-control"/>
                            </div>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">Phone 2: </label>
                            <div className="col-md-8">
                                <input type="text" className="form-control"/>
                            </div>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">Address: <span className="red-flower">*</span></label>
                            <div className="col-md-8">
                                <input type="text" className="form-control"/>
                            </div>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">City: <span className="red-flower">*</span></label>
                            <div className="col-md-8">
                                <input type="text" className="form-control"/>
                            </div>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">State: <span className="red-flower">*</span></label>
                            <div className="col-md-8">
                                <input type="text" className="form-control"/>
                            </div>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">Zip: <span className="red-flower">*</span></label>
                            <div className="col-md-8">
                                <input type="text" className="form-control"/>
                            </div>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">Country: <span className="red-flower">*</span></label>
                            <div className="col-md-8">
                                <div className="dropdown clearfix">
                                    <FormGroup controlId="formControlsSelectCountry"  >
                                        <FormControl componentClass="select" placeholder="Select Country" value=''>
                                            <option value="1">Afganistan</option>
                                            <option value="2">VietNam</option>
                                        </FormControl>
                                    </FormGroup>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-6 club-info-wrapper">
                        <div className="col-md-12 header-wrapper text-left">
                            <span className="text-header">Club Info</span>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">Club: <span className="red-flower">*</span></label>
                            <div className="col-md-8">
                                <div className="dropdown clearfix">
                                    <FormGroup controlId="formControlsSelectCountry"  >
                                        <FormControl componentClass="select" placeholder="Select Country" value=''>
                                            <option value="1">Tennis Club</option>
                                            <option value="2">Other (manual add)</option>
                                        </FormControl>
                                    </FormGroup>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-12 form-group">
                            <label htmlFor="" className="col-md-3 text-left">Coach: </label>
                            <div className="col-md-8">
                                <div className="dropdown clearfix">
                                    <FormGroup controlId="formControlsSelectCountry"  >
                                        <FormControl componentClass="select" placeholder="Select Country" value=''>
                                            <option value="1">Rami</option>
                                            <option value="2">I am independent player</option>
                                            <option value="2">Other (manual add)</option>
                                        </FormControl>
                                    </FormGroup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="col-md-12 text-center recaptcha-container">
                    <div className="col-md-5 col-md-offset-4">
                        <ReCAPTCHA
                            ref="recaptcha"
                            sitekey="6LetOTQUAAAAAFYK0hIlTc4vhlRVjPVnM4UrP0u1"
                            onChange={this.verifyReCaptCha}
                        />
                    </div>
                </div>
                <div className="col-md-12 text-center agree-rule-container">
                    <input className="checkbox-custom" id="agree" type="checkbox" name="agree" />
                    <label htmlFor="agree" className="checkbox-custom-label">By creating an account, you agree to NY Open 2017’s <a href="#">Terms of Use</a></label>
                </div>
                <div className="col-md-12 text-center continue-button-container">
                    <button type="button" className="btn btn-green" onClick={this.props.ProfileStepSubmit}>Continue</button>
                </div>
			</div>
		)
	}
}