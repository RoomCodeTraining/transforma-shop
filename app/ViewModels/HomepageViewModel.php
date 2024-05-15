<?php

namespace App\ViewModels;

use App\Models\Product;
use Spatie\ViewModels\ViewModel;

class HomepageViewModel extends ViewModel
{
    public function __construct()
    {
        //
    }

    /*
    * return latest products added to the shop
    */
    public function latestProducts()
    {
        return Product::latest()->inStock()->limit(config('shop.products.limit_latest'))->get();
    }

    /*
    * return popular products
    */
    public function popularProducts()
    {
        return Product::query()->inStock()->popular()->limit(config('shop.products.limit_popular'))->get();
    }

    /*
    * return all product orderBy items_count
    */
    public function products()
    {
        return Product::query()->inStock()->latest()->get();
    }
}
