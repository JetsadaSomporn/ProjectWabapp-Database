@extends('layouts.adminpage')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

@section('content')
<div class="search-bar">
    <form action="{{ route('searchUser') }}" method="GET">
        <input type="text" name="search" placeholder="Search">
    </form>
</div>
    <table class="table">
        <h1>User</h1>
        <thead>
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col" colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            @if ($user->idUser == 1)
            <tr>
               <th></th>
                <th>{{ $user->name}}</th>
                <th>{{ $user->email}}</th>
                
                <td>
                    <button id="delete" type="button" class="btn btn-danger">Delete</button>
                </td>

                <td>
                <button id="edit" type="button" class="btn btn-warning">Edit</button>
                </td>
            </tr>
            @endif

            @endforeach
        </tbody>
    </table>
@endsection
