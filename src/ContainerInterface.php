<?php

namespace League\Container;

interface ContainerInterface
{
    /**
     * Add a definition to the container
     *
     * @param string  $alias
     * @param mixed   $concrete
     * @param boolean $singleton
     * @return \League\Container\Definition\DefinitionInterface
     */
    public function add($alias, $concrete = null, $singleton = false);

    /**
     * Add a singleton definition to the container
     *
     * @param  string $alias
     * @param  mixed  $concrete
     * @return \League\Container\Definition\DefinitionInterface
     */
    public function singleton($alias, $concrete = null);

    /**
     * Add a callable definition to the container
     *
     * @param  string          $alias
     * @param  callable        $concrete
     * @return \League\Container\Definition\DefinitionInterface
     */
    public function invokable($alias, callable $concrete = null);

    /**
     * Modify the definition of an already defined service
     *
     * @param   string $alias
     * @throws  \InvalidArgumentException if the definition does not exist
     * @throws  \League\Container\Exception\ServiceNotExtendableException if service cannot be extended
     * @return  \League\Container\Definition\DefinitionInterface
     */
    public function extend($alias);

    /**
     * Get an item from the container
     *
     * @param  string $alias
     * @param  array  $args
     * @return mixed
     */
    public function get($alias, array $args = []);

    /**
     * Invoke
     *
     * @param  string $alias
     * @param  array  $args
     * @return mixed
     */
    public function call($alias, array $args = []);

    /**
     * Check if an item is registered with the container
     *
     * @param  string  $alias
     * @return boolean
     */
    public function isRegistered($alias);

    /**
     * Check if an item is being managed as a singleton
     *
     * @param  string  $alias
     * @return boolean
     */
    public function isSingleton($alias);
}
