<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Phizza Hut</title>
  </head>
  <body style="background-color: rgb(232, 232, 232)">
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container">
          <a style="color: white" class="navbar-brand" href="#">PHizza Hut</a>
          <nav>
            <a style="color: white" class="navbar-brand" href="{{ url ('/') }}">Login</a>
            <a style="color: white" class="navbar-brand" href="{{ route('register') }}">Register</a>
          </nav>
        </div>
    </nav>
    <div class="p-4 d-flex-row container mt-5 card border-light mb-3" style="max-width: 60rem;">
        <form  method="POST" action="{{ route('register') }}" class="px-4 py-3">
            @csrf
            <div class="card-header bg-danger" style="color: white">Register</div><br>

            <div class="form-group row">
                <label for="inputUsername" class="col-sm-4 col-form-label" style="text-align: right">Username:</label>
                <div class="col-sm-6">
                    <input type="username" class="form-control" id="inputUsername" name = "name">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail" class="col-sm-4 col-form-label" style="text-align: right">E-Mail Address:</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="inputEmail" name="email">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label" style="text-align: right">Password:</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputConfirmPassword" class="col-sm-4 col-form-label" style="text-align: right">Confirm Password:</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="password-confirm" name="confirm_password">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputAdress" class="col-sm-4 col-form-label" style="text-align: right">Address:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputAdress" name="address">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPhoneNumber" class="col-sm-4 col-form-label" style="text-align: right">Phone Number:</label>
                <div class="col-sm-6">
                    <input type="numeric" class="form-control" id="inputPhoneNumber" name="phone_number">
                </div>
            </div>

            <label for="inputGender" class="col-form-label" style="text-align: right">Gender:</label>
            <div class="form-check form-check-inline p-4">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline p-4">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
            <br><br>

            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
            <a href="#">Forgot Your password?</a>
          </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
