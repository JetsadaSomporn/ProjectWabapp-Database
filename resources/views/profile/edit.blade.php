<link href="http://127.0.0.1:8000/css/profile.css" rel="stylesheet">
<x-app-layout>
<div class="body-navigation">
        <div class="background">
            <div class="content">
                <div class="bg">
                <img class="edit rounded-full " src="http://127.0.0.1:8000/../images/Edit.png" alt="image edit" id="iconEdit">
                <svg class="gray-circle" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                <circle cx="15" cy="15" r="15" fill="#F2F2F2"/>
                </svg>
                    <img class="rounded-full "  src="http://127.0.0.1:8000/../images/ProfileIcon.jpg" alt="image profile" id="ProfileIcon">
                    <svg class="white-circle" xmlns="http://www.w3.org/2000/svg" width="123" height="123" viewBox="0 0 123 123" fill="none">
                    <circle cx="61.5" cy="61.5" r="61.5" fill="white"/>
                    </svg>
                </div>
                <!-- edit profile -->
                <div class="content-item">
                    @include('profile.partials.update-profile-information-form')
                </div>
                <!-- edit password -->
                <div class="content-item">
                    @include('profile.partials.update-password-form')
                </div>
                <!-- edit office -->
                <div class="content-item">
                    @include('profile.partials.update-office-information-form')
                </div>
                <!-- two factor -->
                <div class="content-item">
                    
                </div>
                <!-- Browser Sessions -->
                <div class="content-item">
                    
                </div>
                <!-- delete user -->
                <div class="content-item">
                    @include('profile.partials.delete-user-form') 
                </div>
            </div>
        </div>   
</div>        
</x-app-layout>
