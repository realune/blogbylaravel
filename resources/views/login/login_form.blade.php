<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Scripts -->
  <script scr="{{ asset('js/app.js') }}" defer></script>
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="text-center">
  <main class="form-signin w-100 m-auto" method="POST" action="{{ route('login') }}">
    <form>
      <h1 class="h3 mb-3 fw-normal">Login Form</h1>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    </form>
  </main>
</body>

</html>