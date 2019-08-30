@extends('master')

@section('pageTitle', 'Locations')

@section('content')
  <h2>Locations</h2>

  @foreach ($locations as $location)
    <a href="/location/{{urlencode($location->getSlug())}}">{{$location->getName()}}</a>
    <br />
  @endforeach
@stop