<head>
    <style>
        section {
            display: flex;   
        }
        header h2,p{
            margin: 10px 0px 0px 10px;
        }
        h2{
            font-size:;
        }
        p{
            font-size:small;
        }
        .block {
            display: inline;
            margin-left: 5px;
            margin-top: 0px;
        }
        .button {
            justify-content:end;
        }
        .title{
            color:white;
        }
        .discription{
            color:white;
        }
    </style>
</head>
<section>
    <header>
        <h2 class="title">
            {{ __('Update Password') }}
        </h2>
        <p class="discription">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>
    <div class="block">
        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')
    
            <div>
                <x-input-label for="current_password" class="text-white" :value="__('Current Password')" />
                <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>
    
            <div>
                <x-input-label for="password" class="text-white" :value="__('New Password')" />
                <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>
    
            <div>
                <x-input-label for="password_confirmation" class="text-white" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>
    
            <div class="button flex items-center gap-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
    
                @if (session('status') === 'password-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400"
                    >{{ __('Saved.') }}</p>
                @endif
            </div>
        </form>
    </div>
</section>
