<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $fillable = ['ipname', 'email','SDT', 'password'];
    public $timestamps = false;
    public function booktable()
    {
        return $this->belongsToMany(booktable::class, 'book')->withPivot('book_a_table');
    }
}
