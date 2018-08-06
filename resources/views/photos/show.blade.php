@extends('main')

@section('content')
<head>
  <link href="css/custom.css" rel="stylesheet" />
  <style type="text/css">
    img{
      max-width: 100%;
      height: auto;
    }
  </style>
</head>

<div class="row">
    <div class="col-md-8">
      
      <hr>
      
         <img src="{{ asset($photo->image) }}" />
         
     </hr>
     
    </div>

      <div class="col-md-4">
        <div class="well">
            
            <div class="row">
                <div class="col-md-6">
                    {!! Html::linkRoute('photos.edit','EDIT',array($photo->id),array('class'=>'btn btn-primary btn-block')) !!}
                    
                </div>
              <div class="col-md-6">
                {!! Form::open(['route'=>['photos.destroy',$photo->id],'method'=>'DELETE']) !!}
                
                {!! Form::submit('Delete',['class'=>'btn btn-danger btn-block']) !!}

                {!! Form::close() !!}
                
              </div>    


       </div>
     </div>
        
</div>

@endsection
