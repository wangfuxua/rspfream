<?php

/*
 *       主函数
*/
 class fream{

          public    function  __construct(){
            spl_autoload_register(array('Load','loadclass'));
        }

     static  public function Load($clasname){
            $dir=strtolower($clasname);
         $file=dirname(__FILE__).'/'.$dir.'/'.$clasname.'.php';

            if(is_file($file)){
                include_once($file);
            }else{
                throw new Exception("file is not finf");
            }
        }
}
?>