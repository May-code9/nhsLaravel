<?php

namespace App\Http\Controllers\Admin;

use App\Exports\AllUserExport;
use App\Exports\PaidUserExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function exportPaid($type)
    {
        return Excel::download(new PaidUserExport(), 'paidUsers.' . $type);
    }
    public function exportAll($type)
    {
        return Excel::download(new AllUserExport(), 'allUsers.' . $type);
    }
}
