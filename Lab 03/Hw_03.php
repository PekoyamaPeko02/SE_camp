<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" />
    </head>

<body>
    <style>
        body{
        background-color: rgb(174, 214, 241 );

      }
    </style>
    <center>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    </center>
    <div class ="scroll-bg">
        <div class = "scroll-div">
            <center>
    <table>
        <tbody>
            <tr>
                <td>
                <?php 
                for($i = 1 ; $i<25 ; $i++){
                    echo "{$multi_x} x {$i} = ".($multi_x*$i)."<br/>"; 
                    }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
    </center>
    
    </div>
        
    
    
</body>

</html>