<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Petugas;
use Illuminate\Support\Carbon;

class Posyandu extends Model
{
    use HasFactory;

    /**
     * guarded
     *
     * @var array
     */
    protected $guarded = [];

    public function petugas()
    {
        return $this->belongsTo(Petugas::class);
    }

    public function getCreatedAtAttibute()
    {
        return Carbon::parse($this->attributes['jadwal'])
            ->translatedFormat('l, d F Y');
    }
}
