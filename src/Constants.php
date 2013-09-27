<?php
/**
 * The default inheritance mask used when starting Threads and Workers
 */
define("PTHREADS_INHERIT_ALL", 1);
/**
 * Determines wether the ini entries are inherited by the new context
 */
define("PTHREADS_INHERIT_INI", 2);
/**
 * Determines wether the constants are inherited by the new context
 */
define("PTHREADS_INHERIT_CONSTANTS", 3);
/**
 * Determines wether the class table is inherited by the new context
 */
define("PTHREADS_INHERIT_CLASSES", 4);
/**
 * Determines wether the function table is inherited by the new context
 */
define("PTHREADS_INHERIT_FUNCTIONS", 5);
/**
 * Determines wether the included_files table is inherit by the new context
 */
define("PTHREADS_INHERIT_INCLUDES", 6);
/**
 * Nothing will be inherited by the new context
 */
define("PTHREADS_INHERIT_NONE", 7);

//@TODO: implement http://www.php.net/manual/en/class.cond.php