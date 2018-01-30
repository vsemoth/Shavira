@extends('layout.main')

@section('title','| Question Art Products')

@section('content')

	 <!-- products listing -->
         <!-- Latest SHirts -->
        <div class="row">
            @forelse($shirts as $shirt)
                <div class="small-3 columns">
                    <div class="item-wrapper">
                        <div class="img-wrapper">
                            <a href="{{route('cart.edit',$shirt->id)}}" class="button expanded add-to-cart">
                                Add to Cart
                            </a>
                            <a href="{{route('product.show', $shirt->id)}}">
                                <img src="{{url('images',$shirt->image)}}"/>
                            </a>
                        </div>
                        <a href="{{route('product.show', $shirt->id)}}">
                            <h3>
                                {{$shirt->name}}
                            </h3>
                        </a>
                        <h5>
                            R {{$shirt->price}}
                        </h5>
                        <p>
                            {{$shirt->description}}
                        </p>
                    </div>
                </div>
                @empty
                <h4>No Products</h4>
            @endforelse
        </div>

@stop