<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container m-2">
    <form action="{{route('login_admin')}}" method="POST">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1"class="form-label">Email address</label>
    <input type="email"  name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('email')
    <div id="emailHelp" class="form-text">{{$message}}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1"  class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    @error('password')
    <div id="emailHelp" class="form-text">{{$message}}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
<script src="{{asset('bootstrap/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/popper.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>