@extends('base')
@include('patie.navabar')
<style>
    .container{
        padding: 20px
    }
</style>
@section('main')
    <div class="container">
        <div><h2>modifier de don</h2></div>
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
        <form action="{{ route('don.update',$don->id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nom</label>
                <input type="text" class="form-control" id="inputEmail4" name="nom" value="{{$don->nom}}" >
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Prenom</label>
                <input type="text" class="form-control" id="inputPassword4" name="prenom" value="{{$don->prenom}}">
            </div>
            </div>
            <div class="form-group">
            <label for="inputAddress">telephone</label>
            <input type="text" class="form-control" id="inputAddress" name="tel" value="{{$don->tel}}">
            </div>
            <div class="form-group col-md-2">
                <label for="inputAddress">Necessiteux</label>
                <input type="text" class="form-control" id="inputAddress" name="necessiteux_id" value="{{$don->necessiteux_id}}">
            </div>
            <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputAddress2">type de don</label>
                <input type="text" class="form-control" id="inputAddress2" name="typedon" value="{{$don->typedon}}" >
            </div>
            <div class="form-group col-md-3">
                <label for="inputCity">Argent</label>
                <input type="text" class="form-control" name="argent" id="inputCity" value="{{$don->argent}}">
            </div>

            <div class="form-group col-md-2">
                <label for="inputZip">Materiel</label>
                <input type="text" class="form-control" name="materiel" id="inputZip" value="{{$don->materiel}}">
            </div>

            <div class="form-group col-md-2">
                <label for="inputZip">Qantite de Materiel</label>
                <input type="text" class="form-control" name="qantite" id="inputZip" value="{{$don->qantite}}">
            </div>
            </div>
            <div class="modal-footer">
                <a href="{{route('don.index')}}" class="btn btn-default" role="submit" aria-disabled="true">Annuler</a>
                <button class="btn btn-primary" type="submit">Ajouter</button>
            </div>
        </form>
    </div>
@endsection
