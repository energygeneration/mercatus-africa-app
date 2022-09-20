<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'title',
        'price',
        'localisation',
        'tel_num',
        'whatsapp_num',
        'email_annonce',
        'img_annonce',
        'descriptif',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
        // return $this->hasMany(Annonce::class);
    }
}
