<?php

 class Db{
     private static $conn;
    /*
     * 构造方法
     * */
     private  function  __construct($dinfo){
         self::$conn=mysql_connect($dinfo['host'],$dinfo['user'],$dinfo['pwd']) or die('链接失败');
         mysql_select_db($dinfo['dbname'], self::$conn);
         mysql_query('set names '.$dinfo['charset']);
    }

     /*
      * 禁止clone 方法
      * */
    private function  __clone(){

        }
     public static  function init($dinfo){
         if(self::$conn instanceof self){
             self::$conn=new self($dinfo);
         }
         return self::$conn;
     }


    /*
     * 析构方法
     * */
     function __destruct(){
//        mysql_destory(self::$conn);
    }


}
?>