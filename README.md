H4PH
====

HTML4 PHP Helper

Why?
===
Prevents making typo and using invalid attrs
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
</pre>

// Outputs
// &lt;span style='color:red;'&gt;&lt;i&gt;First&lt;/i&gt;-Red color div&lt;/span&gt;&lt;br /&gt;

<pre>
$bold = B::factory(
	I::factory("Second"),
	"-",
	"Blue color bold text"
)->style("color:blue;");

echo $bold.Br::factory();
</pre>
// Outputs
// &lt;b style='color:blue;'&gt;&lt;i&gt;Second&lt;/i&gt;-Blue color bold text&lt;/b&gt;&lt;br /&gt;
<pre>
echo Div::factory(
	    $span->addContent(" "),
	    $bold
	);
</pre>
// Outputs
// &lt;div&gt;&lt;span style='color:red;'&gt;&lt;i&gt;First&lt;/i&gt;-Red color div &lt;/span&gt;&lt;b style='color:blue;'&gt;&lt;i&gt;Second&lt;/i&gt;-Blue color bold text&lt;/b&gt;&lt;/div&gt;
