<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    protected $table = 'anggotas';
    protected $fillable = ['no_agt','nm_agt','alamat','kota','tlp'];
    protected $primaryKey = 'id';

    public function peminjaman(){
    	return $this->hasMany('App\peminjaman', 'id');
    }
}
