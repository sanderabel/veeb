<?php
/**
 * Created by PhpStorm.
 * User: sander.abel
 * Date: 14.02.2018
 * Time: 12:42
 */
// lisame kasutusele sessiooni
session_start();
if (!isset($_SESSION['serveriArv'])){
    $_SESSION['serveriArv'] = rand(1, 50);
} else {
    $serveriArv = $_SESSION['serveriArv'];
}

echo '
    <form method="post" action="'.$_SERVER['PHP_SELF'].'">
        Sisesta arv 0-50: <input type="number" name="kasutajaArv"><br />
        <input type="submit" value="Kontrolli">
    </form>
';


// kontrollime, kas arv on edastatud
if(!empty($_POST['kasutajaArv'])){
    // määrame arvu
    $serveriArv = 10;
    $kasutajaArv = $_POST['kasutajaArv'];
    if ($kasutajaArv > $serveriArv) {
        echo 'Pakutud väärtus on suurem';
    }
    if ($kasutajaArv < $serveriArv) {
        echo 'Pakutud väärtus on väiksem';
    }
    if (abs(number:$kasutajaArv-$serveriArv)<=5){
        if ($kasutajaArv == $serveriArv){
            echo 'Arvasid ära!<br />';
            echo 'Arv on '.$serveriArv.'<br />';
            echo 'Arvu ära arvamisel läks '.$katseteArv.'';
            exit;
        }
        echo 'Oled juba lähedal!';
    }
} else {
    echo 'Arv peab olema sisetatud';
}