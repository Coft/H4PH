<?php
class Link {

	private $attrs = array();
	private $content = null;
	private $markupName = 'link';
	private $isContenerable = false;

	public function __construct() {
		$argumentsNoumber = func_num_args();
		for ($i = 0; $i < $argumentsNoumber; $i++) {
			$this->addContent(func_get_arg($i));
		}
	}

	public static function factory() {
		$markupTag = new Link;
		$argumentsNoumber = func_num_args();
		for ($i = 0; $i < $argumentsNoumber; $i++) {
			$markupTag->addContent(func_get_arg($i));
		}
		return $markupTag;
	}

	public function addContent($content) {
		$this->content .= (string) $content;
		return $this;
	}

	public function __toString() {
		$parsedAttrs = ' ';
		foreach ($this->attrs as $attrName => $attrValue) {
			$parsedAttrs .= ' '.$attrName.'=\''.$attrValue.'\'';
		}
		return '<'.$this->markupName.$parsedAttrs.'/>';
	}

	public function charset($value) {
		$this->attrs['charset'] = $value;
		return $this;
	}

	public function href($value) {
		$this->attrs['href'] = $value;
		return $this;
	}

	public function hreflang($value) {
		$this->attrs['hreflang'] = $value;
		return $this;
	}

	public function media($value) {
		$this->attrs['media'] = $value;
		return $this;
	}

	public function rel($value) {
		$this->attrs['rel'] = $value;
		return $this;
	}

	public function rev($value) {
		$this->attrs['rev'] = $value;
		return $this;
	}

	public function type($value) {
		$this->attrs['type'] = $value;
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

	public function title($value) {
		$this->attrs['title'] = $value;
		return $this;
	}

	public function xmlLang($value) {
		$this->attrs['xml:lang'] = $value;
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
}
 ?>