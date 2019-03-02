<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleProducts extends Controller
{
    protected $acf = true;

    public function calculateDiscount() {
        $price = get_field('price');
        $discount = get_field('discount');

        $calculated = $price - ($discount/100 * $price);

        return $calculated;
    }

    public function relatedProducts() {
        $args = [
            'post_type' => 'products',
            'posts_per_page' => 5,
            'orderby' => 'rand'
        ];

        $query = new \WP_Query($args);
        return $query;
    }
}
