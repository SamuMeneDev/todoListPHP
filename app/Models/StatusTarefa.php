<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusTarefa extends Model
{
    use HasFactory;

    protected $table = "status_tarefa";
    protected $primaryKey = 'id_status_tarefa'; 
    public $fillable = ["id_status_tarefa", "created_at", "updated_at"];
}
