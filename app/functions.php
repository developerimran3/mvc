<?php

/**
 * massage 
 */

function createAlert($msg, $type = "danger")
{
    return "<div class=\"alert alert-{$type} alert-dismissible fade show\" role=\"alert\"><strong>{$msg}</strong><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>";
}


/**
 * field empty error
 */

function fieldErr($field_value, $type = "danger")
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($field_value)) {
            return  "border-{$type} offset";
        }
    }
}


/*
* Field Value
*/


function old($oldField)
{
    return $_POST[$oldField] ?? '';
}


function reset_form()
{
    return $_POST = [];
}


/**
 * file uplode 
 */

function move($files, $path)
{
    //file Managment
    $tmp_name = $files['tmp_name'];
    $file_name = $files['name'];
    $file_size = $files['size'];

    // get file extension
    $file_arr = explode('.', $file_name);
    $file_ext = strtolower(end($file_arr));
    //file name unique
    $unique_file_name = time() . '_' . rand(100000, 1000000) . '_' . str_shuffle('1234567890') . '.' . $file_ext;
    // file uplode
    move_uploaded_file($tmp_name, $path . $unique_file_name);
    //return file name
    return $unique_file_name;
}


/**
 * 
 */
function createId()
{
    // Generate 10 bytes of cryptographically secure random data
    $randomBytes = random_bytes(10);

    // Convert to a hexadecimal string for easy storage/representation
    $userId = 'user_' . bin2hex($randomBytes);

    // Return the unique user ID
    return $userId;
}
