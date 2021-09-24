{{-- {{ Form::open(['route' => 'clients'])}}
{{ Form::open(['action' => 'ClientController@liste'])}} --}}


{{ Form::open(['url' => '/login', 'method'=>'get','files'=>false]) }}
{{ Form::label('nom','Nom d\'utilisateur','',['class'=>'name']) }}
{{ Form::text('nom','',['placeholder'=>'Veuillez saisir votre nom']) }}
{{ Form::label('mdp','Mot de passe') }}
{{ Form::password('mdp') }}
{{ Form::label('age','L\'age') }}
{{ Form::number('age') }}
{{ Form::label('daten','date de naissance') }}
{{ Form::date('daten', \Carbon\Carbon::now()) }}
{{ Form::file('photo') }}

<br>
{{ Form::label('lng','Language de programmation') }} <br>
Javascript{{ Form::checkbox('lng','js',false) }}
Php{{ Form::checkbox('lng','php',true) }}
Python{{ Form::radio('lng','Python',false) }}
<br>
Homme {{ Form::radio('sexe','m',true) }}
Femme {{ Form::radio('sexe','f') }}
<br>
Wilaya
{{ Form::select('wil',["06"=>"bejaia" ,"16"=>"alger","31"=>"oran"]) }}
<br>
{{ Form::label('mois','Mois') }}
{{ Form::selectMonth('mois') }}
{{ Form::label('semestre','semestre') }}
{{ Form::selectRange('semestre',1,4) }}
<br>
{{ link_to("/log","S'autentifier") }}
{{ link_to_asset("laravelTP.jpg","telecharger image") }}
{{ link_to_route("clients","liste des clients") }}
{{ link_to_action("ReponseController@index","réponse") }}


{{ Form::token()}}
{{ Form::submit('Enregistrer') }}

{{ Form::close() }}
