<?php

namespace masterix21\FatturaElettronica\Models\Common;

use masterix21\FatturaElettronica\Base\Model;

/**
 * Class DatiAnagrafici
 * @property IdFiscaleIVA IdFiscaleIVA
 * @property string CodiceFiscale
 * @property Anagrafica Anagrafica
 * @package masterix21\FatturaElettronica\Models\Common
 */
class DatiAnagrafici extends Model
{
	protected $properties = [
		'IdFiscaleIVA',
		'CodiceFiscale',
		'Anagrafica'
	];

	protected $casts = [
		'IdFiscaleIVA' => IdFiscaleIVA::class,
		'Anagrafica' => Anagrafica::class
	];

	public function __construct() {
		parent::__construct();
	}
}