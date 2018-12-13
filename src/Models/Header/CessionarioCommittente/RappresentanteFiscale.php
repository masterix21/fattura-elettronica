<?php

namespace masterix21\FatturaElettronica\Models\Header\CessionarioCommittente;

use masterix21\FatturaElettronica\Base\Model;
use masterix21\FatturaElettronica\Models\Common\IdFiscaleIVA;

/**
 * Class RappresentanteFiscale
 * @property IdFiscaleIVA IdFiscaleIVA
 * @property string Denominazione
 * @property string Nome
 * @property string Cognome
 * @package masterix21\FatturaElettronica\Models\Header\CessionarioCommittente
 */
class RappresentanteFiscale extends Model
{
	public $properties = [
		'IdFiscaleIVA',
		'Denominazione',
		'Nome',
		'Cognome'
	];

	protected $casts = [
		'IdFiscaleIVA' => IdFiscaleIVA::class,
	];

	public function __construct() {
		parent::__construct();
	}
}