<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeColis extends Model
{
    use HasFactory;

    public function annonces()
    {
        return $this->belongsToMany(Annonce::class,"details_annonce");
    }
}
