@extends('layouts.app')

@section('content')

@foreach($posts as $p)
<div class="card mb-4" style="width: 100%;padding: 0px !important;">
  <img src="{{asset('/media/'.$p->photo)}}" class="card-img-top" alt="{{$p->caption}}">
  <div class="card-body">
    <span class="d-block"><strong>{{$p->user->name}}</strong> <span style="float: right">{{$p->created_at}}</span></span>
    <p class="card-text">{{$p->caption}}</p>
  </div>
</div>
@endforeach

    
@endsection