<?php

namespace masterix21\FatturaElettronica\Models\Header;

use masterix21\FatturaElettronica\Base\Model;
use masterix21\FatturaElettronica\Models\Common\DatiAnagrafici;
use masterix21\FatturaElettronica\Models\Common\Sede;
use masterix21\FatturaElettronica\Models\Common\StabileOrganizzazione;
use masterix21\FatturaElettronica\Models\Header\CessionarioCommittente\RappresentanteFiscale as CC_RappresentanteFiscale;

/**
 * Class CessionarioCommittente
 * @property DatiAnagrafici DatiAnagrafici
 * @property Sede Sede
 * @property StabileOrganizzazione StabileOrganizzazione
 * @property RappresentanteFiscale RappresentanteFiscale
 * @package masterix21\FatturaElettronica\Models\Header
 */
class CessionarioCommittente extends Model
{
	protected $properties = [
		'DatiAnagrafici',
		'Sede',
		'StabileOrganizzazione',
		'RappresentanteFiscale',
	];

	protected $casts = [
		'DatiAnagrafici' => DatiAnagrafici::class,
		'Sede' => Sede::class,
		'StabileOrganizzazione' => StabileOrganizzazione::class,
		'RappresentanteFiscale' => CC_RappresentanteFiscale::class
	];

	public function __construct() {
		parent::__construct();
	}
}