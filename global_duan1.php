<?php
   $error_message = "";
   $success_message = "";
   $img_path_duan1 = "view/image/";
   function mysubstr($str,$limit=100){
      if(strlen($str)<=$limit) return $str;
      return mb_substr($str,0,$limit-3,'UTF-8').'...';
  }
?>