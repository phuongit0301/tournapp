import axios from 'axios';
import moment from 'moment';
import _ from 'lodash';
import { 
		RECEIVE_AVAILABLES, RECEIVE_TIME_PLUS, RECEIVE_TIME_MINUS, FETCH_DATA, FETCH_ERRORS, 
		RECEIVE_SELECTED_COURT, RECEIVE_GROUP_IF_NEED, RECEIVE_ITEM_IF_NEED, SEARCH_USERS, ADD_ITEM } from './types';

export function receiveAvailables({available}) {

  return function(dispatch) {
  	dispatch({ type: RECEIVE_AVAILABLES, available });
  }
}

export function handleTimePlus(itemsData, item, selectedTime, selectedCourt, selectedSession = 1) {
	let dataItem = selectedTime.split(':');
	let hours = parseInt(dataItem[0]);
	let minutes = parseInt(dataItem[1]);
	let minusCurrent = parseInt(dataItem[1]);
	let selectedSessionDataItem = [];

	if(hours < 0 && hours > 24) {
		return false;
	}

	if(minutes < 0 && minutes > 60) {
		return false;	
	}

	if(minutes == 60 && hours < 24) {
		hours += 1;
		minues = 0;
		minusCurrent = 0;
	}
	selectedSessionDataItem = itemsData;
	let dataItemsFilter = cleanItemsData(itemsData[selectedSession - 1], item, hours, minutes, selectedCourt);
	selectedSessionDataItem[selectedSession - 1] = dataItemsFilter.itemsData;
	return function(dispatch) {
	  	dispatch({ type: RECEIVE_TIME_PLUS, itemsData: selectedSessionDataItem, playersData: dataItemsFilter.playersData, errors: dataItemsFilter.errors });
	  	//dispatch({ type: RECEIVE_TIME_PLUS, itemsData: selectedSessionDataItem, playersData: dataItemsFilter.playersData });
	}
}

function cleanItemsData(dataItems, itemMatch, hours, minutes, selectedCourt) {
	let errors = {error: 0, message: '', titleError: ''};
	let isFilter = false;
	//get current hours minutes
	let timeCompare = (hours * 60 + minutes);

	let itemsData = dataItems.filter(item => {
		if(item.group === selectedCourt) {
			let startHours = item.start.getHours();
			let startMinutes = item.start.getMinutes();
			let endHours = item.end.getHours();
			let endMinutes = item.end.getMinutes();
			let startTimeCompare = (startHours * 60 + startMinutes);
			let endTimeCompare = (endHours * 60 + endMinutes);
			let datas = {};
			/*
				Check data player:
					- Player Time between start time and end time
				Then accept edit to item 
			 */
			if((timeCompare >= startTimeCompare && timeCompare <= endTimeCompare)) {
				item.editable = true;
				item.start = setTime(timeCompare);
				item.end = setTime(timeCompare + itemMatch.length);
				isFilter = true;
			}
		}

		return item;
	});

	if(!isFilter) {
		errors.error = 1;
		errors.message = 'Not Found Match Time';
		errors.titleError = 'Error Update Time';
	}

	return { itemsData, errors };
}

