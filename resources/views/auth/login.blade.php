<x-guest-layout>
    <x-jet-authentication-card style="z-index: 1; position: relative;" class="p-0 p-lg-0">
        <div style="z-index: 1; position: relative;" class="p-0 p-lg-0">
            <x-slot name="logo" class="d-none">
                <x-jet-authentication-card-logo />
            </x-slot>

            
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}" style="z-index: 1; position: relative;" class="p-5 rounded frm-login">
            <x-jet-validation-errors class="mb-4" />

            
                @csrf

                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" class="text-white-50"/>
                    <x-jet-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" class="text-white-50"/>
                    <x-jet-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600 text-white-50">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="mt-4">
                    <div class="row">
                        <div class="col-lg-6">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 text-white-50" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        </div>
                        <div class="col-lg-6">
                        <x-jet-button class="btn btn-primary btn-custom border-0 w-100 w-lg-auto float-lg-end mt-lg-0 mt-3">
                            {{ __('Log in') }}
                        </x-jet-button>
                        <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="block mt-4">
                <a href="{{route('register')}}" class="text-white-50">New user? Registration Now.</a>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>