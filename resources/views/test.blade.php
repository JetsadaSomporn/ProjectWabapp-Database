<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Font+Name&display=swap">
</head>
<body>
    <div class="container">
        @php
            $users = [
                0 => [],
                1 => [],
                2 => [],
            ];
        @endphp

        @foreach($students as $student)
            @php
                $userType = $student->type;
                $users[$userType][] = $student;
            @endphp
        @endforeach

        @foreach([0, 1, 2] as $userType)
            @if (!empty($users[$userType]))
                <h2>
                    @if ($userType == 0)
                        User
                    @elseif ($userType == 1)
                        Poser
                    @elseif ($userType == 2)
                        Admin
                    @endif
                </h2>

                <table class="table table-hover">
                    <thead>
                        <th>idUser</th>
                        <th>name</th>
                        <th>email</th>
                        <th>email_verified_at</th>
                        <th>image</th>
                        <th>phonenumber</th>
                        <th>type</th>
                        <th>password</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </thead>
                    <tbody>
                        @foreach($users[$userType] as $student)
                            <tr>
                                <td>{{$student->idUser}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->email_verified_at}}</td>
                                <td>{{$student->image}}</td>
                                <td>{{$student->phonenumber}}</td>
                                <td>{{$student->type}}</td>
                                <td>{{$student->password}}</td>
                                <td><a class="btn btn-danger btn-sm">Delete</a></td>
                                <td><a class="btn btn-warning btn-sm" href="/submit">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        @endforeach
    </div>
</body>
</html>
