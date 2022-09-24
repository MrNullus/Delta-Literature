<?php  
# @ Configs Initial @
session_start();

# @ Autoload Model @
spl_autoload_register(function($model) {
  if (file_exists("./".$model.EXTENSION_MODEL)) {
    require_once("./".$model.EXTENSION_MODEL);
  } elseif (file_exists("../models/".$model.EXTENSION_MODEL)) {
    require_once("../models/".$model.EXTENSION_MODEL);
  }
});

require_once('utils/view.php');
?>