<?php
function  getPlaceholders($arr)
{
    return implode(",", array_map(function ($key) {
        return ":$key";
    }, array_keys($arr)));
}
function  getval($arr)
{
    return implode(",", array_map(function ($key) {
        return "$key";
    }, array_keys($arr)));
}
