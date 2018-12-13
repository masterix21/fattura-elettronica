<?php

namespace masterix21\FatturaElettronica\Models\Body\DatiGenerali;

use masterix21\FatturaElettronica\Base\Model;

/**
 * Class DatiOrdineAcquisto
 * @property int RiferimentoNumeroLinea
 * @property string IdDocumento
 * @property Carbon Data
 * @property string NumItem
 * @property string CodiceCommessaConvenzione
 * @property string CodiceCUP
 * @property string CodiceCIG
 * @package masterix21\FatturaElettronica\Models\Body\DatiGenerali
 */
class DatiOrdineAcquisto extends Model
{
	protected $properties = [
		'RiferimentoNumeroLinea',
		'IdDocumento',
		'Data',
		'NumItem',
		'CodiceCommessaConvenzione',
		'CodiceCUP',
		'CodiceCIG'
	];

	protected $casts = [
	];

	public function __construct() {
		parent::__construct();
	}
}