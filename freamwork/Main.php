<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Lee
 * Date: 16-12-2
 * Time: 下午2:50
 * To change this template use File | Settings | File Templates.
 */
require_once('fream.php');
class Main  extends fream{
        static $db;
    public    function  __construct(){
        spl_autoload_register(array('Load','loadclass'));
    }

        static  public function Run($conf){
            if(!$conf){
                echo "config is error";exit;
            }
            if(file_exists($conf)){
                $data=require_once($conf);
             foreach($data as  $k=>$v){
                parent::Load($k);
             }

            }else{
                echo "config is error";exit;
            }
        }


}