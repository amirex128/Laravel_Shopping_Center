<?php
function flash($key,$value){
    session()->flash($key,$value);
}