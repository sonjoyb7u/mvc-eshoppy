<?php
//include_once ($_SERVER['DOCUMENT_ROOT'] . '/BitmCtg/eshoppy/vendor/autoload.php');

ini_set("display_errors","On");
error_reporting(E_ALL^E_NOTICE);


session_start();
include_once ($_SERVER['DOCUMENT_ROOT'] . '/eshoppy/vendor/autoload.php');
//include_once ($_SERVER['DOCUMENT_ROOT'].'/'.$_SESSION['app_path']."/vendor/autoload.php");

use Eshoppy\Utility\Utility;
use Eshoppy\Utility\Debugger;
use Eshoppy\Utility\Validator;
use Eshoppy\Utility\Message;
use Eshoppy\Carts\Carts;



//$id = $_POST['id'];
$data = $_POST;
$file = $_FILES;

$carts = new Carts();

$cart = $carts->updateCart($data, $file);


if($cart) {

    Message::set('Product is Update successfully done.');
}else {

    Message::set('There is a Problem while Editing Product, Please try again!');
}


Utility::redirect('index.php');


