import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Header from '../../layout/Header';
import Footer from '../../layout/Footer';
import ContentContainer from './ContentContainer';
import Content from './Content';


export default class PlayerSignUpComponents extends Component {

	constructor(props) {
		super(props);

		this.state = {
			pageTitle: 'Player Sign Up'
		};
		this.getPageTitle = this.getPageTitle.bind(this);

	}


	getPageTitle() {
		this.setState({
			pageTitle: 'Player Sign Up'
		})
		// return this.state.pageTitle;
	}

    render() {

        return (
        	<div id="player-signup">
                <Header></Header>
	            <div className="container-fluid body">
                    <ContentContainer>
                        <Content></Content>			            	
                    </ContentContainer>
	            </div>
                <Footer></Footer>
            </div>
        );
    }
}