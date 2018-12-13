<?php

namespace masterix21\FatturaElettronica\Models\Header;

use masterix21\FatturaElettronica\Base\Model;
use masterix21\FatturaElettronica\Models\Common\ContattiTrasmittente;
use masterix21\FatturaElettronica\Models\Common\IdTrasmittente;

/**
 * Class DatiTrasmissione
 * @property IdTrasmittente IdTrasmittente
 * @property string ProgressivoInvio
 * @property string FormatoTrasmissione
 * @property string CodiceDestinatario
 * @property ContattiTrasmittente ContattiTrasmittente
 * @property string PECDestinatario
 * @package masterix21\FatturaElettronica\Models\Header
 */
class DatiTrasmissione extends Model
{
	protected $properties = [
		'IdTrasmittente',
		'ProgressivoInvio',
		'FormatoTrasmissione',
		'CodiceDestinatario',
		'ContattiTrasmittente',
		'PECDestinatario'
	];

	protected $casts = [
		'IdTrasmittente' => IdTrasmittente::class,
		'ContattiTrasmittente' => ContattiTrasmittente::class
	];

	public function __construct() {
		parent::__construct();
	}
}