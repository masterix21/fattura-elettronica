<?php

namespace masterix21\FatturaElettronica\Models\Common;

use masterix21\FatturaElettronica\Base\Model;

/**
 * Class IdFiscaleIVA
 * @property string IdPaese
 * @property string IdCodice
 * @package masterix21\FatturaElettronica\Models\Common
 */
class IdFiscaleIVA extends Model
{
	protected $properties = [
		'IdPaese',
		'IdCodice'
	];

	public function __construct() {
		parent::__construct();
	}
}