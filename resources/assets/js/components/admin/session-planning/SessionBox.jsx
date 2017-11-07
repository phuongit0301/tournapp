import React, {Component} from 'react';
import ReactDOM from 'react-dom';
export default class SessionBox extends Component{
    constructor(props){
        super(props);
        this.state = {};
    }

    render(){
        return(
            <li className="bg-active">
                <a href="javascript:;" className="button remove">X</a>
                <div className="sticky-note-content">
                    <p className="title-white header-title">Session 1</p>
                    <p className="text-white header-substitle">Date: 24/3/2017</p>
                    <p className="text-white header-substitle">Time: 9:00 - 12:00</p>
                    <p className="text-white header-substitle">Total Court: 2</p>
                    <p className="text-white header-substitle">Used Court: 0</p>
                </div>
            </li>
        )
    }
}