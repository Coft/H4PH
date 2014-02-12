H4PH
====

HTML4 PHP Helper

Why?
===
Prevents making typo and using invalid attrs. 
Facilitate writing "', and hinting by IDE

Installation
============

require_once(PATH_TO_INSTALLATION.'/H4phAutoloader.php');

Example usage
=============
<pre>
$span = new Span(new I("First"));
$span->addContent("-Red color div");
$span->style("color:red;");
echo $span.Br::factory();
// Outputs
// <span style='color:red;'><i>First</i>-Red color div</span><br />


$bold = B::factory(
	I::factory("Second"),
	"-",
	"Blue color bold text"
)->style("color:blue;");

echo $bold.Br::factory();
// Outputs
// <b style='color:blue;'><i>Second</i>-Blue color bold text</b><br />
</pre>
echo Div::factory(
	    $span->addContent(" "),
	    $bold
	);
// Outputs
// <div><span style='color:red;'><i>First</i>-Red color div </span><b style='color:blue;'><i>Second</i>-Blue color bold text</b></div>