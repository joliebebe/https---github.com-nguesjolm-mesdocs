<h1>la page d'acceuil</h1>

@foreach($users as $user)
    <h1>{{$user['name']}}</h1>
@endforeach