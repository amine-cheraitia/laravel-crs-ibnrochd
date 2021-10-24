 @foreach ($clients as $client)
<li>{{$client->id}} {{$client->nom}} {{$client->adresse}}</li>
@endforeach
{{-- {{$clients->render()}} --}}

