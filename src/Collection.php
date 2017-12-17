<?php
/**
 * This file is part of the Spaark Base package.
 *
 * (c) Emily Shepherd <emily@emilyshepherd.me>
 *
 * For the full copyright and license information, please view the
 * LICENSE.md file that was distributed with this source code.
 *
 * @package spaark/base
 * @author Emily Shepherd <emily@emilyshepherd.me>
 * @license MIT
 */

namespace Spaark\Base\Collection;

use ArrayAccess;
use IteratorAggregate;
use Countable;

/**
 * Represents an abstract collection of items
 */
interface Collection extends ArrayAccess, IteratorAggregate, Countable
{
    /**
     * Returns the size of the collection
     *
     * @return int The size of the collection
     */
    public function size() : int;

    /**
     * Checks if the Collection is empty
     *
     * @return boolean True if the element is empty
     */
    public function empty() : bool;

    /**
     * Basic implementation of contains
     *
     * Should be overridden by datatype-specific implementations for
     * speed improvements
     *
     * @param ValueType $searchFor The key to search for
     * @return boolean
     */
    public function contains($searchFor) : bool;

    /**
     * Performs a map on the collection
     *
     * @param callable $cb The function to use to map the collection
     * @return Collection The mapped collection
     */
    public function map(callable $cb) : Collection;

    /**
     * Returns the data in this collection as a native PHP array
     *
     * @return array
     */
    public function toArray() : array;
}
