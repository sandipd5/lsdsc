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
        <h1>Donors Information</h1>
    </div>
    <div class="col-md-2">
        <a href="{{route('donations.create')}}" class="btn btn-lg btn-block btn-primary">Add new Donor
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <th>S.N.</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Message</th>
                <th>Picture</th>
                <th>action</th>
            </thead>
            <tbody>
                @foreach ($donations as $donation)
                <tr>
                    <th>{{ $donation->id }}</th>
                    <td>{{ $donation->name }}</td>
                    <td>Rs.{{ $donation->amount }}</td>
                    <td>{{ substr($donation->message,0,50) }}</td>

                    <td>
                         @if($donation->image)
                           <img src="{{ asset($donation->image) }}" />
                         @endif
                    </td> 
                    <td><a href="{{ route('donations.show',$donation->id) }}" class="btn btn-success">view</a><a href="{{ route('donations.edit',$donation->id) }}" class="btn btn-danger">edit</a></td>
                </tr>

                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            {!! $donations->links(); !!}
        </div>
    </div>
</div>


@endsection
