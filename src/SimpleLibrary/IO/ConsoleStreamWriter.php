<?php

namespace SimpleLibrary\IO;


use Symfony\Component\Console\Output\OutputInterface;

class ConsoleStreamWriter extends OutputStreamWriter {

    /**
     * @var \Symfony\Component\Console\Output\OutputInterface
     */
    private $outputInterface;

    function __construct(OutputInterface $outputInterface)
    {
        $this->outputInterface = $outputInterface;
    }


    /**
     * Closes this stream and releases any system resources associated with it. If the stream is already closed then invoking this method has no effect.
     * @return void
     */
    public function close()
    {
        $this->flush();
    }

    /**
     * Flushes the stream.
     * @return void
     */
    public function flush()
    {
        $this->outputInterface->writeln('');
    }

    /**
     * Writes a string
     * @param string $data
     * @return void
     */
    public function write($data)
    {
        $this->outputInterface->write($data);
    }
}