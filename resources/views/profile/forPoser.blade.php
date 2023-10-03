
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="http://127.0.0.1:8000/css/profile.css" rel="stylesheet">
    <script>
    @if(session('success'))
        alert("{{ session('success') }}");
    @endif

    @if(session('error'))
        alert("{{ session('error') }}");
    @endif
</script>

</head>
<body>
<div class="body-navigation">
        <div class="background">
            <div class="content">
            <div class="bg">
                <form action="{{ route('profile.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="file" name="profile_image">
                    <button type="submit">Upload</button>
                </form>
<!-- รูปภาพ -->
        <div class="profile-image-container">
        <img class="rounded-full" src="http://127.0.0.1:8000/../images/ProfileIcon.jpg" alt="Profile Image" id="ProfileIcon">
        <!-- <svg class="white-circle" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 123 123" fill="none">
            <circle cx="61.5" cy="61.5" r="61.5" fill="white"/>
        </svg> -->
        </div>
        
    </div>


    <div class="pt">

    <!-- edit profile -->
    <div class="content-item">
        <div class="title">
            <h1>Profile  information</h1><br>
            Update your account's profile information and email address.
        </div>
        <div class="form">
            <form action="/profile/update1" method="POST">
            @csrf
                <span class="title-item">Name</span><br>
                <input type="text" name="name" value="{{Auth::user()->name;}}" required><br>
                <span class="title-item">Email</span><br>
                <input type="email" name="email" value="{{ Auth::user()->email}}" required>
                <p><button class="cf" type="submit">save</button></p>
            </form>
        </div>
    </div>


    <!-- edit password -->
    <div class="content-item">
        <div class="title">
        <h1>Update Password</h1><br>
        Ensure your account is using a long, random password to stay secure.
        </div>
        <form action="/profiles/passwordupdate" method="POST">
        @csrf
            <span class="title-item">Current Password</span>
            <br><input type="hidden" value='{{$old_password}}'>
            <input type="password" name="current_password" required placeholder="Current password">
            <br><span class="title-item">New Password</span>
            <br><input type="password" name="new_password" required placeholder="New password">
            <br><span class="title-item">Confirm Password</span>
            <br><input type="password" name="new_password_confirmation" required placeholder="Confirm password">
            <p><button class="cf" type="submit">save</button></p>
            </form>
        
            @if(isset($success))
            <div class="alert alert-success">
                {{ $success }}
            </div>
            @ifelse(isset($error))
            <div class="alert alert-success">
                {{ $error }}
            </div>
            @endif
    </div>

    <!-- edit office -->
    <div class="content-item">
        
    </div>

    <!-- Logout -->
    <div class="content-item">
    <form action="/profile/logout" method="GET">
        @csrf
        <button type="submit">Logout</button>
    </form>
</div>

            </div>
        </div>   
    </div>
</div>        
</body>
</html>