@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Editing Stock</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('benevole.update', $bene->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label>Nom</label>
                <input type="text" class="form-control" name="nom" value="{{$bene->nom}}" required>
            </div>
            <div class="form-group">
                <label>Prénom</label>
                <input type="text" class="form-control" name="prenom" value="{{$bene->prenom}}" required/>
            </div>
            <div class="form-group">
                <label>Date Naissance</label>
                <input type="date" class="form-control" name="daten" value="{{$bene->daten}}" required>
            </div>
            <div class="form-group">
                <label>Téléphone</label>
                <input type="text" class="form-control" value="{{$bene->tel}}" name="tel" required>
            </div>
            <div class="form-group">
                <label>Metier</label>
                <input type="text" class="form-control" value="{{$bene->metier}}" name="metier" required>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                <input type="submit" class="btn btn-success" value="Ajouter">
            </div>
        </form>
    </div>
</div>
@endsection
