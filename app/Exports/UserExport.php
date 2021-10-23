<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::where('role','user')->get();
    }
    public function map($user): array
    {
        return [
            $user->email,
            $user->username,
            $user->alamat,
            '0'.$user->telp,
            $user->created_at->format('d-m-Y'),
        ];
    }
    public function headings(): array
    {
        return [
            'Email',
            'Username',
            'Alamat',
            'No. Wa',
            'Created at',
        ];
    }
}
