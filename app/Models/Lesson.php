<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Student;

class Lesson extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'lessons';
    protected $guarded = [];

    public function students()
    {
        return $this -> belongsToMany(Student::class);
    }
}
