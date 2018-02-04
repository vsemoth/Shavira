@extends('admin.layout.admin')
@section('content')
    <h2>Products:</h2>
    <hr>
	<ul>
		@forelse($products as $product)
		<li style="list-style: none;">
			<img style="height: 50px;" src="{{url('images',$product->image)}}"/>
			<h4>Name of Product: {{$product->name}}</h4>
			<h4>Product Price: R {{$product->price}}</h4>
		</li>
		<hr>
		@empty
			<h3>No Product found</h3>
		@endforelse
	</ul>
@endsection