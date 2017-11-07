import { combineReducers } from 'redux';  
import { reducer as formReducer } from 'redux-form';  
//import { sessions } from './sessions';
import { 
			FETCH_ITEMS, FETCH_GROUPS, FETCH_PLAYERS, REQUEST_ITEMS, 
			RECEIVE_AVAILABLES, RECEIVE_TIME_PLUS, RECEIVE_TIME_MINUS, RECEIVE_SELECTED_COURT,
			RECEIVE_GROUP_IF_NEED, RECEIVE_ITEM_IF_NEED, REQUEST_USERS, FETCH_USERS, SEARCH_USERS, ADD_ITEM,
			REQUEST_DATA, FETCH_DATA, FETCH_MATCH_STATUS
} from '../actions/types';

const INITIAL_STATE = { 
	content: '', 
	errors: {
		error: 0, 
		message: ''
	},
	groupsData: [],
	itemsData: [],
	playersData: [],
	available: false,
	loading: true,
	usersData: [],
};

function getDatas(state=INITIAL_STATE, actions) {
	switch(actions.type) {
	    case REQUEST_DATA:
	    case FETCH_DATA:
	      return actions
	    default:
	      return state
   }
}

function getItemsData(state=INITIAL_STATE, actions) {
	switch(actions.type) {
	    case FETCH_ITEMS:
	    case REQUEST_ITEMS:
	      return actions
	    default:
	      return state
   }
}

function getGroupsData(state=INITIAL_STATE, actions) {
	switch(actions.type) {
	    case FETCH_GROUPS:
	    case REQUEST_ITEMS:
	      return actions
	    default:
	      return state
  }
}

function getPlayersData(state=INITIAL_STATE, actions) {
	switch(actions.type) {
	    case FETCH_PLAYERS:
	    case REQUEST_ITEMS:
	      return actions
	    default:
	      return state
  }
}

function getUsersData(state=INITIAL_STATE, actions) {
	switch(actions.type) {
	    case FETCH_USERS:
	    case REQUEST_USERS:
	      return actions
	    default:
	      return state
  }
}

function receiveAvailables(state=INITIAL_STATE, actions) {
	switch(actions.type) {
	    case RECEIVE_AVAILABLES:
	      return actions
	    default:
	      return state
  }
}

function receiveTime(state=INITIAL_STATE, actions) {
	switch(actions.type) {
	    case RECEIVE_TIME_PLUS:
	    case RECEIVE_TIME_MINUS:
	      return actions
	    default:
	      return state
  }
}

function receiveDataGroupsIfNeed(state=INITIAL_STATE, actions) {
	switch(actions.type) {
		case RECEIVE_GROUP_IF_NEED:
			return actions
		default:
			return state
	}
}

function receiveDataItemsIfNeed(state=INITIAL_STATE, actions) {
	switch(actions.type) {
		case RECEIVE_ITEM_IF_NEED:
			return actions
		default:
			return state
	}
}

function receiveDataUsers(state=INITIAL_STATE, actions) {
	switch(actions.type) {
		case SEARCH_USERS:
			return actions
		default:
			return state
	}
}

function addItemsData(state=INITIAL_STATE, actions) {
	switch(actions.type) {
		case ADD_ITEM:
			return actions
		default:
			return state
	}
}

function receiveMatchStatus(state=INITIAL_STATE, actions) {
	switch(actions.type) {
		case FETCH_MATCH_STATUS:
			return actions
		default:
			return state
	}
}

const reducers = combineReducers({
  getDatas,
  getItemsData,
  getGroupsData,
  getPlayersData,
  getUsersData,
  receiveAvailables,
  receiveTime,
  receiveDataGroupsIfNeed,
  receiveDataItemsIfNeed,
  receiveDataUsers,
  addItemsData,
  receiveMatchStatus
});

export default reducers;  