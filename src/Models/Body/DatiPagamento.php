<?php

namespace masterix21\FatturaElettronica\Models\Body;

use masterix21\FatturaElettronica\Base\Model;
use masterix21\FatturaElettronica\Models\Body\DatiPagamento\DettaglioPagamento;

/**
 * Class DatiPagamento
 * @property string CondizioniPagamento
 * @property DettaglioPagamento[] DettaglioPagamento
 * @package masterix21\FatturaElettronica\Models\Body
 */
class DatiPagamento extends Model
{
	protected $properties = [
		'CondizioniPagamento',
		'DettaglioPagamento'
	];

	protected $casts = [
		'DettaglioPagamento' => 'array'
	];

	public function __construct() {
		parent::__construct();
	}
}