@extends('layouts.base')
@section('content')
    <h1>contact page</h1>
    {{$d=strtotime("10:30pm April 15 2014")}}
    echo "Created date is " . {{date("Y-m-d h:i:sa", $d)}}
    <!-- echo "Today is on {{date('d/m/y')}}"

    <h6>&copy 2010-{{date('Y')}} </h6> -->
@endsection