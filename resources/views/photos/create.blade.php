
@extends('main')

@section('content')


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
         <h1>Add new photo</h1>
          <hr>
            {!!Form::open(array('route' => 'photos.store','files' => 'true','enctype'=>'multipart/form-data')) !!}
            {{Form::label('image','upload image:')}}
            {{Form::file('image',array('class'=>'form-control'))}}
        
            {{form::submit('Add photo',array('class'=>'btn btn-success btn-lg btn-block'))}}
             
           {!! Form::close() !!}
          </hr> 
       </div>
    </div>   



@endsection
