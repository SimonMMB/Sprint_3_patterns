<?php

require_once 'CarCouponGenerator.php';
require_once 'BmwCuoponGenerator.php';
require_once 'MercedezCuoponGenerator.php';

class CouponApplier
{
    private CarCouponGenerator $carCouponGenerator;

    public function setStrategy(CarCouponGenerator $carCouponGenerator)
    {
        $this->carCouponGenerator = $carCouponGenerator;
    }

    public function getTotalDiscount(): int
    {
        return $this->carCouponGenerator->getTotalDiscount();
    }
}

?>