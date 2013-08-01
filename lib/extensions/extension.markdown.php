<?php
class MarkdownExtension extends Extension{
	protected $allowDetail = true;
	protected $extensionString = 'text';
	protected $caching = true;
	protected $cacheTimeout = 86400; #1 day (60sec*60min*24hours)

	public function getDetailCode($fileObj){
        Layout::addScript("http://yandex.st/highlightjs/6.1/highlight.min.js");
        Layout::addStyle("http://yandex.st/highlightjs/6.1/styles/solarized_light.min.css");
        Layout::addScriptInline("hljs.initHighlightingOnLoad();");
		return '<div class="markdown">'.MarkdownExtended($fileObj->readFile()).'</div>';
	}
}

$ext=new MarkdownExtension();
$ext->register(array('md','markdown'));
?>
