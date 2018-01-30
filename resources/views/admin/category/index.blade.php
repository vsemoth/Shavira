@extends('admin.layout.admin')

@section('content')

	<div class="navbar">
		<a href="#" class="navbar-brand">Categories</a>
		<ul class="nav navbar-nav">
			@if(!empty($categories))
			@forelse($categories as $category)
			<li class="active">
				<a href="{{route('category.show',$category->id)}}">{{$category->name}}</a>
			</li>
			@empty
				No Data
				@endforelse
			@endif
		</ul>

	<!-- Button trigger modal -->
    <a type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
      Add Category
    </a>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">

        {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Category</h4>
          </div>
          <div class="modal-body">
            {{ Form::label('Name:', 'name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        {!! Form::close() !!}

      </div>
    </div>

	</div>

  @if(!empty($categories))
  <section>
      <h3>Products</h3>
      
      <table>
        
          <thead>
              <tr>
                  <th>Products</th>
              </tr>
          </thead>

          <tbody>
                  @forelse($products as $product)
                  <tr>
                    <td>{{$product->name}}</td>
                  </tr>
                  @empty
                  <tr><td>No Data</td></tr>
                  @endforelse
          </tbody>

      </table>

  </section>
  @endif

@endsection