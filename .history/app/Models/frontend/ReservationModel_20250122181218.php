<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class ReservationModel extends Model
{
    use HasFactory;
    protected $table = "contact";
    protected $primary_Key = "id"; 
}
