@extends('layouts.home')

  @section('tittle','It is index Page')

@section('sidebar')
    @parent
    <p> Master page sidebar</p>
@endsection

@section('content')
<p>body content</p>
@endsection
