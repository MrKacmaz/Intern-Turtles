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

        <body>


            <video autoplay muted loop id="myVideo" style="position:relative; height: 600px; width:640">
                <source src="{{ asset('/img/tBeAfu7.mp4') }}" type="video/mp4">
            </video>
            <div style="text-align-last:center; position:relative; bottom:550px; z-index:2">
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('register') }}" class="was-validated">
                    @csrf
                    <div style="margin-left:25%;">
                        <!-- Name -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="name" required
                                autofocus>
                            <label for="name">Name</label>
                        </div>

                        <!-- Surname -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="surname" name="surname" placeholder="surname"
                                required>
                            <label for="surname">Surname</label>
                        </div>

                        <!-- Nickname -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nickName" name="nickName" placeholder="nickName"
                                required>
                            <label for="nickName">Nick Name</label>
                        </div>

                        <!-- Email Address -->
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="email"
                                required>
                            <label for="email">E-mail</label>
                        </div>

                        <!-- Password -->
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="password" required>
                            <label for="password">Password</label>
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" placeholder="password_confirmation" required>
                            <label for="password_confirmation">Password Confirmation</label>
                        </div>
                    </div>
                    <div class="flex items-center justify-end mt-4" style="margin-right: 20%">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <div class="btn_register">
                            <b><button type="submit" class="button_register">Register</button></b>
                        </div>
                    </div>
                </form>
            </div>
        </body>
    </x-auth-card>
</x-guest-layout>
