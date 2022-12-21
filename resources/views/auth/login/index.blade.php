<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auth</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="content-wrapper vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Auth</h3>
                    </div>
                    <form action="{{ route('auth.login.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group mt-2">
                                <label for="login">Login</label>
                                <input name="login" type="text" class="form-control" id="login" placeholder="Enter login">
                                @error('login')
                                <div class="text-red">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="password">Password</label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                                @error('password')
                                <div class="text-red">{{ $message }}</div> @enderror
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
