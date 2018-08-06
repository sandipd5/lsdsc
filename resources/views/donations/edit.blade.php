@extends('main')

@section('content')


<div class="row">

  {!!Form::model($donation,['route'=>['donations.update',$donation->id],'method'=>'PUT','files' => 'true'])!!}

  <div class="col-md-8">
      {{ form::text('name',null,["class"=>'form-control']) }}
      {{ form::text('amount',null,["class"=>'form-control']) }}
      {{ form::textarea('message',null,["class"=>'form-control']) }}
      {{Form::file('image',null,array('class'=>'form-control'))}}
     


       
    </div>

      <div class="col-md-4">
        <div class="well">
          
          <div class="row">
            <div class="col-md-6">
              {!! Html::linkRoute('donations.show','cancel',array($donation->id),array('class'=>'btn btn-primary btn-block')) !!}
              
            </div>
            <div class="col-md-6">
              {{Form::submit('save changes',['class'=>'btn btn-success btn-block'])}}
              
            </div>  


       </div>
     </div>
    {!!Form::close()!!} 
      
</div>




@endsection
