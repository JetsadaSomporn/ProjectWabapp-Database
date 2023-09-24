<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('../css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <style>
        body {
            background-color: #e5f0ff;
        }
        .block{
            display: flex;
            gap: 20px;
        }
        .menu {
            background-color: #fff; 
            color: #4869D9; 
            width: 250px;
            height: 300px; 
            padding: 20px;
            border-radius: 10px;
            margin-left: 50px;
            margin-top: 20px;
        }
        .menu ul {
            list-style-type: none;
            padding: 0;
        }
        .menu ul li {
            margin-bottom: 10px;
        }
        
        .menu ul li a {
            
            text-decoration: none;
            color: #4869D9; 
            font-weight: bold;
            display: block; 
            padding: 5px;
            transition: background-color 0.3s, color 0.3s; 
            border-radius: 10px;
        }
        .menu ul li a:hover {
            background-color: #4869D9; 
            color: #fff; 
        }

       
        .menu ul li a:not(.active) {
            color: #4869D9; 
        }
        .menu ul li a .material-symbols-outlined {
    margin-right: 10px; /* ระยะห่างระหว่างไอคอนและข้อความ */
}
 
        .content {
            display: inline;
            width: 1000px;
            padding: 20px;
            margin-top: 20px;
            border: 1px solid #fff;
            border-radius: 10px;
            background-color: #fff;
        }

    </style>
</head>
<body>
    <div class="min-h-screen ">
        <header class="bg-white">
            <nav class="flex px-10 py-2 border-b-2">
                <div class="w-full flex flex-wrap items-center justify-between">
                    <a href="" class="flex-none">
                        <img class="logo" src="{{ url('../images/logo.png') }}" alt="5" width="150">
                    </a>
                    <div class="http://127.0.0.1:8000/admin">
                        <x-adminnav />
                    </div>
                </div>
            </nav>
        </header>
        <div class="block">
            <div class="menu">

                <!-- เมนูฝั่งซ้าย -->
                <ul>
                    <li>
                        <a href="http://127.0.0.1:8000/admin" class="active" id="dashboard";>
                            <span class="material-symbols-outlined">speed</span>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1:8000/admin/user" class="active" id="user">
                            <span class="material-symbols-outlined">person</span>
                            <p>Users</p>

                        </a>
                    </li>
                    <li><a href="http://127.0.0.1:8000/admin/post" class="active" id="post">
                            <span class="material-symbols-outlined">list_alt</span>
                            <p>Post</p>
                        </a>
                    </li>
                    <li><a href="http://127.0.0.1:8000/admin/category" class="active" id="category">
                            <span class="material-symbols-outlined">sell</span>
                            <p>Category</p>

                        </a>
                    </li>
                </ul>
            </div>

            <div class="menu" style="width:55%
            ">

                @yield('content')
            </div>


        </div>
    </div>


</body>

</html>

    <div class="block">
    <div class="menu">
        <!-- เมนูฝั่งซ้าย -->
        <ul>
            <li>
                <a href="#" class="active">
                    <span class="material-symbols-outlined">speed</span>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="active">
                    <span class="material-symbols-outlined">person</span>
                    Users
                </a>
            </li>
            <li><a href="#" class="active">
                <span class="material-symbols-outlined">list_alt</span>
                Post
                </a>
            </li>
            <li><a href="#" class="active">
                <span class="material-symbols-outlined">sell</span>
                Category
                </a>
            </li>
        </ul>
    </div>
   
    <div class="content">
        Wellcome To Hell
        @yield('content')
    </div>


        </div>
    </div>


</body>

</html>
