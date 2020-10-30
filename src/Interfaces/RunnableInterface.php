<?php

namespace DemianShtepa\ThreadPool\Interfaces;

use DemianShtepa\ThreadPool\Exceptions\Thread\InterruptedException;


interface RunnableInterface
{
    /**
     * @return int Exit code
     *
     * @throws InterruptedException
     */
    public function run(): int;
}
