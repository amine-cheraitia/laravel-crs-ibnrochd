<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="height: 100%" class="bg-dark d-flex align-items-center justify-content-center bg-light pt-5">
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center bg-dark" style="min-height:100%;overflow:hidden">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="row d-flex align-items-center justify-content-center bg-light p-5" style="width:450px ; border-radius:10px">
            <form action="{{route('valid')}}" method="post" style="width:100%">
                @csrf
                <div class="form-group">
                    <label for="">Nom latin</label>
                    <input type="text" class="form-control" name="nomL" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Nom arabe</label>
                    <input type="text" class="form-control" name="nomA" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Age</label>
                    <input type="number" class="form-control" name="age" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Salaire</label>
                    <input type="number" class="form-control" name="salaire" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Mot de Passe</label>
                    <input type="password" class="form-control" name="mdp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Confirmation</label>
                    <input type="password" class="form-control" name="mdp_confirmation" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Ok</button>
            </form>
        </div>
    </div>

</body>
</html>
