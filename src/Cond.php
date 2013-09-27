<?php

/**
 * Class Cond
 * The static methods contained in the Cond class provide direct access to Posix Condition Variables.
 * @since 0.34
 */
class Cond
{
    /**
     * Broadcast to all Threads blocking on a call to Cond::wait().
     * @param int $condition A handle to a Condition Variable returned by a previous call to Cond::create()
     * @return boolean
     * @since 0.34
     */
    final public static function broadcast($condition)
    {
        //noop
    }

    /**
     * Creates a new Condition Variable for the caller.
     * @return int A handle to a Condition Variable
     * @since 0.34
     */
    final public static function create()
    {
        //noop
    }

    /**
     * Destroying Condition Variable handles must be carried out explicitly by the programmer
     * when they are finished with the Condition Variable. No Threads should be blocking on a
     * call to Cond::wait() when the call to Cond::destroy() takes place.
     * @param int $condition A handle to a Condition Variable returned by a previous call to Cond::create()
     * @since 0.34
     */
    final public static function destroy($condition)
    {
        //noop
    }

    /**
     * @param int $condition A handle returned by a previous call to Cond::create()
     * @return boolean
     * @since 0.34
     */
    final public static function signal($condition)
    {
        //noop
    }

    /**
     * Wait for a signal on a Condition Variable, optionally specifying a timeout to limit waiting time.
     * @param int $condition A handle returned by a previous call to Cond::create().
     * @param int $mutex A handle returned by a previous call to Mutex::create() and owned (locked) by the caller.
     * @param int $timeout An optional timeout, in microseconds ( millionths of a second ).
     * @return boolean
     * @since 0.34
     */
    final public static function wait($condition, $mutex, $timeout = null)
    {
        //noop
    }
}
