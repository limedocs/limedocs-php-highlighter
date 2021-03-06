<?php
/**
 * This file is part of Limedocs
 *
 * Copyright (C) Matthias ETIENNE <matthias@etienne.in>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Lime\Highlighter\Extension;

use Symfony\Component\DependencyInjection\ContainerBuilder;

interface ExtensionInterface {

    /**
     * Return the extension name
     *
     * @return string
     */
    public function getName();


    public function getHooks();

    public function hasHook($hook_type);

    public function callHook($hook_type, $value);


    /**
     * Return the extension version
     *
     * @return string
     */
    public function getVersion();

    /**
     * Get the container
     *
     * @return ContainerBuilder
     */
    public function getContainer();

    /**
     * Set the container
     *
     * @param ContainerBuilder $container
     * @return $this
     */
    public function setContainer(ContainerBuilder $container);

}