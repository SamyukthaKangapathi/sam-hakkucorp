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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('city_name');
            $table->string('day');
            $table->string('month');
            $table->string('year');
            $table->string('lessor_name');
            $table->string('lessor_father_name');
            $table->string('lessor_address_line_1');
            $table->string('lessor_address_line_2');
            $table->string('lessor_address_line_3');
            $table->string('lessor_city');
            $table->string('lessor_state');
            $table->string('lessor_pincode');
            $table->string('lessee_name');
            $table->string('lessee_father_name');
            $table->string('lessee_address_line_1');
            $table->string('lessee_address_line_2');
            $table->string('lessee_address_line_3');
            $table->string('lessee_city');
            $table->string('lessee_state');
            $table->string('lessee_pincode');
            $table->string('property_address_line_1');
            $table->string('property_address_line_2');
            $table->string('property_address_line_3');
            $table->string('property_city');
            $table->string('property_state');
            $table->string('property_pincode');
            $table->string('property_area');
            $table->string('lease_term');
            $table->string('lease_start_date');
            $table->string('lease_signing_date');
            $table->string('lease_amount_per_month');
            $table->string('lease_amount');
            $table->string('max_arrears_month');
            $table->string('arrears_notice_month');
            $table->string('maintenance_notice_month');
            $table->string('witness_1_name');
            $table->string('witness_1_address_line_1');
            $table->string('witness_1_address_line_2');
            $table->string('witness_1_address_line_3');
            $table->string('witness_1_city');
            $table->string('witness_1_state');
            $table->string('witness_1_pincode');
            $table->string('witness_2_name');
            $table->string('witness_2_address_line_1');
            $table->string('witness_2_address_line_2');
            $table->string('witness_2_address_line_3');
            $table->string('witness_2_city');
            $table->string('witness_2_state');
            $table->string('witness_2_pincode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
