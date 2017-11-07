/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Router } from 'react-router-dom';
import { Provider } from 'react-redux';  
import { createStore, applyMiddleware } from 'redux';  
import thunk from 'redux-thunk';
import Root from './components/admin/routes';  
import SessionManager from './components/admin/sessions';  
import reducers from './components/admin/reducers/index';

import SessionPlanning from './components/admin/session-planning/index';
import PlayerSignUp from './components/front/pages/player-signup';
// const createStoreWithMiddleware = applyMiddleware(reduxThunk)(createStore);  
// const store = createStoreWithMiddleware(reducers);
let store = createStore(reducers, applyMiddleware(thunk))
const SessionManagementApp = document.getElementById('app');
const SessionPlanningApp = document.getElementById('SessionPlanningApp');
const PlayerSignUpApp = document.getElementById('PlayerSignUpApp');

if(SessionManagementApp != null){
    ReactDOM.render(<Root store={store} />, document.getElementById('app'));
}

if(SessionPlanningApp != null){
    ReactDOM.render(<SessionPlanning />, SessionPlanningApp);
}


if(PlayerSignUpApp != null){
    ReactDOM.render(<PlayerSignUp />, PlayerSignUpApp);
}