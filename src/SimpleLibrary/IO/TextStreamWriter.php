<?php

namespace SimpleLibrary\IO;


class TextStreamWriter extends OutputStreamWriter {

    /**
     * @var string
     */
    private $filename;

    private $resource;

    function __construct($filename, $mode)
    {
        $this->filename = $filename;
        $this->resource = fopen($this->filename, $mode);
    }

    /**
     * Appends to an existing file, otherwise creates it
     * @param $filename
     * @return static
     */
    public static function append($filename) {
        return new static($filename, "w+");
    }

    /**
     * Creates a file, otherwise overwrites it
     * @param $filename
     * @return static
     */
    public static function create($filename) {
        return new static($filename, "w");
    }

    /**
     * Closes this stream and releases any system resources associated with it. If the stream is already closed then invoking this method has no effect.
     * @return void
     */
    public function close()
    {
        fclose($this->resource);
    }

    /**
     * Flushes the stream.
     * @return void
     */
    public function flush()
    {
        fflush($this->resource);
    }

    /**
     * Writes a string
     * @param string $data
     * @return void
     */
    public function write($data)
    {
        fwrite($this->resource, $data);
    }
}