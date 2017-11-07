<!-- Large modal -->
<div class="modal fade referess-list" id="referees-list" tabindex="-1" role="dialog" aria-labelledby="referessListLabel" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h3 class="modal-title" id="referessListLabel">Preferees List</h3>
		</div>
		<div class="modal-body">
      		<h4 class="title-refer text-blue">SEVEV ISRAEL 5 - NORTH</h4>
			<p class="title-refer">Refferee list</p>
			<ol>
				<li>Haim Moshe</li>
				<li>Ian Morison</li>
			</ol>

			<form role="search" class="form-horizontal">
			  <div class="form-group">
		  		<div class="col-md-5">
			    	<input type="text" class="search-preferees-list form-control" placeholder="Search" />
			    </div>
			  </div>
			</form>
			
			<p class="title-add-referee text-blue">Add referee to the list </p>

			<div class="dropdown clearfix">
				<button class="btn btn-default dropdown-toggle col-md-4" type="button" id="menu-referee" data-toggle="dropdown">
				  <span class="col-lg-10 text-left">Find a referee</span>
				  <span class="col-lg-2"><span class="caret"></span></span>
				</button>
				<ul class="dropdown-menu" role="menu" aria-labelledby="menu-referee">
					<li role="presentation"><a role="menuitem" href="#">Carlca Hilton</a></li>
					<li role="presentation"><a role="menuitem" href="#">Mark Steve</a></li>
					<li role="presentation"><a role="menuitem" href="#">Billy Thomes</a></li>
					<li role="presentation"><a role="menuitem" href="#">Jack JasonJason</a></li>
					<li role="presentation"><a role="menuitem" href="#">William MI</a></li>
				</ul>
			</div>
		</div>
    </div>
  </div>
</div>

<!-- Large modal -->
<div class="modal fade sms-modal" id="sms-modal" tabindex="-1" role="dialog" aria-labelledby="smsListLabel" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h3 class="modal-title" id="smsListLabel">MESSSAGE BOX</h3>
		</div>
		<div class="modal-body">
			<form class="form sms-form" role="form">
                <label class="checkbox text-black text-status"><input type="checkbox" value="" class="checkbox-status" /><span class="c-indicator c-indicator-black"></span><span class="title-normal"><strong>Player 1: </strong>Rami Zelikovich</span></label>
                <label class="checkbox text-black text-status"><input type="checkbox" value="" class="checkbox-status" /><span class="c-indicator c-indicator-black"></span><span class="title-normal"><strong>Player 2: </strong>Rafael Nadal</span></label>
			
			
				<p class="title-message-sms text-black">Message</p>
				<p><textarea class="form-control" rows="5" id="sms-message"></textarea></p>
				<div class="group-button">
					<button class="btns btn-cancel">Cancel</button>
					<button class="btns btn-save">Save</button>
		        </div>
				
			</form>
		</div>
    </div>
  </div>
</div>
