<!DOCTYPE html>
<html>
<head>
        <title>filter</title>
</head>
<body>
        <form action="/filterview" method= "POST">
                {{csrf_field()}}
                <input type="date" name"from" value="{{date('Y-m-d')}}">&nbsp;
                <input type="date" name"to" value="{{date('Y-m-d')}}">&nbsp;
                <input type="submit" value"Submit" >
        </form>
                <table border="1">
                                <tr>
                                        <th scope="col">Date from</th>
                                        <th scope="col">Date to</th>
                                        <th scope="col">Product type</th>
                                        <th scope="col">Productname</th>
                                        <th scope="col">Crossborder Settlementcapacity Price[EUR/MW]</th>
                                        <th scope="col">DE Demand[MW]</th>
                                        <th scope="col">DE Settlementcapacity Price[EUR/MW]</th>
                                        <th scope="col">DE Import Export[MW]</th>
                                </tr>
                        <tbody>
                                @foreach($fcrs as $fcr)
                                <tr>
                                        <td>{{$fcr['DATE_FROM']}}</td>
                                        <td>{{$fcr['DATE_TO']}}</td>
                                        <td>{{$fcr['PRODUCT_TYPE']}}</td>
                                        <td>{{$fcr['PRODUCTNAME']}}</td>
                                        <td>{{$fcr['CROSSBORDER_SETTLEMENTCAPACITY_PRICE_[EUR/MW]']}}</td>
                                        <td>{{$fcr['DE_DEMAND_[MW]']}}</td>
                                        <td>{{$fcr['DE_SETTLEMENTCAPACITY_PRICE_[EUR/MW]']}}</td>
                                        <td>{{$fcr['DE_IMPORT(-)_EXPORT(+)_[MW]']}}</td>
                                </tr>
                                @endforeach
                        </tbody>
                </table>
</body>
</html>
