<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey = 'studid';
    protected $fillable = ['studfirstname', 'studlastname', 'studmidname', 'studprogid', 'studyear'];
    public function colleges()
    {
        return $this->belongsTo(College::class, 'studcollid', 'collid');
    }
}
