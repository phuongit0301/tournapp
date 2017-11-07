import React, {Component} from 'react';
import ReactDOM from 'react-dom';
export default class SessionChartKnockOut extends Component{
    constructor(props){
        super(props);
        this.state = {};
    }

    render(){
        return(
            <div className="col-md-4 session-chart">
                <p className="title">Boys 10 Singles</p>
                <div className="col-md-12 label-container nopadding">
                    <label htmlFor=""># Players: </label>
                    <input className="player-input" type="number" value="32"/>
                </div>
                <div className="col-md-12 chart">
                    <div className="col-md-2 nopadding round-1-16">
                        <ul className="round-chart">
                            <li className="item item-by">
                                <span className="player-1">Rafael Nadal</span>
                                <span className="player-2">Andy Murray</span>
                            </li>
                            <li className="item item-by">
                                <span className="player-1">Rafael Nadal</span>
                                <span className="player-2">Andy Murray</span>
                            </li>
                            <li className="item item-by">
                                <span className="player-1">Rafael Nadal</span>
                                <span className="player-2">Andy Murray</span>
                            </li>
                            <li className="item item-by">
                                <span className="player-1">Rafael Nadal</span>
                                <span className="player-2">Andy Murray</span>
                            </li>
                            <li className="item item-by">
                                <span className="player-1">Rafael Nadal</span>
                                <span className="player-2">Andy Murray</span>
                            </li>
                            <li className="item item-by">
                                <span className="player-1">Rafael Nadal</span>
                                <span className="player-2">Andy Murray</span>
                            </li>
                            <li className="item item-by">
                                <span className="player-1">Rafael Nadal</span>
                                <span className="player-2">Andy Murray</span>
                            </li>
                            <li className="item item-by">
                                <span className="player-1">Rafael Nadal</span>
                                <span className="player-2">Andy Murray</span>
                            </li>
                            <li className="item item-by">
                                <span className="player-1">Rafael Nadal</span>
                                <span className="player-2">Andy Murray</span>
                            </li>
                            <li className="item item-by">
                                <span className="player-1">Rafael Nadal</span>
                                <span className="player-2">Andy Murray</span>
                            </li>
                            <li className="item item-by">
                                <span className="player-1">Rafael Nadal</span>
                                <span className="player-2">Andy Murray</span>
                            </li>
                            <li className="item item-by">
                                <span className="player-1">Rafael Nadal</span>
                                <span className="player-2">Andy Murray</span>
                            </li>
                            <li className="item item-by">
                                <span className="player-1">Rafael Nadal</span>
                                <span className="player-2">Andy Murray</span>
                            </li>
                            <li className="item item-by">
                                <span className="player-1">Rafael Nadal</span>
                                <span className="player-2">Andy Murray</span>
                            </li>
                            <li className="item item-by">
                                <span className="player-1">Rafael Nadal</span>
                                <span className="player-2">Andy Murray</span>
                            </li>
                            <li className="item item-by">
                                <span className="player-1">Rafael Nadal</span>
                                <span className="player-2">Andy Murray</span>
                            </li>
                        </ul>
                    </div>
                    <div className="col-md-2 nopadding round-1-8">
                        <ul className="round-chart">
                            <li className="item item-play"></li>
                            <li className="item item-play"></li>
                            <li className="item item-play"></li>
                            <li className="item item-play"></li>
                            <li className="item item-play"></li>
                            <li className="item item-play"></li>
                            <li className="item item-play"></li>
                            <li className="item item-play"></li>
                        </ul>
                    </div>
                    <div className="col-md-2 nopadding round-1-4">
                        <ul className="round-chart">
                            <li className="item item-play"></li>
                            <li className="item item-play"></li>
                            <li className="item item-play"></li>
                            <li className="item item-play"></li>
                        </ul>
                    </div>
                    <div className="col-md-2 nopadding round-1-2">
                        <ul className="round-chart">
                            <li className="item item-play"></li>
                            <li className="item item-play"></li>
                        </ul>
                    </div>
                    <div className="col-md-2 nopadding round-1-1">
                        <ul className="round-chart">
                            <li className="item item-play"></li>
                        </ul>
                    </div>
                </div>
                <div className="col-md-12 play-button-container ">
                    <button className="btn btn-green" type="button">Play / Rest Time</button>
                </div>
            </div>  
        )
    }
}