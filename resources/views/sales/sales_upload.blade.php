{!! Form::open(array('url' => 'salesupload/' . Request::segment(2) , 'role' => 'form', 'method' => 'POST', 'class' => 'solsoForm' ,  'enctype'=>'multipart/form-data')) !!} 
<div class="container">
	
		
			<h2>Choos PO File</h2>
			
			<div class="col-sm-3">
			<div class="form-group">
				
				<label>Choose file</label>	
				
				<input type="file" class="form-control" name="pofile" id="pofile">
				
			</div>


			<input type="hidden" name="_token" value="{{csrf_token()}}">		
			<input type="submit" name="submit" class="btn btn-primary" value="Upload">
			</div>
		
	
</div>
{!! Form::close()!!}
