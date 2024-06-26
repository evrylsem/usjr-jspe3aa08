<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $primaryKey = 'progid';
    protected $fillable = ['progfullname', 'progshortname'];
    public function college()
    {
        return $this->belongsTo(College::class, 'progcollid', 'collid');
    }

    public function departments()
    {
        return $this->belongsTo(Department::class, 'progcolldeptid', 'deptid');
    }
}
