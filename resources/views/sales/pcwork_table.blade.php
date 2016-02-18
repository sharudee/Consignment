<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($pcwork)}}">
	<thead>
		<tr>
			<th>วันที่ทำงาน</th>
			<th>วันทำงาน</th>
			<th>ประเภท</th>
			<th>เวลาเข้างาน</th>
			<th>เวลาเลิกงาน</th>
			<th>Acttion</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pcwork as $dbpc)
			<?php
				if($dbpc->work_type=='1')
				{
					$work_type = "วันทำงาน";
				}
				else
				{
					$work_type = "วันหยุด";
				}

				if($dbpc->pc_type=='P')
				{
					$pc_type = "พนักงานประจำ";
				}
				else
				{
					$pc_type = "พนักงานแทน";
				}
			?>
		<tr>
			<td>{{ Carbon::parse($dbpc->work_date)->format('d/m/Y') }}</td>
			<td>{{$work_type}}</td>
			<td>{{$pc_type}}</td>
			<td>{{$dbpc->time_start}}</td>
			<td>{{$dbpc->time_end}}</td>
			<td>
				<button type="button" class="btn btn-primary solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal" 
				data-href="{{URL::to('pcwork/'.$dbpc->id.'/edit')}}" data-modal-title="Edit Work Schedule"
				data-id="{{$dbpc->id}}">
				<i class="fa fa-pencil"></i> Edit</button>
				
			</td>
		</tr>
		@endforeach
		
	</tbody>
</table>


