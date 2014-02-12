<?php
/**
 * H4PH - HTML4 PHP Helper 
 * @link https://github.com/Coft/H4PH
 */

class Style
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
    private static $markupName = 'style';
    /**
     * tells is this markup can handle content 
     * @var bool 
     */
    private static $isContenerable = true;

    /**
     * __construct() - can add content to tag
     * @param  null|string $content
     * @return  Style 
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
     * @return  Style 
     */
    public static function getInstance($content = null) 
    {
        $markupTag = new Style;
        $argumentsNumber = func_num_args();
        for ($i = 0; $i < $argumentsNumber; $i++) {
            $markupTag->addContent(func_get_arg($i));
        }
        return $markupTag;
    }

    /**
     * adds content to tag
     * @param  null|string $content
     * @return  Style 
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
     * @return  Style 
     */
    public function type($value = null) 
    {
        $this->attrs['type'] = $value;
        return $this;
    }

    /**
     * sets media attribute
     * @param  null|string $value
     * @return  Style 
     */
    public function media($value = null) 
    {
        $this->attrs['media'] = $value;
        return $this;
    }

    /**
     * sets dir attribute
     * @param  null|string $value
     * @return  Style 
     */
    public function dir($value = null) 
    {
        $this->attrs['dir'] = $value;
        return $this;
    }

    /**
     * sets lang attribute
     * @param  null|string $value
     * @return  Style 
     */
    public function lang($value = null) 
    {
        $this->attrs['lang'] = $value;
        return $this;
    }

    /**
     * sets title attribute
     * @param  null|string $value
     * @return  Style 
     */
    public function title($value = null) 
    {
        $this->attrs['title'] = $value;
        return $this;
    }

    /**
     * sets xmlLang attribute
     * @param  null|string $value
     * @return  Style 
     */
    public function xmlLang($value = null) 
    {
        $this->attrs['xml:lang'] = $value;
        return $this;
    }
}
 ?>