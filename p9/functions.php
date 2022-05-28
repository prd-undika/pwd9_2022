<?php

function  connect()
{
  return mysqli_connect('localhost', 'root', '', 'pwd_2022');
}

function query($query)
{
  $conn = connect();
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
  }
  return $rows;
}
