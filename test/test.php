<?php



include "../xdc-sdk-php/src/common/constant.php";
include "../xdc-sdk-php/src/modules/XRC20/XDCSDK.php";
use XRC20\XDCSDK\XDCSDK;



$a = new XDCSDK();
// $a->getAllowance();
// $a->getBalanceOf();
// $a->getname();
// $a->getTotalSupply();

// $a->getsymbol();

$a->transferToken();


?>