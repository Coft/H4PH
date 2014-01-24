<?php
class Base {

	private $attrs = array();
	private $content = null;
	private $markupName = 'base';
	private $isContenerable = false;

	public static function factory() {
		$markupTag = new Base;
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

	public function href($value) {
		$this->attrs['href'] = $value;
		return $this;
	}
}
 ?>