<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPP extends Model
{
    use HasFactory;
    
    protected $table = 'spps';
    protected $primaryKey = 'id_spp'; // menentukan nama kolom primary key
    protected $fillable = ['tahun', 'nominal'];

}
