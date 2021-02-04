<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user',
        'id_movie',
        'rating',
        'review',
    ];



    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }


    public function movie()
    {
        return $this->belongsTo(Movie::class, 'id_movie', 'id');
    }

}
