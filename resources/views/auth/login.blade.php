<form action="{{ route('login') }}" method="POST">
    @csrf
    <input type="email" id="email" name="email">
    @error('email')
        <div>{{ $message }}</div>  
    @enderror
    <input type="password" id="password" name="password">
    @error('password')
    <div>{{ $message }}</div>  
    @enderror
    <input type="submit" value="Login">
</form>