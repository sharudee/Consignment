<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($pc)}}">
	<thead>
		<tr>
			<th>รหัสพนักงาน</th>
			<th>ชื่อพนักงาน</th>
			<th>เบอร์โทรศัพท์</th>
			<th>Email Address</th>
			<th>Acttion</th>
			
		</tr>
	</thead>
	<tbody>
		@foreach($pc as $crt => $v)
		<tr>
			<td><a href="{{URL::to('pcwork/'.$v->emp_code)}}">{{$v->emp_code}}</a></td>
			<td>{{$v->emp_name}} </td>
			<td>{{$v->tel}}</td>
			<td>{{$v->email}}</td>
			<td> 
				<button type="button" class="btn btn-primary solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal" 
				data-href="{{URL::to('pc/'.$v->id.'/edit')}}" data-modal-title="Edit PC"
				data-id="{{$v->id}}">
				<i class="fa fa-pencil"></i> Edit</button>
				
				
				 <button type="button" class="btn btn-danger solsoConfirm" 
				data-toggle="modal" data-target="#solsoDeleteModal" 
				data-href="{{ URL::to('pc/'.$v->id) }}"
				data-id="{{$v->id}}">
				<i class="fa fa-trash"></i> Delete
				</button>
			
				<!--{!! Form::open(array('url' => 'pc/' . $v->id))  !!}
				   {!! Form::hidden('_method', 'DELETE') !!}
				   {!! Form::button('Delete', array('class' => 'btn btn-danger solsoConfirm', 'data-toggle' => 'modal', 'data-target' => '#solsoDeleteModal' , 'data-href'=>URL::to('pc/'.$v->id) )) !!}
				 {!! Form::close() !!} -->
			</td>
		</tr>
		@endforeach
		
	</tbody>
</table>