<?php

/**
 * Class Mutex
 * The static methods contained in the Mutex class provide direct access to Posix Mutex functionality.
 * @since 0.34
 */
class Mutex
{
    /**
     * Create, and optionally lock a new Mutex for the caller
     * @param boolean $lock Setting lock to true will lock the Mutex for the caller before returning the handle
     * @return int A newly created and optionally locked Mutex handle
     * @since 0.34
     */
    final public static function create($lock = null)
    {
        //noop
    }

    /**
     * Destroying Mutex handles must be carried out explicitly by the
     * programmer when they are finished with the Mutex handle.
     * @param int $mutex A handle returned by a previous call to Mutex::create(). The handle should not be locked by
     * any Thread when Mutex::destroy() is called.
     * @return boolean
     * @since 0.34
     */
    final public static function destroy($mutex)
    {
        //noop
    }

    /**
     * Attempt to lock the Mutex for the caller.
     * An attempt to lock a Mutex owned (locked) by another Thread will result in blocking.
     * @param int $mutex A handle returned by a previous call to Mutex::create().
     * @return boolean
     * @since 0.34
     */
    final public static function lock($mutex)
    {
        //noop
    }

    /**
     * Attempt to lock the Mutex for the caller without blocking if the Mutex is owned (locked) by another Thread.
     * @param int $mutex A handle returned by a previous call to Mutex::create().
     * @return boolean
     * @since 0.34
     */
    final public static function trylock($mutex)
    {
        //noop
    }

    /**
     * Attempts to unlock the Mutex for the caller, optionally destroying the Mutex handle. The calling thread should own the Mutex at the time of the call.
     * @param int $mutex A handle returned by a previous call to Mutex::create().
     * @param null $destroy When true pthreads will destroy the Mutex after a successful unlock.
     * @return boolean
     * @since 0.34
     */
    final public static function unlock($mutex, $destroy = null)
    {

    }
}
