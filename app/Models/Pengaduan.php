<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pengaduan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'm_pengaduan';

    protected $fillable = [
        'laporan', 'path_foto', 'status', 'user_id'
    ];

    protected $hidden = [
    
    ];
    
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function details() {
        return $this->hasMany(Pengaduan::class, 'id', 'id');
    }

    public function tanggapans() {
        return $this->belongsTo(Pengaduan::class, 'id', 'id');
    }

    public function tanggapan() {
        return $this->hasOne(Tanggapan::class);
    }

    public function status() {
        return $this->belongsTo(Tanggapan::class, 'status_id','status');
    }
}
