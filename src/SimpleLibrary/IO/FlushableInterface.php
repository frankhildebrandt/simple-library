<?php

namespace SimpleLibrary\IO;

/**
 * Interface Flushable
 *
 * A Flushable is a destination of data that can be flushed. The flush method is invoked to write any buffered output to the underlying stream.
 *
 * @package FHild\IO
 */
interface FlushableInterface {

    /**
     * Flushes the stream.
     * @return void
     */
    public function flush();

} 