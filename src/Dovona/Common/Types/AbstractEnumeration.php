<?php

namespace Dovona\Common\Types;

/**
 * Abstract enumeration type implementation.
 *
 * @since 0.0.1
 *
 * @author Daniel Jorj <daniel.jorj@dovona.com>
 */
abstract class AbstractEnumeration
{   
    
    /**
     * Current enumeration value.
     * 
     * @var mixed
     */
    private $value = null;

    /**
     * Enumeration constant name that contains current value.
     * 
     * @var string
     */
    private $name = null;

    /**
     * Tells if the Enumeration class accepts the default value.
     * 
     * @var boolean
     */
    protected $acceptsDefault = true;

    /**
     * The default value in case of given value is not passed.
     * 
     * @var mixed
     */
    protected $default = null;


    /**
     * Create a new enumeration object with a specified value.
     * 
     * @param mixed Enumeration value
     */
    final public function __construct( $value = null )
    {   
        $class = new \ReflectionClass($this);

        // In case the value is not given and we accept the default values,
        // we will set the default value as value
        if( !$value && $this->acceptsDefault ) {
            $value = $this->default;
        }

        // Check if the value is between constants declarations
        if(!in_array($value, $class->getConstants())) {
            throw new \InvalidArgumentException("The given value (\"". $value ."\") is not defined as ". get_class($this) ." enum value.");
        }

        // Set the Enum name
        $this->name = array_search($value, $class->getConstants());

        // Set the Enum value
        $this->value = $value;
    }

    /**
     * Return the current enumeration constant name.
     * 
     * @return string Enumeration value.
     */
    final public function name()
    {   
        return $this->name;
    }

    /**
     * Return the current enumeration value.
     * 
     * @return string Enumeration value.
     */
    final public function value()
    {
        return $this->value;
    }

    /**
     * Check if the current Enum have the save value with the given one as parameter.
     * 
     * @param mixed $value Value to compare
     * 
     * @return boolean Given value is equal with the Enum value or not.
     */
    final public function equals( $value )
    {
        return ($this->__toString() == $value);
    }

    /**
     * Check if a value is a valid Enumeration property (constant).
     * 
     * @param  mixed  $value Value to check
     * 
     * @return boolean True if it is defined, false otherwise
     */
    static public function isValid( $value )
    {
        $class = new \ReflectionClass(get_called_class());

        // Check if the value is between constants declarations
        if(in_array($value, $class->getConstants())) {
            return true;
        }

        return false;
    }

    /**
     * Return the current enumeration value. Called on string type casting.
     * 
     * @return string Enumeration value.
     */
    final public function __toString()
    {
        return $this->value;
    }
}