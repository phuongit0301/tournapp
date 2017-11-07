import axios from 'axios';
import moment from 'moment';
import { 
          FETCH_ITEMS, FETCH_GROUPS, FETCH_PLAYERS, FETCH_ERRORS, 
          REQUEST_ITEMS, FETCH_USERS, REQUEST_USERS, FETCH_DATA , REQUEST_DATA, REQUEST_MATCH_STATUS, FETCH_MATCH_STATUS
    } from './types';
import _ from 'lodash';

const API_URL = 'http://tournapp.dev/data';

export function fetchDatas() {
  return function(dispatch) {

    dispatch({ type: REQUEST_DATA, loading: true });

    axios.all([getItems(), getMatchStatus()])
    .then(function(response) {
        let itemsData = "";
        
        if(response[0].status === 200 && response[1].status === 200) {
          let itemsData = prepareDataItems(response[1].data, response[0].data.data, response[0].data.court);
          dispatch({ type: FETCH_DATA, datas: response[0].data, itemsData: [itemsData], loading: false });
        }  else {
          dispatch({ type: FETCH_ERRORS, datas: response.data, loading: false });
        }
    })
    .catch((error) => {
        dispatch({ type: FETCH_ERRORS, error: error, loading: false });
      });
  }
}

function getItems() {
  return axios.get(`${APP_URL}` + '/api/session/92939d9c-a6a6-11e7-9346-1f572eaa7f24');
}

function getMatchStatus() {
    return axios.get(`${APP_URL}` + '/api/match_status');
}

function setTimes(hours, minutes) {
  var today = new Date();
  today.setHours(hours);
  today.setMinutes(minutes);
  return today;
}

function setTimesStart() {
  var today = new Date();
  today.setHours(0);
  today.setMinutes(0);
  return today;
}

function setTimesEnd() {
  var today = new Date();
  today.setHours(24);
  today.setMinutes(0);
  return today;
}

function generateUUID() {
    var d = new Date().getTime();
    var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        var r = (d + Math.random()*16)%16 | 0;
        d = Math.floor(d/16);
        return (c=='x' ? r : (r&0x3|0x8)).toString(16);
    });
    return uuid;
};

export function prepareDataItems(match, data, dataCourt) {
  let dataItems = [];
  let arrItemsCourt = [];
  let arrItemsId = [];
  let dataClassName = [];
  let prevStartTime = [];
  let hours = moment().hours();
  let minutes = (moment().minutes() == 0) ? 1 : moment().minutes();
  let currentTime = hours * 60 + minutes;
  let textStyle = "text-light-blue";

  data.map(items => {
      if(items.scheduled_time !== null && items.scheduled_end_time !== null) {
        let dataItemsSessions = {};
        let estimatedTime = items.estimated_time;
        let scheduledHours = estimatedTime.split(':')[0];
        let scheduledMinutes = estimatedTime.split(':')[1];
        let startTime = scheduledHours * 60 + scheduledMinutes;

        let scheduledEndTime = items.scheduled_end_time;
        let scheduledEndHours = scheduledEndTime.split(':')[0];
        let scheduledEndMinutes = scheduledEndTime.split(':')[1];
        let endTime = scheduledEndHours * 60 + scheduledEndMinutes;

        dataItemsSessions.id = items.id;
        dataItemsSessions.editable = false;
        dataItemsSessions.available = true;
        dataItemsSessions.start = setTimes(scheduledHours, scheduledMinutes);
        dataItemsSessions.end = setTimes(scheduledEndHours, scheduledEndMinutes);
        dataItemsSessions.group = items.court != null ? items.court : null;
        match.map(dataMatch => {
          if(items.match_status == dataMatch.id) {
            
            //Add dot color to player match
            if(dataClassName[items.court] === undefined)
              dataClassName[items.court] = new Array();

            if(prevStartTime[items.court] === undefined)
              prevStartTime[items.court] = new Array();

            dataItemsSessions.className = dataMatch.class_name;
            dataItemsSessions.color = dataMatch.color;
            dataItemsSessions.text_style = dataMatch.text_style;
            textStyle = dataMatch.text_style;

            if(prevStartTime[items.court].length === 0) {
              dataClassName[items.court] = dataMatch.class_name;
              prevStartTime[items.court] = startTime;
            } else {
              if(prevStartTime[items.court] > startTime) {
                dataClassName[items.court] = dataMatch.class_name;
                prevStartTime[items.court] = startTime;
              }
            }
          }
        });
        dataItemsSessions.content = "<span>"+items.category_name + " " + items.round + " <span class='"+textStyle+"'>" + items.teams[0].name  + "</span>" + ' vs ' 
                      + "<span class='"+textStyle+"'>" + items.teams[1].name + "</span></span>";
        dataItems.push(dataItemsSessions);
        arrItemsCourt.push(items.court);
        arrItemsId.push(items.id);
      }
  });

  dataCourt.map(groups => {
      if(!arrItemsCourt.includes(groups.id)) {
        let dataItemsSessions = {};
        dataItemsSessions.id = !arrItemsId.includes(groups.id) ? groups.id : generateUUID();
        dataItemsSessions.editable = false;
        dataItemsSessions.available = false;
        dataItemsSessions.start = setTimesStart();
        dataItemsSessions.end = setTimesEnd();
        dataItemsSessions.group = groups.id != null ? groups.id : null;
        dataItemsSessions.className = groups.available ? "bg-transparent" : "bg-red-light";
        dataItemsSessions.content = "";
        dataItems.push(dataItemsSessions);
        // let dataItemsMid = {};
        // dataItemsMid.id = generateUUID();
        // dataItemsMid.start = setTimesStart();
        // dataItemsMid.end = setTimesEnd();
        // dataItemsMid.className = "bg-white";
        // dataItemsMid.group = groups.id;
        // dataItemsMid.content = "";
        // dataItemsMid.editable = false;
        // dataItemsMid.available = true;
        // dataItems.push(dataItemsMid);

        groups.class = "circle-right circle bg-white";
      } else {
        groups.class = "circle-right circle " + dataClassName[groups.id];
      }

  });

  return dataItems;
}

