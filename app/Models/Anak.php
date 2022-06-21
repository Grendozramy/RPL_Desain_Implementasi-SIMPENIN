<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gizi;
use Carbon\Carbon;

class Anak extends Model
{
    use HasFactory;

    /**
     * guarded
     *
     * @var array
     */
    protected $guarded = [];

    public function gizi()
    {
        return $this->hasOne(Gizi::class);
    }

    public function age()
    {
        return Carbon::parse($this->attributes['tgl_lahir'])
        ->diff(\Carbon\Carbon::now())->format('%y Tahun, %m Bulan dan %d Hari');
    }
}
