<?php

namespace DemianShtepa\ThreadPool\Interfaces;


interface PoolItemInterface
{
    /**
     * @return ThreadInterface
     */
    public function getThread(): ThreadInterface;

    /**
     * @return null|callable
     */
    public function getCallback();
}