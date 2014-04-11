<?php

/**
 * Class Threaded
 * Threaded objects form the basis of pthreads ability to execute user code asynchronously;
 * they expose and include synchronization methods and various useful interfaces.
 */
class Threaded implements Traversable, Countable, ArrayAccess
{
    /**
     * Fetches a chunk of the objects property table of the given size, optionally preserving keys
     *
     * @param int     $size      The number of items to fetch
     * @param boolean $preserver The number of items to fetch
     *
     * @return array of items from the objects property table
     */
    public function chunk($size, $preserver = null)
    {

    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Whether a offset exists
     *
     * @link http://php.net/manual/en/arrayaccess.offsetexists.php
     *
     * @param mixed $offset <p>
     *                      An offset to check for.
     *                      </p>
     *
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     */
    public function offsetExists($offset)
    {
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to retrieve
     *
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     *
     * @param mixed $offset <p>
     *                      The offset to retrieve.
     *                      </p>
     *
     * @return mixed Can return all value types.
     */
    public function offsetGet($offset)
    {
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to set
     *
     * @link http://php.net/manual/en/arrayaccess.offsetset.php
     *
     * @param mixed $offset <p>
     *                      The offset to assign the value to.
     *                      </p>
     * @param mixed $value  <p>
     *                      The value to set.
     *                      </p>
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to unset
     *
     * @link http://php.net/manual/en/arrayaccess.offsetunset.php
     *
     * @param mixed $offset <p>
     *                      The offset to unset.
     *                      </p>
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Count elements of an object
     *
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     *       </p>
     *       <p>
     *       The return value is cast to an integer.
     */
    public function count()
    {
    }

    /**
     * Retrieves terminal error information from the referenced object
     *
     * @return array containing the termination conditions of the referenced object
     */
    public function getTerminationInfo()
    {

    }

    /**
     * Tell if the referenced object is executing
     *
     * @return boolean
     */
    public function isRunning()
    {

    }

    /**
     * Tell if the referenced object was terminated during execution; suffered fatal errors,
     * or threw uncaught exceptions
     *
     * @return boolean
     */
    public function isTerminated()
    {

    }

    /**
     * Tell if the referenced object is waiting for notification
     *
     * @return boolean
     */
    public function isWaiting()
    {

    }

    /**
     * Lock the referenced objects property table
     *
     * @return boolean
     */
    public function lock()
    {

    }

    /**
     * Merges data into the current object
     *
     * @param mixed      $from
     * @param null|mixed $overwrite
     *
     * @return boolean
     */
    public function merge($from, $overwrite = null)
    {

    }

    /**
     * Send notification to the referenced object
     *
     * @return boolean
     */
    public function notify()
    {

    }

    /**
     * Send notification to the referenced object
     *
     * @return mixed The last item from the objects property table
     */
    public function pop()
    {

    }

    /**
     * The programmer should always implement the run method for objects that are intended for execution.
     */
    public function run()
    {

    }

    /**
     * Shifts an item from the objects property table
     *
     * @return mixed The first item from the objects property table
     */
    public function shift()
    {

    }

    /**
     * Executes the block while retaining the referenced objects synchronization lock for the calling context
     *
     * @param callable  $block      Executes the block while retaining the referenced objects
     *                              synchronization lock for the calling context
     * @param           $vars       Executes the block while retaining the
     *                              referenced objects synchronization lock for the calling context
     */
    public function synchronized(Closure $block, $vars)
    {
    }

    /**
     * Unlock the referenced objects storage for the calling context
     *
     * @return boolean
     */
    public function unlock()
    {

    }

    /**
     * Unlock the referenced objects storage for the calling context
     *
     * @param int $timeout
     *
     * @return boolean
     */
    public function wait($timeout = 0)
    {

    }
}
