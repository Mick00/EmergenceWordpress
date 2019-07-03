<?php

function write_if_not_empty($open, $close, $content){
  if(!empty($content)){
    echo $open.$content.$close;
  }
}
