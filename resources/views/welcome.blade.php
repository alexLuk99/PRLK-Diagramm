@extends('layouts.master')

@section('title', 'FCR Datenbank')

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
                                    <li class="nav-item">
                                             <a class="nav-link" href="fcrtenders">Tenders Datenbank <span class="sr-only"></span></a>
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
<div class="col-md-12">
        <h1>Willkommen auf PRLK</h1>

</div>


@stop
