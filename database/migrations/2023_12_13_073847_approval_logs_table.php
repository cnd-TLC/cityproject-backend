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
        Schema::create('approval_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pr_no');
            $table->foreign('pr_no')->references('pr_no')->on('purchase_requests')->onDelete('cascade');
            $table->unsignedBigInteger('approved_by');
            $table->foreign('approved_by')->references('id')->on('departments')->onDelete('cascade');
            $table->text('note');
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
