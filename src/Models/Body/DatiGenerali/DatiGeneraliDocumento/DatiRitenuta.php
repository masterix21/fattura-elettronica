<?php

namespace masterix21\FatturaElettronica\Models\Body\DatiGenerali\DatiGeneraliDocumento;

use masterix21\FatturaElettronica\Base\Model;

/**
 * Class DatiRitenuta
 * @property string TipoRitenuta
 * @property float ImportoRitenuta
 * @property float AliquotaRitenuta
 * @property string CausalePagamento
 * @package masterix21\FatturaElettronica\Models\Body\DatiGenerali\DatiGeneraliDocumento
 */
class DatiRitenuta extends Model
{
	protected $properties = [
		'TipoRitenuta',
		'ImportoRitenuta',
		'AliquotaRitenuta',
		'CausalePagamento'
	];

	protected $casts = [
	];

	public function __construct() {
		parent::__construct();
	}
}