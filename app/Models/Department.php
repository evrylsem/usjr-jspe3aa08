<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Student;
// use App\Models\College;
// use App\Models\Program;

class Department extends Model
{
    use HasFactory;
    protected $primaryKey = 'deptid';
    protected $fillable = ['deptfullname', 'deptshortname'];
    public function colleges()
    {
        return $this->belongsTo(College::class, 'deptcollid', 'collid');
    }

    public function programs()
    {
        return $this->hasMany(Program::class, 'progcolldeptid', 'progid');
    }
}
