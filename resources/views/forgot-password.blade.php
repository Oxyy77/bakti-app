<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BAKTI UNAND 2023 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

  </head>
  <body>


    <div class="card form-forgot" style="width: 30rem; height: 20rem;">
        <div id="notification" style="display: none; position: absolute; top: -60px; left: 0; width: 100%;" class="alert alert-success text-center">Password reset link has been sent to your email!</div>
        <div class="card-body  mt-4">
          <h2 class="text-center">Forgot Password</h2>
          <h6 class="text-center">Enter Your Email Address</h6>
          <div class="mb-3 mt-3">
            <label for="exampleFormControlInput1" class="form-label text-start ">Email address</label>
              <form  method="POST" action="{{ route('password.email') }}" id="email">
                  @csrf

{{--                  <!-- Email Address -->--}}
{{--                  <div>--}}
{{--                      <x-input-label for="email" :value="__('Email')" />--}}
{{--                      <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--                      <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--                  </div>--}}

{{--                  <div class="btn btn-first d-flex justify-content-center">--}}
{{--                      <button>--}}
{{--                          {{ __('Email Password Reset Link') }}--}}
{{--                      </button>--}}
{{--                  </div>--}}
                  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  <br>
                  <div class="btn btn-first d-flex justify-content-center" onclick="showNotification()">Email Password Reset Link</div>
              </form>

          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/main.js" ></script>
  </body>
</html>
