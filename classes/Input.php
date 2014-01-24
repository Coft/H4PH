<?php
class Input {

	private $attrs = array();
	private $content = null;
	private $markupName = 'input';
	private $isContenerable = false;

	public static function factory() {
		$markupTag = new Input;
		$argumentsNoumber = func_num_args();
		for ($i = 0; $i < $argumentsNoumber; $i++) {
			$markupTag->addContent(func_get_arg($i));
		}
		return $markupTag;
	}

	public function addContent($content) {
		$this->content .= (string) $content;
	}

	public function __toString() {
		$parsedAttrs = ' ';
		foreach ($this->attrs as $attrName => $attrValue) {
			$parsedAttrs .= ' '.$attrName.'=\''.$attrValue.'\'';
		}
		return '<'.$this->markupName.$parsedAttrs.'/>';
	}

	public function accept($value) {
		$this->attrs['accept'] = $value;
		return $this;
	}

	public function alt($value) {
		$this->attrs['alt'] = $value;
		return $this;
	}

	public function checked($value) {
		$this->attrs['checked'] = $value;
		return $this;
	}

	public function disabled($value) {
		$this->attrs['disabled'] = $value;
		return $this;
	}

	public function maxlength($value) {
		$this->attrs['maxlength'] = $value;
		return $this;
	}

	public function name($value) {
		$this->attrs['name'] = $value;
		return $this;
	}

	public function readonly($value) {
		$this->attrs['readonly'] = $value;
		return $this;
	}

	public function size($value) {
		$this->attrs['size'] = $value;
		return $this;
	}

	public function src($value) {
		$this->attrs['src'] = $value;
		return $this;
	}

	public function type($value) {
		$this->attrs['type'] = $value;
		return $this;
	}

	public function value($value) {
		$this->attrs['value'] = $value;
		return $this;
	}

	public function accesskey($value) {
		$this->attrs['accesskey'] = $value;
		return $this;
	}

	public function classes($value) {
		$this->attrs['class'] = $value;
		return $this;
	}

	public function dir($value) {
		$this->attrs['dir'] = $value;
		return $this;
	}

	public function id($value) {
		$this->attrs['id'] = $value;
		return $this;
	}

	public function lang($value) {
		$this->attrs['lang'] = $value;
		return $this;
	}

	public function style($value) {
		$this->attrs['style'] = $value;
		return $this;
	}

	public function tabindex($value) {
		$this->attrs['tabindex'] = $value;
		return $this;
	}

	public function title($value) {
		$this->attrs['title'] = $value;
		return $this;
	}

	public function xmlLang($value) {
		$this->attrs['xml:lang'] = $value;
		return $this;
	}

	public function onblur($value) {
		$this->attrs['onblur'] = $value;
		return $this;
	}

	public function onchange($value) {
		$this->attrs['onchange'] = $value;
		return $this;
	}

	public function onclick($value) {
		$this->attrs['onclick'] = $value;
		return $this;
	}

	public function ondblclick($value) {
		$this->attrs['ondblclick'] = $value;
		return $this;
	}

	public function onfocus($value) {
		$this->attrs['onfocus'] = $value;
		return $this;
	}

	public function onmousedown($value) {
		$this->attrs['onmousedown'] = $value;
		return $this;
	}

	public function onmousemove($value) {
		$this->attrs['onmousemove'] = $value;
		return $this;
	}

	public function onmouseout($value) {
		$this->attrs['onmouseout'] = $value;
		return $this;
	}

	public function onmouseover($value) {
		$this->attrs['onmouseover'] = $value;
		return $this;
	}

	public function onmouseup($value) {
		$this->attrs['onmouseup'] = $value;
		return $this;
	}

	public function onkeydown($value) {
		$this->attrs['onkeydown'] = $value;
		return $this;
	}

	public function onkeypress($value) {
		$this->attrs['onkeypress'] = $value;
		return $this;
	}

	public function onkeyup($value) {
		$this->attrs['onkeyup'] = $value;
		return $this;
	}

	public function onselect($value) {
		$this->attrs['onselect'] = $value;
		return $this;
	}
}
 ?>