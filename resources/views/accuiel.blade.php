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
        padding: 50px;
    }
</style>
<body>
    @include('patie.navabar')



    <div class="form-row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Employee</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$user}} person  <span>active</span><span>→</span><span>{{$nece}}</span></div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-users fa-2x text-gray-300"></i>

                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Necessiteux</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$neces}}</div>
                    </div>
                    <div class="col-auto">
                        <i class='bx bx-user nav_icon fa-2x text-gray-300'></i>

                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Don</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$dons}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-hand-holding-heart fa-2x text-gray-300"></i>

                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Bénévole</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$bene}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-people-group fa-2x text-gray-300"></i>
                        {{-- <i class="fas fa-building fa-2x text-gray-300"></i> --}}
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Argent</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$don}} UM</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-circle-dollar-to-slot fa-2x text-gray-300"></i>

                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">materiel</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$d}}</div>
                    </div>
                    <div class="col-auto">
                        {{-- <i class="fas fa-building fa-2x text-gray-300"></i> --}}
                    </div>
                    </div>
                </div>
                </div>
            </div>
    </div>
</div>

</body>
</html>
