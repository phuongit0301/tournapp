import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route } from 'react-router-dom'
import SessionPlanningComponents from './SessionPlanningComponents';

class SessionPlanning extends Component {
    render() {
        return (
            <SessionPlanningComponents />
        );
    }
}

export default SessionPlanning;