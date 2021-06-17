<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelBuku extends Model
{
    public function buku()
    {
        return this->BelongsTo(akun::class);
    }
    use HasFactory;

}
