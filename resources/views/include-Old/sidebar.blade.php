
 <div class="solso-sidebar">
 	<div id="grey-sidebar" class="list-group">
 		<a href="#" class="list-group-item active">
 			<div class="input-group">
 				<p><i class="fa fa-university"> {{Auth::user()->current_cust_name_logon}} </i></p> 
 				<p><i class="fa fa-user">  {{Auth::user()->fullname}} :: {{Auth::user()->current_entity_code_logon}}</i></p>	
 			</div>	  
 		</a>

 		<ul class="nav" id="side-menu">

 			{!!Session::get('TEST_TEST')!!}  
 		
 		</ul>
 	</div>
 </div>

