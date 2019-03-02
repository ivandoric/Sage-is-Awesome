<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class ArchiveProducts extends Controller
{
    public static function discountedPrice() {
        $price = get_field('price');
        $discount = get_field('discount');

        $calculated = $price - ($discount/100 * $price);

        return $calculated;
    }
}
