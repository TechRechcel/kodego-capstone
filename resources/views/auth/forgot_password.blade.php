<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fresca&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/bootstrap/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css" media="all">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">

    <!-- Livewire Styles -->
<style>
    [wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {
        display: none;
    }

    [wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {
        display:none;
    }

    [wire\:offline] {
        display: none;
    }

    [wire\:dirty]:not(textarea):not(input):not(select) {
        display: none;
    }

    input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {
        animation-duration: 50000s;
        animation-name: livewireautofill;
    }

    @keyframes livewireautofill { from {} }
</style>
<title>Forgot Password</title>
</head>
<body>
<div class="container mt-5">
  <div class="row justify-content-center" >
    <div class="col-sm-9 col-md-7 col-lg-7">
      <div class="card card-signin my-5">
        <div class="card-body">
          @if (session()->has("success_register"))
          <div class="alert alert-success">
            {{ session()->get("success_register")}}
          </div>
          @endif
          <h5 class="card-title text-center" style="color:black;">Message</h5>
          <p style="color:black;">Please send us an email to get a new password. Sorry for the inconvenience.</p>

          <br><a href="/register">Don't have an account? Register here!</a>
          <br><a href="/login">< Back to login page</a>
        </div>
      </div>
      <br><br><br><br>
    </div>
  </div>
</div>


</body>
</html>
