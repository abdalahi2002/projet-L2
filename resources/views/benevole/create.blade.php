@extends('base')
@include('patie.navabar')

@section('main')
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

    {{-- <div id="addEmployeeModal" class="modal fade"> --}}
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
                <form method="POST" action="{{ route('benevole.store') }}">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Ajouter Bénévole</h4>

                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>NNi</label>
                            <input type="text" class="form-control" name="nni" required>
                        </div>
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" name="nom" required>
                        </div>
                        <div class="form-group">
                            <label>Prénom</label>
                            <input type="text" class="form-control" name="prenom" required>
                        </div>
                        <div class="form-group">
                            <label>Date Naissance</label>
                            <input type="date" class="form-control" name="daten" required>
                        </div>
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="text" class="form-control" name="tel" required>
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" class="form-control" name="age" required>
                        </div>
                        <div class="form-group">
                            <label>Metier</label>
                            <input type="text" class="form-control" name="metier" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{route('benevole.index')}}" class="btn btn-default" role="submit" aria-disabled="true">Annuler</a>
                        <button class="btn btn-primary" type="submit">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
