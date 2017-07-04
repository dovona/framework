<?php

namespace Dovona\Common\Process;

/**
 * A general process result model for a taken action.
 *
 * @since 0.0.2
 *
 * @author Daniel Jorj <daniel.jorj@dovona.com>
 */
class Result
{
    /**
     * Tells if the process failed or succeeded.
     *
     * @var boolean
     */
    protected $status = false;

    /**
     * A string representation of the status. A message in case of failure or
     * success.
     *
     * @var string
     */
    protected $message = "";

    /**
     * Extra data that is returned as key/value pair.
     *
     * @var array
     */
    protected $data = array();

    /**
     * Constructs the model.
     *
     * @param boolean $status Default status to set.
     * @param string $message Default message to set.
     * @param array $data Default data to set.
     */
    public function __construct( $status, $message = "", array $data = [] )
    {
        $this->status  = (boolean)$status;
        $this->message = (string)$message;
        $this->data    = $data;
    }

    /**
     * Tells if the process succeeded or not.
     *
     * @return boolean
     */
    public function isSucceeded()
    {
        return $this->status;
    }

    /**
     *  Tells if the process failed or not
     *
     * @return boolean
     */
    public function isFailed()
    {
        return !$this->status;
    }

    /**
     * Return the result message.
     *
     * @return string The result message.
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the result message.
     *
     * @param string $message Message to set.
     *
     * @return \Dovona\Common\Process\Result Self instance.
     */
    public function setMessage( $message )
    {
        $this->message = (string)$message;

        return $this;
    }

    /**
     * Retrieve the result status.
     *
     * @return boolean The status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the status
     *
     * @param boolean $status Status to set
     *
     * @return \Dovona\Common\Process\Result Self instance.
     */
    public function setStatus( $status )
    {
        $this->status = (boolean)$status;

        return $this;
    }

    /**
     * A shorthand that sets the process as failed with a result message.
     *
     * @param string $message The message to set
     *
     * @return \Dovona\Common\Process\Result Self instance.
     */
    public function setFailed( $message = null )
    {
        $this->setStatus(false);

        // Set the message if that was specified
        if( $message !== null ) {
            $this->setMessage($message);
        }

        return $this;
    }

    /**
     * A shorthand that sets the process as succeeded with a result message.
     *
     * @param string $message The message to set.
     *
     * @return \Dovona\Common\Process\Result Self instance.
     */
    public function setSucceeded( $message = null )
    {
        $this->setStatus(true);

        // Set the message if that was specified
        if( $message !== null ) {
            $this->setMessage($message);
        }

        return $this;
    }

    /**
     * Retrieve a data value by its name.
     *
     * @param string $name Data name to retrieve.
     * @param string $defaultValue The default value in case the data key doesn't exist.
     *
     * @return mixed The value for the given data name
     */
    public function getData( $name, $defaultValue = null )
    {
        return isset($this->data[$name]) ? $this->data[$name] : $defaultValue;
    }

    /**
     * Set an extra result data.
     *
     * @param string $name Name of data to set
     * @param mixed $value Value of data to set
     *
     * @return \Dovona\Common\Process\Result Self instance.
     */
    public function setData( $name, $value )
    {
        $this->data[(string)$name] = $value;

        return $this;
    }
}