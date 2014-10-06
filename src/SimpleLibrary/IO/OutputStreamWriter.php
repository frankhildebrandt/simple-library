<?php

namespace SimpleLibrary\IO;


abstract class OutputStreamWriter implements ClosableInterface, FlushableInterface {

    /**
     * Writes a string
     * @param string $data
     * @return void
     */
    abstract public function write($data);

} 