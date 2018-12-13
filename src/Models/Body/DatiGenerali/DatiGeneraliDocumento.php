<?php

namespace masterix21\FatturaElettronica\Models\Body\DatiGenerali;

use masterix21\FatturaElettronica\Base\Model;
use masterix21\FatturaElettronica\Models\Body\DatiGenerali\DatiGeneraliDocumento\DatiBollo;
use masterix21\FatturaElettronica\Models\Body\DatiGenerali\DatiGeneraliDocumento\DatiCassaPrevidenziale;
use masterix21\FatturaElettronica\Models\Body\DatiGenerali\DatiGeneraliDocumento\DatiRitenuta;
use masterix21\FatturaElettronica\Models\Body\DatiGenerali\DatiGeneraliDocumento\ScontoMaggiorazione;

/**
 * Class DatiGeneraliDocumento
 * @property string TipoDocumento
 * @property string Divisa
 * @property Carbon Data
 * @property string Numero
 * @property DatiRitenuta DatiRitenuta
 * @property DatiBollo DatiBollo
 * @property DatiCassaPrevidenziale[] DatiCassaPrevidenziale
 * @property ScontoMaggiorazione[] ScontoMaggiorazione
 * @property float ImportoTotaleDocumento
 * @property float Arrotondamento
 * @property string Causale
 * @property string Art73
 * @package masterix21\FatturaElettronica\Models\Body\DatiGenerali
 */
class DatiGeneraliDocumento extends Model
{
	protected $properties = [
		'TipoDocumento',
		'Divisa',
		'Data',
		'Numero',
		'DatiRitenuta',
		'DatiBollo',
		'DatiCassaPrevidenziale',
		'ScontoMaggiorazione',
		'ImportoTotaleDocumento',
		'Arrotondamento',
		'Causale',
		'Art73'
	];

	protected $casts = [
		'DatiRitenuta' => DatiRitenuta::class,
		'DatiBollo' => DatiBollo::class,
		'DatiCassaPrevidenziale' => 'array',
		'ScontoMaggiorazione' => 'array',
		'ImportoTotaleDocumento' => 'float',
		'Arrotondamento' => 'float'
	];

	public function __construct() {
		parent::__construct();
	}
}