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
<title>Register</title>
</head>

<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-9 col-md-7 col-lg-5">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center" style="color:black">Register</h5>
          {{-- form --}}
          <form class="register-form" action="/barangay/register" method="post">
            @csrf
            <div class="form-label-group mt-2">
              <label for="register_firstname" style="color:black">First name</label>
              <input type="text" id="register_firstname" name="register_firstname" class="form-control" placeholder="Enter First Name" 
              value={{ old('register_firstname')}}>
              @error('register_firstname')
              <span class="text-danger error_text"> {{ $message }}</span>
              @enderror
            </div>
            {{-- lastname --}}
            <div class="form-label-group mt-2">
              <label for="register_lastname" style="color:black">Last name</label>
              <input type="text" id="register_lastname" name="register_lastname" class="form-control" placeholder="Enter Last Name" 
              value={{ old('register_lastname')}}>
              @error('register_lastname')
              <span class="text-danger error_text"> {{ $message }}</span>
              @enderror
            </div>

            {{-- Gender --}}
            <div class="form-label-group mt-2">
              <label for="register_gender" style="color:black">Gender</label>
              <select class="form-control" id="register_gender" name="register_gender" data-old="{{ old('register_gender')}}">
                <option value="">-Select Gender-</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

              @error('register_gender')
              <span class="text-danger error_text"> {{ $message }}</span>
              @enderror
            </div>

            {{-- email address --}}
            <div class="form-label-group mt-2">
              <label for="register_email" style="color:black">Email address</label>
              <input type="text" id="register_email" name="register_email" class="form-control" placeholder="Email address" 
              value={{ old('register_email')}}>
              @error('register_email')
              <span class="text-danger error_text"> {{ $message }}</span>
              @enderror
            </div>

            {{-- password --}}
            <div class="form-label-group mt-2">
              <label for="register_password" style="color:black">Password</label>
              <input type="password" id="register_password" name="register_password" class="form-control" placeholder="Password" >
              @error('register_password')
              <span class="text-danger error_text">{{ $message }}</span>
              @enderror
            </div>

            {{-- verify password --}}
            <div class="form-label-group mt-2">
              <label for="register_password_confirmation" style="color:black">Verify Password</label>
              <input type="password" id="register_password_confirmation" name="register_password_confirmation" class="form-control" placeholder="Please Verify Password" >
              @error('register_password_confirmation')
              <span class="text-danger error_text"> {{ $message }}</span>
              @enderror
            </div>

            <button class="btn btn-lg btn-primary btn-block text-uppercase mt-3" id="registerBtn" type="submit">Register</button>
          </form>
          {{-- end form --}}

          <br><a href="/login">Have an account? Login!</a>
        </div>
      </div>
    </div>
  </div>
</div>

  <script type="text/javascript">
      $(function() {
        var old_gender = $("#register_gender").data("old");
        var old_voter_status = $("#register_voter_status").data("old");
        
        $("#register_gender").val(old_gender);
        $("#register_voter_status").val(old_voter_status);
      })
  </script>

</body>
</html>