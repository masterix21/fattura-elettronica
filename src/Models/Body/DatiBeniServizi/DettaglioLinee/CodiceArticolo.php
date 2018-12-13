<?php

namespace masterix21\FatturaElettronica\Models\Body\DatiBeniServizi\DettaglioLinee;


use masterix21\FatturaElettronica\Base\Model;

/**
 * Class CodiceArticolo
 * @property string CodiceTipo
 * @property string CodiceValore
 * @package masterix21\FatturaElettronica\Models\Body\DatiBeniServizi\DettaglioLinee
 */
class CodiceArticolo extends Model
{
	protected $properties = [
		'CodiceTipo',
		'CodiceValore'
	];

	protected $casts = [];

	public function __construct() {
		parent::__construct();
	}
}