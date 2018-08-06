@extends('main')

@section('content')
<head>
    <style type="text/css">
       img{
            height: 250px;
            width: 250px;
        }
         div h1{
            color:  #E9967A;
        }
    </style>
</head>

<div class="row">
	<div class="col-md-10">
		<h1>All Works/News</h1>
	</div>
	<div class="col-md-2">
		<a href="{{route('posts.create')}}" class="btn btn-lg btn-block btn-primary">create new post
		</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>S.N.</th>
				<th>Title</th>
				<th>Picture</th>
				<th>Description</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach ($posts as $post)
				<tr>
					<th>{{ $post->id }}</th>
					<h1><td>{{ $post->title }}</td></h1>
					<td>
						@if($post->image)
							<img src="{{ asset($post->image) }}" />
						@endif
					</td> 
                   
					<td>{{ substr($post->body,0,50) }}</td>
					<td><a href="{{ route('posts.show',$post->id) }}" class="btn btn-success">view</a><a href="{{ route('posts.edit',$post->id) }}" class="btn btn-danger">edit</a></td>
				</tr>

				@endforeach
			</tbody>
		</table>
		<div class="text-center">
			{!! $posts->links(); !!}
		</div>
	</div>
</div>


@endsection
