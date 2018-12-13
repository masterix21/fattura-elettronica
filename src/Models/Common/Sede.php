<?php

namespace masterix21\FatturaElettronica\Models\Common;

use masterix21\FatturaElettronica\Base\Model;

/**
 * Class Sede
 * @property string Indirizzo
 * @property string NumeroCivico
 * @property string CAP
 * @property string Comune
 * @property string Provincia
 * @property string Nazione
 * @package masterix21\FatturaElettronica\Models\Common
 */
class Sede extends Model
{
	protected $properties = [
		'Indirizzo',
		'NumeroCivico',
		'CAP',
		'Comune',
		'Provincia',
		'Nazione'
	];

	public function __construct() {
		parent::__construct();
	}
}