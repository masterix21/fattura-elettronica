<?php

namespace masterix21\FatturaElettronica\Models\Header\CedentePrestatore;

use Carbon\Carbon;
use masterix21\FatturaElettronica\Base\Model;
use masterix21\FatturaElettronica\Models\Common\Anagrafica;
use masterix21\FatturaElettronica\Models\Common\IdFiscaleIVA;

/**
 * Class DatiAnagrafici
 * @property IdFiscaleIVA IdFiscaleIVA
 * @property string CodiceFiscale
 * @property Anagrafica Anagrafica
 * @property string AlboProfessionale
 * @property string ProvinciaAlbo
 * @property string NumeroIscrizioneAlbo
 * @property Carbon DataIscrizioneAlbo
 * @property string RegimeFiscale
 * @package masterix21\FatturaElettronica\Models\Header\CedentePrestatore
 */
class DatiAnagrafici extends Model
{
	public $properties = [
		'IdFiscaleIVA',
		'CodiceFiscale',
		'Anagrafica',
		'AlboProfessionale',
		'ProvinciaAlbo',
		'NumeroIscrizioneAlbo',
		'DataIscrizioneAlbo',
		'RegimeFiscale'
	];

	protected $casts = [
		'IdFiscaleIVA' => IdFiscaleIVA::class,
		'Anagrafica' => Anagrafica::class
	];

	public function __construct() {
		parent::__construct();

		//$this->properties = array_merge(parent::$properties, $this->properties);
	}
}