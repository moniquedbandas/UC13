<?php
    $d = getdate();
    switch($d['wday']){
        case 0:
            echo "sleepy sunday";
            break;
        case 1:
            echo "smile, it's monday ;(" ;
            break;
        case 2:
            echo "hey, it's tuesday and it's all right";
            break;
        case 3:
            echo "it's wednesday! great day to skip class";
            break;
        case 4:
            echo "thursday.. friday is near!";
            break;
        case 5:
            echo "friday, you're finally here my dear";
            break;
        case 6:
            echo "saturday? cleaning day?";
            break;
        default:
        echo "erro na vida";
    }
?>