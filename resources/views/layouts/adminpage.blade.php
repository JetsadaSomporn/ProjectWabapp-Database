<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPage</title>
  
    <link href="http://127.0.0.1:8000/css/adminpage.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
<div class="block">
    <div class="menu">
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

</body>
</html>
</x-app-layout>