<?php

$search = isset($_GET['search'])?$_GET['search']:'';


$SQL_query = "SELECT * FROM geekbrains.students";

if ($search!='') {
$SQL_query .= " WHERE lang LIKE \"%".$search."%\" or name LIKE \"%".$search."%\" or age LIKE \"%".$search."%\" or id LIKE \"%".$search."%\"";
}

if($_GET['ORDER']=='A')
$SQL_query .= " ORDER BY students.name ASC";
else
    $SQL_query .= " ORDER BY students.name DESC";


