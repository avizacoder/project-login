{{ Auth::user() }}

<form action="{{ route('logout')}}" method="POST">
    @csrf
    <button>Logout</button>
</form>

{{-- @foreach($users as $user)
        <td>{{$user->email}}</td>
@endforeach --}}