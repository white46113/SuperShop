<?php

namespace App\Services;
use App\Models\Item;


class ItemService
{
    /**
     * Create a new class instance.
     */
    public function getItemById($id)
    {
        return Item::find($id);
    }

    public function getAllItems()
    {
        return Item::all();
    }
}
