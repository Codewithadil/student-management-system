<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
   
    <div class="container-login">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <h5 align="center">STUDENT MANAGEMENT SYSTEM</h5>
                                    <div class="text-center">
                                        <i class="fa fa-user-circle-o text-primary" aria-hidden="true" style="font-size: 100px;"></i>
                                        <br><br>
                                        <h1 class="h4 text-gray-900 mb-4">Login Panel</h1>
                                    </div>
                                    @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                    @endif
                            
                                    @if(session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <!-- User Login Form -->
                                    <form class="user" method="Post" action="{{route('login')}}">
                                       @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control" required name="email" id="email" value="{{ old('email') }}" placeholder="Enter Email Address" autocomplete="email" autofocus>
                                            @if($errors->has('email'))
                                             <span class="text-danger">{{ $errors->first('email') }}</span>
                                             @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" required class="form-control @error('password') is-invalid @enderror" id="password" autocomplete="current-password" placeholder="Enter Password">
                                            @if($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success btn-block" value="Login" name="login">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>