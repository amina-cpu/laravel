<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    
    <!-- BOOTSTRAP -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<style>
      body{
		background-color:#b5a192;
	  }
	  button {
    background-color: #d0b9a7; /* Set your desired button background color */
    color: white; /* Set text color */
    border: none; /* Remove default border */
    padding: 10px 20px; /* Adjust padding for a larger, rounded look */
    font-size: 16px; /* Adjust font size */
    border-radius: 25px; /* Makes the button more rounded */
    cursor: pointer; /* Adds pointer on hover */
    transition: background-color 0.3s ease; /* Smooth color transition on hover */
}

button:hover {
    background-color: #5a6268; /* Darker shade for hover effect */
}

button i {
    margin-left: 5px; /* Add spacing between button text and icon */
}

.zmdi-arrow-right {
    /* This targets the icon specifically */
    border-radius: 50%; /* Makes the icon fully circular if needed */
    background-color: #fff; /* Optional: Add a background for the icon */
    padding: 5px; /* Adjust size */
    color: #6c757d; /* Icon color */
}

	</style>
</head>
<body>

    <div class="wrapper" style="background-image: url('{{ asset('images/bg-registration-form-1.jpg') }}');">
        <div class="inner">
            <div class="image-holder">
                <img src="{{ asset('images/dat.PNG') }}" alt="Registration Image">
            </div>

            <form action="{{ url('/signup') }}" method="POST">
    @csrf
    <h3>Registration Form</h3>

    <!-- First and Last Name -->
    <div class="form-group">
        <input type="text" 
               placeholder="First Name" 
               class="form-control @error('firstName') is-invalid @enderror" 
               id="firstName" 
               name="firstName" 
               value="{{ old('firstName') }}">
        @error('firstName')
            <div class="invalid-feedback" style="color: red;">
                {{ $message }}
            </div>
        @enderror

        <input type="text" 
               placeholder="Last Name" 
               class="form-control @error('lastName') is-invalid @enderror" 
               id="lastName" 
               name="lastName" 
               value="{{ old('lastName') }}">
        @error('lastName')
            <div class="invalid-feedback" style="color: red;">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Email -->
    <div class="form-wrapper">
        <input type="email" 
               placeholder="Email Address" 
               class="form-control @error('email') is-invalid @enderror" 
               id="email" 
               name="email" 
               value="{{ old('email') }}">
        <i class="zmdi zmdi-email"></i>
        @error('email')
            <div class="invalid-feedback" style="color: red;">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Password -->
    <div class="form-wrapper">
        <input type="password" 
               placeholder="Password" 
               class="form-control @error('password') is-invalid @enderror" 
               id="password" 
               name="password">
        <i class="zmdi zmdi-lock"></i>
        @error('password')
            <div class="invalid-feedback" style="color: red;">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-wrapper">
        <input type="password" 
               placeholder="Confirm Password" 
               class="form-control @error('password_confirmation') is-invalid @enderror" 
               id="password_confirmation" 
               name="password_confirmation">
        <i class="zmdi zmdi-lock"></i>
        @error('password_confirmation')
            <div class="invalid-feedback" style="color: red;">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Submit Button -->
    <button type="submit">Register
        <i class="zmdi zmdi-arrow-right"></i>
    </button>
</form>

         
        </div>
    </div>
    
</body>
</html>
