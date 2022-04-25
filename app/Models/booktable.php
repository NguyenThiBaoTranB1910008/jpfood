<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class booktable extends Model
{
    protected $table = 'booktable';
    protected $fillable = ['user', 'fullname','seating', 'occasion','note','datebook','timebook'];
    public $timestamps = false;
    public function users()
    {
        return $this->belongsToMany(users::class, 'book')->withPivot('book_a_table');
    }
}
