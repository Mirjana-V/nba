<p>Hello, {{ $user->name }}</p>
<br>
<p>You have new verification email <a href="{{route('user_is_verified', ['id' => $user->id])}}">Click here</a></p>