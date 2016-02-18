@extends('layouts.default')
@section('title_page') Promotion @stop

@section('active_home') 
class='active'
@stop

@section('content')

<p><a href ="{{URL::to('sales/addpromotion')}}" class="btn btn-sm btn-success">Add Promotion</a></p>
<table class="table table-hover">
	<thead>
		<tr>
			<th>เลขที่ Promotion</th>
			<th>รายละเอียด</th>
			<!-- <th> </th> -->
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>xxxxxx</td>
			<td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
			<!--<td>
				<a href="{{URL::to('sales/promotioncust')}}" class="btn btn-sm btn-info"> Customer </a>
				<a href="{{URL::to('sales/promotionprod')}}" class="btn btn-sm btn-info"> Product </a>
				<a href="{{URL::to('sales/promotiondisc')}}" class="btn btn-sm btn-info"> Discount </a>
			</td> -->
			<td>
				<a href="#" class="btn btn-sm btn-primary"> Read </a>
				<a href="#" class="btn btn-sm btn-warning"> Update </a>
				<form method="POST" action ="#" style="display:inline-block">
					<input  name="_method" type="hidden"  value="DELETE">
					<input type ="hidden" name="_token"  value="{{csrf_token()}}">
					<button class="btn btn-sm btn-danger"> Delete </button>
				</form>
				
			</td>
		</tr>

		<tr>
			<td>xxx</td>
			<td>xxx</td>
			<!--<td>
				<a href="#" class="btn btn-sm btn-info"> Customer </a>
				<a href="#" class="btn btn-sm btn-info"> Product </a>
				<a href="#" class="btn btn-sm btn-info"> Discount </a>
			</td> -->
			<td>
				<a href="#" class="btn btn-sm btn-primary"> Read </a>
				<a href="#" class="btn btn-sm btn-warning"> Update </a>
				<form method="POST" action ="#" style="display:inline-block">
					<input  name="_method" type="hidden"  value="DELETE">
					<input type ="hidden" name="_token"  value="{{csrf_token()}}">
					<button class="btn btn-sm btn-danger"> Delete </button>
				</form>
			</td>
		</tr>

		<tr>
			<td>xxx</td>
			<td>xxx</td>
			<!--<td>
				<a href="#" class="btn btn-sm btn-info"> Customer </a>
				<a href="#" class="btn btn-sm btn-info"> Product </a>
				<a href="#" class="btn btn-sm btn-info"> Discount </a>
			</td> -->
			<td>
				<a href="#" class="btn btn-sm btn-primary"> Read </a>
				<a href="#" class="btn btn-sm btn-warning"> Update </a>
				<form method="POST" action ="#" style="display:inline-block">
					<input  name="_method" type="hidden"  value="DELETE">
					<input type ="hidden" name="_token"  value="{{csrf_token()}}">
					<button class="btn btn-sm btn-danger"> Delete </button>
				</form>
			</td>
		</tr>
	</tbody>

	
</table>

