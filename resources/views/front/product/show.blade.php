@extends('layout.main')

@section('title', 'Questionart | ' . $shirt->name)

@section('content')

<div style="margin-top:100px;margin-bottom:100px">
                    <div class="row">
                        <div class="large-12 columns">
<div class="col-md-6">
	<img style="height: 300px;width: 300px;" src="{{url('images', $shirt->image)}}">
</div>

<div style="margin-top:0px;margin-bottom:0px" class="col-md-6">
                    <h1 class="subheader">
                        {{$shirt['name']}}<h3>{{$shirt['description']}}</h3><br> 
                       <span class="price-tag">R {{$shirt['price']}} </span> 
                    </h1>
                            <label>
                                Select Size
                                <select>
                                    <option value="small">
                                        Small
                                    </option>
                                    <option value="medium">
                                        Medium
                                    </option>
                                    <option value="large">
                                        Large
                                    </option>
                                   
                                </select>
                            </label>
                            <a href="#" class="button  expanded">Add to Cart</a>
                        </div>
                    </div>
</div>                    
</div>
@endsection