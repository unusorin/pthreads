<?php

class Pool
{
    /**
     * maximum number of Workers this Pool can use
     *
     * @var int
     */
    protected $size;
    /**
     * the class of the Worker
     *
     * @var string
     */
    protected $class;
    /**
     * references to Workers
     *
     * @var Worker[]
     */
    protected $workers;
    /**
     * references to Threaded objects submitted to the Pool
     *
     * @var Threaded
     *
     */
    protected $work;
    /**
     * the arguments for constructor of new Workers
     *
     * @var array
     */
    protected $ctor;
    /**
     * offset in workers of the last Worker used
     *
     * @var int
     */
    protected $last;

    /**
     * Allows the Pool to collect references determined to be garbage by the given collector
     *
     * @param callable $collector
     */
    public function collect(Closure $collector)
    {

    }

    /**
     * Constructor
     *
     * @param int    $size  The maximum number of Workers this Pool can create
     * @param string $class The class for new Workers
     * @param array  $ctor  An array of arguments to be passed to new Workers
     */
    public function __construct($size, $class, array $ctor = [])
    {

    }

    /**
     * Resize the Pool
     *
     * @param int $size
     */
    public function resize($size)
    {

    }

    /**
     * Shutdown the Workers in this Pool
     */
    public function shutdown()
    {

    }

    /**
     * Submit the task to the next Worker in the Pool
     *
     * @param Threaded $task
     *
     * @return int
     */
    public function submit(Threaded $task)
    {

    }

    /**
     * Submits an object for execution
     *
     * @param int      $worker
     * @param Threaded $task
     *
     * @return int
     */
    public function submitTo($worker, Threaded $task)
    {

    }
}