$(document).ready(function() {
	$(".dropdown-menu li a").click(function(){
	  $(this).parents(".dropdown").find('.btn').html('<span class="col-lg-10 text-left">' + $(this).text() + '</span><span class="col-lg-2"><span class="caret"></span></span>');
	  $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
	});

	 $(".panel-top").resizable({
	   handleSelector: ".splitter-horizontal",
	   resizeWidth: false
	 });
});

// var items = document.querySelectorAll('.items .item');
// console.log(items);
// console.log(123);
// 	  for (var i = items.length - 1; i >= 0; i--) {
// 	    var item = items[i];
// 	    item.addEventListener('dragstart', handleDragStart.bind(this), false);
// 	  }
	  
// function handleDragStart(event) {
//     dragSrcEl = event.target;
// console.log(123);
//     event.dataTransfer.effectAllowed = 'move';
//     var itemType = event.target.innerHTML.split('-')[1].trim();
//     var item = {
//       id: new Date(),
//       type: itemType,
//       content: event.target.innerHTML.split('-')[0].trim()
//     };

//     var isFixedTimes = (event.target.innerHTML.split('-')[2] && event.target.innerHTML.split('-')[2].trim() == 'fixed times')
//     if (isFixedTimes) {
//       item.start = new Date();
//       item.end = new Date(1000*60*10 + (new Date()).valueOf());
//     }

//     event.dataTransfer.setData("text", JSON.stringify(item));
//   }