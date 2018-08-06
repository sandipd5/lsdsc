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
      <h1>{{ $post->title }}</h1>
      <hr>
         <p>{{$post->body}}</p>
       </hr>  
       </br>
         @if($post->image)
          <img src="{{ asset($post->image) }}" />
        @endif
    </div>

      <div class="col-md-4">
        <div class="well">
            
            <div class="row">
                <div class="col-md-6">
                    {!! Html::linkRoute('posts.edit','EDIT',array($post->id),array('class'=>'btn btn-primary btn-block')) !!}
                    
                </div>
              <div class="col-md-6">
                {!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE']) !!}
                
                {!! Form::submit('Delete',['class'=>'btn btn-danger btn-block']) !!}

                {!! Form::close() !!}
                
              </div>    


       </div>
     </div>
        
</div>

@endsection
