<?php
namespace App\Builders\Product;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Product;

class ProductBuilder extends Builder
{
    public function inStock()
    {
        return $this->where('on_stock', true);
    }

    public function outOfStock()
    {
        return $this->where('on_stock', false);
    }
}