import React, {Component} from 'react';
import ReactDOM from 'react-dom';
export default class SessionChartRobin extends Component{
    constructor(props){
        super(props);
        this.state = {};
    }

    render(){
        return(
            <div className="col-md-4 session-chart">
                <p className="title">Boys 10 Singles</p>
                <div className="col-md-12 label-container nopadding">
                    <label className="col-md-3 nopadding" htmlFor=""># Players: </label>
                    <input className="player-input" type="number" value="32"/>
                </div>
                <div className="col-md-12 label-container nopadding">
                    <label className="col-md-3 nopadding" htmlFor="">per DIV: </label>
                    <input className="player-input" type="number" value="4"/>
                </div>
                <div className="col-md-12 chart">
                    <div className="col-md-2 round-1-16">
                        <ul className="round-chart">
                            <li className="item item-play"></li>
                            <li className="item item-play"></li>
                            <li className="item item-play"></li>
                        </ul>
                    </div>
                    <div className="col-md-2 round-1-16">
                        <ul className="round-chart">
                            <li className="item item-play"></li>
                            <li className="item item-play"></li>
                            <li className="item item-play"></li>
                        </ul>
                    </div>
                    <div className="col-md-2 round-1-16">
                        <ul className="round-chart">
                            <li className="item item-play"></li>
                            <li className="item item-play"></li>
                            <li className="item item-play"></li>
                        </ul>
                    </div>
                    <div className="col-md-2 round-1-16">
                        <ul className="round-chart">
                            <li className="item item-play"></li>
                            <li className="item item-play"></li>
                            <li className="item item-play"></li>
                        </ul>
                    </div>
                </div>
                <div className="col-md-12 play-button-container margin-bottom-50">
                    <button className="btn btn-green" type="button">Play / Rest Time</button>
                </div>
            </div>  
        )
    }
}