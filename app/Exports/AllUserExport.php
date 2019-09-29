<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AllUserExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::select('id', 'first_name', 'last_name', 'email', 'phone')->get();
    }
    public function headings() : array{
        return [
            'Id',
            'First Name',
            'Last Name',
            'Email',
            'Phone',
        ];
    }
}
