<head>
    <style>
        section {
            display: flex;   
        }
        header h2,p{
        margin: 10px 0px 0px 10px;
        }
        .block {
            display: inline;
            margin-left: 5px;
            margin-top: 0px;
        }
        .button {
            justify-content:end;
        }
    </style>
</head>
<section>
    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Profile Information') }}
        </h2>
        <p class="mt-1 text-sm text-white">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>
    <div class="block">

        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>
    
        <form method="post" action="{{ route('profile.update') }}" class=" space-y-6 ">
            @csrf
            @method('patch')
        
            <x-input-label for="name" class="text-white" :value="__('Name')"/>
            <x-text-input id="name" name="name" type="text" class=" block w-full" style="margin: 10px 5px 10px 5px;" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        
            <x-input-label for="email" class="text-white" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class=" block w-full" style="margin: 10px 5px 10px 5px;" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
    
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}
    
                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>
    
                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
    
            <div class="button flex items-center gap-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
    
                @if (session('status') === 'profile-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="button  text-sm text-red"
                    >{{ __('Saved.') }}</p>
                @endif
            </div>

        </form>
    </div>
</section>
