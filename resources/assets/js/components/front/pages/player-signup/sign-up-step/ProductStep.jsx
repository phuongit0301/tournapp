import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Modal, ButtonToolbar, DropdownButton, MenuItem, Table, Button, FormGroup, ControlLabel, FormControl } from 'react-bootstrap';
export default class CategoriesStep extends Component{
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
			<div className={hidden ? 'hidden' : "col-md-12 product-step-container text-center"}>
                <div className="col-md-12 tournament-name">Ny Open 2017</div>
                <div className="col-md-12 table-container">
                    <table className="table table-bordered table-striped table-product-wrapper">
                        <thead>
                            <th></th>
                            <th>CLASSIFICATION</th>
                            <th>CATEGORIES</th>
                            <th>PRODUCTS</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td className="td-checkbox">
                                    <input type="checkbox" className="checkbox-custom" name="" id=""/>
                                    <label htmlFor="" className="checkbox-custom-label"></label>
                                </td>
                                <td className="td-classification">Junior</td>
                                <td className="td-categories">Boy's Singles 12</td>
                                <td className="td-products">
                                    <div className="col-md-12 product-wrapper text-left">
                                        <div className="col-md-12 product-row">
                                            <label className="col-md-5" htmlFor="">Health Permit: <span className="red-flower">*</span></label>
                                            <div className="col-md-5 button-upload-document">
                                                <button type="button" className="btn btn-green">Upload Document</button>
                                            </div>
                                            <div className="col-md-2 button-image-container text-left">
                                                <img src="../src/image/attach.png" alt=""/>
                                            </div>
                                        </div>
                                        <div className="col-md-12 product-row">
                                            <label className="col-md-5" htmlFor="">Insurance Expired: <span className="red-flower">*</span></label>
                                            <div className="col-md-5 ">
                                                <input type="text" className="form-control" placeholder="dd/mm/yy"/>
                                            </div>
                                            <div className="col-md-2 button-image-container text-left">
                                                <img src="../src/image/calendar.png" alt=""/>
                                            </div>
                                        </div>
                                        <div className="col-md-12 product-row">
                                            <label className="col-md-5" htmlFor="">Membership card: <span className="red-flower">*</span></label>
                                            <div className="col-md-5 ">
                                                <input type="text" className="form-control" placeholder="dd/mm/yy"/>
                                            </div>
                                            <div className="col-md-2 button-image-container text-left">
                                                <img src="../src/image/calendar.png" alt=""/>
                                            </div>
                                        </div>
                                        <div className="col-md-12 product-row">
                                            <label className="col-md-3" htmlFor="">Tennis Ball: <span className="red-flower">*</span></label>
                                            <div className="col-md-2 ">
                                                <div className="dropdown clearfix">
                                                    <FormGroup controlId="formControlsSelectCountry"  >
                                                        <FormControl componentClass="select" placeholder="" value=''>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </FormControl>
                                                    </FormGroup>
                                                </div>
                                            </div>
                                            <div className="col-md-4 text-price-wrapper">
                                                <span>- Price: $10</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td className="td-remove">
                                    <div className="remove-container">
                                        <img src="../src/image/icon-remove.png" alt=""/>
                                        <p><span className="text-remove">Remove</span></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td className="td-checkbox">
                                    <input type="checkbox" className="checkbox-custom" name="" id=""/>
                                    <label htmlFor="" className="checkbox-custom-label"></label>
                                </td>
                                <td className="td-classification">Junior</td>
                                <td className="td-categories">Boy's Singles 12</td>
                                <td className="td-products">
                                    <div className="col-md-12 product-wrapper text-left">
                                        <div className="col-md-12 product-row">
                                            <label className="col-md-5" htmlFor="">Health Permit: <span className="red-flower">*</span></label>
                                            <div className="col-md-5 button-upload-document">
                                                <button type="button" className="btn btn-green">Upload Document</button>
                                            </div>
                                            <div className="col-md-2 button-image-container text-left">
                                                <img src="../src/image/attach.png" alt=""/>
                                            </div>
                                        </div>
                                        <div className="col-md-12 product-row">
                                            <label className="col-md-5" htmlFor="">Insurance Expired: <span className="red-flower">*</span></label>
                                            <div className="col-md-5 ">
                                                <input type="text" className="form-control" placeholder="dd/mm/yy"/>
                                            </div>
                                            <div className="col-md-2 button-image-container text-left">
                                                <img src="../src/image/calendar.png" alt=""/>
                                            </div>
                                        </div>
                                        <div className="col-md-12 product-row">
                                            <label className="col-md-5" htmlFor="">Membership card: <span className="red-flower">*</span></label>
                                            <div className="col-md-5 ">
                                                <input type="text" className="form-control" placeholder="dd/mm/yy"/>
                                            </div>
                                            <div className="col-md-2 button-image-container text-left">
                                                <img src="../src/image/calendar.png" alt=""/>
                                            </div>
                                        </div>
                                        <div className="col-md-12 product-row">
                                            <label className="col-md-3" htmlFor="">Tennis Ball: <span className="red-flower">*</span></label>
                                            <div className="col-md-2 ">
                                                <div className="dropdown clearfix">
                                                    <FormGroup controlId="formControlsSelectCountry"  >
                                                        <FormControl componentClass="select" placeholder="" value=''>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </FormControl>
                                                    </FormGroup>
                                                </div>
                                            </div>
                                            <div className="col-md-4 text-price-wrapper">
                                                <span>- Price: $10</span>
                                            </div>
                                        </div>
                                        <div className="col-md-12 product-row">
                                            <label className="col-md-3" htmlFor="">Hat: <span className="red-flower">*</span></label>
                                            <div className="col-md-2 ">
                                                <div className="dropdown clearfix">
                                                    <FormGroup controlId="formControlsSelectCountry"  >
                                                        <FormControl componentClass="select" placeholder="" value=''>
                                                            <option value="1">0</option>
                                                            <option value="2">1</option>
                                                        </FormControl>
                                                    </FormGroup>
                                                </div>
                                            </div>
                                            <div className="col-md-4 text-price-wrapper">
                                                <span>- Price: $0</span>
                                            </div>
                                        </div>
                                        <div className="col-md-12 product-row">
                                            <label className="col-md-3" htmlFor="">T-Shirt: <span className="red-flower">*</span></label>
                                            <div className="col-md-2 ">
                                                <div className="dropdown clearfix">
                                                    <FormGroup controlId="formControlsSelectCountry"  >
                                                        <FormControl componentClass="select" placeholder="" value=''>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </FormControl>
                                                    </FormGroup>
                                                </div>
                                            </div>
                                            <div className="col-md-4 text-price-wrapper">
                                                <span>- Price: $10</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td className="td-remove">
                                    <div className="remove-container">
                                        <img src="../src/image/icon-remove.png" alt=""/>
                                        <p><span className="text-remove">Remove</span></p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div className="col-md-12 button-container text-center">
                    <button type="button" className="btn btn-default">Go Back</button>
                    <button type="button" className="btn btn-green" onClick={this.props.ProductStepSubmit}>Confirm</button>
                </div>
			</div>
		)
	}
}