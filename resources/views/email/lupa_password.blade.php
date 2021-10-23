
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
        <h3>Silahkan klik link dibawah ini untuk mengubah passwordl!</h3>
        <a href="{{Route('change-password',['email'=>$user->email,'token'=>$user->token])}}" class="btn">Change Password</a>
    </center>
</body>
</html>