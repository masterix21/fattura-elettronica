<?php

namespace masterix21\FatturaElettronica\Models\Common;

use masterix21\FatturaElettronica\Base\Model;

/**
 * Class ContattiTrasmittente
 * @property string Telefono
 * @property string Email
 * @package masterix21\FatturaElettronica\Models\Common
 */
class ContattiTrasmittente extends Model
{
	protected $properties = [
		'Telefono',
		'Email'
	];

	public function __construct() {
		parent::__construct();
	}
}