# Medium-Editor_wonderCMS_2.x.x
Medium-Editor plugin for wonderCMS 2.x.x. Should also work with 1.x.x

To use this plugin, download and extract the zip file, put the folder 'mediumeditor_wCMS' in the plugins folder of your WonderCMS website. You now can use the medium editor. You should remove the original medium editor plugin from the plugin folder in order to prevent a conflict.

The next code goes in you're theme php file. if you don't do that, you will have only the standard options

```
<?php
	global $buttontb;
	$buttontb = '"windowdown", "windowup", "removeFormat", "h1", "h2", "h3", "h4", "h5", "h6", "bold", "italic", "underline", "justifyLeft", "justifyCenter", "justifyRight", "justifyFull", "table", "pre", "subscript", "superscript", "anchor", "quote", "orderedlist", "unorderedlist", "indent", "outdent", "white", "red", "green", "blue", "purple", "byellow", "bred", "hr", "imgleft", "imgright", "imgcenter", "save"';
?>
```

If you don't need all the buttons, you can remove the buttons you don't need.
