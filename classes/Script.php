<?php
/**
 * H4PH - HTML4 PHP Helper 
 * @link https://github.com/Coft/H4PH
 */

class Script
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
    private static $markupName = 'script';
    /**
     * tells is this markup can handle content 
     * @var bool 
     */
    private static $isContenerable = true;

    /**
     * __construct() - can add content to tag
     * @param  null|string $content
     * @return  Script 
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
     * @return  Script 
     */
    public static function getInstance($content = null) 
    {
        $markupTag = new Script;
        $argumentsNumber = func_num_args();
        for ($i = 0; $i < $argumentsNumber; $i++) {
            $markupTag->addContent(func_get_arg($i));
        }
        return $markupTag;
    }

    /**
     * adds content to tag
     * @param  null|string $content
     * @return  Script 
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
        $parsedAttrs = '';
        foreach ($this->attrs as $attrName => $attrValue) {
            $parsedAttrs .= ' '.$attrName.'=\''.$attrValue.'\'';
        }
        return '<'.self::$markupName.$parsedAttrs.'>'.$this->content.'</'.self::$markupName.'>';
    }

    /**
     * sets type attribute
     * @param  null|string $value
     * @return  Script 
     */
    public function type($value = null) 
    {
        $this->attrs['type'] = $value;
        return $this;
    }

    /**
     * sets charset attribute
     * @param  null|string $value
     * @return  Script 
     */
    public function charset($value = null) 
    {
        $this->attrs['charset'] = $value;
        return $this;
    }

    /**
     * sets defer attribute
     * @param  null|string $value
     * @return  Script 
     */
    public function defer($value = null) 
    {
        $this->attrs['defer'] = $value;
        return $this;
    }

    /**
     * sets src attribute
     * @param  null|string $value
     * @return  Script 
     */
    public function src($value = null) 
    {
        $this->attrs['src'] = $value;
        return $this;
    }
}
 ?>