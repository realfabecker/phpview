<?php

namespace Solis\PhpView\Contracts;

/**
 * Class AttachmentContract
 *
 * @package Solis\PhpView\Contracts
 */
interface AttachmentContract
{
    /**
     * @param ViewContract[] $attached
     */
    public function setAttached($attached);

    /**
     * @return ViewContract[]
     */
    public function getAttached();

    /**
     * @param ViewContract $view
     */
    public function append($view);

    /**
     * @param string $name
     *
     * @return ViewContract
     */
    public function getEntry($name);
}