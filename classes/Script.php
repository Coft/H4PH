<?php
class Script {

	private $attrs = array();
	private $content = null;
	private $markupName = 'script';
	private $isContenerable = true;

	public function __construct() {
		$argumentsNoumber = func_num_args();
		for ($i = 0; $i < $argumentsNoumber; $i++) {
			$this->addContent(func_get_arg($i));
		}
	}

	public static function factory() {
		$markupTag = new Script;
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

	public function charset($value) {
		$this->attrs['charset'] = $value;
		return $this;
	}

	public function defer($value) {
		$this->attrs['defer'] = $value;
		return $this;
	}

	public function src($value) {
		$this->attrs['src'] = $value;
		return $this;
	}
}
 ?>