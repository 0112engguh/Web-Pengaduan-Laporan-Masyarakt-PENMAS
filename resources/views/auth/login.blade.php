<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/css/login.css') }}" rel="stylesheet">
</head>
<body>
  <section id="login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 right">
                <div class="text-center" style="margin-top: 18.5rem">
                    <img src="{{asset('front/img/logo-login.svg')}}" alt="">
                </div>
            </div>

            <div class="col-md-5 left py-5 px-5">
                <div class="text-center" style="margin-top: 7rem">
                    <h4>Masuk ke PENMAS</h4>
                </div>
                <form method="POST" style="margin-top: 6rem" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                      <input value="email" name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                      <input type="password" name="password" class="form-control" id="password">
                      <input type="checkbox" onclick="myFunction()" class="mt-2 fs-small"><span>Lihat Password</span>
                    </div>
                    <button type="submit" style="background: #004643" class="btn text-white mt-2 py-2 px-5 w-100">Masuk</button>
                </form>
                <div class="d-flex mt-3">
                    <p style="color: #6E6E6E;font-size:12px;width:80%">Belum punya akun? <a href="{{route('register')}}" style="font-weight: 600;color:#004643">Daftar Sekarang</a></p>
                </div>
            </div>
        </div>
    </div>
  </section>
</body>
</html>

<script>
    function myFunction() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
</script>

{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
