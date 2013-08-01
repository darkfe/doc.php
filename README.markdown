# 这个版本改了啥?

`doc.php` 使用的`markdown`语法跟github上这种还不太一样.而且还没考虑嵌入代码的高亮.

这个版本使用了 https://github.com/egil/php-markdown-extra-extended 同时增加了代码块支持,同时增加了代码高亮.并且把markdown样式修改成了github的样式.

#doc.php
doc.php is a PHP application that mimics a file explorer. 
Using html5 to display audio and video and [PHP markdown by Michel Fortin](http://michelf.com/projects/php-markdown/) to parse these files into a simple but interactive file browser.

A live example is available [here](http://rndm.de/doc/)

doc.php was created by [@makepanic](https://twitter.com/makepanic).

##What does it do?

* parse files the way you want
* limits the access to a defined root folder
* individual rules for extensions
* displays `.info` files inside the filemanager

##Installation
1. download [doc.php](https://github.com/makepanic/doc.php) from github.
2. extract `index.php` , `config.php` and the `lib` folder on your php enabled server
3. create a subfolder for your filesystem, default:`docphp`
4. copy all the files you want to use in doc.php into the created folder

##Default extensions
* PDF - `pdf` Portable Document Format via embed object
* Audio - `wav,mp3,ogg` Using html5 audio with a inline player that checks for compatibility
* Code - `php,js,java,vb,cs,html,css` Display the code with pre and escape html chars
* Image - `jpg,jpeg,gif,png,apng,bmp` Display images
* Video - `mp4,wma,webm,ogv` Display a html5 video player

###Additional Config
open `config.php` and modify the define() commands if you want

	DOC_TITLE:   		default: 'doc.php'
				 		this string sets the title of the navigation bar
	ROOT_DIR:	 		default: 'raw'
				 		this string sets the root folder for your docphp presentation
	MAX_NAV :	 		default: '4'
				 		maximum number of breadcrumbs to display in the top navigation
	SHORTEN_NAV: 		default: '15'
				 		maximum number of characters in the top navigation per folder
	THEME:   	 		default: 'light'
				 		this string sets the title of the navigation bar
				 		choose between 'dark' and 'light'
	SHOW_EXTENSIONS:   	default: 'false'
						enable if you want to display file extensions
	HTACCESS: default: 'false'
						enable if you want to use a .htaccess file for cleaner urls

###License
[WTFPL](http://sam.zoy.org/wtfpl/)