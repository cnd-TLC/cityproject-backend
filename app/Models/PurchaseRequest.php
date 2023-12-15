<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseRequest extends Model
{
    use HasFactory;

    protected $primaryKey = 'pr_no';

    protected $fillable = [
        'pr_no',
        'fund',
        'cash_availability',
        'fpp',
        'purpose',
        'date_of_request'
    ];
}
