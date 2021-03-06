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

use Spaark\Base\Collection;

/**
 * Represents an abstract collection which acts as a list of items
 */
interface ListCollection extends Collection
{
    /**
     * Adds a new item to the end of the list
     *
     * @param ValueType $item The item to add
     */
    public function add($item);

    /**
     * Adds a new item at the specified position
     *
     * @param int $index The index to set
     * @param ValueType $value The value to set
     */
    public function set(int $index, $value);

    /**
     * Remove items from the list, and optionally replace them
     *
     * @param int $offset The offset to cut out
     * @param int $length The number of elements to remove
     * @param array $items Items to add
     */
    public function splice
    (
        int $offset,
        ?int$length = null,
        array $items = []
    );

    /**
     * Gets the item, looking it up by the specified index
     *
     * @param int $index The index to get
     * @return ValueType The item
     */
    public function get(int $index);

    /**
     * Removes an item from the list, specified by its index
     *
     * @param int $index The index of the item to remove
     */
    public function remove(int $index);
}
