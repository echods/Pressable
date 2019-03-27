<?php

namespace Pressable\Contracts;

interface ApiCrudContract
{
    /**
     * Get all items for this resource.
     *
     * @return string
     */
    public function getAll();

    /**
     * Get one item for this resource.
     *
     * @return string
     */
    // public function getItem(int $id);

    // /**
    //  * Create a single resource item.
    //  *
    //  * @return id|null
    //  */
    // public function createItem();

    // *
    //  * Update a single for this resource.
    //  *
    //  * @param  int $id
    //  * @return id|null

    // public function updateItem(int $id);

    // /**
    //  * Update a single for this resource.
    //  *
    //  * @param int $id
    //  * @return bool
    //  */
    // public function deleteItem(int $id);
}