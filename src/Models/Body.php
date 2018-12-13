<?php

namespace masterix21\FatturaElettronica\Models;

use masterix21\FatturaElettronica\Base\Model;
use masterix21\FatturaElettronica\Models\Body\Allegati;
use masterix21\FatturaElettronica\Models\Body\DatiBeniServizi;
use masterix21\FatturaElettronica\Models\Body\DatiGenerali;
use masterix21\FatturaElettronica\Models\Body\DatiPagamento;
use masterix21\FatturaElettronica\Models\Body\DatiVeicoli;

/**
 * Class Body
 * @property DatiGenerali DatiGenerali
 * @property DatiBeniServizi DatiBeniServizi
 * @property DatiVeicoli DatiVeicoli
 * @property DatiPagamento[] DatiPagamento
 * @property Allegati[] Allegati
 * @package masterix21\FatturaElettronica\Models
 */
class Body extends Model
{
	protected $properties = [
		'DatiGenerali',
		'DatiBeniServizi',
		'DatiVeicoli',
		'DatiPagamento',
		'Allegati'
	];

	protected $casts = [
		'DatiGenerali' => DatiGenerali::class,
		'DatiBeniServizi' => DatiBeniServizi::class,
		'DatiVeicoli' => DatiVeicoli::class,
		'DatiPagamento' => 'array',
		'Allegati' => 'array'
	];

	public function __construct() {
		parent::__construct();
	}
}