<?php

return [
    'products' => [
        'limit_latest' => env('SHOP_PRODUCTS_LIMIT_LATEST', 8),
        'limit_popular' => env('SHOP_PRODUCTS_LIMIT_POPULAR', 8),
        'limit_featured' => env('SHOP_PRODUCTS_LIMIT_FEATURED', 8),
        'limit_best_selling' => env('SHOP_PRODUCTS_LIMIT_BEST_SELLING', 0),
    ],
    'orders' => [
        'hours_to_cancel' => env('SHOP_ORDERS_HOURS_TO_CANCEL', 24),
    ],
];
