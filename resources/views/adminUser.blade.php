@extends('layouts.adminpage')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 <link href="http://127.0.0.1:8000/css/adminpage.css" rel="stylesheet">
 <script>
    function confirmDelete(idUser) {
        if (confirm("Are you sure you want to delete this?")) {
            window.location.href = '/admin/delete?idUser=' + idUser;
        }else{
            event.preventDefault();
            alert("Delete canceled.");
        }
    }
</script>  
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
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            @if ($user->idUser == 4)
            <tr>
               <th></th>
                <th>{{ $user->name}}</th>
                <th>{{ $user->email}}</th>
                
                <td>
                    <button id="delete" type="button" class="btn btn-danger"">
                        <a href="{{ route('delete',$user->idUser)}}" onclick="confirmDelete('{{ $user->idUser }}')">Delete</a>
                    </button>
                </td>

            </tr>
            @endif

            @endforeach

            
        </tbody>
    </table>
    <table class="table">
        <h1>Poser</h1>
        <thead>
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            @if ($user->idUser == 4)
            <tr>
               <th></th>
                <th>{{ $user->name}}</th>
                <th>{{ $user->email}}</th>
                
                <td>
                    
                    <button id="delete" type="button" class="btn btn-danger"">
                        <a href="{{ route('delete',$user->idUser)}}" onclick="confirmDelete('{{ $user->idUser }}')">Delete</a>
                    </button>
                </td>

            </tr>
            @endif

            @endforeach

            
        </tbody>
    </table>
@endsection
