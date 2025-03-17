<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="/login" method="POST">
                            @csrf
                            <!-- Username Input -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="email" class="form-control" id="username" name="username" required placeholder="Enter your email">
                                <div class="form-text">Please enter your registered email address.</div>
                            </div>

                            <!-- Password Input -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required placeholder="Enter your password">
                            </div>

                            <!-- Remember Me Checkbox -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary col-6">Sign In</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="/forgot-password">Forgot Password?</a> | <a href="/register">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
