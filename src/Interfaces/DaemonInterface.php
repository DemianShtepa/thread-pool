<?php

namespace DemianShtepa\ThreadPool\Interfaces;

use DemianShtepa\ThreadPool\Exceptions\Daemon\AlreadyStoppedException;
use DemianShtepa\ThreadPool\Exceptions\Daemon\CantStopDaemonException;
use DemianShtepa\ThreadPool\Exceptions\Daemon\CouldNotForkException;
use DemianShtepa\ThreadPool\Exceptions\Daemon\DaemonException;
use DemianShtepa\ThreadPool\Exceptions\Daemon\InvalidPidPathException;
use DemianShtepa\ThreadPool\Exceptions\Daemon\AlreadyRunningException;


interface DaemonInterface
{
    /**
     * @param bool $isSynchronous
     *
     * @return bool
     *
     * @throws CouldNotForkException
     * @throws AlreadyRunningException
     * @throws InvalidPidPathException
     * @throws DaemonException
     */
    public function start($isSynchronous = false): bool;

    /**
     * @return boolean
     *
     * @throws AlreadyStoppedException
     * @throws CantStopDaemonException
     */
    public function stop(): bool;

    /**
     * Returns PID of daemon process
     *
     * @return int
     */
    public function getPid(): int;
}