<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Include Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/Registeration.css') }}">
    
    </style>
</head>
<body>
<div class="container">
        <div class="register-container">
        <img src="https://bhagvahindvahini.in/webimg/1001266736_0132025174307.png" alt="User Icon">
            <h3 class="text-center">Welcome</h3>
          
            @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif



            <form action="{{ route('register.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your FullName" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email." required>
                </div>
                <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <div class="input-group">
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
        <span class="input-group-text" id="password-eye">
            <i class="fas fa-eye" onclick="togglePasswordVisibility('password', 'password-eye')"></i>
        </span>
    </div>
</div>

<div class="mb-3">
    <label for="password_confirmation" class="form-label">Confirm Password</label>
    <div class="input-group">
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter Confirm Password" required>
        <span class="input-group-text" id="password-confirm-eye">
            <i class="fas fa-eye" onclick="togglePasswordVisibility('password_confirmation', 'password-confirm-eye')"></i>
        </span>
    </div>
</div>
                <button type="submit" class="btn btn-color w-100">Register</button>

                <div class="text-center mt-3">
                            <a href="{{ route('login') }}" class="btn btn-color w-100">sign in</a>
                        </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>