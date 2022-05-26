<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anak;
use Carbon\Carbon;

class Gizi extends Model
{
    use HasFactory;

    /**
     * guarded
     *
     * @var array
     */
    protected $guarded = [];

    public function anak()
    {
        return $this->hasOne(Anak::class, 'dataanak_id');
    }

    
}
