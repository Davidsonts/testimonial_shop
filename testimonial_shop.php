<?php

if (!defined('_PS_VERSION_'))
    exit();

include_once(_PS_MODULE_DIR_ . 'testimonial_shop/classes/TestimonialShop.php');

class Testimonial_Shop extends Module
{
    public function __construct()
    {
        $this->name = 'testimonial_shop';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Davidson Santos';
        $this->need_instance = 1;
        $this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Testimonial Shop', 'testimonial_shop');
        $this->description = $this->l('Testimonial in Home', 'testimonial_shop');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?', 'testimonial_shop');
    }

    public function install()
    {
        // if (Shop::isFeatureActive())
        //     Shop::setContext(Shop::CONTEXT_ALL);
    
        // return parent::install() &&
        //     $this->registerHook('displayPosition3') && Configuration::updateValue('testimonial_shop_db', '#####');
        
        include(dirname(__FILE__).'/sql/install.php');
		return parent::install() &&
            $this->registerHook('displayPosition1') &&
            $this->registerHook('displayPosition2') &&
            $this->registerHook('displayPosition3') &&
            $this->registerHook('displayPosition4') &&
            $this->registerHook('displayPosition5') &&
            $this->registerHook('displayPosition6');
    }
    
    public function uninstall()
    {
        include(dirname(__FILE__).'/sql/uninstall.php');
		return parent::uninstall();
    }

    public function hookdisplayPosition1($params)
    {
        // < assign variables to template >
        $testimonials = TestimonialShop::selectAll();

        $this->context->smarty->assign(
                'testimonials', $testimonials
        );

        $no = Db::getInstance()->getRow('SELECT * FROM '._DB_PREFIX_.'testimonial_shop_db');
        $hook = $no['hook'];
        
        $base_img = _MODULE_DIR_.'/testimonial_shop/images/';

        $this->context->smarty->assign(
            'base_img', $base_img
        );

        if ($hook == 'hookdisplayPosition1')
            return $this->display(__FILE__, 'testimonial_shop.tpl');
            ///return $this->whatsapp($params);
                    
    }

    public function hookdisplayPosition2($params)
    {
        // < assign variables to template >
        $testimonials = TestimonialShop::selectAll();

        $this->context->smarty->assign(
                'testimonials', $testimonials
        );

        $no = Db::getInstance()->getRow('SELECT * FROM '._DB_PREFIX_.'testimonial_shop_db');
		$hook = $no['hook'];
        
        $base_img = _MODULE_DIR_.'/testimonial_shop/images/';

        $this->context->smarty->assign(
            'base_img', $base_img
        );

        if ($hook == 'hookdisplayPosition2')
            return $this->display(__FILE__, 'testimonial_shop.tpl');
            ///return $this->whatsapp($params);
                    
    }

    public function hookdisplayPosition3($params)
    {
        // < assign variables to template >
        $testimonials = TestimonialShop::selectAll();

        $this->context->smarty->assign(
                'testimonials', $testimonials
        );

        $no = Db::getInstance()->getRow('SELECT * FROM '._DB_PREFIX_.'testimonial_shop_db');
		$hook = $no['hook'];
        
        $base_img = _MODULE_DIR_.'/testimonial_shop/images/';

        $this->context->smarty->assign(
            'base_img', $base_img
        );

        if ($hook == 'hookdisplayPosition3')
            return $this->display(__FILE__, 'testimonial_shop.tpl');
            ///return $this->whatsapp($params);
                    
    }

    public function hookdisplayPosition4($params)
    {
        // < assign variables to template >
        $testimonials = TestimonialShop::selectAll();

        $this->context->smarty->assign(
                'testimonials', $testimonials
        );

        $no = Db::getInstance()->getRow('SELECT * FROM '._DB_PREFIX_.'testimonial_shop_db');
		$hook = $no['hook'];
        
        $base_img = _MODULE_DIR_.'/testimonial_shop/images/';

        $this->context->smarty->assign(
            'base_img', $base_img
        );

        if ($hook == 'hookdisplayPosition4')
            return $this->display(__FILE__, 'testimonial_shop.tpl');
            ///return $this->whatsapp($params);
                    
    }

    public function hookdisplayPosition5($params)
    {
        // < assign variables to template >
        $testimonials = TestimonialShop::selectAll();

        $this->context->smarty->assign(
                'testimonials', $testimonials
        );

        $no = Db::getInstance()->getRow('SELECT * FROM '._DB_PREFIX_.'testimonial_shop_db');
		$hook = $no['hook'];
        
        $base_img = _MODULE_DIR_.'/testimonial_shop/images/';

        $this->context->smarty->assign(
            'base_img', $base_img
        );

        if ($hook == 'hookdisplayPosition5')
            return $this->display(__FILE__, 'testimonial_shop.tpl');
            ///return $this->whatsapp($params);
                    
    }

    public function hookdisplayPosition6($params)
    {
        // < assign variables to template >
        $testimonials = TestimonialShop::selectAll();

        $this->context->smarty->assign(
                'testimonials', $testimonials
        );

        $no = Db::getInstance()->getRow('SELECT * FROM '._DB_PREFIX_.'testimonial_shop_db');
		$hook = $no['hook'];
        
        $base_img = _MODULE_DIR_.'/testimonial_shop/images/';

        $this->context->smarty->assign(
            'base_img', $base_img
        );

        if ($hook == 'hookdisplayPosition6')
            return $this->display(__FILE__, 'testimonial_shop.tpl');
            ///return $this->whatsapp($params);
                    
    }

