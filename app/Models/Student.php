<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Group;
use App\Models\Lesson;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'students';
    protected $guarded = [];

    public function group()
    {
        return $this -> belongsTo(Group::class);
    }

    public function lessons()
    {
        return $this -> belongsToMany(Lesson::class);
    }
}