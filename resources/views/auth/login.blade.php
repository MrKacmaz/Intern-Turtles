<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" />-->
            </a>
        </x-slot>

        <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
            </script>

            <link rel="stylesheet" href="{{ asset('/css/registerBlade.css') }}">
            <link rel="stylesheet" href="{{ asset('/css/fonts/font.css') }}">

            <style>
                video {
                    position: fixed;
                    right: 0;
                    bottom: 0;
                    z-index: 1;
                    background-size: cover;
                }

            </style>
        </head>

        <body style="margin-top: 0px;">

            <video autoplay muted loop id="myVideo" style="position:relative; height: 600px; width:640">
                <source src="{{ asset('/img/tBeAfu7.mp4') }}" type="video/mp4">
            </video>

            <div style="text-align-last:center; position:relative; bottom:400px; z-index:2">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}" class="was-validated">

                    @csrf
                    <div style="margin-left:35%;">
                        <!-- Email Address -->
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="email"
                                required>
                            <label for="email">Email</label>
                        </div>


                        <!-- Password -->
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="password" required>
                            <label for="password">Password</label>
                        </div>
                    </div>

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
                        <button class="button_register">
                            <p class="Log in">Log in</p>
                        </button>
                        <button style="bottom:0px; text-align-last:center; top:88px; right:320px;"
                            class="button_register">
                            <a href="{{ route('register') }}" style="text-decoration: none">Register</a>
                        </button><br>
                    </div>

                </form>
            </div>
        </body>
    </x-auth-card>
</x-guest-layout>
