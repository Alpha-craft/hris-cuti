<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Karyawan extends Model
{
    protected $guarded = [];

    public function pengajuanCutis():HasMany {
        return $this->hasMany(PengajuanCuti::class);
    }

    public function pengajuanLembur():HasMany {
        return $this->hasMany(PengajuanLembur::class);
    }

    public function pengajuanWfh():HasMany {
        return $this->hasMany(PengajuanWfh::class);
    } 

}
