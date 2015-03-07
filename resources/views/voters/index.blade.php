@extends('app')
@section('content')
    <h2>Voter List</h2>
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>Voter Id</td>
            <td>voter Name</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        @foreach($voters as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->voter_name }}</td>
                <!-- we will also add show, edit, and delete buttons -->
                <td>
                    <a class="btn btn-small btn-info" href="{{ URL::to('voters/' . $value->id . '/edit') }}">Edit this voter</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <p>
        {!! link_to_route('voters.create', 'Create voter') !!}
    </p>
@endsection
