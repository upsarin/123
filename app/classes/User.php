<?class User {	static function login($user){			foreach($user as $key => $val){				$_SESSION['user'][$key] = $val;				$_SESSION['user']['sess_id'] = md5($user['login'] ."proto". $user['id'] ."box");			}		$params = array("id" => $_SESSION['user']['id']);		$upd_array = array("sess_id" => $_SESSION['user']['sess_id']);		DBConnect::init()->upd_user($params, $upd_array);	}		static function check(){		if(!isset($_SESSION['user']['sess_id'])) {			$_SESSION['user']['id'] = 'guest';            $_SESSION['user']['cur_sess_id'] = date("YmdHys");			$_SESSION['user']['permissions'] = '11';					}	}    static function check_city($array)    {        if($array['model'] != 'administrator') {            if (empty($_SESSION['user']['city']) || !$_SESSION['user']['city']) {                $_SESSION['user']['city'] = "moscow";                $_SESSION['user']['city_name'] = "Москва";                $_SESSION['user']['city_array'] = array(                    array("id" => "moscow", "title" => "Москва"),                    array("id" => "nsk", "title" => "Новосибирск"),                    array("id" => "almati", "title" => "Алматы"));                $_SESSION['user']['vk_link'] = "https://vk.com/pioneerdjmsk";                $_SESSION['user']['facebook_link'] = "https://www.facebook.com/PioneerDJmsk/";                $_SESSION['user']['instagram_link'] = "https://www.instagram.com/pioneerdjmsk/";                $_SESSION['user']['youtube_link'] = "https://www.youtube.com/pioneerdjschoolru";                $_SESSION['user']['city_phone'] = "+7 916 942-52-48";            } else if ($_SERVER['QUERY_STRING'] && $array['name'] != "pages") {                $city = $_GET['city'];                //$city = "almati";                if ($city == "nsk") {                    $_SESSION['user']['city'] = "nsk";                    $_SESSION['user']['city_name'] = "Нововсибирск";                    $_SESSION['user']['city_array'] = array(                        array("id" => "nsk", "title" => "Новосибирск"),                        array("id" => "moscow", "title" => "Москва"),                        array("id" => "almati", "title" => "Алматы"));                    $_SESSION['user']['vk_link'] = "https://vk.com/pioneerdjnsk";                    $_SESSION['user']['facebook_link'] = "https://www.facebook.com/PioneerDJnsk/";                    $_SESSION['user']['instagram_link'] = "https://www.instagram.com/pioneerdjnsk/";                    $_SESSION['user']['youtube_link'] = "https://www.youtube.com/pioneerdjschoolru";                    $_SESSION['user']['city_phone'] = "+7 913 015-90-09";                } else if ($city == "almati") {                    $_SESSION['user']['city'] = "almati";                    $_SESSION['user']['city_name'] = "Алмата";                    $_SESSION['user']['city_array'] = array(                        array("id" => "almati", "title" => "Алматы"),                        array("id" => "nsk", "title" => "Новосибирск"),                        array("id" => "moscow", "title" => "Москва"));                    $_SESSION['user']['vk_link'] = "https://vk.com/pioneerdjalmaty";                    $_SESSION['user']['facebook_link'] = "https://www.facebook.com/PioneerDJalmaty/";                    $_SESSION['user']['instagram_link'] = "https://www.instagram.com/pioneerdjalmaty/";                    $_SESSION['user']['youtube_link'] = "https://www.youtube.com/pioneerdjschoolru";                    $_SESSION['user']['city_phone'] = "+7 747 336-22-02 ";                } else if ($city == "moscow") {                    $_SESSION['user']['city'] = "moscow";                    $_SESSION['user']['city_name'] = "Москва";                    $_SESSION['user']['city_array'] = array(                        array("id" => "moscow", "title" => "Москва"),                        array("id" => "nsk", "title" => "Новосибирск"),                        array("id" => "almati", "title" => "Алматы"));                    $_SESSION['user']['vk_link'] = "https://vk.com/pioneerdjmsk";                    $_SESSION['user']['facebook_link'] = "https://www.facebook.com/PioneerDJmsk/";                    $_SESSION['user']['instagram_link'] = "https://www.instagram.com/pioneerdjmsk/";                    $_SESSION['user']['youtube_link'] = "https://www.youtube.com/pioneerdjschoolru";                    $_SESSION['user']['city_phone'] = "+7 916 942-52-48 ";                }            }            if ($_SERVER['QUERY_STRING']) {                if($array['name'] != "main") {                    header("Location: /". $array['name']);                } else {                    header("Location: /");                }            }        }    }		/*	static function permission($permission){				if($_SESSION['user']['permissions'] > $permission && $array['name'] != 'administrator'){			header("Location: /");		}	} 	*/	static function logout(){		$params = array("id" => $_SESSION['user']['id']);		$upd_array = array("sess_id" => "offline");		DBConnect::init()->upd_user($params, $upd_array);		session_destroy();	}	}?>