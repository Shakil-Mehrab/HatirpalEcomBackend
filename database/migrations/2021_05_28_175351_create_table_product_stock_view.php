<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductStockView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW product_stock_view AS
            SELECT

                products.id as product_id,
                COALESCE(SUM(stocks.quantity) - COALESCE(SUM(product_order.quantity), 0), 0) as stock,
                case when COALESCE(SUM(stocks.quantity) - COALESCE(SUM(product_order.quantity), 0), 0) > 0
                    then true
                    else false
                end in_stock
            FROM products
            LEFT JOIN (
                SELECT
                    stocks.product_id as id,
                    SUM(stocks.quantity) as quantity
                FROM stocks
                GROUP BY stocks.product_id
            ) AS stocks USING (id)
            LEFT JOIN (
                SELECT
                    product_order.product_id as id,
                    SUM(product_order.quantity) as quantity
                FROM product_order
                GROUP BY product_order.product_id
            ) AS product_order USING (id)
            GROUP BY products.id
        ");
        // Schema::create('product_stock_view', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('product_id')->unsigned();
        //     $table->integer('stock')->index();
        //     $table->integer('in_stock')->default(0);
        //     $table->timestamps();
        //     $table->foreign('product_id')->references('id')->on('products');
        // });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_stock_view');
    }
}
