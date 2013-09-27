<?php

/**
 * Class Worker
 * Worker Threads have a persistent context, as such should be used over Threads in most cases.
 * @since 0.36
 */
abstract class Worker
{
    /**
     * Fetches a chunk of the objects member table of the given size, optionally preserving keys
     * @param long $size The number of items to fetch
     * @param boolean $preserve Preserve the keys of members, by default false
     * @return array An array of items from the objects member table
     * @since 0.45
     */
    final public function chunk($size, $preserve)
    {
        //noop
    }

    /**
     * Will return the identity of the Thread that created the referenced Thread
     * @return int A numeric identity
     * @since 0.36
     */
    final public function getCreatorId()
    {
        //noop
    }

    /**
     * Returns the number of Stackables waiting to be executed by the referenced Worker
     * @return int
     * @since 0.36
     */
    final public function getStacked()
    {
        //noop
    }

    /**
     * Will return the identity of the referenced Worker
     * @return int A numeric identity
     * @since 0.36
     */
    final public function getThreadId()
    {
        //noop
    }

    /**
     * Tell if the referenced Worker has been shutdown
     * @return boolean
     * @since 0.37
     */
    final public function isShutdown()
    {
        //noop
    }

    /**
     * Tell if a Worker is executing Stackables
     * @return boolean
     * @since 0.37
     */
    final public function isWorking()
    {
        //noop
    }

    /**
     * Merges data into the current object
     * @param mixed $from The data to merge
     * @param mixed $overwrite Overwrite existing keys flag, by default true
     * @return boolean
     * @since 0.45
     */
    final public function merge($from, $overwrite)
    {
        //noop
    }

    /**
     * Pops an item from the objects member table
     * @return boolean The last item from the objects member table
     * @since 0.45
     */
    final public function pop()
    {
        //noop
    }

    /**
     * The run method should prepare the Workers members ( and resources ) -
     * Stackables have access to the Worker and it's methods/members/resources during execution
     *
     * @return mixed The methods return value, if used, will be ignored
     * @since 0.36
     */
    abstract public function run();

    /**
     * Shifts an item from the objects member table
     * @return boolean The first item from the objects member table
     * @since 0.45
     */
    final public function shift()
    {
        //noop
    }

    /**
     * Shuts down the Worker after executing all the Stackables previously stacked
     *
     * @since 0.37
     */
    final public function shutdown()
    {
        //noop
    }

    /**
     * Appends the referenced Stackable to the stack of the referenced Worker
     * @param Stackable $work An object of type Stackable to be executed by the referenced Worker
     * @since 0.36
     * @return int The new length of the stack
     */
    final public function stack(Stackable $work)
    {
        //noop
    }

    /**
     * Will start a new Thread, executing Worker::run and then waiting for Stackables
     * @param $options An optional mask of inheritance constants, by default PTHREADS_INHERIT_ALL
     * @return bool
     * @since 0.36
     */
    final public function start($options)
    {
        //noop
    }

    /**
     * Removes the referenced Stackable ( or all Stackables if parameters are void )
     * from stack of the referenced Worker
     * @param Stackable $work
     * @return int The new length of the stack
     * @since 0.36
     */
    final public function unstack(Stackable $work)
    {
        //noop
    }
}
