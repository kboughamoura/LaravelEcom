<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Phoenix</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('dashassests/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('dashassests/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dashassests/favicons/favicon-16x16.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('dashassests/favicons/favicon.ico')}}">
    <link rel="manifest" href="{{asset('dashassests/favicons/favicon.ico/manifest.json')}}">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="{{asset('dashassests/css/phoenix.min.css')}}" rel="stylesheet" id="style-default">
    <link href="{{ asset('dashassests/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
    <style>
      body {
        opacity: 0;
      }
    </style>
  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">


        @include('inc.admin.sidebar');

        @include('inc.admin.nav');

        <h2 style="display: flex; justify-content: center ; align-items: center ;"> Admin Edit Profile </h2>
        <br>

        <form  action="/admin/profile/update" method="POST" style="display: flex; justify-content: center ; align-items: center ;">
            <div class="form-group">
                <label for=""> Username</label>
                <input type="text" class="form-control" name="name" placeholder="{{$user->name}}">
            </div>

            <div class="form-group">
                <label for=""> email</label>
                <input type="text" class="form-control" name="email" placeholder="{{$user->email}}">
            </div>

            <div class="form-group">
                <label for=""> Password</label>
                <input type="password" class="form-control" name="password" placeholder="{{$user->password}}">
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>

        </form>

        
 
        
     
    </main>
    <script src="{{asset('dashassests/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassests/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>