<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table='clientes';
    protected $fillable = ['nome', 'telefone', 'origem', 'endereco', 'bairro', 'cep', 'cidade', 'estado', 'data_contato', 'observacao'];
}
