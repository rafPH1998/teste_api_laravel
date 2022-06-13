<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'point';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['card_id', 'points', 'spent'];
}
