<?php
class Br {

	private $attrs = array();
	private $content = null;
	private $markupName = 'br';
	private $isContenerable = false;

	public static function factory() {
		$markupTag = new Br;
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

	public function classes($value) {
		$this->attrs['class'] = $value;
		return $this;
	}

	public function id($value) {
		$this->attrs['id'] = $value;
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
}
 ?>