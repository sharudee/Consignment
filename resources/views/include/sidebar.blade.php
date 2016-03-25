<form name='form' method='GET' >

 <div class="solso-sidebar">
 	<div id="grey-sidebar" class="list-group">
		<a href="{{URL::to('ChangeEntity')}}" class="list-group-item active">
 			<div class="input-group">
 				<p><i class="fa fa-university"> {{Auth::user()->current_cust_name_logon}} </i></p> 
 				<p><i class="fa fa-user">  {{Auth::user()->fullname}} :: {{Auth::user()->current_entity_code_logon}}</i></p>	
 			</div>	  
 		</a>

 		<ul class="nav" id="side-menu">

		

		<?php
			$user_id  = Auth::user()->id  ;
			$name = DB::table('users')->where('id','=',$user_id)->pluck('menu_dynamic');
			echo  $name;
		?>
	

 		</ul>
 	</div>
 </div>


</form>