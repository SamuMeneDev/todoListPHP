<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;
    protected $table = "tarefa";
    protected $primaryKey = 'id_tarefa'; 
    public $fillable = ['id_tarefa', 'titulo_tarefa', 'descricao_tarefa', 'data_inicio_tarefa', 'data_termino_tarefa', 'id_usuario', 'id_categoria', 'id_status_tarefa'];
}
