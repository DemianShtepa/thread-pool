<?php

namespace DemianShtepa\ThreadPool\Service;

use DemianShtepa\ThreadPool\Interfaces\DaemonInterface;
use DemianShtepa\ThreadPool\Service\Commands\NonDaemonCommand;
use DemianShtepa\ThreadPool\Service\Commands\RestartCommand;
use DemianShtepa\ThreadPool\Service\Commands\StartCommand;
use DemianShtepa\ThreadPool\Service\Commands\StatusCommand;
use DemianShtepa\ThreadPool\Service\Commands\StopCommand;
use Symfony\Component\Console\Application;


class Service
{
    /**
     * @var Application
     */
    private $application;

    /**
     * Service constructor.
     *
     * @param DaemonInterface $daemon
     */
    public function __construct(DaemonInterface $daemon)
    {
        $this->application = new Application();

        $this->application->add(new StartCommand('start', $daemon));
        $this->application->add(new StopCommand('stop', $daemon));
        $this->application->add(new RestartCommand('restart', $daemon));
        $this->application->add(new StatusCommand('status', $daemon));
        $this->application->add(new NonDaemonCommand('non-daemon', $daemon));
    }

    public function run(): void
    {
        $this->application->run();
    }
}