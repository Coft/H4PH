<?php
/**
 * H4PH - HTML4 PHP Helper 
 * @link https://github.com/Coft/H4PH
 */

class Input
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
    private static $markupName = 'input';
    /**
     * tells is this markup can handle content 
     * @var bool 
     */
    private static $isContenerable = false;

    /**
     * __construct() - can add content to tag
     * @param  null|string $content
     * @return  Input 
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
     * @return  Input 
     */
    public static function getInstance($content = null) 
    {
        $markupTag = new Input;
        $argumentsNumber = func_num_args();
        for ($i = 0; $i < $argumentsNumber; $i++) {
            $markupTag->addContent(func_get_arg($i));
        }
        return $markupTag;
    }

    /**
     * adds content to tag
     * @param  null|string $content
     * @return  Input 
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
     * sets accept attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function accept($value = null) 
    {
        $this->attrs['accept'] = $value;
        return $this;
    }

    /**
     * sets alt attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function alt($value = null) 
    {
        $this->attrs['alt'] = $value;
        return $this;
    }

    /**
     * sets checked attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function checked($value = null) 
    {
        $this->attrs['checked'] = $value;
        return $this;
    }

    /**
     * sets disabled attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function disabled($value = null) 
    {
        $this->attrs['disabled'] = $value;
        return $this;
    }

    /**
     * sets maxlength attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function maxlength($value = null) 
    {
        $this->attrs['maxlength'] = $value;
        return $this;
    }

    /**
     * sets name attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function name($value = null) 
    {
        $this->attrs['name'] = $value;
        return $this;
    }

    /**
     * sets readonly attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function readonly($value = null) 
    {
        $this->attrs['readonly'] = $value;
        return $this;
    }

    /**
     * sets size attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function size($value = null) 
    {
        $this->attrs['size'] = $value;
        return $this;
    }

    /**
     * sets src attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function src($value = null) 
    {
        $this->attrs['src'] = $value;
        return $this;
    }

    /**
     * sets type attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function type($value = null) 
    {
        $this->attrs['type'] = $value;
        return $this;
    }

    /**
     * sets value attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function value($value = null) 
    {
        $this->attrs['value'] = $value;
        return $this;
    }

    /**
     * sets accesskey attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function accesskey($value = null) 
    {
        $this->attrs['accesskey'] = $value;
        return $this;
    }

    /**
     * sets classes attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function classes($value = null) 
    {
        $this->attrs['class'] = $value;
        return $this;
    }

    /**
     * sets dir attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function dir($value = null) 
    {
        $this->attrs['dir'] = $value;
        return $this;
    }

    /**
     * sets id attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function id($value = null) 
    {
        $this->attrs['id'] = $value;
        return $this;
    }

    /**
     * sets lang attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function lang($value = null) 
    {
        $this->attrs['lang'] = $value;
        return $this;
    }

    /**
     * sets style attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function style($value = null) 
    {
        $this->attrs['style'] = $value;
        return $this;
    }

    /**
     * sets tabindex attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function tabindex($value = null) 
    {
        $this->attrs['tabindex'] = $value;
        return $this;
    }

    /**
     * sets title attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function title($value = null) 
    {
        $this->attrs['title'] = $value;
        return $this;
    }

    /**
     * sets xmlLang attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function xmlLang($value = null) 
    {
        $this->attrs['xml:lang'] = $value;
        return $this;
    }

    /**
     * sets onblur attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function onblur($value = null) 
    {
        $this->attrs['onblur'] = $value;
        return $this;
    }

    /**
     * sets onchange attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function onchange($value = null) 
    {
        $this->attrs['onchange'] = $value;
        return $this;
    }

    /**
     * sets onclick attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function onclick($value = null) 
    {
        $this->attrs['onclick'] = $value;
        return $this;
    }

    /**
     * sets ondblclick attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function ondblclick($value = null) 
    {
        $this->attrs['ondblclick'] = $value;
        return $this;
    }

    /**
     * sets onfocus attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function onfocus($value = null) 
    {
        $this->attrs['onfocus'] = $value;
        return $this;
    }

    /**
     * sets onmousedown attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function onmousedown($value = null) 
    {
        $this->attrs['onmousedown'] = $value;
        return $this;
    }

    /**
     * sets onmousemove attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function onmousemove($value = null) 
    {
        $this->attrs['onmousemove'] = $value;
        return $this;
    }

    /**
     * sets onmouseout attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function onmouseout($value = null) 
    {
        $this->attrs['onmouseout'] = $value;
        return $this;
    }

    /**
     * sets onmouseover attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function onmouseover($value = null) 
    {
        $this->attrs['onmouseover'] = $value;
        return $this;
    }

    /**
     * sets onmouseup attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function onmouseup($value = null) 
    {
        $this->attrs['onmouseup'] = $value;
        return $this;
    }

    /**
     * sets onkeydown attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function onkeydown($value = null) 
    {
        $this->attrs['onkeydown'] = $value;
        return $this;
    }

    /**
     * sets onkeypress attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function onkeypress($value = null) 
    {
        $this->attrs['onkeypress'] = $value;
        return $this;
    }

    /**
     * sets onkeyup attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function onkeyup($value = null) 
    {
        $this->attrs['onkeyup'] = $value;
        return $this;
    }

    /**
     * sets onselect attribute
     * @param  null|string $value
     * @return  Input 
     */
    public function onselect($value = null) 
    {
        $this->attrs['onselect'] = $value;
        return $this;
    }
}
 ?>