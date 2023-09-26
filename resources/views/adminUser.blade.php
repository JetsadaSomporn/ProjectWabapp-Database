@extends('layouts.adminpage')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<link href="http://127.0.0.1:8000/css/adminpage.css" rel="stylesheet">

@section('content')

<div class="search-bar">
    <form action="{{ route('searchUser') }}" method="GET">
        <input type="text" name="search" placeholder="Search">
    </form>
</div>

<h1>User</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        @if ($user->type == 0) <!-- Filter for users -->
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->image }}</td>
            <td>
                <button id="delete" type="button" class="btn btn-danger">
                    <a href="{{ route('delete', $user->idUser) }}" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                </button>
            </td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>

<h1>Poser</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        @if ($user->type == 1) <!-- Filter for posers -->
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->image }}</td>
            <td>
                <button id="delete" type="button" class="btn btn-danger">
                    <a href="{{ route('delete', $user->idUser) }}" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                </button> 
            </td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>

@endsection
