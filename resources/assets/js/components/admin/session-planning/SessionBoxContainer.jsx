import React, {Component} from 'react';
import ReactDOM from 'react-dom';

export default class SessionBoxContainer extends Component{
    constructor(props){
        super(props);
        this.state = {};
    }

    render(){
        return(
            <div className="sticky-note-wrapper">
                <ul>
                   {this.props.children}
                </ul>
            </div>
        )
    }
}