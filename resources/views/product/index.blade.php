@extends ('layout.layout')

@section('content')

<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		@if($product_succ = Session::get('success'))
		<div class="alert alert-success">
			<strong>{{ $product_succ }}</strong>
		</div>
		@endif
		<h2>Crud form</h2>
		{!! Form::open(array('route' => 'store', 'class' => 'form' ,'id' =>'createroomsform','files' => true)) !!}
		  <div class="form-group">
		    <label for="email">Product Name:</label>
		    <input type="text" class="form-control" id="email" placeholder="Product Name" name="pname">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Producrt Details:</label>
		    <textarea name="pdetails" class="form-control" id="" cols="30" rows="5" placeholder="Product Details"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		{!! Form::close() !!}
	</div>
</div>

@endsection