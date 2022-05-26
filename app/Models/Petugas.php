<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class Petugas extends Model
{
    use HasFactory;

    /**
     * guarded
     *
     * @var array
     */
    protected $guarded = [];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function posyandu()
    {
        return $this->hasMany(Posyandu::class);
    }

}
