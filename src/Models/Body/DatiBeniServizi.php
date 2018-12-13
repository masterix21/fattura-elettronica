<?php

namespace masterix21\FatturaElettronica\Models\Body;


use masterix21\FatturaElettronica\Base\Model;
use masterix21\FatturaElettronica\Models\Body\DatiBeniServizi\DatiRiepilogo;
use masterix21\FatturaElettronica\Models\Body\DatiBeniServizi\DettaglioLinee;

/**
 * Class DatiBeniServizi
 * @property DettaglioLinee[] DettaglioLinee
 * @property-read DatiRiepilogo[] DatiRiepilogo
 * @package masterix21\FatturaElettronica\Models\Body
 */
class DatiBeniServizi extends Model
{
	protected $properties = [
		'DettaglioLinee',
		'DatiRiepilogo'
	];

	protected $casts = [
		'DettaglioLinee' => 'array',
		'DatiRiepilogo' => 'array'
	];

	public function __construct() {
		parent::__construct();
	}

	/**
	 * Aggiunge una riga al dettaglio
	 *
	 * @param DettaglioLinee $DettaglioLinee
	 *
	 * @return $this
	 */
	public function addDettaglioLinee($DettaglioLinee) {
		$righe = $this->DettaglioLinee ?? [];
		array_push($righe, [ 'DettaglioLinee' => $DettaglioLinee ]);
		$this->DettaglioLinee = $righe;
		return $this;
	}

	/**
	 * Aggiunge una riga al dettaglio
	 *
	 * @param DettaglioLinee $DettaglioLinee
	 *
	 * @return $this
	 */
	public function addDatiRiepilogo($DatiRiepilogo) {
		$righe = $this->DatiRiepilogo ?? [];
		array_push($righe, [ 'DatiRiepilogo' => $DatiRiepilogo ]);
		$this->DatiRiepilogo = $righe;
		return $this;
	}
}