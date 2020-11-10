<?php
function seatsInTheater($nCols, $nRows, $col, $row) {

    print ($nCols*($col-1)+($nRows*$row))-1;

    return ($nCols*($col-1)+($nRows*$row))-1;
}