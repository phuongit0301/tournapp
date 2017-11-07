import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route } from 'react-router-dom'
import PlayerSignUpComponents from './PlayerSignUpComponents' ;
class PlayerSignUp extends Component {
    render() {
        return (
            <PlayerSignUpComponents />
        );
    }
}

export default PlayerSignUp;