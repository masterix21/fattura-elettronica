<?php

namespace masterix21\FatturaElettronica\Models\Body\DatiPagamento;


use Carbon\Carbon;
use masterix21\FatturaElettronica\Base\Model;

/**
 * Class DettaglioPagamento
 * @property string Beneficiario
 * @property string ModalitaPagamento
 * @property Carbon DataRiferimentoTerminiPagamento
 * @property int GiorniTerminiPagamento
 * @property Carbon DataScadenzaPagamento
 * @property float ImportoPagamento
 * @property string CodUfficioPostale
 * @property string CognomeQuietanzante
 * @property string NomeQuietanzante
 * @property string CFQuietanzante
 * @property string TitoloQuietanzante
 * @property string IstitutoFinanziario
 * @property string IBAN
 * @property string ABI
 * @property string CAB
 * @property string BIC
 * @property float ScontoPagamentoAnticipato
 * @property Carbon DataLimitePagamentoAnticipato
 * @property float PenalitaPagamentiRitardati
 * @property Carbon DataDecorrenzaPenale
 * @property string CodicePagamento
 * @package masterix21\FatturaElettronica\Models\Body\DatiPagamento
 */
class DettaglioPagamento extends Model
{
	protected $properties = [
		'Beneficiario',
		'ModalitaPagamento',
		'DataRiferimentoTerminiPagamento',
		'GiorniTerminiPagamento',
		'DataScadenzaPagamento',
		'ImportoPagamento',
		'CodUfficioPostale',
		'CognomeQuietanzante',
		'NomeQuietanzante',
		'CFQuietanzante',
		'TitoloQuietanzante',
		'IstitutoFinanziario',
		'IBAN',
		'ABI',
		'CAB',
		'BIC',
		'ScontoPagamentoAnticipato',
		'DataLimitePagamentoAnticipato',
		'PenalitaPagamentiRitardati',
		'DataDecorrenzaPenale',
		'CodicePagamento'
	];

	protected $casts = [
		'DataRiferimentoTerminiPagamento' => Carbon::class,
		'GiorniTerminiPagamento' => 'int',
		'DataScadenzaPagamento' => Carbon::class,
		'ImportoPagamento' => 'float',
		'ScontoPagamentoAnticipato' => 'float',
		'DataLimitePagamentoAnticipato' => Carbon::class,
		'PenalitaPagamentiRitardati' => 'float',
		'DataDecorrenzaPenale' => Carbon::class
	];

	public function __construct() {
		parent::__construct();
	}
}