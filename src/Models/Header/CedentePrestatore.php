<?php

namespace masterix21\FatturaElettronica\Models\Header;

use masterix21\FatturaElettronica\Base\Model;
use masterix21\FatturaElettronica\Models\Common\Contatti;
use masterix21\FatturaElettronica\Models\Common\IscrizioneREA;
use masterix21\FatturaElettronica\Models\Common\Sede;
use masterix21\FatturaElettronica\Models\Common\StabileOrganizzazione;
use masterix21\FatturaElettronica\Models\Header\CedentePrestatore\DatiAnagrafici;

/**
 * Class CedentePrestatore
 * @property DatiAnagrafici DatiAnagrafici
 * @property Sede Sede
 * @property StabileOrganizzazione StabileOrganizzazione
 * @property IscrizioneREA IscrizioneREA
 * @property Contatti Contatti
 * @property string RiferimentoAmministrazione
 * @package masterix21\FatturaElettronica\Models\Header
 */
class CedentePrestatore extends Model
{
	protected $properties = [
		'DatiAnagrafici',
		'Sede',
		'StabileOrganizzazione',
		'IscrizioneREA',
		'Contatti',
		'RiferimentoAmministrazione'
	];

	protected $casts = [
		'DatiAnagrafici' => DatiAnagrafici::class,
		'Sede' => Sede::class,
		'StabileOrganizzazione' => StabileOrganizzazione::class,
		'IscrizioneREA' => IscrizioneREA::class,
		'Contatti' => Contatti::class
	];

	public function __construct() {
		parent::__construct();
	}
}