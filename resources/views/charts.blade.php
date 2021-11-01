<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Übersicht</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body class="bg-secondary">

    <header class="text-center p-4 text-white bg-dark">
        <h1>Übersicht Crossborder Settlementcapacity Price</h1>
    </header>
    <div class="card-body">
        <div class="row">
            <div class="col-md-9">
            </div>
            <div class="col-md-3">
                <select name="DATE_FROM" id="DATE_FROM" class="form-control">
                    <option value="">Datum wählen</option>
                    @foreach($DATE_FROM_list as $row)
                        <option value="{{$row->DATE_FROM}}">{{$row->DATE_FROM}}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div style="margin-top: 30px;"></div>
        <div class="panel-body">
                <div id="chart_div" style="width: 100%; height: 600px;"></div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        // Load the Visualization API and the corechart package.
        google.charts.load('current', {
            'packages': ['corechart', 'bar']
        });

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawMonthlyChart);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawMonthlyChart(fcrresults, chart_main_title) {
            let jsonData = fcrresults;
            // Create the data table.
            let data = new google.visualization.DataTable();
            data.addColumn('string', 'PRODUCTNAME');
            data.addColumn('number', 'CROSSBORDER_SETTLEMENTCAPACITY_PRICE');

            $.each(jsonData, (i, jsonData) => {

                let productname = jsonData.PRODUCTNAME;
                let crossborder = parseFloat($.trim(jsonData.CROSSBORDER_SETTLEMENTCAPACITY_PRICE));
                data.addRows([
                    [productname, crossborder]
                ]);
            });

            // Set chart options
            var options = {
                // 'title': 'Check Monthly CROSSBORDER_SETTLEMENTCAPACITY_PRICE',
                title: chart_main_title,
                hAxis: {
                    title: "Zeiten"
                },
                vAxis: {
                    title: "Preis"
                },
                colors: ['blue'],

            chartArea: {
                width: '70%',
                height: '80%'
            }
            }
            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }


        function load_monthly_data(DATE_FROM, title) {
            const temp_title = title + ' ' + DATE_FROM;
            $.ajax({
                url: 'chart/fetch_data',
                method:"POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    DATE_FROM:DATE_FROM
                },
                dataType: "JSON",
                success:function(data) {
                    drawMonthlyChart(data, temp_title);
                }
            });
            console.log(`Datum: ${DATE_FROM}`);
        }

    </script>

    <script>

        $(document).ready(function() {
            $('#DATE_FROM').change(function() {
                var DATE_FROM = $(this).val();
                if(DATE_FROM != '') {
                    load_monthly_data(DATE_FROM, 'Datum:');
                }
            });
        });
    </script>
</body>
</html>
