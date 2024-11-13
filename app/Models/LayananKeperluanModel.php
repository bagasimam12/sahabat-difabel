<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LayananKeperluanModel extends Model
{
    protected $table = 'keperluan_layanan';
    protected $guarded = [];
    protected $primaryKey = 'keperluan_layanan_id';
    public $timestamps = false;
}
