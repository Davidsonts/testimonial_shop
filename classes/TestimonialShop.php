<?php

use PrestaShop\PrestaShop\Adapter\ServiceLocator;
use PrestaShop\PrestaShop\Core\Product\ProductInterface;

class TestimonialShop extends ObjectModel
{
    public static function selectAll(){
        $sql = 'SELECT * FROM '._DB_PREFIX_.'testimonial_shop_db;';
        
        //return Db::getInstance()->getValue($sql);
        return Db::getInstance()->executeS($sql);
    }

    public static function selectId($id){
        $sql = 'SELECT * FROM '._DB_PREFIX_.'testimonial_shop_db WHERE id = '.$id.'';
        
        return Db::getInstance()->executeS($sql);
    }

    public function selectImage($id){
        $sql = 'SELECT img FROM '._DB_PREFIX_.'testimonial_shop_db WHERE id = '.$id.'';
        $img = Db::getInstance()->getValue($sql);
        return $img;
    }

    public function add($name, $img, $message){
        
        $sql = 'SELECT hook FROM '._DB_PREFIX_.'testimonial_shop_db';
        $hook = Db::getInstance()->getValue($sql);

        if(empty($hook)){
            $hook = "hookdisplayPosition1";
        }

        $sql = 'INSERT INTO `'._DB_PREFIX_.'testimonial_shop_db` (`name`, `img`, `message`, `hook`) 
            VALUES ("'.$name.'", "'.$img.'", "'.$message.'", "'.$hook.'");';

        if (!Db::getInstance()->execute($sql))
            die('Error add.');
    }  

    public function hook(){
        $sql = 'SELECT hook FROM '._DB_PREFIX_.'testimonial_shop_db';
        $hook = Db::getInstance()->getValue($sql);

        if(empty($hook)){
            $hook = "hookdisplayPosition1";
        }

        return $hook;
    }

    public function updateHook($hook){
        $sql = 'UPDATE `'._DB_PREFIX_.'testimonial_shop_db`
            SET `hook` = "'.$hook.'";';

        if (!Db::getInstance()->execute($sql))
        die('Error update Local.');
    }

    public function update($id, $name, $img, $message){
        // die($id.' name: '.$name.' img: '.$img.' msm: '.$message);
        $sql = 'SELECT hook FROM '._DB_PREFIX_.'testimonial_shop_db';
        $hook = Db::getInstance()->getValue($sql);

        if(empty($hook)){
            $hook = "hookdisplayPosition1";
        }
        
        $sql = 'UPDATE `'._DB_PREFIX_.'testimonial_shop_db`
            SET `name`="'.$name.'", `img` = "'.$img.'", `message` = "'.$message.'", `hook` = "'.$hook.'" WHERE id = "'.$id.'";';

        if (!Db::getInstance()->execute($sql))
            die('Error update.');
    }    
    
    public function deleteId($id){
        $sql = 'DELETE FROM `'._DB_PREFIX_.'testimonial_shop_db` WHERE id = "'.$id.'";';

        if (!Db::getInstance()->execute($sql))
            die('Error Delete.');        
    }
}    