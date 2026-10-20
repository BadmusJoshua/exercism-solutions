<?php

// function language_list()
// {
//     // implement the language list function
//     $list = [];
//     return $list;//returns an empty list
// }

function language_list(...$languages)//takes as much arguments as possible
{
    $list = array();
    foreach ($languages as $language) {//adds each argument to the list
        $list[] = $language;
    }
    return $list;
}

function add_to_language_list($language_list, $language) {
    $language_list[] = $language;
    return $language_list;
}

function prune_language_list($language_list) {
    array_shift($language_list);
    return $language_list;
}

function current_language($list) {
    $first_item = $list[0];
    return $first_item;
}

function language_list_length($list){
    $list_length = count($list);
    return $list_length;
}
