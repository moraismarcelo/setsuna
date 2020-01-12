<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
	protected $guarded = [];


	public function activeOptions()
	{
		return [
			0 => 'Venda',
		];

	}
	public function getActiveAttribute($attribute)
	{
		return $this->activeOptions()[$attribute];
	}


	public function clientes()
	{
		return $this->belongsTo(Cliente::class);
	}

}
