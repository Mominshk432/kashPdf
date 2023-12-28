<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerEquipments extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getEquipment()
    {
        return $this->hasOne(Equipment::class, 'id', 'equipment_id',);
    }
}
