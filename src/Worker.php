<?php

/**
 * Class Worker
 * Worker Threads have a persistent context, as such should be used over Threads in most cases.
 *
 * @since 0.36
 */
class Worker extends Thread implements Traversable, Countable, ArrayAccess
{
    /**
     * Returns the number of objects waiting to be executed by the referenced Worker
     *
     * @return int
     */
    public function getStacked()
    {

    }

    /**
     * Tell if the referenced Worker has been shutdown
     *
     * @return boolean
     */
    public function isShutdown()
    {

    }

    /**
     * Tell if a Worker is executing Stackables
     * return boolean
     */
    public function isWorking()
    {

    }

    /**
     * Shuts down the Worker after executing all the objects previously stacked
     */
    public function shutdown()
    {

    }

    /**
     * Appends the referenced object to the stack of the referenced Worker
     *
     * @param Threaded $work
     *
     * @return int
     */
    public function stack(Threaded &$work)
    {

    }

    /**
     * Removes the referenced object ( or all objects if parameters are void ) from stack of the referenced Worker
     *
     * @param Threaded $work
     *
     * @return int
     */
    public function unstack(Threaded &$work)
    {

    }
}
