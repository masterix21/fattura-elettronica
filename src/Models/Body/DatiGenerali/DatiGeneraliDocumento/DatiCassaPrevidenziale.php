<?php

namespace masterix21\FatturaElettronica\Models\Body\DatiGenerali\DatiGeneraliDocumento;

use masterix21\FatturaElettronica\Base\Model;

/**
 * Class DatiCassaPrevidenziale
 * @property string TipoCassa
 * @property float AlCassa
 * @property float ImportoContributoCassa
 * @property float ImponibileCassa
 * @property float AliquotaIVA
 * @property string Ritenuta
 * @property string Natura
 * @property string RiferimentoAmministrazione
 * @package masterix21\FatturaElettronica\Models\Body\DatiGenerali\DatiGeneraliDocumento
 */
class DatiCassaPrevidenziale extends Model
{
	protected $properties = [
		'TipoCassa',
		'AlCassa',
		'ImportoContributoCassa',
		'ImponibileCassa',
		'AliquotaIVA',
		'Ritenuta',
		'Natura',
		'RiferimentoAmministrazione'
	];

	protected $casts = [
	];

	public function __construct() {
		parent::__construct();
	}
}