    public function displayForm()
    {
        // < init fields for form array >
        $fields_form[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('YouTube Module'),
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('URL of the YouTube video'),
                    'name' => 'testimonial_shop_db',
                    //'lang' => true,
                    'size' => 20,
                    'required' => true
                ),
            ),
            'submit' => array(
                'title' => $this->l('Save'),
                'class' => 'btn btn-default pull-right'
            )
        );
    
        // < load helperForm >
        $helper = new HelperForm();
    
        // < module, token and currentIndex >
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
    
        // < title and toolbar >
        $helper->title = $this->displayName;
        $helper->show_toolbar = true;        // false -> remove toolbar
        $helper->toolbar_scroll = true;      // yes - > Toolbar is always visible on the top of the screen.
        $helper->submit_action = 'submit'.$this->name;
        $helper->toolbar_btn = array(
            'save' =>
                array(
                    'desc' => $this->l('Save'),
                    'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
                        '&token='.Tools::getAdminTokenLite('AdminModules'),
                ),
            'back' => array(
                'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
                'desc' => $this->l('Back to list')
            )
        );
    
        // < load current value >
        $helper->fields_value['testimonial_shop_db'] = Configuration::get('testimonial_shop_db');
    
        return $helper->generateForm($fields_form);
    } 
    
    public function getContent()
    {
        $output = null;
    
        // // < here we check if the form is submited for this module >
        if (((bool)Tools::isSubmit('save')) == true) {
            $name = strval(Tools::getValue('name'));
            $message = strval(Tools::getValue('message'));
           /// $filename = Tools::getValue('filename');

            $target_dir = dirname(__FILE__).'/images/';
            
            $ext = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
            $nome_img = md5($_FILES["fileToUpload"]["name"]).date("ymdhis").'.'.$ext;
           // print_r($nome_img);

            $target_file = $target_dir . basename($nome_img);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    // echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    $erro .= " File is not an image. ";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                $erro .= "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                $erro .= "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                $erro .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $erro .= "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else {
                    $erro .= "Sorry, there was an error uploading your file.";
                }
            }
           
            $img = $nome_img;
            
            if($name){
                if($img){

                    if($message){
                        TestimonialShop::add($name, $img, $message);
                    }else{
                        $erro = "Please insert something in this field.'";
                    }

                }else{
                    $erro .= "Please insert something in this field. IMG'";
                    print_r($_FILES);
                }
            }else{
                $erro = "Please insert something in this field.'";
            }

            
        }
   
        
        ############### EDIT #########################################

        // // < here we check if the form is submited for this module >
        if (((bool)Tools::isSubmit('edit')) == true) {
            $name = strval(Tools::getValue('name'));
            $message = strval(Tools::getValue('message'));
            $filename_old = Tools::getValue('fileToUpload_old');
            $id =  Tools::getValue('id');    
            $target_dir = dirname(__FILE__).'/images/';
            
            if(file_exists($_FILES["fileToUpload"]["tmp_name"])){
                $ext = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
                $nome_img = md5($_FILES["fileToUpload"]["name"]).date("ymdhis").'.'.$ext;
                // print_r($nome_img);

                $target_file = $target_dir . basename($nome_img);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                // Check if image file is a actual image or fake image
                if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if($check !== false) {
                        // echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        $erro .= " File is not an image. ";
                        $uploadOk = 0;
                    }
                }
                // Check if file already exists
                if (file_exists($target_file)) {
                    $erro .= "Sorry, file already exists.";
                    $uploadOk = 0;
                }
                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 500000) {
                    $erro .= "Sorry, your file is too large.";
                    $uploadOk = 0;
                }
                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                    $erro .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    $erro .= "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                    } else {
                        $erro .= "Sorry, there was an error uploading your file.";
                    }
                }
                
                $img = $nome_img;
            }else{
                $img = $filename_old;
            }

            if($name){
                if($img){

                    if($message){
                        $img_rm = TestimonialShop::selectImage($id);
                        TestimonialShop::update($id, $name, $img, $message);

                        $url_remove_img = _PS_MODULE_DIR_.'testimonial_shop/images/'.$img_rm;

                        if(file_exists($url_remove_img)){
                            unset($url_remove_img);
                        }

                    }else{
                        $erro = "Please insert something in this field.'";
                    }

                }else{
                    $erro .= "Please insert something in this field. IMG'";
                    print_r($_FILES);
                }
            }else{
                $erro = "Please insert something in this field.'";
            }

        
    }
        ############### DELETE ###################
        if (((bool)Tools::isSubmit('delete')) == true) {
            $id =  Tools::getValue('id');   
            
            $img_rm = TestimonialShop::selectImage($id);
            TestimonialShop::deleteId($id);

            $url_remove_img = _PS_MODULE_DIR_.'testimonial_shop/images/'.$img_rm;
            //die($url_remove_img);
            if(file_exists($url_remove_img)){
                unset($url_remove_img);
            }
        }

        ############### HOOK UPDATE ################
        if (((bool)Tools::isSubmit('hook_up')) == true) {
            $hook =  Tools::getValue('shook'); 
            TestimonialShop::updateHook($hook);
        }

        $testimonials = TestimonialShop::selectAll();

        if(isset($erro)){
            $this->context->smarty->assign(
                array(
                    'erros' => $erro
                )
            );
        }

        
        $hook_select = TestimonialShop::hook();

        $this->context->smarty->assign(
            'hook_select', $hook_select
        )
        ; 
        $this->context->smarty->assign(
                'testimonials', $testimonials
        );
        
        $base_img = _MODULE_DIR_.'/testimonial_shop/images/';

        $this->context->smarty->assign(
            'base_img', $base_img
        );
        
        
       return $this->context->smarty->fetch($this->local_path.'views/templates/admin/configure.tpl');
    }
        
}    