<?php
class Param {

	private $attrs = array();
	private $content = null;
	private $markupName = 'param';
	private $isContenerable = false;

	public static function factory() {
		$markupTag = new Param;
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

	public function name($value) {
		$this->attrs['name'] = $value;
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

	public function valuetype($value) {
		$this->attrs['valuetype'] = $value;
		return $this;
	}

	public function id($value) {
		$this->attrs['id'] = $value;
		return $this;
	}
}
 ?>