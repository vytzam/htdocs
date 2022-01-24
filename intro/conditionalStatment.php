<?php
if(1>0){
    echo "kodas veikia";
}elseif (1<5) {
    echo "salyga buvo false";
} else {
    echo "sis niekada nebus atspausdintas";
}

//SWITH
$color = "green";
switch ( $color){
    case "red":
        echo "STOP";
        break;//stabdom kodo veikima
    case "yellow":
        echo "WAIT";
        break;
    case "green":
        echo"GO";
        break;
    default :
    echo"invalid color";
}


?>