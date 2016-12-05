<?php
class url{



    static  function init($uinfo){

        $urlinfo=$_SERVER['PATH_INFO'];
//        echo $uinfo['path'];die;
         self::$uinfo['path']($urlinfo);
    }


    static  function bathinfo($urlinfo){
        $data= explode('/',$urlinfo);
        foreach($data as $k=>$v){
            IF(!$v){
                unset($data[$k]);
            }
        }
        /*
         * 调取应用加载
         * */
    }

}

