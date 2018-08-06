@extends('main')

@section('content')


<div class="row">

  {!!Form::model($photo,['route'=>['photos.update',$photo->id],'method'=>'PUT','files' => 'true'])!!}

  <div class="col-md-8">
     
       {{Form::file('image',null,array('class'=>'form-control'))}}
     
      


       
    </div>

      <div class="col-md-4">
        <div class="well">
          
          <div class="row">
            <div class="col-md-6">
              {!! Html::linkRoute('photos.show','cancel',array($photo->id),array('class'=>'btn btn-primary btn-block')) !!}
              
            </div>
            <div class="col-md-6">
              {{Form::submit('save changes',['class'=>'btn btn-success btn-block'])}}
              
            </div>  


       </div>
     </div>
    {!!Form::close()!!} 
      
</div>




@endsection
