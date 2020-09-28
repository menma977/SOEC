<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinksTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('links', function (Blueprint $table) {
      $table->id();
      $table->bigInteger('product_id');
      $table->text('tokopedia')->nullable();
      $table->double('tokopedia_discount')->default(0);
      $table->text('shopee')->nullable();
      $table->double('shopee_discount')->default(0);
      $table->text('bukalapak')->nullable();
      $table->double('bukalapak_discount')->default(0);
      $table->text('lazada')->nullable();
      $table->double('lazada_discount')->default(0);
      $table->text('blibli')->nullable();
      $table->double('blibli_discount')->default(0);
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
    Schema::dropIfExists('links');
  }
}
