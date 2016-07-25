<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    //

	protected $fillable = ['TodoName', 'IsDone', 'OrderNum', 'UserId'];
}