<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    protected $table = 'jenis';
    protected $fillable = ['jenis'];
    protected $primaryKey = 'id';

    public function buku()
    {
    	return $this->hasMany('App\buku', 'id');
    }
}
