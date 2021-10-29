<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Record extends Model
{
    protected $fillable = [
        'systolic',
        'diastolic',
        'patient_id',
        'created_by'
    ];
    
    
    use SoftDeletes, HasFactory;
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
