<?php
class Style {

	private $attrs = array();
	private $content = null;
	private $markupName = 'style';
	private $isContenerable = true;

	public function __construct() {
		$argumentsNoumber = func_num_args();
		for ($i = 0; $i < $argumentsNoumber; $i++) {
			$this->addContent(func_get_arg($i));
		}
	}

	public static function factory() {
		$markupTag = new Style;
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
		$parsedAttrs = '';
		foreach ($this->attrs as $attrName => $attrValue) {
			$parsedAttrs .= ' '.$attrName.'=\''.$attrValue.'\'';
		}
		return '<'.$this->markupName.$parsedAttrs.'>'.$this->content.'</'.$this->markupName.'>';
	}

	public function type($value) {
		$this->attrs['type'] = $value;
		return $this;
	}

	public function media($value) {
		$this->attrs['media'] = $value;
		return $this;
	}

	public function dir($value) {
		$this->attrs['dir'] = $value;
		return $this;
	}

	public function lang($value) {
		$this->attrs['lang'] = $value;
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
}
 ?>