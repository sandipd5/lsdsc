@extends('main')

@section('content')


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
         <h1>Create new post</h1>
          <hr>
            {!!Form::open(array('route' => 'posts.store','files' => 'true')) !!}
            {{form::label('title','Title:')}}
            {{form::text('title',null,array('class'=>'form-control')) }}
            
            {{Form::label('image','upload image:')}}
            {{Form::file('image',null,array('class'=>'form-control'))}}
            {{form::label('body','post body:')}}
            {{form::textarea('body',null,array('class'=>'form-control'))}}
            {{form::submit('create post',array('class'=>'btn btn-success btn-lg btn-block'))}}
             
           {!! Form::close() !!}
          </hr>  
       </div>
    </div>   



@endsection
