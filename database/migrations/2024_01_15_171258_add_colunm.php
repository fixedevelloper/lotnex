<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('direct_partner_activate1')->default(0)->nullable();
            $table->integer('direct_partner_activate2')->default(0)->nullable();
            $table->integer('direct_partner_activate3')->default(0)->nullable();
            $table->integer('direct_partner_activate4')->default(0)->nullable();
            $table->integer('direct_partner_activate5')->default(0)->nullable();
            $table->integer('direct_partner_activate6')->default(0)->nullable();
            $table->integer('direct_partner_activate7')->default(0)->nullable();
            $table->integer('direct_partner_activate8')->default(0)->nullable();
            $table->integer('direct_partner_activate9')->default(0)->nullable();
            $table->integer('direct_partner_activate10')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
