<?php

namespace masterix21\FatturaElettronica\Models\Body;


use Carbon\Carbon;
use masterix21\FatturaElettronica\Base\Model;

/**
 * Class DatiVeicoli
 * @property Carbon Data
 * @property string TotalePercorso
 * @package masterix21\FatturaElettronica\Models\Body
 */
class DatiVeicoli extends Model
{
	protected $properties = [
		'Data',
		'TotalePercorso'
	];

	protected $casts = [
		'Data' => Carbon::class,
	];

	public function __construct() {
		parent::__construct();
	}
}