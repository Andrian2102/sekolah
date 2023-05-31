<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h1>Admin Login</h1>

    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif

    <form method="POST" action="{{ route('admin.login.post') }}">
        @csrf

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required autofocus>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit">Login</button>
    </form>
</body>
</html>
