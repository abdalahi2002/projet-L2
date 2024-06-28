@extends('base')
@section('main')
@include('patie.navabar')
<style>
    .modal .modal-dialog {
        max-width: 400px;
    }
    .modal .modal-header, .modal .modal-body, .modal .modal-footer {
        padding: 20px 30px;
    }
    .modal .modal-content {
        border-radius: 3px;
        font-size: 14px;
    }
    .modal .modal-footer {
        /* background: #ecf0f1; */
        background : url('route('welcome')')
        border-radius: 0 0 3px 3px;
    }
    .modal .modal-title {
        display: inline-block;
    }
    .modal .form-control {
        border-radius: 2px;
        box-shadow: none;
        border-color: #dddddd;
    }
    .modal textarea.form-control {
        resize: vertical;
    }
    .modal .btn {
        border-radius: 2px;
        min-width: 100px;
    }
    .modal form label {
        font-weight: normal;
    }
    </style>


<!-- Edit Modal HTML -->
{{-- <div id="editEmployeeModal" class="modal fade"> --}}
            <div class="modal-dialog">
                <div class="modal-content">

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif
                    <form method="post" action="{{ route('benevole.update', $bene->id) }}">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Bénévole</h4>

                        </div>
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label>NNI</label>
                            <input type="text" class="form-control" name="nni" value="{{$bene->nni}}" required>
                        </div>
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
                            <label>Age</label>
                            <input type="text" class="form-control" name="age" value="{{$bene->age}}" required>
                        </div>
                        <div class="form-group">
                            <label>Metier</label>
                            <input type="text" class="form-control" value="{{$bene->metier}}" name="metier" required>
                        </div>
                        <div class="modal-footer">
                            <a href="{{route('benevole.index')}}" class="btn btn-default" role="submit" aria-disabled="true">Annuler</a>
                            <button class="btn btn-primary" type="submit">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
</div>

@endsection
