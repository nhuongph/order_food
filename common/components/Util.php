<?php
namespace app\common\components;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Util
 *
 * @author thanhlbk
 */
use Yii;
class Util {
    //put your code here
    public static function getUrlImage($image) {
        $link;
        if($image){
           $link = '/order_foods/web/uploads' . '/' . $image;
        }
        else{
            $link = '/order_foods/web/uploads' . '/' .'no-image.jpg';
        }
        return $link;
    }
    
    public static function uploadFile($file, $fileName) {
        if ($file) {
            $uploadPath = \Yii::getAlias('@uploadPath');
            $file->saveAs(Yii::getAlias($uploadPath . '/uploads/' .  $fileName));
            return true;
        }
        return false;
    }
    public static function deleteFile($fileName) {
        $uploadPath = \Yii::getAlias('@uploadPath');
        @unlink(Yii::getAlias($uploadPath . '/' . $fileName));
    }
    
    /**
    * @author thiennb 
    * Debug function
    * d($var);
    */
   function d($var,$caller=null)
   {
       if(!isset($caller)){
           $caller = array_shift(debug_backtrace(1));
       }
       echo '<code>File: '.$caller['file'].' / Line: '.$caller['line'].'</code>';
       echo '<pre>';
       \yii\helpers\VarDumper::dump($var, 10, true);
       echo '</pre>';
   }

   /**
    * @author thiennb 
    * Debug function with die() after
    * dd($var);
    */
   function dd($var)
   {
       $caller = array_shift(debug_backtrace(1));
       self::d($var,$caller);
       die();
   }
    
}
