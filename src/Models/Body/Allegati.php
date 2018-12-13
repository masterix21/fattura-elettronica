<?php

namespace masterix21\FatturaElettronica\Models\Body;


use masterix21\FatturaElettronica\Base\Model;

/**
 * Class Allegati
 * @property string NomeAttachment
 * @property string AlgoritmoCompressione
 * @property string FormatoAttachment
 * @property string DescrizioneAttachment
 * @property string Attachment
 * @package masterix21\FatturaElettronica\Models\Body
 */
class Allegati extends Model
{
	protected $properties = [
		'NomeAttachment',
		'AlgoritmoCompressione',
		'FormatoAttachment',
		'DescrizioneAttachment',
		'Attachment'
	];

	protected $casts = [
		'Attachment' => 'base64'
	];

	public function __construct() {
		parent::__construct();
	}
}