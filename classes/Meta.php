<?php
class Meta {

	private $attrs = array();
	private $content = null;
	private $markupName = 'meta';
	private $isContenerable = false;

	public static function factory() {
		$markupTag = new Meta;
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

	public function content($value) {
		$this->attrs['content'] = $value;
		return $this;
	}

	public function httpEquiv($value) {
		$this->attrs['http-equiv'] = $value;
		return $this;
	}

	public function name($value) {
		$this->attrs['name'] = $value;
		return $this;
	}

	public function scheme($value) {
		$this->attrs['scheme'] = $value;
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

	public function xmlLang($value) {
		$this->attrs['xml:lang'] = $value;
		return $this;
	}
}
 ?>