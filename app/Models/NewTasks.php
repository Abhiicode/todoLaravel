<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewTasks extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $primarykey = 'no';
}
