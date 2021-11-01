<?php

declare(strict_types = 1);

namespace App\Charts;


use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Illuminate\Http\Request;

class NewChart extends Chart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {

    }
}
