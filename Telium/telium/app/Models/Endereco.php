<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $table = 'enderecos';

    protected $fillable = [
        'customer',
        'street',
        'number',
        'state'
    ];

    public function customer(){
        return $this->belongsTo(Cliente::class, 'customer', 'id');
    }
}
