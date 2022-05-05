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



// class Fun {
//     public function getPlaceholders($arr)
//     {
//         return implode(",", array_map(function ($key) {
//             return ":$key";
//         }, array_keys($arr)));
//     }

//     public function getval($arr)
//     {
//         return implode(",", array_map(function ($key) {
//             return "$key";
//         }, array_keys($arr)));
//     }
// }
