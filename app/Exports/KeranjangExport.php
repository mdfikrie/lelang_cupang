<?php

namespace App\Exports;

use App\Models\Keranjang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KeranjangExport implements FromCollection, WithMapping, WIthHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Keranjang::where('id_pelelang',auth()->user()->id)->get();
    }
    public function map($keranjang): array
    {
        return [
            $keranjang->judul,
            $keranjang->bid->user->username,
            $keranjang->bid->nominal,
            $keranjang->created_at,
        ];
    }
    public function headings(): array
    {
        return [
            'Judul',
            'Pemenang',
            'Nominal',
            'Tanggal',
        ];
    }
}
