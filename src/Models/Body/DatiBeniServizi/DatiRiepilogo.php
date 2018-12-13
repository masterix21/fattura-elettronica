<?php

namespace masterix21\FatturaElettronica\Models\Body\DatiBeniServizi;

use masterix21\FatturaElettronica\Base\Model;

/**
 * Class DatiRiepilogo
 * @property float AliquotaIVA
 * @property string Natura
 * @property float SpeseAccessorie
 * @property float Arrotondamento
 * @property float ImponibileImporto
 * @property float Imposta
 * @property string EsigibilitaIVA
 * @property string RiferimentoNormativo
 * @package masterix21\FatturaElettronica\Models\Body\DatiBeniServizi\DettaglioLinee
 */
class DatiRiepilogo extends Model
{
	protected $properties = [
		'AliquotaIVA',
		'Natura',
		'SpeseAccessorie',
		'Arrotondamento',
		'ImponibileImporto',
		'Imposta',
		'EsigibilitaIVA',
		'RiferimentoNormativo'
	];

	protected $casts = [
		'AliquotaIVA' => 'float',
		'SpeseAccessorie' => 'float',
		'Arrotondamento' => 'float',
		'ImponibileImporto' => 'float',
		'Imposta' => 'float',
	];

	public function __construct() {
		parent::__construct();
	}
}