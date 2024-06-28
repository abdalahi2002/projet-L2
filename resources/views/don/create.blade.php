<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="{{url("css/all.min.css")}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{url("css/all.css")}}">
  <link rel="stylesheet" href="{{url("js/all.js")}}">
  <link rel="stylesheet" href="{{url("js/all.min.js")}}">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style>
    .container{
        padding: 30px
    }
</style>
<body>
    @include('patie.navabar')

    <div class="container-xl">
        <div><h2>ajouter des dons</h2></div>
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
        @endif
        @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}
            </div><br />
        @endif
        <form action="{{ route('don.store') }}" method="POST">
            @csrf
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nom</label>
                <input type="text" class="form-control" id="inputEmail4" name="nom" >
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Prenom</label>
                <input type="text" class="form-control" id="inputPassword4" name="prenom" >
            </div>
            </div>
            <div class="form-group">
            <label for="inputAddress">telephone</label>
            <input type="text" class="form-control" id="inputAddress" name="tel" >
            </div>
            <div class="form-group col-md-2">
                <label for="inputAddress">Necessiteux</label>
                <input type="text" class="form-control" id="inputAddress" name="necessiteux_id" >
            </div>
            <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputAddress2">type de don</label>
                <input type="text" class="form-control" id="inputAddress2" name="typedon" >
            </div>
            <div class="form-group col-md-3">
                <label for="inputCity">Argent</label>
                <input type="text" class="form-control" name="argent" id="inputCity">
            </div>

            <div class="form-group col-md-2">
                <label for="inputZip">Materiel</label>
                <input type="text" class="form-control" name="materiel" id="inputZip">
            </div>

            <div class="form-group col-md-2">
                <label for="inputZip">Qantite de Materiel</label>
                <input type="text" class="form-control" name="qantite" id="inputZip">
            </div>
            </div>
            <div class="modal-footer">
                <a href="{{route('don.index')}}" class="btn btn-default" role="submit" aria-disabled="true">Annuler</a>
                <button class="btn btn-primary" type="submit">Ajouter</button>
            </div>
        </form>
</body>
</html>
