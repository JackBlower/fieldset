<?php
/**
 * @package   Fuel\Fieldset
 * @version   2.0
 * @author    Fuel Development Team
 * @license   MIT License
 * @copyright 2010 - 2013 Fuel Development Team
 * @link      http://fuelphp.com
 */

namespace Fuel\Fieldset;

use Fuel\Common\Html;

/**
 * Defines common properties and functionality for input elements
 *
 * @package Fuel\Fieldset
 * @since   2.0
 * @author  Fuel Development Team
 */
class InputElement extends Element
{

	/**
	 * Creates a new InputElement object
	 *
	 * @param string  $name       Name to apply to this input
	 * @param array   $attributes A key => value array of attributes
	 * @param mixed   $value      The initial value of the input, if any
	 *
	 * @since 2.0
	 */
	public function __construct($name = '', array $attributes = [], $value = null)
	{
		$this->attributes['value'] = '';

		$this->setName($name);
		$this->setAttributes($attributes);
		$this->setValue($value);
	}

	/**
	 * Gets the value of the InputElement object
	 *
	 * @return string
	 *
	 * @since  2.0
	 */
	public function getValue()
	{
		return $this->attributes['value'];
	}

	/**
	 * Sets the value for the InputElement object
	 *
	 * @param  string $value
	 *
	 * @return InputElement
	 *
	 * @since  2.0
	 */
	public function setValue($value)
	{
		$this->attributes['value'] = $value;
		return $this;
	}

	/**
	 * Renders a generic input
	 *
	 * @param Render $renderer
	 *
	 * @return string "<input type="..."
	 *
	 * @since 2.0
	 */
	public function render(Render $renderer)
	{
		return Html::tag('input', $this->getAttributes(), $this->getContents());
	}

}
