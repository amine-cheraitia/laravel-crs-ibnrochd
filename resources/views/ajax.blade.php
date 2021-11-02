<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script>
        function charger(){
            $.ajax({
                type:'POST',
                url:'/ajax',
                data:'_token={{csrf_token()}}',
                success:function(data){
                    data.client.forEach(element => {
                        $('#tab').append(element.nom+ '<br>')
                    });

                }
            });
        }
    </script>
</head>

<body>
    <div id="tab">
        <h1>Liste des Clients :</h1>
    </div>
    <button onclick="charger()">Afficher plus</button>

</body>

</html>
