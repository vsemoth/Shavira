@extends('layout.app')

@section('content')

	<h3>Cart Items</h3>

	<div class="row">
		<div class="container">
			<div class="col-md-12">

				<table class="table table-bordered">
					<thead>
						<th>Name:</th>
						<th>Size:</th>
						<th>Quantity:</th>
						<th>Price:</th>
					</thead>

					<tbody>
					@foreach($cartitems as $cartitem)
						<tr>
							<td>{{$cartitem->name}}</td>
							<td>{{$cartitem->options->has('size')?$cartitem->options->size:''}}</td>

							<td width="30px">
									{!! Form::open(['route' => ['cart.update', $cartitem->rowId], 'method' => 'PUT']) !!}

				                    <input type="text" name="qty" value="{{$cartitem->qty}}">

				                    {{ Form::submit('OK', ['class' => 'btn btn-sm btn-default', 'style' => 'float: right; padding: 0;']) }}

				                    {!! Form::close() !!}
							</td>

							<td>R {{$cartitem->price}}</td>
						</tr>
					@endforeach
						<tr>
							<td></td>
							<td></td>
							<td>Total Items: {{ Cart::count() }}</td>
							<td>Grand Total: R {{ Cart::total() }}</td>
						</tr>
					</tbody>
				</table>
				<a href="#" class="btn btn-success pull-right">CHECKOUT</a>
				
			</div>
		</div>
	</div>
@endsection