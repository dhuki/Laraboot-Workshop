<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListActivity extends Model
{
	protected $fillable = [
    	'id',
    	'user_id',
    	'jenis_kegiatan',
    	'tanggal_kegiatan',
    	'deskripsi_kegiatan',
    	'keterangan'
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
