<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Identity extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'identity_number'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
