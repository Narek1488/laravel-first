<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function($table) {

            $table->BigInteger('user_id')->unsigned()->after('category_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->decimal('price', 11, 3)->after("user_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function($table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');         
            $table->dropColumn('price');
        });
    }
}
