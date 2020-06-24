<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'product_category',
        'product_brand',
        'product_unit',
        'short_description',
        'long_description',
        'image_name',
        'expire_date',
        'purchase_price',
        'selling_price',
        'quantity',
        'vat',
        'sku',
        'barcode',
        'allow_customers_to_purchase_this_product',
        'charge_taxes_on_this_product',
        'meta_description',
        'variant1',
        'selling_price1',
        'sku1',
        'barcode1',
        'qty1',
        'variant2',
        'selling_price2',
        'sku2',
        'barcode2',
        'qty2',
        'variant3',
        'selling_price3',
        'sku3',
        'barcode3',
        'qty3',
        'variant4',
        'selling_price4',
        'sku4',
        'barcode4',
        'qty4',
        'variant5',
        'sku5',
        'selling_price5',
        'barcode5',
        'qty5',
    ];
}
