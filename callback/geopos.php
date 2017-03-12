<?
session_start();

require_once ("/var/www/u0205105/data/www/pioneerdjschool.ru/app/core/dbo.php");

if($_POST['lat'] && $_POST['lon']){
    $pos_loc = $_POST['lat'] .":". $_POST['lon'];
    if($_SESSION['user']['pos_id']){
        if ($_SESSION['user']['pos_id'] != $pos_loc) {
            $pos = array("sess_id" => $_SESSION['user']['cur_sess_id'], "lat" => $_POST['lat'], "lon" => $_POST['lon']);
            $result = DBConnect::init()->saveGeoPos($pos);
        } else {
            $result = " exists";
        }
    } else {
        $pos = array("sess_id" => $_SESSION['user']['cur_sess_id'], "lat" => $_POST['lat'], "lon" => $_POST['lon']);
        $result = DBConnect::init()->saveGeoPos($pos);
    }
    $_SESSION['user']['pos_id'] = $_POST['lat'] . ":" . $_POST['lon'];
    echo "широта: ". $_POST['lat'] ." долгота: ". $_POST['lon'] ." дата: ". date("H:i:s") ."<br />";
    echo $result ."<br />";

}
?>