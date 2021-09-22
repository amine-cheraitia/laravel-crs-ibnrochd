@php
    if(!App::islocale('de')){
        App::setlocale('de');
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
