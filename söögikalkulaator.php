<form method="post">
    <input type="text" name="hind" placeholder="Sisesta toidu hind!">
    <input type="submit" name="arvuta" value="arvuta!">
</form>
<?php
/**
 * Created by PhpStorm.
 * User: sander.abel
 * Date: 30.01.2018
 * Time: 11:28
 */
$soogiHind = $_POST['hind'];
$soodusProtsent = 15;
$opilaseToetus = 1.80;
// arvutused
if (isset($_POST['arvuta'])){
    $soodusHind = $soogiHind *  ((100 - $soodusProtsent) / 100);
    $hindOpilasele = $soodusHind - $opilaseToetus;
    echo 'Söögi hind õpilasele = '.$hindOpilasele.'<br />';
}
?>

