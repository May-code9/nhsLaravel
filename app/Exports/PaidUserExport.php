<?php

namespace App\Exports;

use App\Transaction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PaidUserExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Transaction::join('users', 'transactions.user_id', '=', 'users.id')
            ->select('transactions.id', 'first_name', 'last_name', 'phone', 'email', 'amount')
            ->get();
    }

    public function headings() : array{
        return [
            'Id',
            'First Name',
            'Last Name',
            'Phone',
            'Email',
            'Amount',
        ];
    }
}
