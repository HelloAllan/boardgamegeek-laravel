<?php namespace PatrickRose\BoardGameGeek;

class XMLReader {

  public function parse($url) {
    return \simplexml_load_file($url);
  }
  
}

?>
