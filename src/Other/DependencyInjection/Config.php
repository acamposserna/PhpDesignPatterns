<?php
/**
 * This is a config class.
 * The configuration variables are stored in array.
 *
 * @version 1.0 (09/01/2022)
 * @author  Antonio Campos (https://github.com/acamposserna)
 */

namespace Other\DependencyInjection;

class Config {

    private $vars;

    /**
     * Config class constructor.
     */
    public function __construct() {
        $this->vars = array();
    }

    /**
     * Set value of a config variable.
     *
     * @param string $name Variable name.
     * @param string $value Variable value.
     */
    public function set($name, $value) {
        if (!isset($this->vars[$name])) {
            $this->vars[$name] = $value;
        }
    }

    /**
     * Get value of a config variable.
     *
     * @param string $name Variable name.
     * @return string Variable value.
     */
    public function get($name) {
        if (isset($this->vars[$name])) {
            return $this->vars[$name];
        }
    }
}