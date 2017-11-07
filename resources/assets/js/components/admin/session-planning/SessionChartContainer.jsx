import React, {Component} from 'react';
import ReactDOM from 'react-dom';

export default class SessionChartContainer extends Component{
    constructor(props){
        super(props);
        this.state = {};
    }

    render(){
        return(
            <div className="col-md-12 session-chart-container">
                   {this.props.children}                
            </div>
        )
    }
}