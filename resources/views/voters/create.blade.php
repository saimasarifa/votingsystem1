
@extends('app')
@section('content')
    <h2><center>voter entry</center></h2>
    {!! Form::model(new App\Voter, ['route' => ['voters.store']]) !!}
    @include('voters/partials/_form', ['submit_text' => 'Create Voters'])
    {!! Form::close() !!}
@endsection