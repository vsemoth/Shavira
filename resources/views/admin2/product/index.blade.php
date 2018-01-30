@extends('admin.layout.admin')
@section('content')
    <h3>Products</h3>
	<ul>
		@forelse($products as $product)
		<li>
			<h4>Name of Product: {{$product->name}}</h4>
		</li>
		@empty
			<h3>No Product found</h3>
		@endforelse
	</ul>
@endsection