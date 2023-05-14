<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable =["nome"];

    public function getResult($nome = null)
    {
        if(!$nome)
        {
            return $this->get();
        }
        else{

            return $this->where("nome","LIKE","%{$nome}%")->get();
        }

        }


        public function  produtos():HasMany
        {
            return $this->hasMany(Produto::class);
        }

}
