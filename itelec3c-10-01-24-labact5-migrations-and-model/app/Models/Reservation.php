<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    // protected $table = 'reservations';

    protected $fillable = [
        'irjFirstName',
        'irjLastName',
        'irjEmail',
        'irjContactNo',
        'irjAddress',
        'irjCheckinDate',
        'irjRoomType',
        'irjNoOfDays',
        'irjNoOfGuests',
        'irjSpecialRequest',
        'irjRoomPrice',
        'irjTotalPrice'
    ];
}
