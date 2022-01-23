<?php
/**
 * In the Dependency Injection design pattern, the necessary objects are
 * supplied (injected) into a class instead of the class itself creating
 * those objects.
 *
 * Use:
 *   $config = new Config();
 *   $config->set("user", "acampos");
 *   $dependency_injection = new DependencyInjection($config);
 *   $dependency_injection->getUser();
 *
 * @version 1.0 (09/01/2022)
 * @author  Antonio Campos (https://github.com/acamposserna)
 */

namespace Other\DependencyInjection;

class DependencyInjection {

    // This is the class that will be injected.
    private $config;

    /**
     * DependencyInjection constructor.
     *
     * @param Config $config This is the object that is injected.
     */
    public function __construct(Config $config) {
        $this->config = $config;
    }

    /**
     * Returns the user config variable.
     * This value has been injected into the object's constructor.
     *
     * @return string User config variable.
     */
    public function getUser() {
        return $this->config->get("user");
    }
}