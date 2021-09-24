<div>
    <p>En tete</p>
</div>
<br>
@component('Pages.message',['age' => 30, 'nationalité' => 'Algérienne'])

@endcomponent

@msg(['age' => 45, 'nationalité' => 'Tunisien'])

@endmsg

<br>
<div>
    bas de page
</div>
