<html>
    <link rel ="stylesheet" href="myhwstyle.css"/>
<body>
    <style>
        body{
            background-image: url(https://img.freepik.com/free-photo/abstract-pastel-grid-background_53876-104004.jpg?w=1380&t=st=1704823104~exp=1704823704~hmac=91cca6085ab1ccea2bd6666fe9854e1368d5797c54c770285bb7fe625922df48);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size:cover;


        }
        h1{
            margin: 0;
            padding: 0;
            text-align: center;
            position: absolute;
            top:50%;
            left: 50%;
            transform: translatex(-50%)translateY(-50%);
            font-size: 50px;


        }
        input{
            margin: 0;
            padding: 0;
            text-align: center;
            position: absolute;
            top:55%;
            left: 49%;
            transform: translatex(-50%)translateY(-50%);


        }
        button{
            margin: 0;
            padding: 0;
            text-align: center;
            position: absolute;
            top:55%;
            left: 56%;
            transform: translatex(-50%)translateY(-50%);
        }
        </style>

<h1>Multiplication Table</h1>
<form method ="post" action = "/home-work">
    @csrf
    <center><input type="text" name = "mynumber"></center>
    <button type = "submit">Submit</button>
</form>
    </body>
</html>

