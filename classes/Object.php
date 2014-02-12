<?php
/**
 * H4PH - HTML4 PHP Helper 
 * @link https://github.com/Coft/H4PH
 */

class Object
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
    private static $markupName = 'object';
    /**
     * tells is this markup can handle content 
     * @var bool 
     */
    private static $isContenerable = true;

    /**
     * __construct() - can add content to tag
     * @param  null|string $content
     * @return  Object 
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
     * @return  Object 
     */
    public static function getInstance($content = null) 
    {
        $markupTag = new Object;
        $argumentsNumber = func_num_args();
        for ($i = 0; $i < $argumentsNumber; $i++) {
            $markupTag->addContent(func_get_arg($i));
        }
        return $markupTag;
    }

    /**
     * adds content to tag
     * @param  null|string $content
     * @return  Object 
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
     * sets archive attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function archive($value = null) 
    {
        $this->attrs['archive'] = $value;
        return $this;
    }

    /**
     * sets classid attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function classid($value = null) 
    {
        $this->attrs['classid'] = $value;
        return $this;
    }

    /**
     * sets codebase attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function codebase($value = null) 
    {
        $this->attrs['codebase'] = $value;
        return $this;
    }

    /**
     * sets codetype attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function codetype($value = null) 
    {
        $this->attrs['codetype'] = $value;
        return $this;
    }

    /**
     * sets data attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function data($value = null) 
    {
        $this->attrs['data'] = $value;
        return $this;
    }

    /**
     * sets declaration attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function declaration($value = null) 
    {
        $this->attrs['declare'] = $value;
        return $this;
    }

    /**
     * sets height attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function height($value = null) 
    {
        $this->attrs['height'] = $value;
        return $this;
    }

    /**
     * sets name attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function name($value = null) 
    {
        $this->attrs['name'] = $value;
        return $this;
    }

    /**
     * sets standby attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function standby($value = null) 
    {
        $this->attrs['standby'] = $value;
        return $this;
    }

    /**
     * sets type attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function type($value = null) 
    {
        $this->attrs['type'] = $value;
        return $this;
    }

    /**
     * sets usemap attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function usemap($value = null) 
    {
        $this->attrs['usemap'] = $value;
        return $this;
    }

    /**
     * sets width attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function width($value = null) 
    {
        $this->attrs['width'] = $value;
        return $this;
    }

    /**
     * sets classes attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function classes($value = null) 
    {
        $this->attrs['class'] = $value;
        return $this;
    }

    /**
     * sets dir attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function dir($value = null) 
    {
        $this->attrs['dir'] = $value;
        return $this;
    }

    /**
     * sets id attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function id($value = null) 
    {
        $this->attrs['id'] = $value;
        return $this;
    }

    /**
     * sets lang attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function lang($value = null) 
    {
        $this->attrs['lang'] = $value;
        return $this;
    }

    /**
     * sets style attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function style($value = null) 
    {
        $this->attrs['style'] = $value;
        return $this;
    }

    /**
     * sets tabindex attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function tabindex($value = null) 
    {
        $this->attrs['tabindex'] = $value;
        return $this;
    }

    /**
     * sets title attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function title($value = null) 
    {
        $this->attrs['title'] = $value;
        return $this;
    }

    /**
     * sets xmlLang attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function xmlLang($value = null) 
    {
        $this->attrs['xml:lang'] = $value;
        return $this;
    }

    /**
     * sets onclick attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function onclick($value = null) 
    {
        $this->attrs['onclick'] = $value;
        return $this;
    }

    /**
     * sets ondblclick attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function ondblclick($value = null) 
    {
        $this->attrs['ondblclick'] = $value;
        return $this;
    }

    /**
     * sets onmousedown attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function onmousedown($value = null) 
    {
        $this->attrs['onmousedown'] = $value;
        return $this;
    }

    /**
     * sets onmousemove attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function onmousemove($value = null) 
    {
        $this->attrs['onmousemove'] = $value;
        return $this;
    }

    /**
     * sets onmouseout attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function onmouseout($value = null) 
    {
        $this->attrs['onmouseout'] = $value;
        return $this;
    }

    /**
     * sets onmouseover attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function onmouseover($value = null) 
    {
        $this->attrs['onmouseover'] = $value;
        return $this;
    }

    /**
     * sets onmouseup attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function onmouseup($value = null) 
    {
        $this->attrs['onmouseup'] = $value;
        return $this;
    }

    /**
     * sets onkeydown attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function onkeydown($value = null) 
    {
        $this->attrs['onkeydown'] = $value;
        return $this;
    }

    /**
     * sets onkeypress attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function onkeypress($value = null) 
    {
        $this->attrs['onkeypress'] = $value;
        return $this;
    }

    /**
     * sets onkeyup attribute
     * @param  null|string $value
     * @return  Object 
     */
    public function onkeyup($value = null) 
    {
        $this->attrs['onkeyup'] = $value;
        return $this;
    }
}
 ?>