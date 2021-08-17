    <x-guest-layout>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link rel="stylesheet" href="{{ asset('/css/registerBlade.css') }}">
            <link rel="stylesheet" href="{{ asset('/css/fonts/font.css') }}">
            <style>
                input[type=password] {
                    width: 130px;
                    box-sizing: border-box;
                    border: 2px solid #ccc;
                    border-radius: 4px;
                    font-size: 25px;
                    background-color: lightgreen;
                    opacity: 0.6;
                    background-position: 10px 10px;
                    background-repeat: no-repeat;
                    padding: 12px 20px 12px 40px;
                    transition: width 0.4s ease-in-out;

                }

                input[type=password]:focus {
                    width: 100%;
                }

                input[type=email] {
                    width: 130px;
                    box-sizing: border-box;
                    border: 2px solid #ccc;
                    border-radius: 4px;
                    font-size: 25px;
                    background-color: lightgreen;
                    opacity: 0.6;
                    background-position: 10px 10px;
                    background-repeat: no-repeat;
                    padding: 12px 20px 12px 40px;
                    transition: width 0.4s ease-in-out;

                }

                input[type=email]:focus {
                    width: 100%;
                }

            </style>
        </head>

        <body>


            <x-auth-card>

                <x-slot name="logo">

                </x-slot>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" style="" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                        <label for="email"></label>
                    </div>
                    {{-- <div>
                        <x-label for="email" :value="__('Email')" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                            required autofocus />

                       
                    </div> --}}

                    <!-- Password -->
                    <!-- Password -->
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="password"
                            required>
                        {{-- <label for="password">Password</label> --}}
                    </div>
                    {{-- <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />
                    </div> --}}
                    <div>
                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif --}}
                            {{-- <div class="btn_login">
                                <b><button class="button_login">LOGIN</button></b>
                            </div> --}}
                            </span>
                        </div>

                        <button class="button_register">
                            <p class="Log in">Log in</p>
                        </button>
                    </div>

                </form>

            </x-auth-card>
    </x-guest-layout>



    {{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
