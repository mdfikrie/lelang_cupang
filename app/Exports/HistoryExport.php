<?php

namespace App\Exports;

use App\Models\History;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HistoryExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return History::all();
    }
    public function map($history): array
    {
        return [
            $history->judul,
            $history->pemenang,
            '0'.$history->telp_pemenang,
            $history->nominal,
            $history->created_at->format('d-m-Y'),
        ];
    }
    public function headings(): array
    {
        return [
            'Judul',
            'Pemenang',
            'No. WA',
            'Nominal',
            'Tanggal',
        ];
    }
}
