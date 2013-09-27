<?php

/**
 * Class Thread
 * An implementation of a Thread should extend this declaration,
 * implementing the run method. When the start method of that object is called,
 * the run method code will be executed in separate Thread.
 * @since 0.34
 */
abstract class Thread
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
     * Will return the identity of the referenced Thread
     * @return int A numeric identity
     * @since 0.34
     */
    final public function getThreadId()
    {
        //noop
    }

    /**
     * Tell if the referenced Thread has been joined by another context
     * @return boolean
     * @since 0.34
     */
    final public function isJoined()
    {
        //noop
    }

    /**
     * Tell if the referenced Thread is executing
     * @return boolean
     * @since 0.34
     */
    final public function isRunning()
    {
        //noop
    }

    /**
     * Tell if the referenced Thread has been started
     * @return boolean
     * @since 0.34
     */
    final public function isStarted()
    {
        //noop
    }

    /**
     * Tell if the referenced Thread exited, suffered fatal errors, or threw uncaught exceptions during execution
     * @return boolean
     * @since 0.43
     */
    final public function isTerminated()
    {
        //noop
    }

    /**
     * Tell if the referenced Thread is waiting for notification
     * @return boolean
     * @since 0.34
     */
    final public function isWaiting()
    {
        //noop
    }

    /**
     * Causes the calling context to wait for the referenced Thread to finish executing
     * @return boolean
     * @since 0.34
     */
    final public function join()
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
    final public function merge($from, $overwrite = null)
    {
        //noop
    }

    /**
     * Send notification to the referenced Thread
     * @return boolean
     * @since 0.34
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
     * The run method of a Thread is executed in a Thread when a call to Thread::start is made
     * @return mixed The methods return value, if used, will be ignored
     * @since 0.34
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
     * Will start a new Thread to execute the implemented run method
     * @param long $options An optional mask of inheritance constants, by default PTHREADS_INHERIT_ALL
     * @return boolean
     * @since 0.34
     */
    final public function start($options)
    {
        //noop
    }

    /**
     * Executes the block while retaining the synchronization lock for the current context.
     * @param callable $block [,callable $...] The block of code to execute
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
     * Will cause the calling Thread to wait for notification from the referenced Thread
     * @param long $timeout An optional timeout in millionths of a second
     * @return boolean
     * @since 0.34
     */
    final public function wait($timeout)
    {
        //noop
    }
}
