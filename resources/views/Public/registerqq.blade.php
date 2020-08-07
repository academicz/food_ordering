<!DOCTYPE html>
<html lang="en">
<head>
    <title>Food Ordering</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin/custom.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @include('Includes.messageBox')
            <form action="{{route('postRegister')}}" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="{{old('email')}}" id="email">
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" value="{{old('phone')}}" class="form-control" name="phone" id="phone">
                    <small class="text-danger">{{ $errors->first('phone') }}</small>
                </div>
                <div class="form-group">
                    <label for="homeTown">Home Town</label>
                    <input type="text" value="{{old('homeTown')}}" class="form-control" name="homeTown" id="homeTown">
                    <small class="text-danger">{{ $errors->first('homeTown') }}</small>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
