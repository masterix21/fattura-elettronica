<?php

namespace masterix21\FatturaElettronica\Models\Body\DatiGenerali;


use masterix21\FatturaElettronica\Base\Model;

/**
 * Class DatiSAL
 * @property string RiferimentoFase
 * @package masterix21\FatturaElettronica\Models\Body\DatiGenerali
 */
class DatiSAL extends Model
{
	protected $properties = [
		'RiferimentoFase'
	];

	protected $casts = [];

	public function __construct() {
		parent::__construct();
	}
}