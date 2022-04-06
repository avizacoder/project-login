@if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif

<form action="{{ route('login') }}" method="POST">
    @csrf
    <input type="email" id="email" name="email" value="{{ old('email') }}">

    <input type="password" id="password" name="password">

    <input type="submit" value="Login">
</form>

