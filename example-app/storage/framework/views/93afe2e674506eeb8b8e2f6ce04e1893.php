<html>

    <head>
        <meta charset="utf-8"/>
        
</head>

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
            top:10%;
            left: 50%;
            transform: translatex(-50%);
            font-size: 50px;
            color: #705348;
        }
        .font{
            margin: 0;
            padding: 0;
            text-align: center;

            position: absolute;
            top:20%;
            left: 50%;
            transform: translatex(-65%);
            font-size: 20px;
            width: 300px;

        }
        .bg{
            background: rgb(255,202,212);
            width: 400px;
            height: 600px;
            margin: 0 auto;
            border: 5px solid gray;
        }


        </style>
        <h1>Multiplication Table</h1>

        <div class="font">
            <div class="bg" >

        <?php
        for($i=1 ; $i<26 ; $i++){
            echo "{$mynumber} x {$i} =".($mynumber*$i)."<br/>";

        }
        ?>
        </div>




</body>

</html>
<?php /**PATH C:\xampp\htdocs\SE_CAMP\example-app\resources\views/hw/hw04_result.blade.php ENDPATH**/ ?>