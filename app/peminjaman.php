<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $fillable = ['no_pinjam','id_agt','id_buku','tgl_pinjam','tgl_hsblk','tgl_kbl','denda'];
    protected $primaryKey = 'id';

    public function anggota(){
    	return $this->belongsTo('App\anggota', 'id_agt');
    }

    public function buku(){
    	return $this->belongsTo('App\buku', 'id_buku');
    }
}
