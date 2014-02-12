<?php
/**
 * H4PH - HTML4 PHP Helper 
 * @link https://github.com/Coft/H4PH
 */

class Param
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
    private static $markupName = 'param';
    /**
     * tells is this markup can handle content 
     * @var bool 
     */
    private static $isContenerable = false;

    /**
     * __construct() - can add content to tag
     * @param  null|string $content
     * @return  Param 
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
     * @return  Param 
     */
    public static function getInstance($content = null) 
    {
        $markupTag = new Param;
        $argumentsNumber = func_num_args();
        for ($i = 0; $i < $argumentsNumber; $i++) {
            $markupTag->addContent(func_get_arg($i));
        }
        return $markupTag;
    }

    /**
     * adds content to tag
     * @param  null|string $content
     * @return  Param 
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
     * sets name attribute
     * @param  null|string $value
     * @return  Param 
     */
    public function name($value = null) 
    {
        $this->attrs['name'] = $value;
        return $this;
    }

    /**
     * sets type attribute
     * @param  null|string $value
     * @return  Param 
     */
    public function type($value = null) 
    {
        $this->attrs['type'] = $value;
        return $this;
    }

    /**
     * sets value attribute
     * @param  null|string $value
     * @return  Param 
     */
    public function value($value = null) 
    {
        $this->attrs['value'] = $value;
        return $this;
    }

    /**
     * sets valuetype attribute
     * @param  null|string $value
     * @return  Param 
     */
    public function valuetype($value = null) 
    {
        $this->attrs['valuetype'] = $value;
        return $this;
    }

    /**
     * sets id attribute
     * @param  null|string $value
     * @return  Param 
     */
    public function id($value = null) 
    {
        $this->attrs['id'] = $value;
        return $this;
    }
}
 ?>