<div role="tabpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#customer" aria-controls="customer" role="tab" data-toggle="tab">Customer</a>
        </li>
        <li role="presentation">
            <a href="#product" aria-controls="product" role="tab" data-toggle="tab">Product</a>
        </li>
        <li role="presentation">
            <a href="#discount" aria-controls="discount" role="tab" data-toggle="tab">Discount</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="customer">
	<br>
	<p><a href ="{{URL::to('sales/addpromotioncust')}}" class="btn btn-sm btn-success">Add Customer</a></p>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>รหัสลูกค้า</th>
				<th>รายละเอียด</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>C0001</td>
				<td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>

				<td>
					
					
					<form method="POST" action ="#" style="display:inline-block">
						<input  name="_method" type="hidden"  value="DELETE">
						<input type ="hidden" name="_token"  value="{{csrf_token()}}">
						<button class="btn btn-sm btn-danger"> Delete </button>
					</form>
					
				</td>
			</tr>

			<tr>
				<td>C0002</td>
				<td>xxx</td>
				
				<td>
					
					
					<form method="POST" action ="#" style="display:inline-block">
						<input  name="_method" type="hidden"  value="DELETE">
						<input type ="hidden" name="_token"  value="{{csrf_token()}}">
						<button class="btn btn-sm btn-danger"> Delete </button>
					</form>
				</td>
			</tr>

			<tr>
				<td>C0003</td>
				<td>xxx</td>
				
				<td>
					
					
					<form method="POST" action ="#" style="display:inline-block">
						<input  name="_method" type="hidden"  value="DELETE">
						<input type ="hidden" name="_token"  value="{{csrf_token()}}">
						<button class="btn btn-sm btn-danger"> Delete </button>
					</form>
				</td>
			</tr>
		</tbody>
	</table>

        </div>


        <div role="tabpanel" class="tab-pane" id="product">
        	<br>
        	<p><a href ="{{URL::to('sales/addpromotioncust')}}" class="btn btn-sm btn-success">Add Product</a></p>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Brand</th>
				<th>Group</th>
				<th>Type</th>
				<th>Design</th>
				<th>Color</th>
				<th>Size</th>
				<th>Description</th>
				<th>Disc 1</th>
				<th>Disc 2</th>
				<th>Disc (Baht)</th>
				<th>Unit Price</th>
				<th>Sales Price</th>
				<th> </th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>C1</td>
				<td>xx</td>
				<td>xx</th>
				<td>xxxx</td>
				<td>xxxx</td>
				<td>xxxxxxxxx</td>
				<td>Description</td>
				<td>99</td>
				<td>99</td>
				<td>999999</td>
				<td>999999</td>
				<td>999999</td>
				<td>
					
					
					<form method="POST" action ="#" style="display:inline-block">
						<input  name="_method" type="hidden"  value="DELETE">
						<input type ="hidden" name="_token"  value="{{csrf_token()}}">
						<button class="btn btn-sm btn-danger"> Delete </button>
					</form>
					
				</td>
			</tr>

			<tr>
				<td>C0002</td>
				<td>xxx</td>
				<td>xx</th>
				<td>xxxx</td>
				<td>xxxx</td>
				<td>xxxxxxxxx</td>
				<td>Description</td>
				<td>99</td>
				<td>99</td>
				<td>999999</td>
				<td>999999</td>
				<td>999999</td>
				<td>
					
					
					<form method="POST" action ="#" style="display:inline-block">
						<input  name="_method" type="hidden"  value="DELETE">
						<input type ="hidden" name="_token"  value="{{csrf_token()}}">
						<button class="btn btn-sm btn-danger"> Delete </button>
					</form>
				</td>
			</tr>

			<tr>
				<td>C0003</td>
				<td>xxx</td>
				<td>xx</th>
				<td>xxxx</td>
				<td>xxxx</td>
				<td>xxxxxxxxx</td>
				<td>Description</td>
				<td>99</td>
				<td>99</td>
				<td>999999</td>
				<td>999999</td>
				<td>999999</td>
				<td>
					
					
					<form method="POST" action ="#" style="display:inline-block">
						<input  name="_method" type="hidden"  value="DELETE">
						<input type ="hidden" name="_token"  value="{{csrf_token()}}">
						<button class="btn btn-sm btn-danger"> Delete </button>
					</form>
				</td>
			</tr>
		</tbody>
	</table>


        </div>

        <div role="tabpanel" class="tab-pane" id="discount">
        	<br>
	<p><a href ="{{URL::to('sales/addpromotiondisc')}}" class="btn btn-sm btn-success">Add Discount</a></p>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Size</th>
				<th>Description</th>
				<th>Disc </th>
				<th> </th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>C1</td>
				<td>xx</td>
				<td>99999</td>
				<td>
					
					
					<form method="POST" action ="#" style="display:inline-block">
						<input  name="_method" type="hidden"  value="DELETE">
						<input type ="hidden" name="_token"  value="{{csrf_token()}}">
						<button class="btn btn-sm btn-danger"> Delete </button>
					</form>
					
				</td>
			</tr>

			<tr>
				<td>C0002</td>
				<td>xx</td>
				<td>99999</td>
				<td>
					
					
					<form method="POST" action ="#" style="display:inline-block">
						<input  name="_method" type="hidden"  value="DELETE">
						<input type ="hidden" name="_token"  value="{{csrf_token()}}">
						<button class="btn btn-sm btn-danger"> Delete </button>
					</form>
				</td>
			</tr>

			<tr>
				<td>C0003</td>
				<td>xx</td>
				<td>99999</td>
				<td>
					
					
					<form method="POST" action ="#" style="display:inline-block">
						<input  name="_method" type="hidden"  value="DELETE">
						<input type ="hidden" name="_token"  value="{{csrf_token()}}">
						<button class="btn btn-sm btn-danger"> Delete </button>
					</form>
				</td>
			</tr>
		</tbody>
	</table>
        </div>
    </div>
</div>
@stop
