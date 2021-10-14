@php
    if(!App::islocale('fr')){
        App::setlocale('fr');
    }
    $nom= "Amine"
@endphp

<body dir="{{__('message.dir')}}">
    <form action="" method="post">
        @lang('message.usr') <input ><br>
        {{__("message.pwd")}} <input type="password" name=""><br>
        <input type="submit" value="@lang("message.ok")">
    </form>
</body>
@lang('message.wlc',['nom'=>$nom])


@php
    $nomClient= \Illuminate\Support\Facades\Session::pull('cl1');
@endphp
 <br>
 nom du client1 :{{$nomClient}} <br>
 nom du client2 :{{session("cl2")}}

