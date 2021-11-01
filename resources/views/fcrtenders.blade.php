@extends('layouts.master')

@section('title', 'FCR Results Datenbank')

@section('sidebar')
    @parent
<div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="/">PRLK</a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="navbar-nav">
                                    <li class="nav-item">
                                             <a class="nav-link" href="fcrresults">Results Datenbank <span class="sr-only"></span></a>
                                    </li>
                                    <li class="nav-item active">
                                             <a class="nav-link" href="fcrtenders">Tenders Datenbank <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                             <a class="nav-link" href="alltenders">AnonymousTenders Datenbank <span class="sr-only"></span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                             <a class="nav-link dropdown-toggle" href="https://www.regelleistung.net/apps/datacenter/tenders/?productTypes=PRL&markets=BALANCING_CAPACITY,BALANCING_ENERGY&date=2021-08-30&tenderTab=PRL$CAPACITY$1" id="navbarDropdownMenuLink" data-toggle="dropdown">regelleistung.net</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                     <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider">
                                                    </div> <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                    </li>
                            </ul>
                    </div>
            </nav>
</div>
@stop

@section('content')

        <div class="col-md-8">
                <table class="table table-striped">
                        <thead>
                                <tr>
                                        <th scope="col">Date from</th>
                                        <th scope="col">Date to</th>
                                        <th scope="col">Type of Reserves</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Total Demand</th>
                                        <th scope="col">DE Demand[MW]</th>
                                        <th scope="col">DE Exportlimit[MW]</th>
                                        <th scope="col">DE Kernanteil[MW]</th>
                                </tr>
                        </thead>
                        <tbody>
                                @foreach($fcrtenders as $fcrtender)
                                <tr>
                                        <td>{{$fcrtender['DATE_FROM']}}</td>
                                        <td>{{$fcrtender['DATE_TO']}}</td>
                                        <td>{{$fcrtender['TYPE_OF_RESERVES']}}</td>
                                        <td>{{$fcrtender['PRODUCT']}}</td>
                                        <td>{{$fcrtender['TOTAL_DEMAND']}}</td>
                                        <td>{{$fcrtender['GERMANY_BLOCK_DEMAND']}}</td>
                                        <td>{{$fcrtender['GERMANY_BLOCK_EXPORT_LIMIT']}}</td>
                                        <td>{{$fcrtender['GERMANY_BLOCK_CORE_PORTION']}}</td>
                                </tr>
                                @endforeach
                        </tbody>
                </table>
        </div>
        <div class="col-md-4">
                <h3 class="text-center">
                        Up and Download Area
                </h3>
                <div class="btn-group btn-group-md" role="group">

                    <form action="{{ route('importtenders') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <input type="file" name="file" class="form-control">

                        <br>

                        <button class="btn btn-secondary">Import Bedarfe</button>

                        <a class="btn btn-secondary" href="{{ route('exporttenders') }}">Export Bedarfe</a>

                    </form>
                </div>
        </div>

@stop
