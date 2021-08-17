<div style="background-color :red !import">
    <x-guest-layout>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <style>
                .button_login {
                    letter-spacing: 3px;
                    width: 320px;
                    height: 45px;
                    border: none;
                    border-radius: 50px;
                    outline: none;
                    color: #1a1423;
                    cursor: pointer;
                    position: relative;
                    z-index: 0;
                    background-color: #efe6dd;
                    font-size: 10px;

                }

                .button_login:before {
                    content: '';
                    background-color: #efe6dd;
                    background: linear-gradient(45deg, #C71F37, #BD1F36, #B21E35, #A71E34, #85182A, #6E1423, #641220, #780000);
                    position: absolute;
                    top: -2px;
                    left: -2px;
                    background-size: 400%;
                    z-index: -1;
                    filter: blur(5px);
                    width: calc(100% + 4px);
                    height: calc(100% + 4px);
                    animation: glowing 20s linear infinite;
                    opacity: 0;
                    transition: opacity .3s ease-in-out;
                    border-radius: 10px;
                }

                .button_login:active {
                    color: #450920
                }

                .button_login:active:after {
                    background-color: #efe6dd;
                }

                .button_login:hover:before {
                    opacity: 1;
                }

                .button_login:after {
                    z-index: -1;
                    content: '';
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    background-color: #efe6dd;
                    left: 0;
                    top: 0;
                    border-radius: 10px;
                }

                @keyframes glowing {
                    0% {
                        background-position: 0 0;
                    }

                    50% {
                        background-position: 400% 0;
                    }

                    100% {
                        background-position: 0 0;
                    }
                }

                .btn_login {
                    font-family: 'Minecraft', sans-serif;
                }

                @font-face {
                    font-family: "Minecraft";
                    src: url("fonts/Minecraft.ttf");
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
                    <div>
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                            required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />
                    </div>
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
                            <div class="btn_login">
                                <b><button class="button_login">LOGIN</button></b>
                            </div>
                            </span>
                        </div>

                        <!-- <x-button class="ml-3">
                        {{ __('Log in') }}
                    </x-button>-->
                    </div>

                </form>

            </x-auth-card>
    </x-guest-layout>
</div>
</body>



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
