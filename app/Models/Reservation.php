<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = ['id'];

    public function getRelations()
    {
        return [];
    }

    /**
     * START CASTING
     */


    /**
     * ***************************************************************************************
     */
    /**
     * START MUTATOR
     */


    /**
     * ***************************************************************************************
     */
    /**
     * START SCOPES
     */


    /**
     * ***************************************************************************************
     */
    /**
     * START METHODS
     */


    /**
     * ***************************************************************************************
     */
    /**
     * START RELATIONS
     */

    public function banks()
    {
        return $this->hasMany(ReservationBank::class, 'reservation_id');
    }


}