export function fetchDatasIfNeed() {
  return function(dispatch) {
      axios.get(`${APP_URL}` + '/api/session/92939d9c-a6a6-11e7-9346-1f572eaa7f24')
      .then(response => {
        if(response.status === 200) {
          dispatch({ type: FETCH_DATA, datas: response.data, loading: false });
        } else {
          dispatch({ type: FETCH_ERRORS, datas: response.data, loading: false });
        }
      })
      .catch((error) => {
        dispatch({ type: FETCH_ERRORS, error: error, loading: false });
      });

  }
}

function setHours(time) {
	var today = new Date();
	today.setMinutes(today.getHours());
	today.setMinutes(time + 5);
	return today;
}

export function fetchGroups() {

  return function(dispatch) {
  	
  	dispatch({ type: REQUEST_ITEMS, loading: true });

    axios.get(`${APP_URL}/data/groups.json`)
    .then(response => {
    	if(response.status === 200) {
        dispatch({ type: FETCH_GROUPS, groupsData: response.data, loading: false });
    	} else {
    		dispatch({ type: FETCH_ERRORS, groupsData: response, loading: false });
    	}
    })
    .catch((error) => {
      dispatch({ type: FETCH_ERRORS, error: error, loading: false });
    });
    }
}


function compareTime(current) {
	let dataItem = current.split(':');
	
	let hours = parseInt(dataItem[0]);
	let minutes = parseInt(dataItem[1]);
	let dateNow = new Date();
	let hoursCurrent = dateNow.getHours();
	let minutesCurrent = dateNow.getMinutes();

	if(hours < hoursCurrent) {
		return false;
	} else if(hours == hoursCurrent) {
		if(minutes < minutesCurrent) {
			return false;
		}
		return true;
	} else {
		return true;
	}

}

export function fetchUsers() {

  return function(dispatch) {
    
    dispatch({ type: REQUEST_USERS, loading: true });

    axios.get(`${APP_URL}/data/users.json`)
    .then(response => {
      if(response.status === 200) {
        dispatch({ type: FETCH_USERS, usersData: response.data, loading: false });
      } else {
        dispatch({ type: FETCH_ERRORS, usersData: response.data, loading: false });
      }
    })
    .catch((error) => {
      dispatch({ type: FETCH_ERRORS, error: error, loading: false });
    });
    }
}

export function fetchMatchStatus() {
  return function(dispatch) {

      dispatch({ type: REQUEST_MATCH_STATUS, loading: true });

      axios.get(`${APP_URL}/api/match_status`)
      .then(response => {
        if(response.status === 200) {
          dispatch({ type: FETCH_MATCH_STATUS, datas: response.data, loading: false });
        } else {
          dispatch({ type: FETCH_ERRORS, datas: response.data, loading: false });
        }
      })
      .catch((error) => {
        dispatch({ type: FETCH_ERRORS, error: error, loading: false });
      });

  }
}