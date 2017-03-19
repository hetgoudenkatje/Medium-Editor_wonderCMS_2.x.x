# Medium-Editor_wonderCMS_2.x.x
Medium-Editor plugin for wonderCMS 2.x.x. Should also work with 1.x.x

To use this plugin, download and extract the zip file, put the folder 'mediumeditor_wCMS' in the plugins folder of your WonderCMS website. You now can use the medium editor. You should remove the original medium editor plugin from the plugin folder in order to prevent a conflict.

If you do not need all the buttons, you can place the next code in you're theme.php file and remove the buttons you don't need.

```
<?php
	global $buttontb;
	$buttontb = '"windowdown", "windowup", "removeFormat", "h1", "h2", "h3", "h4", "h5", "h6", "bold", "italic", "underline", "justifyLeft", "justifyCenter", "justifyRight", "justifyFull", "table", "pre", "subscript", "superscript", "anchor", "quote", "orderedlist", "unorderedlist", "indent", "outdent", "white", "red", "green", "blue", "purple", "byellow", "bred", "hr", "imgleft", "imgright", "imgcenter", "save"';
?>
```

windowdown - moves the window down<br />
windowup - moves the window up<br />
removeformat - clears inline style formatting, preserves blocks<br />
h1, h2, h3, h4, h5, h6 - headings<br />
bold<br />
italic<br />
underline<br />
justifyleft - align the text left<br />
justifyCenter - center the text<br />
justifyRight - align the text right<br />
justifyFull - align the text left and right<br />
pre - preformatted <br />
subscript<br />
superscript<br />
anchor - create a link from the selected text<br />
quote<br />
orderedlist<br />
unorderedlist<br />
indent<br />
outdent<br />
white, red, green, blue, purple - pen colors<br />
byellow, bred - marker colors<br />
hr - double horizontal line. If you select text and click hr, you're text will be between two lines<br />
imgleft - this converts selected text to an left aligned image tag with the text wrapped around the image<br />
imgright - this converts selected text to an right aligned image tag with the text wrapped around the image<br />
imgcenter - this converts selected text to a center aligned image with no text wrapped around<br />
save - saves the changes you made.<br />





