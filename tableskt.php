<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication</title>

    <style>
        body{
            topmargin:10px;
        }
    </style>
</head>
<body>
    <br>
    <br>
    <center>
    <form action="" method="post"id="form1">
        <label >The number to be multiplied &nbsp;<input type="number" id="num1" name="number">
        </label>
        <label ><input type="submit" value="Get the table"></label>
    </form>
    <?php
        
       $n1= $_POST["number"];
      echo "$n1'S TABLE";
      for($i=1;$i<=10;$i++)
      {
        $m=$i*$n1;
        echo "<table >
        <tr>
        <td>$i</td>
        <td>*</td>
        <td>$n1</td>
        <td>=</td>
        <td>$m</td>
        </tr>
        </table>";
        echo "<br>";
        // echo "$i * $n1= ".$m;
      }
      
    ?>
    </center>
</body>
</html>