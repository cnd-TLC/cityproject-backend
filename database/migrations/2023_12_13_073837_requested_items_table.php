<?php

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
        Schema::create('requested_items', function (Blueprint $table) {
            $table->id('item_id');
            $table->unsignedBigInteger('pr_no');
            $table->foreign('pr_no')->references('pr_no')->on('purchase_requests')->onDelete('cascade');
            $table->string('unit');
            $table->text('item_description');
            $table->unsignedBigInteger('qty');
            $table->decimal('unit_cost', 9, 2);
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
        //
    }
};