function setTime(time) {
	let today = new Date();
	let hours = Math.floor(time/60);
	let minutes = time%60;
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

export function receiveGroupsIfNeed(groups, group = null, className = 'bg-white', available = true, statusReady = false) {
	if(group != null) {
		groups.filter(dataGroup => {
			if(dataGroup.id === group.id) {
				dataGroup.className = className;
				dataGroup.available = available;
				dataGroup.statusReady = statusReady;
			}
			return dataGroup;
		})
	}

	return function(dispatch) {
	  	dispatch({ type: RECEIVE_GROUP_IF_NEED, groupsData: groups});
	}
}

function setTimes(hours, minutes) {
  var today = new Date();
  today.setHours(hours);
  today.setMinutes(minutes);
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

export function receiveItemsIfNeed(itemsData, item, selectedSession = 1, className='bg-red-light') {
	let itemsFilter = [];

	itemsData[selectedSession - 1].map(dataItems => {
		if(dataItems.id === item.id) {
			dataItems.group = item.court;
			dataItems.className = className;
			itemsFilter.push(dataItems);
		} else {
			itemsFilter.push(dataItems);
		}
	});
	itemsData[selectedSession - 1] = itemsFilter;
	// if(type === 'add') {
	// 	groupsData.map((groups) => {
	// 		let dataItems = {};
	// 		let dataItemsEnd = {};
	// 		let dataItemsMid = {};

	// 		if(timeGroupsStart[groups.id] !== undefined) {
	// 			dataItems.id = generateUUID();
	// 			dataItems.start = setTimesStart();
	// 			dataItems.end =  timeGroupsStart[groups.id];
	// 			dataItems.className = className;
	// 			dataItems.group = groups.id;
	// 			dataItems.content = "";
	// 			dataItems.editable = false;
	// 			dataItems.available = true;
	// 			items[selectedSession - 1].push(dataItems);
	// 		}
			
	// 		if(timeGroupsEnd[groups.id] !== undefined) {
	// 			dataItemsEnd.id = generateUUID();
	// 			dataItemsEnd.end = setTimesEnd();
	// 			dataItemsEnd.start =  timeGroupsEnd[groups.id];
	// 			dataItemsEnd.className = className;
	// 			dataItemsEnd.group = groups.id;
	// 			dataItemsEnd.content = "";
	// 			dataItemsEnd.editable = false;
	// 			dataItemsEnd.available = true;
	// 			items[selectedSession - 1].push(dataItemsEnd);
	// 		}
	// 	});
		
	// 	groupsData.map((groups) => {
	// 		let dataItems = {};
	// 		let dataItemsEnd = {};
	// 		let dataItemsMid = {};

	// 		if(timeGroupsStart[groups.id] === undefined && timeGroupsEnd[groups.id] === undefined) {
	// 			let startHours = groups.start_time.split(':')[0];
	// 			let startMinutes = groups.start_time.split(':')[1];
	// 			let endHours = groups.end_time.split(':')[0];
	// 			let endMinutes = groups.end_time.split(':')[1];

	// 			dataItemsMid.id = generateUUID();
	// 			dataItemsMid.start =  setTimes(startHours, startMinutes);
	// 			dataItemsMid.end = setTimes(endHours, endMinutes);
	// 			dataItemsMid.className = "bg-white";
	// 			dataItemsMid.group = groups.id;
	// 			dataItemsMid.content = "";
	// 			dataItemsMid.editable = false;
	// 			dataItemsMid.available = true;
	// 			items[selectedSession - 1].push(dataItemsMid);
	// 		}
	// 	});
		
	// } else {
	// 	itemsFilter = items[selectedSession - 1].filter(item => {
	// 		return !item.available;
	// 	});
	// 	items[selectedSession - 1] = itemsFilter;
	// }

	return function(dispatch) {
	  	dispatch({ type: RECEIVE_ITEM_IF_NEED, itemsData: itemsData});
	}
}

export function searchUsers(dataUsers, dataSearch) {

	if(dataSearch && dataSearch !== '') {
			
		let dataUsersFilter = [];

		return dataUsers.filter((items, i) => {
			
			dataUsersFilter[i] = items;

			return items.player.filter((item, j) => {

				if(item.name.toLowerCase().search(dataSearch.toLowerCase()) !== -1) {
					return dataUsersFilter[i]['player'][j] = item;
				} else {
					return dataUsersFilter[i]['player'] = [];
				}
			})
		})
	}

	return function(dispatch) {
	  	dispatch({ type: SEARCH_USERS, usersData: dataUsers});
	}
}

export function processMessage(errors) {
	return {
		type: PROCESS_MESSAGE,
		errors
	}
}

export function addItems(items, selectedSession = 1, item = null) {
	items[selectedSession - 1].push(item);
	return {
		type: ADD_ITEM,
		itemsData: items
	}
}

function getItems() {
  return axios.get(`${APP_URL}` + '/api/session/92939d9c-a6a6-11e7-9346-1f572eaa7f24');
}

function getMatchStatus() {
    return axios.get(`${APP_URL}` + '/api/match_status');
}

export function processSession() {
  return function(dispatch) {

    axios.all([getItems(), getMatchStatus()])
    .then(function(response) {
        let itemsData = "";
        if(response[0].status === 200 && response[1].status === 200) {
          let itemsData = prepareDataItems(response[1].data, response[0].data.data, response[0].data.court);
          dispatch({ type: FETCH_DATA, datas: response[0].data, itemsData: [itemsData] });
        }  else {
          dispatch({ type: FETCH_ERRORS, datas: response.data });
        }
    })
    .catch((error) => {
        dispatch({ type: FETCH_ERRORS, error: error });
      });
  }
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

export function getLastMatch(matches) {
	let last_match = matches[0];

	for ( var i = 0; i++; i< matches.length) {
		if ( (i+1) >= matches.length ) {
			last_match = matches[ matches.length - 1 ];
	 	} else {  
		  let prev_match = matches[i];
		  let next_match = matches[i+1];
		  
		  // Mình so sánh prev_match.scheduled_end_time với next_match.estimated_time, nếu > 30p thì last_match là prev_match
		  // ngược lại last_match là next_match
		  // tiếp tục loop
		}
	}
}
