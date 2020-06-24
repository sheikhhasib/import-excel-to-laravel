<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('product_category');
            $table->string('product_brand');
            $table->string('product_unit');
            $table->string('short_description');
            $table->string('long_description');
            $table->string('image_name');
            $table->string('expire_date');
            $table->string('purchase_price');
            $table->string('selling_price');
            $table->string('quantity');
            $table->string('vat');
            $table->string('sku');
            $table->string('barcode');
            $table->string('allow_customers_to_purchase_this_product');
            $table->string('charge_taxes_on_this_product');
            $table->string('meta_description');
            $table->string('variant1');
            $table->string('selling_price1');
            $table->string('sku1');
            $table->string('barcode1');
            $table->string('qty1');
            $table->string('variant2');
            $table->string('selling_price2');
            $table->string('sku2');
            $table->string('barcode2');
            $table->string('qty2');
            $table->string('variant3');
            $table->string('selling_price3');
            $table->string('sku3');
            $table->string('barcode3');
            $table->string('qty3');
            $table->string('variant4');
            $table->string('selling_price4');
            $table->string('sku4');
            $table->string('barcode4');
            $table->string('qty4');
            $table->string('variant5');
            $table->string('sku5');
            $table->string('selling_price5');
            $table->string('barcode5');
            $table->string('qty5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
