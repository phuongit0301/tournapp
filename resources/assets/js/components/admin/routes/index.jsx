import React from 'react';  
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import { Provider } from 'react-redux';  
import SessionManager from '../sessions';
// import NotFoundPage from './components/pages/not-found-page';

// import HomePage from './components/pages/home-page';  
// import Register from './components/auth/register';  
// import Login from './components/auth/login';  
// import Dashboard from './components/dashboard';  
// import RequireAuth from './components/auth/require-auth';

const Root = ({store}) => (
	<Provider store={store}>  
		<Router>
	      <Route exact path="/admin/sessions" component={SessionManager} />
	    </Router>
    </Provider>
);

export default Root;