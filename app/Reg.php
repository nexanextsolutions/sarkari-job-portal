<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reg extends Model
{
    protected $fillable = [
        'post_applied', 'post_code', 'full_name', 'mobile', 'email', 'aadhaar', 'pan', 'father', 'location', 'qualification', 'experience', 'fees',
        'payment_done', 'payment_id', 'razorpay_id', 'category', 'gender', 'citizen',
    ];
}
  