<?php

namespace masterix21\FatturaElettronica\Models\Body\DatiGenerali\DatiGeneraliDocumento;

use masterix21\FatturaElettronica\Base\Model;

/**
 * Class ScontoMaggiorazione
 * @property string Tipo
 * @property float Percentuale
 * @property float Importo
 * @package masterix21\FatturaElettronica\Models\Body\DatiGenerali\DatiGeneraliDocumento
 */
class ScontoMaggiorazione extends Model
{
	protected $properties = [
		'Tipo',
		'Percentuale',
		'Importo'
	];

	protected $casts = [
	];

	public function __construct() {
		parent::__construct();
	}
}