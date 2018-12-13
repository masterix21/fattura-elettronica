<?php

namespace masterix21\FatturaElettronica\Models\Common;

use masterix21\FatturaElettronica\Base\Model;

/**
 * Class IdTrasmittente
 * @property string IdPaese
 * @property string IdCodice
 * @package masterix21\FatturaElettronica\Models\Common
 */
class IdTrasmittente extends Model
{
	protected $properties = [
		'IdPaese',
		'IdCodice'
	];

	public function __construct() {
		parent::__construct();
	}
}