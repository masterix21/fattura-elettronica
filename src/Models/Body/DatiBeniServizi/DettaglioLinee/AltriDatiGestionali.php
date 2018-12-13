<?php

namespace masterix21\FatturaElettronica\Models\Body\DatiBeniServizi\DettaglioLinee;


use Carbon\Carbon;
use masterix21\FatturaElettronica\Base\Model;

/**
 * Class AltriDatiGestionali
 * @property string TipoDato
 * @property string RiferimentoTesto
 * @property float RiferimentoNumero
 * @property Carbon RiferimentoData
 * @package masterix21\FatturaElettronica\Models\Body\DatiBeniServizi\DettaglioLinee
 */
class AltriDatiGestionali extends Model
{
	protected $properties = [
		'TipoDato',
		'RiferimentoTesto',
		'RiferimentoNumero',
		'RiferimentoData'
	];

	protected $casts = [
		'RiferimentoNumero' => 'float',
		'RiferimentoData' => Carbon::class
	];

	public function __construct() {
		parent::__construct();
	}
}