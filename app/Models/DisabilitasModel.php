<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DisabilitasModel extends Model
{
    protected $table = 'disabilitas';
    protected $guarded = [];
    protected $primaryKey = 'disabilitas_id';

    public function jenisDisabilitas(): BelongsTo
    {
        return $this->belongsTo(JenisDisabilitasModel::class, 'jenis_disabilitas_id', 'jenis_disabilitas_id');
    }

    public function keperluanDisabilitas(): HasMany
    {
        return $this->hasMany(KeperluanDisabilitasModel::class, 'disabilitas_id', 'disabilitas_id');
    }
}
