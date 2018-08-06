@extends('main')

@section('content')


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
         <h1>Post new Donor</h1>
          <hr>
            {!!Form::open(array('route' => 'donations.store','files' => 'true','enctype'=>'multipart/form-data')) !!}
            {{form::label('name','Name:')}}
            {{form::text('name',null,array('class'=>'form-control'))}}
            {{form::label('amount','Amount:')}}
            {{form::text('amount',null,array('class'=>'form-control'))}}
            {{form::label('message','Add message:')}}
            {{form::textarea('message',null,array('class'=>'form-control'))}}
            {{Form::label('image','upload image:')}}
            {{Form::file('image',null,array('class'=>'form-control'))}}
            {{form::submit('Add donor',array('class'=>'btn btn-success btn-lg btn-block'))}}
             
           {!! Form::close() !!}
          </hr>  
       </div>
    </div>   



@endsection
