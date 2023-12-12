<?php

namespace App\Http\Controllers\Dashboard;

use App\Exports\LateInstallmentsExport;
use App\Exports\MonthInstallmentsExport;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\DailyHistory;
use App\Models\InstallmentRequest;
use App\Models\Invoice;
use App\Models\InvoiceInstallments;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function index()
    {
        return view('Dashboard.home');
    }

}
