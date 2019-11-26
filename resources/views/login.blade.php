<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <title>INVENTORY</title>
    </head>
    <script src="{{ asset('js/jquery-slim.min.js') }}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{ asset('js/popper.min.js') }}" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
      
    </script>
    <body>
      
    <div class="container">
        <img src="{{ asset('images/uclogo.png') }}" style="width: 30%;">
        <div class="card">
            <div class="card-header">
                Login
            </div>
            <div class="card-body">
                @isset($error)
                    <li class="alert alert-danger">{{ $error }}</li>
                @endisset
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Email Address:</label>
                        <input type="text" class="form-control" name='email'>
                    </div>
                    <div class="form-group">
                        <label for="">Password:</label>
                        <input type="password" class="form-control" name='password'>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    </body>