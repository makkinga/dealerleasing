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
        Schema::create('insurance_applications', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->bigInteger('legal_form_id')->unsigned();
            $table->foreign('legal_form_id')->references('id')->on('legal_forms');
            $table->string('iban');
            $table->string('street');
            $table->string('house_number');
            $table->string('postal_code');
            $table->string('city');
            $table->string('email');
            $table->string('finance_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurance_applications');
    }
};
