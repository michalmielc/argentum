<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Costcenter as ModelsCostcenter;

class ReportController extends Controller
{
    //COSTCENTERS ----------------------------
    public function getCostcentersAll()
    {
        return view('reports.costcenters.index',['costcenters'=>ModelsCostcenter::paginate(10)]);
    }

    //USERS ----------------------------------
}
