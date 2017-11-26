<?php

function publicPath($path){
  $tempURI = get_template_directory_uri();
  return $tempURI."/public/".$path;
}

add_theme_support( 'post-thumbnails' );
