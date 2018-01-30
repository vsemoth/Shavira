@extends('layout.main')

@section('title','| Q Art Product View')

@section('content')

     <!-- products listing -->
        <!-- Latest SHirts -->
    <div class="col-md-12 col-md-offset-(-2)">
        <div class="row">
            <div class="small-5 small-offset-1 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="#">
                             <img src="http://i.imgur.com/Mcw06Yt.png"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="small-6 columns">
                <div class="item-wrapper">
                    <h3 class="subheader">
                       <span class="price-tag">R {{$shirt['price']}} </span> {{$shirt['description']}}
                    </h3>
                    <div class="row">
                        <div class="large-12 columns">
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
        </div>
    </div>
<p class="text-left subheader"><small>* Designed by <a href="https://www.youtube.com/webdevmatics">L.N. Rozani</a></small></p>

@stop