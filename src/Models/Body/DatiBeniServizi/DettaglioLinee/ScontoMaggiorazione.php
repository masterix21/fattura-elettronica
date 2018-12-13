<?php

namespace masterix21\FatturaElettronica\Models\Body\DatiBeniServizi\DettaglioLinee;

use masterix21\FatturaElettronica\Base\Model;

/**
 * Class ScontoMaggiorazione
 * @property string Tipo
 * @property float Percentuale
 * @property float Importo
 * @package masterix21\FatturaElettronica\Models\Body\DatiBeniServizi\DettaglioLinee
 */
class ScontoMaggiorazione extends Model
{
	protected $properties = [
		'Tipo',
		'Percentuale',
		'Importo'
	];

	protected $casts = [
		'Percentuale' => 'float',
		'Importo' => 'float'
	];

	public function __construct() {
		parent::__construct();
	}
}