<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $guarded = [] ;

	public function atendimentos()
	{
		return $this->hasMany(Atendimento::class);
	}

/*	public function getCpfAttribute()
	{
		$cpf = $this->attributes['cpf'];
		return substr($cpf,0,3).".".substr($cpf,3,3).".".substr($cpf,6,3)."-".substr($cpf,9,2);
	}
	public function getDdd1Attribute()
	{
		$ddd = $this->attributes['ddd1'];
		return "(" . substr($ddd,0,2).")";
	}
	public function getTelefone1Attribute()
	{
		$telefone = $this->attributes['telefone1'];
		return substr($telefone,0,5)."-".substr($telefone,-4);
	}
*/

}
