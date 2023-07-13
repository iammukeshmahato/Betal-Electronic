v<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id('brands_id');
            $table->string('brand_name');
            $table->longText('brand_discription');
            $table->string('brand_image');
            $table->string('url');
            $table->unsignedBigInteger('addedby');
            $table->foreign('addedby')->references('id')->on('users');
            $table->unsignedBigInteger('approvedby')->nullable();
            $table->foreign('approvedby')->references('id')->on('users');
            $table->unsignedBigInteger('updatedby')->nullable();
            $table->foreign('updatedby')->references('id')->on('users');
            $table->unsignedBigInteger('updateapprovedby')->nullable();
            $table->foreign('updateapprovedby')->references('id')->on('users');
            $table->string('status')->default('pending');
            $table->string('updatestatus')->nullable();
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
        Schema::dropIfExists('brands');
    }
};
