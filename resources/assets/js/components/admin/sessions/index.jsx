import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import SidebarNav from '../common/SidebarNav';
import Header from '../common/Header';
import ContentContainer from './ContentContainer';
import Content from './Content';
import { connect } from 'react-redux';
import { fetchUsers, fetchDatas, fetchMatchStatus, fetchDatasIfNeed } from '../actions/sessions';
import { receiveAvailables } from '../actions/contents';

export class SessionManager extends Component {

	constructor(props) {
		
		super(props);

		this.state = {
		  dataSearch: '',
		  toggleMenu: true
		};
		this._handleChange     = this._handleChange.bind(this);
		this._toggleMenu     = this._toggleMenu.bind(this);
	}

	componentDidMount() {
		const {fetchUsers, receiveAvailables, fetchDatas, fetchMatchStatus} = this.props;
		
		fetchDatas();
		fetchMatchStatus();
		fetchUsers();
		receiveAvailables({available: true});
	}

	_handleChange(event) {
		this.setState({dataSearch: event.target.value});
	}

	_toggleMenu() {
		this.setState({toggleMenu: !this.state.toggleMenu})
	}

    render() {
    	const { loading } = this.props;
    	const { toggleMenu } = this.state;

    	if( loading ) {
    		return (
    			<div className="waiting">
    				Waiting
    			</div>
			)
    	}

        return (
        	<div id="session-manager">
	            <div className="container-fluid nopadding">
	            	<div className="row nopadding">
	            		<SidebarNav toggleMenu={toggleMenu} />
		                <ContentContainer toggleMenu={toggleMenu}>
			                <Header _toggleMenu={this._toggleMenu} />
			                <Content {...this.state} {...this.props} _handleChange={this._handleChange}  />
		                </ContentContainer>
	                </div>
	            </div>
            </div>
        );
    }
}

const mapStateToProps = ({getItemsData, getPlayersData, getUsersData, receiveAvailables, getDatas, receiveMatchStatus}) => {

  return {
    groupsData: (getDatas.datas && getDatas.datas.court) ? getDatas.datas.court : [],
    //itemsData: getItemsData.itemsData ? getItemsData.itemsData : [],
    itemsData: getDatas.itemsData ? getDatas.itemsData : [],
    playersData: (getDatas.datas && getDatas.datas.data) ? getDatas.datas.data : [],
    available: receiveAvailables.available ? receiveAvailables.available : false,
    loading: getDatas.loading ? getDatas.loading : false,
    usersData: getUsersData.usersData,
    matchStatusData: receiveMatchStatus.datas ? receiveMatchStatus.datas : [],
    datas: getDatas.datas
  }
}

export default connect (
  mapStateToProps,
  { fetchUsers, receiveAvailables, fetchDatas, fetchDatasIfNeed, fetchMatchStatus }
)(SessionManager)

