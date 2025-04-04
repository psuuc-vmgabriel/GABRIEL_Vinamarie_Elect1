<form action="{{ route('login') }}" method="POST">
    @csrf
    <div>
        <label for="email">Email: </label>
        <input type="email" name="email" value="{{ old('email') }}" required autofocus />
    </div>

    <div>
        <label for="password">Password: </label>
        <input type="password" name="password" value="{{ old('password') }}" required />
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>
