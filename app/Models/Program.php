<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = ['progfullname', 'progshortname'];
    public function college()
    {
        return $this->belongsTo(College::class, 'progcollid', 'progid');
    }

    public function departments()
    {
        return $this->belongsTo(Department::class, 'progcolldeptid', 'progid');
    }
}
