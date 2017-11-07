import React, {Component} from 'react';
import ReactDOM from 'react-dom';
export default class Footer extends Component{
    constructor(props){
        super(props);
        this.state = {};
    }

    render(){
        return(
            <div className="col-md-12 footer text-center">
                <button className="btn btn-cancel" type="button">Reset</button>
                <button className="btn btn-green" type="button">Save</button>
            </div>
        )
    }
}