<?php

namespace masterix21\FatturaElettronica\Models\Body\DatiGenerali\DatiGeneraliDocumento;

use masterix21\FatturaElettronica\Base\Model;

/**
 * Class DatiBollo
 * @property string BolloVirtuale
 * @property float ImportoBollo
 * @package masterix21\FatturaElettronica\Models\Body\DatiGenerali\DatiGeneraliDocumento
 */
class DatiBollo extends Model
{
	protected $properties = [
		'BolloVirtuale',
		'ImportoBollo'
	];

	protected $casts = [
	];

	public function __construct() {
		parent::__construct();
	}
}