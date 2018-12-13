<?php
namespace masterix21\FatturaElettronica;

use function FluidXml\fluidns;
use FluidXml\FluidXml;
use masterix21\FatturaElettronica\Base\Model;
use masterix21\FatturaElettronica\Models\Body;
use masterix21\FatturaElettronica\Models\Header;

/**
 * Class Documento
 * @property Header Header
 * @property Body Body
 * @package masterix21\FatturaElettronica
 */
class Documento extends Model
{
	protected $properties = [
		'Header',
		'Body'
	];

	protected $casts = [
		'Header' => Header::class,
		'Body' => Body::class
	];

	public function __construct() {
		parent::__construct();
	}

	public function generaXml() {
		$fattura = new FluidXml(null);

		$dsNS = fluidns("ds", "http://www.w3.org/2000/09/xmldsig#");
		$pNS = fluidns("p", "http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2");
		$xsiNS = fluidns("xsi", "http://www.w3.org/2001/XMLSchema-instance");

		$fattura->namespace($dsNS, $pNS, $xsiNS);

		$root = $fattura->addChild('p:FatturaElettronica', true);
		$rootNode = $root[0];
		$rootNode->setAttributeNS('http://www.w3.org/2000/xmlns/', "xmlns:{$dsNS->id()}", $dsNS->uri());
		$rootNode->setAttributeNS('http://www.w3.org/2000/xmlns/', "xmlns:{$pNS->id()}", $pNS->uri());
		$rootNode->setAttributeNS('http://www.w3.org/2000/xmlns/', "xmlns:{$xsiNS->id()}", $xsiNS->uri());
		$rootNode->setAttribute("versione", "FPR12");
		$rootNode->setAttribute("xsi:schemaLocation", "http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2 http://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa/v1.2/Schema_del_file_xml_FatturaPA_versione_1.2.xsd");

		$fattura->add([
			"FatturaElettronicaHeader" => $this->Header->toArray(),
			"FatturaElettronicaBody" => $this->Body->toArray()
		], true);

		return $fattura;
	}
}