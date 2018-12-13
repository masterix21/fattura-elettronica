<?php

namespace masterix21\FatturaElettronica\Models\Body;

use masterix21\FatturaElettronica\Base\Model;
use masterix21\FatturaElettronica\Models\Body\DatiGenerali\DatiContratto;
use masterix21\FatturaElettronica\Models\Body\DatiGenerali\DatiConvenzione;
use masterix21\FatturaElettronica\Models\Body\DatiGenerali\DatiFattureCollegate;
use masterix21\FatturaElettronica\Models\Body\DatiGenerali\DatiGeneraliDocumento;
use masterix21\FatturaElettronica\Models\Body\DatiGenerali\DatiOrdineAcquisto;
use masterix21\FatturaElettronica\Models\Body\DatiGenerali\DatiRicezione;
use masterix21\FatturaElettronica\Models\Body\DatiGenerali\DatiSAL;

/**
 * Class DatiGenerali
 * @property DatiGeneraliDocumento DatiGeneraliDocumento
 * @property DatiOrdineAcquisto[] DatiOrdineAcquisto
 * @property DatiContratto[] DatiContratto
 * @property DatiConvenzione[] DatiConvenzione
 * @property DatiRicezione[] DatiRicezione
 * @property DatiFattureCollegate[] DatiFattureCollegate
 * @property DatiSAL[] DatiSAL
 * @package masterix21\FatturaElettronica\Models\Body
 */
class DatiGenerali extends Model
{
	protected $properties = [
		'DatiGeneraliDocumento',
		'DatiOrdineAcquisto',
		'DatiContratto',
		'DatiConvenzione',
		'DatiRicezione',
		'DatiFattureCollegate',
		'DatiSAL'
	];

	protected $casts = [
		'DatiGeneraliDocumento' => DatiGeneraliDocumento::class,
		'DatiOrdineAcquisto' => 'array',
		'DatiContratto' => 'array',
		'DatiConvenzione' => 'array',
		'DatiRicezione' => 'array',
		'DatiFattureCollegate' => 'array',
		'DatiSAL' => 'array'
	];

	public function __construct() {
		parent::__construct();
	}
}