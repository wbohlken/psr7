<?php
namespace GuzzleHttp\Psr7;

use Psr\Http\Message\StreamableInterface;

/**
 * Does not store any data written to it.
 */
class NullStream implements StreamableInterface
{
    public function __toString()
    {
        return '';
    }

    public function getContents()
    {
        return '';
    }

    public function close() {}

    public function detach() {}

    public function getSize()
    {
        return 0;
    }

    public function isReadable()
    {
        return true;
    }

    public function isWritable()
    {
        return true;
    }

    public function isSeekable()
    {
        return true;
    }

    public function eof()
    {
        return true;
    }

    public function tell()
    {
        return 0;
    }

    public function rewind()
    {
        return $this->seek(0);
    }

    public function seek($offset, $whence = SEEK_SET)
    {
        return false;
    }

    public function read($length)
    {
        return false;
    }

    public function write($string)
    {
        return strlen($string);
    }

    public function getMetadata($key = null)
    {
        return $key ? null : [];
    }
}
