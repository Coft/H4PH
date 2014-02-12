<?php
/**
 * H4PH - HTML4 PHP Helper 
 * @link https://github.com/Coft/H4PH
 */

class Meta
{
    /**
     * contains all setted attributes 
     * @var array 
     */
    private $attrs = array();
    /**
     * keeps content 
     * @var string 
     */
    private $content = null;
    /**
     * holds markup name 
     * @var string 
     */
    private static $markupName = 'meta';
    /**
     * tells is this markup can handle content 
     * @var bool 
     */
    private static $isContenerable = false;

    /**
     * __construct() - can add content to tag
     * @param  null|string $content
     * @return  Meta 
     */
    public function __construct($content = null) 
    {
        $argumentsNumber = func_num_args();
        for ($i = 0; $i < $argumentsNumber; $i++) {
            $this->addContent(func_get_arg($i));
        }
    }

    /**
     * renders tag and it content to string
     * @param  null|string $content
     * @return  Meta 
     */
    public static function getInstance($content = null) 
    {
        $markupTag = new Meta;
        $argumentsNumber = func_num_args();
        for ($i = 0; $i < $argumentsNumber; $i++) {
            $markupTag->addContent(func_get_arg($i));
        }
        return $markupTag;
    }

    /**
     * adds content to tag
     * @param  null|string $content
     * @return  Meta 
     */
    public function addContent($content = null) 
    {
        $this->content .= (string) $content;
        return $this;
    }

    /**
     * renders tag and it content to string
     * @return string
     */
    public function __toString() 
    {
        $parsedAttrs = ' ';
        foreach ($this->attrs as $attrName => $attrValue) {
            $parsedAttrs .= ' '.$attrName.'=\''.$attrValue.'\'';
        }
        return '<'.self::$markupName.$parsedAttrs.'/>';
    }

    /**
     * sets content attribute
     * @param  null|string $value
     * @return  Meta 
     */
    public function content($value = null) 
    {
        $this->attrs['content'] = $value;
        return $this;
    }

    /**
     * sets httpEquiv attribute
     * @param  null|string $value
     * @return  Meta 
     */
    public function httpEquiv($value = null) 
    {
        $this->attrs['http-equiv'] = $value;
        return $this;
    }

    /**
     * sets name attribute
     * @param  null|string $value
     * @return  Meta 
     */
    public function name($value = null) 
    {
        $this->attrs['name'] = $value;
        return $this;
    }

    /**
     * sets scheme attribute
     * @param  null|string $value
     * @return  Meta 
     */
    public function scheme($value = null) 
    {
        $this->attrs['scheme'] = $value;
        return $this;
    }

    /**
     * sets dir attribute
     * @param  null|string $value
     * @return  Meta 
     */
    public function dir($value = null) 
    {
        $this->attrs['dir'] = $value;
        return $this;
    }

    /**
     * sets lang attribute
     * @param  null|string $value
     * @return  Meta 
     */
    public function lang($value = null) 
    {
        $this->attrs['lang'] = $value;
        return $this;
    }

    /**
     * sets xmlLang attribute
     * @param  null|string $value
     * @return  Meta 
     */
    public function xmlLang($value = null) 
    {
        $this->attrs['xml:lang'] = $value;
        return $this;
    }
}
 ?>