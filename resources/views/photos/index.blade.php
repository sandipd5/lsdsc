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
    <h1>Gallery Info</h1>
  </div>
    <div class="col-md-2">
        <a href="{{route('photos.create')}}" class="btn btn-lg btn-block btn-primary">add new photo
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <th>S.N.</th>
                <th>Photo</th>
                <th>action</th>
            </thead>
            <tbody>
                @foreach ($photos as $photo)
                <tr>
                    <td>{{ $photo->id }}</td>
                     
                        <div><td><img src="{{ asset($photo->image) }}" /></td></div> 
                     
                
                    <td><a href="{{ route('photos.show',$photo->id) }}" class="btn btn-success">view</a><a href="{{ route('photos.edit',$photo->id) }}" class="btn btn-danger">edit</a></td>
                </tr>

                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            {!! $photos->links(); !!}
        </div>
    </div>
</div>


@endsection
