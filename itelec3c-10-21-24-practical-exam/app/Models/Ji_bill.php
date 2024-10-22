<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ji_bill extends Model
{
    use HasFactory;
    protected $table = 'ji_bill';

    protected $fillable = [
        'firstname',
        'lastname',
        'middleInitial',
        'email',
        'contactNo',
        'street',
        'city',
        'province',
        'country',
        'zip',
        'noOfWatts',
        'subType', //Residential, Industrial, Commercial
        'energyCharge',  //noOfWatts * subTypePrice (2.75, 3.75, 4.25)
        'disconnection', // 500 or 0
        'latePayment', //30% of energyCharge or 0
        'totalBill' //energyCharge + othe rcharges
    ];
}
