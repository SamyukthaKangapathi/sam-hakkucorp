<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_name',
        'day',
        'month',
        'year',
        'lessor_name',
        'lessor_father_name',
        'lessor_address_line_1',
        'lessor_address_line_2',
        'lessor_address_line_3',
        'lessor_city',
        'lessor_state',
        'lessor_pincode',
        'lessee_name',
        'lessee_father_name',
        'lessee_address_line_1',
        'lessee_address_line_2',
        'lessee_address_line_3',
        'lessee_city',
        'lessee_state',
        'lessee_pincode',
        'property_adress_line_1',
        'property_adress_line_2',
        'property_adress_line_3',
        'property_city',
        'property_state',
        'property_pincode',
        'property_area',
        'lease_term',
        'lease_start_date',
        'lease_signing_date',
        'lease_amount_per_month',
        'lease_amount',
        'max_arrears_month',
        'arrears_notice_month',
        'maintenance_notice_month',
        'witness_1_name',
        'witness_1_address_line_1',
        'witness_1_address_line_2',
        'witness_1_address_line_3',
        'witness_1_city',
        'witness_1_state',
        'witness_1_pincode',
        'witness_2_name',
        'witness_2_address_line_1',
        'witness_2_address_line_2',
        'witness_2_address_line_3',
        'witness_2_city',
        'witness_2_state',
        'witness_2_pincode'
    ];
}
