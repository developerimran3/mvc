<?php

/**
 * Data Create
 */

function create($path, $newData)
{
    //send deves data to JSON db
    $data = json_decode(file_get_contents($path), true);
    array_push($data, $newData);
    file_put_contents($path, json_encode($data));
}
/**
 * All Data Show
 */

function all($path)
{
    return json_decode(file_get_contents($path), false);
}


/**
 * get signal data
 */

function find($path, $id)
{
    $findData =  json_decode(file_get_contents($path), false);

    foreach ($findData as $item) {
        if ($item->id == $id) {
            return $item;
        }
    };
}
