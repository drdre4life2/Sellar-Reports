<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Services\ReportService;


class ReportController extends Controller
{
    public function __construct(ReportService $service)
    {
        $this->reportService = $service;
    }
    public function index(Request $request)
    {
        $date = "";
        $weekly = Carbon::now()->subDays(7);
        $monthly = Carbon::now()->subMonth(1);

        if ($request->range != null) {
            if ($request->range == "weekly") {
                $date = $weekly;
            } else {
                $date = $monthly;
            }
        } else {
            $date = $weekly;
        }
        $reports = $this->reportService->getReport($date);

        return view('reports.report', compact('reports') );
    }

}
