<?php

namespace SimpleLibrary\IO;

/**
 * Class Closable
 *
 * A Closeable is a source or destination of data that can be closed. The close method is invoked to release resources that the object is holding (such as open files).
 *
 * @package FHild\IO
 */
interface ClosableInterface {

    /**
     * Closes this stream and releases any system resources associated with it. If the stream is already closed then invoking this method has no effect.
     * @return void
     */
    public function close();

} 