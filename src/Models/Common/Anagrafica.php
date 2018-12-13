<?php

namespace masterix21\FatturaElettronica\Models\Common;

use masterix21\FatturaElettronica\Base\Model;

/**
 * Class Anagrafica
 *
 * @property string Denominazione
 * @property string Nome
 * @property string Cognome
 * @property string Titolo
 * @property string CodEORI
 * @package masterix21\FatturaElettronica\Models\Common
 */
class Anagrafica extends Model
{
	protected $properties = [
		'Denominazione',
		'Nome',
		'Cognome',
		'Titolo',
		'CodEORI'
	];

	public function __construct() {
		parent::__construct();

	}
}