<?php


require_once 'Zend/Gdata/Extension.php';

require_once 'Zend/Gdata/Photos.php';

class Zend_Gdata_Photos_Extension_Thumbnail extends Zend_Gdata_Extension
{

    protected $_rootNamespace = 'gphoto';
    protected $_rootElement = 'thumbnail';

    public function __construct($text = null)
    {
        $this->registerAllNamespaces(Zend_Gdata_Photos::$namespaces);
        parent::__construct();
        $this->setText($text);
    }

}
