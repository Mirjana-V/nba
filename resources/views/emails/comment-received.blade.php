<p>Hello, {{ $team->name }}</p>
<p>You have a new comment on your page <a href="{{ url('teams/' . $team->id) }}">Team page</a> </p>