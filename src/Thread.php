<?php

/**
 * Class Thread
 * An implementation of a Thread should extend this declaration,
 * implementing the run method. When the start method of that object is called,
 * the run method code will be executed in separate Thread.
 *
 * @since 0.34
 */
class Thread extends Threaded implements Countable, Traversable, ArrayAccess
{
    /**
     * Detaches the referenced Thread from the calling context, dangerously!
     */
    public function detach()
    {

    }

    /**
     * Will return the identity of the Thread that created the referenced Thread
     *
     * @return int
     */
    public function getCreatorId()
    {

    }

    /**
     * Return a reference to the currently executing Thread
     *
     * @return Thread
     */
    public static function getCurrentThread()
    {

    }

    /**
     * Will return the identity of the currently executing Thread
     *
     * @return int
     */
    public static function getCurrentThreadId()
    {

    }

    /**
     * Will return the identity of the referenced Thread
     *
     * @return int
     */
    public function getThreadId()
    {

    }

    /**
     * Will execute a Callable in the global scope
     *
     * @return mixed The return value of the Callable
     */
    public function globally()
    {

    }

    /**
     * Tell if the referenced Thread has been joined
     *
     * @return boolean
     */
    public function isJoined()
    {

    }

    /**
     * Tell if the referenced Thread was started
     *
     * @return boolean
     */
    public function isStarted()
    {

    }

    /**
     * Causes the calling context to wait for the referenced Thread to finish executing
     *
     * @return boolean
     */
    public function join()
    {

    }

    /**
     * Forces the referenced Thread to terminate
     *
     * @return boolean indication of success
     */
    public function kill()
    {

    }

    /**
     * An optional mask of inheritance constants, by default PTHREADS_INHERIT_ALL
     *
     * @param int $options
     *
     * @return boolean
     */
    public function start($options = PTHREADS_INHERIT_ALL)
    {

    }
}
