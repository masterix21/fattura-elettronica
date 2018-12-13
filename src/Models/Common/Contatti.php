<?php

namespace masterix21\FatturaElettronica\Models\Common;

use masterix21\FatturaElettronica\Base\Model;

/**
 * Class Contatti
 * @property string Telefono
 * @property string Fax
 * @property string Email
 * @package masterix21\FatturaElettronica\Models\Common
 */
class Contatti extends Model
{
	protected $properties = [
		'Telefono',
		'Fax',
		'Email'
	];

	public function __construct() {
		parent::__construct();
	}
}