import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Modal, ButtonToolbar, DropdownButton, MenuItem, Table, Button, FormGroup, ControlLabel, FormControl } from 'react-bootstrap';
export default class PaymentStep extends Component{
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
			<div className={hidden ? 'hidden' : "col-md-12 payment-step-container text-center"}>
                <div className="col-md-12 text-left header-wrapper">
                    <span className="text-header">YOUR PRODUCTS FEE</span>
                </div>
                <div className="col-md-12 tournament-name">Ny Open 2017</div>
                <div className="col-md-12 table-container">
                    <table className="table table-bordered table-striped table-product-wrapper">
                        
                        <tbody>
                            <tr>
                                <td> </td>
                                <td>CLASSIFICATION</td>
                                <td>CATEGORIES</td>
                                <td>PRODUCTS</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td className="td-number">
                                    1
                                </td>
                                <td className="td-classification"></td>
                                <td className="td-categories"></td>
                                <td className="td-products">
                                    Entities Fee
                                </td>
                                <td className="td-last">
                                    $200
                                </td>
                            </tr>
                            <tr>
                                <td className="td-number">
                                    2
                                </td>
                                <td className="td-classification">Junior</td>
                                <td className="td-categories">Boy's Doubles 12</td>
                                <td className="td-products">
                                    <div className="col-md-12">
                                        <div className="col-md-8 text-left">Tennis Ball</div>
                                        <div className="col-md-4">- Price: $200</div>
                                    </div>
                                </td>
                                <td className="td-last">
                                    $10
                                </td>
                            </tr>
                            <tr>
                                <td className="td-number">
                                    3
                                </td>
                                <td className="td-classification">Junior</td>
                                <td className="td-categories">Boy's Doubles 12</td>
                                <td className="td-products">
                                    <div className="col-md-12">
                                        <div className="col-md-8 text-left">Tennis Ball</div>
                                        <div className="col-md-4">- Price: $10</div>
                                    </div>
                                    <div className="col-md-12">
                                        <div className="col-md-8 text-left">T-Shirt</div>
                                        <div className="col-md-4">- Price: $20</div>
                                    </div>
                                </td>
                                <td className="td-last">
                                    $20
                                </td>
                            </tr>
                            <tr>
                                <td colSpan="4"><strong>TOTAL</strong></td>
                                <td><strong>$230</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div className="col-md-12 text-left header-wrapper">
                    <span className="text-header">Payment</span>
                </div>
                <div className="col-md-12 payment-container">
                    <div className="col-md-12 payment-method text-left">
                        <div className="col-md-2">
                            <label htmlFor="">Payment Method: <span className="red-flower">*</span></label>
                        </div>
                        <div className="col-md-10 text-left">
                            <div className="col-md-12">
                                <div className="col-md-3">
                                    <input className="radio-custom" id="credit-card" type="radio" name="court_size"/>
                                    <label htmlFor="credit-card" className="radio-custom-label">Credit Card</label>
                                </div>
                                <div className="col-md-3">
                                    <input className="radio-custom" id="phone-card" type="radio" name="court_size"/>
                                    <label htmlFor="phone-card" className="radio-custom-label">Phone Credit</label>
                                </div>
                                <div className="col-md-3">
                                    <input className="radio-custom" id="check" type="radio" name="court_size"/>
                                    <label htmlFor="check" className="radio-custom-label">Check</label>
                                </div>
                                <div className="col-md-3">
                                    <input className="radio-custom" id="paid-to-coach" type="radio" name="court_size"/>
                                    <label htmlFor="paid-to-coach" className="radio-custom-label">Paid to coach</label>
                                </div>
                            </div>
                            <div className="col-md-12 card-type-container">
                                <div className="col-md-3">
                                    <input className="radio-custom" id="visa" type="radio" name="court_size"/>
                                    <label htmlFor="visa" className="radio-custom-label">
                                        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Visa-icon.png" alt=""/>
                                    </label>
                                </div>
                                <div className="col-md-3">
                                    <input className="radio-custom" id="master-card" type="radio" name="court_size"/>
                                    <label htmlFor="master-card" className="radio-custom-label">
                                        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Master-Card-icon.png" alt=""/>
                                    </label>
                                </div>
                                <div className="col-md-3">
                                    <input className="radio-custom" id="american-express" type="radio" name="court_size"/>
                                    <label htmlFor="american-express" className="radio-custom-label">
                                        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/American-Express-icon.png" alt=""/>
                                    </label>
                                </div>
                            </div>
                            <div className="col-md-12 payment-row">
                                <label htmlFor="" className="col-md-3">Name on Card:</label>
                                <div className="col-md-7">
                                    <input type="text" className="form-control" value="Wennie Nguyen"/>
                                </div>
                            </div>
                            <div className="col-md-12 payment-row">
                                <label htmlFor="" className="col-md-3">Card Number:<span className="red-flower">*</span></label>
                                <div className="col-md-7">
                                    <input type="text" className="form-control" value="Wennie Nguyen"/>
                                </div>
                            </div>
                            <div className="col-md-12 payment-row">
                                <label htmlFor="" className="col-md-3">Expiry Date:<span className="red-flower">*</span></label>
                                <div className="col-md-7">
                                    <div className="col-md-2">
                                        <div className="dropdown clearfix">
                                            <FormGroup controlId="formControlsSelectExpiryDate"  >
                                                <FormControl componentClass="select" placeholder="" value=''>
                                                    <option value="1">Jan</option>
                                                    <option value="2">Feb</option>
                                                    <option value="2">Mar</option>
                                                </FormControl>
                                            </FormGroup>
                                        </div>
                                    </div>
                                    <div className="col-md-2 col-md-offset-2">
                                        <div className="dropdown clearfix">
                                            <FormGroup controlId="formControlsSelectExpiryDate"  >
                                                <FormControl componentClass="select" placeholder="" value=''>
                                                    <option value="1">2017</option>
                                                    <option value="2">2018</option>
                                                    <option value="2">2019</option>
                                                </FormControl>
                                            </FormGroup>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-12 payment-row">
                                <label htmlFor="" className="col-md-3">CVC:<span className="red-flower">*</span></label>
                                <div className="col-md-7">
                                    <div className="col-md-2">
                                        <input type="text" className="form-control" />
                                    </div>
                                    <div className="col-md-4">
                                        <span className="text-note-cvc">What is this?</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="col-md-12 button-container text-center">
                    <button type="button" className="btn btn-default">Go Back</button>
                    <button type="button" className="btn btn-green" onClick={this.props.PaymentStepSubmit}>Confirm</button>
                </div>
			</div>
		)
	}
}