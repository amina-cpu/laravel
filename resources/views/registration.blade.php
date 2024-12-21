<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#navbar" aria-expanded="false"
                    aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">Registration and Login</a>
            </div>
        </div>
    </nav>

    <br><br>
    <!-- Registration Form -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <!-- Success Message -->
                @if (session('success'))
                    <div class="alert alert-info">
                        {{ session('success') }}
                    </div>
                @endif

                <h1>Registration</h1>

                <form action="{{ url('/registration') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="control-label" for="firstName">First Name</label>
                        <input id="firstName" class="form-control" name="firstName" required autofocus>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="lastName">Last Name</label>
                        <input id="lastName" class="form-control" name="lastName" required autofocus>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="email">Email</label>
                        <input id="email" class="form-control" name="email" type="email" required autofocus>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="password">Password</label>
                        <input id="password" class="form-control" name="password" type="password" required autofocus>
                    </div>

                   

                    <div class="form-group">
                        <button cltype="submit" ass="btn btn-success">Register</button>
                        <span>Already registered? <a href="{{ url('/login') }}">Login here</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
