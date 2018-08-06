@extends('main')

@section('content')


<div class="row">

  {!!Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT','files' => 'true'])!!}

  <div class="col-md-8">
      {{ form::text('title',null,["class"=>'form-control']) }}
       {{Form::file('image',null,array('class'=>'form-control'))}}
       {{ form::textarea('body',null,["class"=>'form-control']) }}
      


       
    </div>

      <div class="col-md-4">
        <div class="well">
          
          <div class="row">
            <div class="col-md-6">
              {!! Html::linkRoute('posts.show','cancel',array($post->id),array('class'=>'btn btn-primary btn-block')) !!}
              
            </div>
            <div class="col-md-6">
              {{Form::submit('save changes',['class'=>'btn btn-success btn-block'])}}
              
            </div>  


       </div>
     </div>
    {!!Form::close()!!} 
      
</div>




@endsection
