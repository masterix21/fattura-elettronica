<?php

namespace masterix21\FatturaElettronica\Models;

use masterix21\FatturaElettronica\Base\Model;
use masterix21\FatturaElettronica\Models\Header\CedentePrestatore;
use masterix21\FatturaElettronica\Models\Header\CessionarioCommittente;
use masterix21\FatturaElettronica\Models\Header\DatiTrasmissione;
use masterix21\FatturaElettronica\Models\Header\RappresentanteFiscale;
use masterix21\FatturaElettronica\Models\Header\TerzoIntermediarioOSoggettoEmittente;

/**
 * Class Header
 * @property DatiTrasmissione DatiTrasmissione
 * @property CedentePrestatore CedentePrestatore
 * @property RappresentanteFiscale RappresentanteFiscale
 * @property CessionarioCommittente CessionarioCommittente
 * @property TerzoIntermediarioOSoggettoEmittente TerzoIntermediarioOSoggettoEmittente
 * @property string SoggettoEmittente
 * @package masterix21\FatturaElettronica\Models
 */
class Header extends Model
{
	protected $properties = [
		'DatiTrasmissione',
		'CedentePrestatore',
		'RappresentanteFiscale',
		'CessionarioCommittente',
		'TerzoIntermediarioOSoggettoEmittente',
		'SoggettoEmittente'
	];

	protected $casts = [
		'DatiTrasmissione' => DatiTrasmissione::class,
		'CedentePrestatore' => CedentePrestatore::class,
		'RappresentanteFiscale' => RappresentanteFiscale::class,
		'CessionarioCommittente' => CessionarioCommittente::class,
		'TerzoIntermediarioOSoggettoEmittente' => TerzoIntermediarioOSoggettoEmittente::class
	];

	public function __construct() {
		parent::__construct();
	}
}