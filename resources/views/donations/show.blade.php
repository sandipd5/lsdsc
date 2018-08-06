@extends('main')

@section('content')
<head>
  <link href="css/custom.css" rel="stylesheet" />
  <style>
    img{
      max-width: 100%;
      height: auto;
    }
  </style>
</head>

<div class="row">
    <div class="col-md-8">
      <h1>{{ $donation->name }}</h1>
       <h1>{{ $donation->amount }}</h1>
      
         <p>{{$donation->message}}</p>
         
       
          <img src="{{ asset($donation->image) }}" />
      
    </div>

      <div class="col-md-4">
        <div class="well">
            
            <div class="row">
                <div class="col-md-6">
                    {!! Html::linkRoute('donations.edit','EDIT',array($donation->id),array('class'=>'btn btn-primary btn-block')) !!}
                    
                </div>
              <div class="col-md-6">
                {!! Form::open(['route'=>['donations.destroy',$donation->id],'method'=>'DELETE']) !!}
                
                {!! Form::submit('Delete',['class'=>'btn btn-danger btn-block']) !!}

                {!! Form::close() !!}
                
              </div>    


       </div>
     </div>
        
</div>

@endsection
