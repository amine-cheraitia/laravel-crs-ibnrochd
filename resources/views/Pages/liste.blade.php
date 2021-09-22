@isset($nom)
    Bienvenue, {{$nom}}
@endisset
@empty($nom)
    Veuillez vous connecter !
@endempty
@if($note>=10)
    admis
@elseif ($note>8)
    Ajourné
@else
    Double
@endif
@unless ($note >10)
<span style="color: red"> !!!</span>

@endunless
@switch($note)
    @case(12) vous avez eu 12 @break
    @case(11) vous avez eu 11 @break
    @case(10) vous avez eu 10 @break
    @default vous avez eu autr chose que 12 ,11 ,10

@endswitch
<ul>
@for ($i=1;$i<$note;$i++)
    <li>Module N°{{$i}}</li>
@endfor
</ul>
<a href="{{route('article',[5,8])}}">Edit</a>

<select name="wil">
    @foreach ($wilaya as $wil)
        <option value="{{$wil}}">{{$wil}}</option>
    @endforeach
</select>
@php
$x=10;
@endphp

@while ($x-- > 0)

    <p>etudiant numéro {{$x}}</p>
    @php
    $x--;
    @endphp

@endwhile

@php
    $user=["name"=>"mohamed", "age"=>30]
@endphp

@json($user)

{{-- @include("formulaire",$user)
@includeIf("formulaire",$user) --}}

@includeWhen($note>10,"formulaire",$user )
