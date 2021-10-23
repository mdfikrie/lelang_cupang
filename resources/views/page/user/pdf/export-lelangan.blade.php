<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table1 {
            font-family: sans-serif;
            color: #232323;
            border-collapse: collapse;
        }
        
        .table1, th, td {
            border: 1px solid #999;
            padding: 5px 5px;
        }
    </style>
</head>
<body>
    <center><h2>Rekap Data Lelangan</h2></center>
<table class="table1">
    <tr>
        <th>No.</th>
        <th>Judul</th>
        <th>Pemenang</th>
        <th>WA</th>
        <th>Tanggal</th>
        <th>Nominal</th>
    </tr>
    @foreach($history as $historys)
    <tr>
        <td>{{$loop->iteration}}.</td>
        <td>{{$historys->judul}}</td>
        <td>{{$historys->pemenang}}</td>
        <td>0{{$historys->telp_pemenang}}</td>
        <td>{{$historys->created_at->format('d-m-Y')}}</td>
        <td>@currency($historys->nominal)</td>
    </tr>
    @endforeach
    <tr>
        <th colspan="5" >Total</th>
        <th colspan="1">@currency($total)</th>
    </tr>
</table>
</body>
</html>