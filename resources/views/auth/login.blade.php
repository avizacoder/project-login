<form action="{{ route('login') }}" method="POST">
    @csrf
    <input type="email" id="email" name="email">
    <input type="password" id="password" name="password">
    <input type="submit" value="Login">
</form>