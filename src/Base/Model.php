<?php

namespace masterix21\FatturaElettronica\Base;

use Carbon\Carbon;
use FluidXml\FluidXml;

class Model {
	protected $properties = [];
	protected $casts = [];
	protected $values = [];

	public function __construct() {
		foreach ($this->properties as $property) {
			$this->setAttribute($property, null);
		}
	}

	/**
	 * Imposta un valore nel modello
	 *
	 * @param $name
	 * @param $value
	 */
	public function __set( $name, $value ) {
		$this->setAttribute($name, $value);
	}

	/**
	 * Recupera un valore del modello. Se non esiste, ritorna null.
	 *
	 * @param $name
	 *
	 * @return mixed|null
	 */
	public function __get( $name ) {
		return $this->values[$name] ?? null;
	}

	public function setAttribute($name, $value)
	{
		if (in_array($name, $this->properties)) {
/*			if (!isset($this->casts[$name]) && empty($value)) {
				return;
			}
*/
			if (!isset($this->casts[$name])) {
				$this->values[$name] = !empty($value) ? $value : null;
			} else if ($this->casts[$name] == "int" || $this->casts[$name] == "integer") {
				$this->values[$name] = !empty($value) ? (int) $value : null;
			} else if ($this->casts[$name] == "float") {
				$this->values[$name] = number_format($value, 2, ".", "");
			} else if ($this->casts[$name] == "array") {
				if (empty($value)) {
					$this->values[$name] = [];
				} else if (is_array($value)) {
					$this->values[$name] = $value;
				} else {
					$this->values[$name] = [ $value ];
				}
			} else if ($this->casts[$name] == Carbon::class) {
				$this->values[$name] = !empty($value) ? Carbon::parse($value) : null;
			} else if (empty($value)) {
				$this->values[ $name ] = new $this->casts[$name]();
			} else if (get_class($value) == $this->casts[$name]) {
				$this->values[ $name ] = $value;
			} else if (get_class($value) != $this->casts[$name]) {
				throw new \Exception(sprintf("Formato %s non valido. Passato %s anziché %s", $name, get_class($value), $this->casts[$name]));
			}
		}
	}

	/**
	 * Imposta i valori del modello in base ad un array.
	 *
	 * @param $array
	 */
	public function fill($array)
	{
		foreach ($array as $key => $value) {
			$this->setAttribute($key, $value);
		}
	}

	/**
	 * Ritorna l'array del modello.
	 *
	 * @return array
	 */
	public function toArray($values = null)
	{
		$values = $values ?? $this->values;

		$data = [];

		foreach ($values as $key => $value) {
			if (is_object($value) && get_class($value) == Carbon::class) {
				$value = $value->year .'-'.
				         str_pad($value->month, 2, "0", STR_PAD_LEFT) .'-'.
				         str_pad($value->day, 2, "0", STR_PAD_LEFT);
			} else if (is_object($value) && method_exists($value, 'toArray')) {
				$value = $value->toArray();
			} else if (is_array($value) && !empty($value)) {
				array_push($data, [ $this->toArray($value) ]);
				continue;
			}

			if (!empty($value)) {
				$data[ $key ] = $value;
			}
		}

		return $data;
	}
}