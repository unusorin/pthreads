<?php

/**
 * Class Stackable
 * Stackables are tasks that are executed by Worker threads.
 * You can synchronize with, read, and write Stackable objects before, after and during their execution.
 * @since 0.36
 */
abstract class Stackable
{
    /**
     * Fetches a chunk of the objects member table of the given size, optionally preserving keys
     * @param int $size The number of items to fetch
     * @param boolean $preserve Preserve the keys of members, by default false
     * @return array An array of items from the objects member table
     * @since 0.45
     */
    final public function chunk($size, $preserve)
    {
        //noop
    }

    /**
     * A Stackable is running when a Worker Thread is executing it
     * @return boolean
     * @since 0.36
     */
    final public function isRunning()
    {
        //noop
    }

    /**
     * Tell if the referenced Stackable exited, suffered fatal errors, or threw uncaught exceptions during execution
     * @return boolean
     * @since 0.43
     */
    final public function isTerminated()
    {
        //noop
    }

    /**
     * Tell if the referenced Stackable is waiting for notification
     * @return boolean
     * @since 0.36
     */
    final public function isWaiting()
    {
        //noop
    }

    /**
     * Lock the referenced objects storage for the calling context
     * @return boolean
     * @since 0.40
     */
    final public function lock()
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
     * Sends notification to a Stackable that is waiting
     * @return boolean
     * @since 0.36
     */
    final public function notify()
    {
        //noop
    }

    /**
     * Pops an item from the objects member table
     * @return mixed The last item from the objects member table
     * @since 0.45
     */
    final public function pop()
    {
        //noop
    }

    /**
     * The run method of a Stackable is executed by the Worker Thread
     * @return mixed The methods return value, if used, will be ignored
     * @since 0.36
     */
    abstract public function run();

    /**
     * Shifts an item from the objects member table
     * @return mixed The first item from the objects member table
     * @since 0.45
     */
    final public function shift()
    {
        //noop
    }

    /**
     * Executes the block while retaining the synchronization lock for the current context.
     * @param callable $block [,mixed $...] The block of code to execute,
     * Variable length list of arguments to use as function arguments to the block
     * @return mixed The return value from the block
     * @since 0.40
     */
    final public function synchronized(Closure $block)
    {
        //noop
    }

    /**
     * Unlock the referenced objects storage for the calling context
     * @return boolean
     * @since 0.40
     */
    final public function unlock()
    {
        //noop
    }

    /**
     * Waits for notification from the Stackable
     * @param null $timeout An optional timeout in millionths of a second.
     * @return boolean
     * @since 0.36
     */
    final public function wait($timeout = null)
    {
        //noop
    }
}
