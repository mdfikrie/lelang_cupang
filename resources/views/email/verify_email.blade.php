
<!DOCTYPE html>
<head>
    <style>
        .btn{
            background-color: lightskyblue;
            color:white;
            padding: 15px 32px;
            border-radius:20px;
            text-decoration: none;
        }
        .btn:hover{
	        opacity:0.9;
        }
    </style>
</head>
<body>
    <center>
        <h3>Silahkan melakukan konfirmasi email!</h3>
        <a href="{{Route('konfirmasi_email',['email'=>$user->email,'token'=>$user->token])}}" class="btn">Konfirmasi Email</a>
    </center>
</body>
</html>