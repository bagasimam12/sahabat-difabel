<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KeperluanDisabilitasModel extends Model
{
    use HasUuids;

    protected $table = 'keperluan_disabilitas';
    protected $guarded = [];
    protected $primaryKey = 'keperluan_disabilitas_id';

    public function keperluanLayanan(): BelongsTo
    {
        return $this->belongsTo(LayananKeperluanModel::class, 'keperluan_layanan_id', 'keperluan_layanan_id');
    }
}
