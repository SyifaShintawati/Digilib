<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = 'buku';
    protected $fillable = ['id_jb','judul','pengarang','isbn','thn','penerbit','stok'];
    protected $primaryKey = 'id';

    public function jenis(){
    	return $this->belongsTo('App\jenis', 'id_jb');
    }

    public function peminjaman(){
    	return $this->hasMany('App\peminjaman', 'id');
    }
}
