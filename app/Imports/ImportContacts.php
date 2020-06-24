<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportContacts implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'product_name'     => @$row[0],
            'product_category'    => @$row[1],
            'product_brand'    => @$row[2],
            'product_unit'    => @$row[3],
            'short_description'    => @$row[4],
            'long_description'    => @$row[5],
            'image_name'    => @$row[6],
            'expire_date'    => @$row[7],
            'purchase_price'    => @$row[8],
            'selling_price'    => @$row[9],
            'quantity'    => @$row[10],
            'vat'    => @$row[11],
            'sku'    => @$row[12],
            'barcode'    => @$row[13],
            'allow_customers_to_purchase_this_product'    => @$row[14],
            'charge_taxes_on_this_product'    => @$row[15],
            'meta_description'    => @$row[16],
            'variant1'    => @$row[17],
            'selling_price1'    => @$row[18],
            'sku1'    => @$row[19],
            'barcode1'    => @$row[20],
            'qty1'    => @$row[21],
            'variant2'    => @$row[22],
            'selling_price2'    => @$row[23],
            'sku2'    => @$row[24],
            'barcode2'    => @$row[25],
            'qty2'    => @$row[26],
            'variant3'    => @$row[27],
            'selling_price3'    => @$row[28],
            'sku3'    => @$row[29],
            'barcode3'    => @$row[30],
            'qty3'    => @$row[31],
            'variant4'    => @$row[32],
            'selling_price4'    => @$row[33],
            'sku4'    => @$row[34],
            'barcode4'    => @$row[35],
            'qty4'    => @$row[36],
            'variant5'    => @$row[37],
            'sku5'    => @$row[38],
            'selling_price5'    => @$row[39],
            'barcode5'    => @$row[40],
            'qty5'    => @$row[41],
        ]);
    }
}
