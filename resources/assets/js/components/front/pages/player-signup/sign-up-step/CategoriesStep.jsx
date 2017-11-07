import React, { Component } from 'react';
import ReactDOM from 'react-dom';

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
			<div className={hidden ? 'hidden' : "col-md-12 categories-step-container text-center"}>
                <div className="col-md-12 header-wrapper text-left">
                    <span className="text-header">Category</span>
                </div>
                <div className="col-md-12 classification-container">
                    <div className="col-md-12 label-warpper text-left">
                        <label htmlFor="">1. Select your classification(s):</label>
                    </div>
                    <div className="col-md-12 text-left">
                        <div className="col-md-2">
                            <button className="btn btn-classification active">Juniors</button>
                        </div>
                        <div className="col-md-2">
                            <button className="btn btn-classification">Seniors</button>
                        </div>
                        <div className="col-md-2">
                            <button className="btn btn-classification">Handicaps</button>
                        </div>
                    </div>
                </div>
                <div className="col-md-12 court-size-container">
                    <div className="col-md-12 label-warpper text-left">
                        <label htmlFor="">1. Select the court size(s) you want to play:</label>
                    </div>
                    <div className="col-md-12">
                        <div className="col-md-3">
                            <div className="col-md-2">
                                <input className="radio-custom" id="full" type="radio" name="court_size"/>
                                <label htmlFor="full" className="radio-custom-label"></label>
                            </div>
                            <div className="col-md-9">
                                <img src="../src/image/category-icon/court-icons/full-off.jpg"/>
                            </div>
                        </div>
                        <div className="col-md-3">
                            <div className="col-md-2">
                                <input className="radio-custom" id="full" type="radio" name="court_size"/>
                                <label htmlFor="full" className="radio-custom-label"></label>
                            </div>
                            <div className="col-md-9">
                                <img src="../src/image/category-icon/court-icons/3_4-off.jpg"/>
                            </div>
                        </div>
                        <div className="col-md-3">
                            <div className="col-md-2">
                                <input className="radio-custom" id="full" type="radio" name="court_size"/>
                                <label htmlFor="full" className="radio-custom-label"></label>
                            </div>
                            <div className="col-md-9">
                                <img src="../src/image/category-icon/court-icons/mini-serve-off.jpg"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="col-md-12 match-type-container">
                    <div className="col-md-12 label-warpper text-left">
                        <label htmlFor="">1. Select the match type(s) you want to play:</label>
                    </div>
                    <div className="col-md-12 text-left">
                        <div className="col-md-2">
                            <button className="btn btn-match-type">Single</button>
                        </div>
                        <div className="col-md-2">
                            <button className="btn btn-match-type">Double</button>
                        </div>
                    </div>
                </div>
                <div className="col-md-12 categories-container">
                    <div className="col-md-12 label-warpper text-left">
                        <label htmlFor="">1. Select the categori(es) you want to play:</label>
                    </div>
                    <div className="col-md-12 selected-filter-container text-left">
                        <div className="col-md-3">
                            <span className="selected-filter">Region - Mass</span>
                        </div>
                        <div className="col-md-3">
                            <span className="selected-filter">Class - Junior</span>
                        </div>
                        <div className="col-md-3">
                            <span className="selected-filter">Court Size - Full</span>
                        </div>
                        <div className="col-md-3">
                            <span className="selected-filter">Match Type - Singles, Doubles</span>
                        </div>
                    </div>
                    <div className="col-md-12 list-categories-container">
                        <div className="col-md-12 row-categories">
                            <div className="col-md-4 category-box-container">
                                <div className="col-md-12 category-box">
                                    <div className="col-md-1">
                                        <input type="checkbox" className="checkbox-custom" name="" id=""/>
                                        <label htmlFor="" className="checkbox-custom-label"></label>
                                    </div>
                                    <div className="col-md-10 categories-detail">
                                        <p><span className="text-categories-name">Boy's singles 12</span></p>
                                        <p>
                                            <label htmlFor="">Entry Fee: </label>
                                            <span className="text-free">$ 100</span>
                                        </p>
                                        <p>
                                            <label htmlFor="">Age limits: </label>
                                            <span className="text-age">Under 12</span>
                                        </p>
                                        <p>
                                            <label htmlFor="">Ranking Limits: </label>
                                            <span className="text-ranking">n/a</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 category-box-container">
                                <div className="col-md-12 category-box">
                                    <div className="col-md-1">
                                        <input type="checkbox" className="checkbox-custom" name="" id=""/>
                                        <label htmlFor="" className="checkbox-custom-label"></label>
                                    </div>
                                    <div className="col-md-10 categories-detail">
                                        <p><span className="text-categories-name">Boy's singles 12</span></p>
                                        <p>
                                            <label htmlFor="">Entry Fee: </label>
                                            <span className="text-free">$ 100</span>
                                        </p>
                                        <p>
                                            <label htmlFor="">Age limits: </label>
                                            <span className="text-age">Under 12</span>
                                        </p>
                                        <p>
                                            <label htmlFor="">Ranking Limits: </label>
                                            <span className="text-ranking">n/a</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 category-box-container">
                                <div className="col-md-12 category-box">
                                    <div className="col-md-1">
                                        <input type="checkbox" className="checkbox-custom" name="" id=""/>
                                        <label htmlFor="" className="checkbox-custom-label"></label>
                                    </div>
                                    <div className="col-md-10 categories-detail">
                                        <p><span className="text-categories-name">Boy's singles 12</span></p>
                                        <p>
                                            <label htmlFor="">Entry Fee: </label>
                                            <span className="text-free">$ 100</span>
                                        </p>
                                        <p>
                                            <label htmlFor="">Age limits: </label>
                                            <span className="text-age">Under 12</span>
                                        </p>
                                        <p>
                                            <label htmlFor="">Ranking Limits: </label>
                                            <span className="text-ranking">n/a</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div className="col-md-12 row-categories">
                            <div className="col-md-4 category-box-container">
                                <div className="col-md-12 category-box">
                                    <div className="col-md-1">
                                        <input type="checkbox" className="checkbox-custom" name="" id=""/>
                                        <label htmlFor="" className="checkbox-custom-label"></label>
                                    </div>
                                    <div className="col-md-10 categories-detail">
                                        <p><span className="text-categories-name">Boy's singles 12</span></p>
                                        <p>
                                            <label htmlFor="">Entry Fee: </label>
                                            <span className="text-free">$ 100</span>
                                        </p>
                                        <p>
                                            <label htmlFor="">Age limits: </label>
                                            <span className="text-age">Under 12</span>
                                        </p>
                                        <p>
                                            <label htmlFor="">Ranking Limits: </label>
                                            <span className="text-ranking">n/a</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 category-box-container">
                                <div className="col-md-12 category-box">
                                    <div className="col-md-1">
                                        <input type="checkbox" className="checkbox-custom" name="" id=""/>
                                        <label htmlFor="" className="checkbox-custom-label"></label>
                                    </div>
                                    <div className="col-md-10 categories-detail">
                                        <p><span className="text-categories-name">Boy's singles 12</span></p>
                                        <p>
                                            <label htmlFor="">Entry Fee: </label>
                                            <span className="text-free">$ 100</span>
                                        </p>
                                        <p>
                                            <label htmlFor="">Age limits: </label>
                                            <span className="text-age">Under 12</span>
                                        </p>
                                        <p>
                                            <label htmlFor="">Ranking Limits: </label>
                                            <span className="text-ranking">n/a</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 category-box-container">
                                <div className="col-md-12 category-box">
                                    <div className="col-md-1">
                                        <input type="checkbox" className="checkbox-custom" name="" id=""/>
                                        <label htmlFor="" className="checkbox-custom-label"></label>
                                    </div>
                                    <div className="col-md-10 categories-detail">
                                        <p><span className="text-categories-name">Boy's singles 12</span></p>
                                        <p>
                                            <label htmlFor="">Entry Fee: </label>
                                            <span className="text-free">$ 100</span>
                                        </p>
                                        <p>
                                            <label htmlFor="">Age limits: </label>
                                            <span className="text-age">Under 12</span>
                                        </p>
                                        <p>
                                            <label htmlFor="">Ranking Limits: </label>
                                            <span className="text-ranking">n/a</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                <div className="col-md-12 button-container text-center">
                    <button type="button" className="btn btn-default">Go Back</button>
                    <button type="button" className="btn btn-green" onClick={this.props.CategoriesStepSubmit}>Confirm</button>
                </div>
			</div>
		)
	}
}