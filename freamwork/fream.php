<?php
namespace main;
/*
 *       主函数
*/
class fream{
        static function  __construct(){
            spl_autoload_register(array('Load','loadclass'));
        }

    public function Load($clasname){
        $file=$clasname.'.php';
            if(is_file($file)){
                include_once($file);
            }else{
                throw new Exception("file is not finf");
            }
        }
}
?>