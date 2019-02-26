@extends('layouts.app');

@section('content')
    <form action="/trainers" method="post">
        @csrf
        <input type="text" name="name" class="form-control">
        <input type="submit" value="Send" class="btn btn-primary">
    </form>
@stop