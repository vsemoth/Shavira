@extends('layout.main')

@section('title','| Shavira&rsquo;s Online Store')

@section('content')

    <section class="hero text-center" id="full-height">
            <br/>
            <br/>
            <br/>
            <br/>
            <h2 >
                <strong style="text-shadow: 1px 1px 3px #000;">
                    Hey! Welcome to Shavira&rsquo;s Online Store
                </strong>
            </h2>
            <br>
            <a href="{{url('/shirts')}}"><button style='margin-top:70px;' class="button large">Check Out My Products</button></a>
    </section>
        <br/>
        <div class="subheader text-center">
             <h2>
            Shavira&rsquo;s Latest Products
        </h2>
        </div>
       
        <!-- Latest SHirts -->
        
        <div class="row">
            @forelse(($shirts->chunk(4)) as $chunk)
                @foreach($chunk as $shirt)
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
                @endforeach
                @empty
                <h4>No Products</h4>
            @endforelse
        </div>

@stop