<?php

namespace masterix21\FatturaElettronica\Models\Body\DatiBeniServizi;


use Carbon\Carbon;
use masterix21\FatturaElettronica\Base\Model;
use masterix21\FatturaElettronica\Models\Body\DatiBeniServizi\DettaglioLinee\AltriDatiGestionali;
use masterix21\FatturaElettronica\Models\Body\DatiBeniServizi\DettaglioLinee\CodiceArticolo;
use masterix21\FatturaElettronica\Models\Body\DatiBeniServizi\DettaglioLinee\DatiRiepilogo;
use masterix21\FatturaElettronica\Models\Body\DatiBeniServizi\DettaglioLinee\ScontoMaggiorazione;

/**
 * Class DettaglioLinee
 * @property int NumeroLinea
 * @property string TipoCessionePrestazione
 * @property CodiceArticolo[] CodiceArticolo
 * @property string Descrizione
 * @property float Quantita
 * @property string UnitaMisura
 * @property Carbon DataInizioPeriodo
 * @property Carbon DataFinePeriodo
 * @property float PrezzoUnitario
 * @property ScontoMaggiorazione[] ScontoMaggiorazione
 * @property float PrezzoTotale
 * @property float AliquotaIVA
 * @property string Ritenuta
 * @property string Natura
 * @property string RiferimentoAmministrazione
 * @property AltriDatiGestionali[] AltriDatiGestionali
 * @package masterix21\FatturaElettronica\Models\Body\DatiGenerali
 */
class DettaglioLinee extends Model
{
	protected $properties = [
		'NumeroLinea',
		'TipoCessionePrestazione',
		'CodiceArticolo',
		'Descrizione',
		'Quantita',
		'UnitaMisura',
		'DataInizioPeriodo',
		'DataFinePeriodo',
		'PrezzoUnitario',
		'ScontoMaggiorazione',
		'PrezzoTotale',
		'AliquotaIVA',
		'Ritenuta',
		'Natura',
		'RiferimentoAmministrazione',
		'AltriDatiGestionali'
	];

	protected $casts = [
		'NumeroLinea' => 'int',
		'CodiceArticolo' => 'array',
		'Quantita' => 'float',
		'DataInizioPeriodo' => Carbon::class,
		'DataFinePeriodo' => Carbon::class,
		'PrezzoUnitario' => 'float',
		'ScontoMaggiorazione' => 'array',
		'PrezzoTotale' => 'float',
		'AliquotaIVA' => 'float',
		'AltriDatiGestionali' => 'array'
	];

	public function __construct() {
		parent::__construct();
	}
}