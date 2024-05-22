<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login page</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  {{--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >--}}
</head>
<body>
<div class="card">
<div class="card-header">
<img src="{{ asset('img/use_avatar.jpg') }}" alt="" class="avatar">
<h1 class="text-center">Login</h1>
</div>
<div class="card-body">
    <form action=""method="post">
        <div class="row">
            <label for="" class="label-text"> User Name </label>
            <input type="text" name="name" id="" class="form-control">
        </div>
<div class="row">
    <label for="" class="label-text"> Password    </label>
    <input type="text" name="name" id="" class="form-control">
</div>
<div class="row">
    <a href="" class="btn btn-success">Login</a>
    <a href="" class="btn btn-danger">Cancel</a>
    </form>
</div>
</div>
 {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>--}}
</body>
</html>
