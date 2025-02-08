<?php
require_once 'src/CouponApplier.php';
require_once 'src/CarCouponGenerator.php';
require_once 'src/BmwCuoponGenerator.php';
require_once 'src/MercedezCuoponGenerator.php';


/* 
Asuming that is high season and we have a big stock of both brands 
(even though Strategy Pattern allow us to set diferent states of these cirumstances for each brand independently) 
the calculation of discount is as follow:
*/

//Instantiation of coupon applier
$couponApplier = new CouponApplier();

//Discount for BMW
$bmwCouponGenerator = new BmwCuoponGenerator();
echo $bmwCouponGenerator->getTotalDiscount();

//Discount for Mercedes-Benz
$mercedesCouponGenerator = new MercedezCuoponGenerator();
echo $mercedesCouponGenerator->getTotalDiscount();

?>




