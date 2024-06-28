@extends('base')
@section('main')
@include('patie.navabar')
<style>
    body {
        color: #566787;
        background: #f5f5f5;
        font-family: 'Roboto', sans-serif;
    }
    .table-responsive {
        margin: 30px 0;
    }
    .table-wrapper {
        min-width: 1000px;
        background: #fff;
        padding: 20px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        font-size: 15px;
        padding-bottom: 10px;
        margin: 0 0 10px;
        min-height: 45px;
    }
    .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
    }
    .table-title select {
        border-color: #ddd;
        border-width: 0 0 1px 0;
        padding: 3px 10px 3px 5px;
        margin: 0 5px;
    }
    .table-title .show-entries {
        margin-top: 7px;
    }
    .search-box {
        position: relative;
        float: right;
    }
    .search-box .input-group {
        min-width: 200px;
        position: absolute;
        right: 0;
    }
    .search-box .input-group-addon, .search-box input {
        border-color: #ddd;
        border-radius: 0;
    }
    .search-box .input-group-addon {
        border: none;
        border: none;
        background: transparent;
        position: absolute;
        z-index: 9;
    }
    .search-box input {
        height: 34px;
        padding-left: 28px;
        box-shadow: none !important;
        border-width: 0 0 1px 0;
    }
    .search-box input:focus {
        border-color: #3FBAE4;
    }
    .search-box i {
        color: #a0a5b1;
        font-size: 19px;
        position: relative;
        top: 8px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child {
        width: 130px;
    }
    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }
    table.table td a.view {
        color: #03A9F4;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        padding: 0 10px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 30px !important;
        text-align: center;
    }
    .pagination li a:hover {
        color: #666;
    }
    .pagination li.active a {
        background: #03A9F4;
    }
    .pagination li.active a:hover {
        background: #0397d6;
    }
    .pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }
    </style>
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        // Animate select box length
        var searchInput = $(".search-box input");
        var inputGroup = $(".search-box .input-group");
        var boxWidth = inputGroup.width();
        searchInput.focus(function(){
            inputGroup.animate({
                width: "300"
            });
        }).blur(function(){
            inputGroup.animate({
                width: boxWidth
            });
        });
    });
    </script>
    </head>
    <body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="show-entries">
                                <a class="btn btn-primary" href="{{route('benevole.create')}}" role="button"><i class="fa fa-plus"></i> Add New</a>
                            </div>
                        </div>
                        <div class="col-sm-4">

                        </div>
                        <div class="col-sm-4">
                            <div class="search-box">
                                <div class="input-group">
                                    <h2 class="text-center">Liste des <b>Bénévoles</b></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NNI</th>
                            <th>Name <i class="fa fa-sort"></i></th>
                            <th>Date Naissance</th>
                            <th>tel <i class="fa fa-sort"></i></th>
                            <th>Age</th>
                            <th>Metier</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bene as $bene )
                        <tr>

                                <td>{{$bene->id}}</td>
                                <td>{{$bene->nni}}</td>
                                <td>{{$bene->nom.' '.$bene->prenom }}</td>
                                <td>{{$bene->daten}}</td>
                                <td>{{$bene->tel}}</td>
                                <td>{{$bene->age}}</td>
                                <td>{{$bene->metier}}</td>
                            <td>
                                <a href="{{ route('benevole.edit',$bene->id)}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>


                    </tbody>
                        <div id="deleteEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                        <form action="{{ route('benevole.destory',$bene->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Delete Employee</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete these Records?</p>
                                                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                    <input type="submit" class="btn btn-danger" value="Delete">
                                                </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </table>

                 <!-- Delete Modal HTML -->

<script>
    $(document).ready(function(){
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Select/Deselect checkboxes
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function(){
            if(this.checked){
                checkbox.each(function(){
                    this.checked = true;
                });
            } else{
                checkbox.each(function(){
                    this.checked = false;
                });
            }
        });
        checkbox.click(function(){
            if(!this.checked){
                $("#selectAll").prop("checked", false);
            }
        });
    });
    </script>
    </body>

@endsection
