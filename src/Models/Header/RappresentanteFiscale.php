<?php

namespace masterix21\FatturaElettronica\Models\Header;

use masterix21\FatturaElettronica\Base\Model;
use masterix21\FatturaElettronica\Models\Common\DatiAnagrafici;

/**
 * Class RappresentanteFiscale
 * @property DatiAnagrafici DatiAnagrafici
 * @package masterix21\FatturaElettronica\Models\Header
 */
class RappresentanteFiscale extends Model
{
	protected $properties = [
		'DatiAnagrafici',
	];

	protected $casts = [
		'DatiAnagrafici' => DatiAnagrafici::class
	];

	public function __construct() {
		parent::__construct();
	}
}