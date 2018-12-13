<?php

namespace masterix21\FatturaElettronica\Models\Common;

use masterix21\FatturaElettronica\Base\Model;

/**
 * Class IscrizioneREA
 * @property string Ufficio
 * @property string NumeroREA
 * @property float CapitaleSociale
 * @property string SocioUnico
 * @property string StatoLiquidazione
 * @package masterix21\FatturaElettronica\Models\Common
 */
class IscrizioneREA extends Model
{
	protected $properties = [
		'Ufficio',
		'NumeroREA',
		'CapitaleSociale',
		'SocioUnico',
		'StatoLiquidazione'
	];

	public function __construct() {
		parent::__construct();
	}
}