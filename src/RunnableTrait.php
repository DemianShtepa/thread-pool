<?php

namespace DemianShtepa\ThreadPool;


trait RunnableTrait
{
    public function dispatchSignals(): void
    {
        pcntl_signal_dispatch();
    }
}