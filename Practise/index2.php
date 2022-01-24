<?php
$text="*";
for ($i=1;$i<=6;$i++){
    for($x=1;$x<$i;$x++){
        echo $text;
    }echo "<br>";

}
for ($i=1;$i<7;$i++){
    for($x=1;$x<6;$x++){
        echo "<td>$i*$x" ;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>zvaigzdutes</h1>
    <h1>lentele</h1>
<table>
    <?php

for ($i=1;$i<7;$i++){
    echo"<tr style='border:2px solid black'>";
    for($x=1;$x<6;$x++){
        echo "<td>$i*$x = ".$i*$x."</td>";
    }
    echo"</tr>";
}


?>
</table>

<h1>Šachmatai</h1>
<table style="width:270px">
<?php
for($i=1;$i<=8;$i++){
            echo "<tr>";
            for($x=1;$x<=8;$x++){
                $total=$i+$x;
                if($total%2==0){ echo  "<td style= 'width:30px; height:30px; background-color: #FFFFFF;'> </td>";

                }else{echo  "<td style= 'width:30px; height:30px; background-color: #000000;'> </td>"; }
             
            }
            echo "</tr>";
        }
    

?>
</table>

<h1>eglute</h1>
<?php
$n=30;
$number=0;
for ($i=1;$i<=$n;$i++){
    for($x=1;$x<=$i;$x++){
        echo " ".$number=$number+1.;
     } echo "<br>";
    }
?>
<h1>vardas</h1>
<?php
$star="*";
for ($i=1;$i<8;$i++){
    for($x=1;$x<6;$x++){
        if((($x==5 ||$x==1) && $i<6)||($x==3 && $i==7)||($i==6 && ($x==4 || $x==2)) ){
            echo "*";
        }else { 
            echo "&nbsp" ;
        }

    }
    echo "<br>";
}


?>



</body>
</html>