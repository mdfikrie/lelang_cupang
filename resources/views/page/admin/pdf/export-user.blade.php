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
    <center><h2>Daftar User</h2></center>
<table class="table1">
    <tr>
        <th>No.</th>
        <th>Email</th>
        <th>Username</th>
        <th>Alamat</th>
        <th>No. WA</th>
        <th>Created At</th>
    </tr>
    @foreach($user as $users)
    <tr>
        <td>{{$loop->iteration}}.</td>
        <td>{{$users->email}}</td>
        <td>{{$users->username}}</td>
        <td>{{$users->alamat}},{{$users->kota}}</td>
        <td>{{$users->telp}}</td>
        <td>{{$users->created_at->format('d-m-Y')}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>