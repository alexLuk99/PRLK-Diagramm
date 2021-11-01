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
                                    <li class="nav-item active">
                                             <a class="nav-link" href="fcrresults">Results Datenbank <span class="sr-only">(current)</span></a>
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

        <table border="1">
                @foreach ($data as $item)
                <tr>
                        <td>{{$item->DATE_FROM}}</td>
                        <td>{{$item->DATE_TO}}</td>
                        <td>{{$item->PRODUCT_TYPE}}</td>
                        <td>{{$item->PRODUCTNAME}}</td>
                        <td>{{$item->CROSSBORDER_SETTLEMENTCAPACITY_PRICE_[EUR/MW]}}</td>
                        <td>{{$item->DE_DEMAND_[MW]}}</td>
                        <td>{{$item->DE_SETTLEMENTCAPACITY_PRICE_[EUR/MW]}}</td>
                        <td>{{$item->DE_IMPORT(-)_EXPORT(+)_[MW]}}</td>
                </tr>
                @endforeach
        </table>


@stop
