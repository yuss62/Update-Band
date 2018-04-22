@extends('layouts.app')

@section('title','Edit Band')

@section('page-title','Edit Band')

@section('dashboard-content')

<form action="{{URL('band/'.$bands->id)}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH')}}
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{$bands->name}}">
    </div>
    <div class="form-group">
        <label for="vocalist">Vocalist</label>
        <input type="text" name="vocalist" class="form-control" id="vocalist" value="{{$bands->vocalist}}">
    </div>
    <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" name="genre" class="form-control" id="genre" value="{{$bands->genre}}">
    </div>
    <div class="form-group">
        <label for="since">Since</label>
        <input type="year" name="since" class="form-control" id="since" value="{{$bands->since}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
@endsection