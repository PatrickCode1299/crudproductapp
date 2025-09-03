<!DOCTYPE html>
<html>
<head>
    <title>Register User</title>
    <style>
        /* Add your custom styles here */
    </style>
</head>
<body>
    <form action="{{ route('createUser') }}" method="POST">
        @csrf
        <input type="text" name="username" placeholder="Username" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Register</button>
    </form>

    @if(!empty($response))
        <div>
            <p>{{ $response }}</p>
        </div>
    @else
        <div>
            <p>No response found yet</p>
        </div>
    @endif
</body>
</html>
