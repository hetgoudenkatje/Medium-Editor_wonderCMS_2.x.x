<?php
/**
 * MediumEditor plugin.
 *
 * It transforms all the editable areas into MediumEditor inline editor.
 *
 * @author  Herman Adema
 * @extended version
 *
 * @version 1.0.0
 */
if(defined('VERSION'))
 	define('version', VERSION);
    defined('version') OR die('Direct access is not allowed.');


wCMS::addListener('js', 'loadMediumEditorJS');
wCMS::addListener('css', 'loadMediumEditorCSS');

function loadMediumEditorJS($args) {

	global $buttontb;
	if (isset($buttontb))
	{
	 	$buttontoolb = $buttontb;
	}
	else
	{
   		$buttontoolb = '"bold", "italic", "underline", "anchor", "h2", "h3", "quote", "save"';
	}
	$script = '<script src="plugins/mediumeditor_wCMS/dist/js/medium-editor.min.js"></script>'. '<script src="plugins/mediumeditor_wCMS/dist/js/medium-editor-tables.min.js"></script>'.'<script src="plugins/mediumeditor_wCMS/dist/js/medium-button.min.js"></script>'.'<script>function savetxt(stabc, stghi){savetxtid=stabc; savetxttarget=stghi;}</script>'.

'<script>

var s=$("span.editable").clone();s.each(function(a,b){var c=s[a].id,d=s[a].outerHTML.replace(/span/,"div onfocus=\"savetxt( $(this).attr(\'id\'), $(this).attr(\'data-target\'))\"");$("span.editable#"+c).replaceWith(d)});


var editor = new MediumEditor(".editable", {

toolbar: {static: true, sticky: true, buttons: ['.$buttontoolb.'], }, buttonLabels: "fontawesome",

anchor: {targetCheckbox: true,} ,

extensions: {
"bred":  new MediumButton({label:"<i style=\"color:red !important;\" class=\"fa fa-pencil-square fa-lg\"></i>", start:"<span style=\"color: white; background-color: red\">", end:"</span>"}),
"byellow":  new MediumButton({label:"<i style=\"color:#dd0 !important;\" class=\"fa fa-pencil-square fa-lg\"></i>", start:"<span style=\"background-color: yellow\">", end:"</span>"}),
"white":  new MediumButton({label:"<i style=\"color:#ccc !important;\" class=\"fa fa-pencil fa-lg\"</i>", start:"<font color=\"white\">", end:"</font>"}),
"purple":  new MediumButton({label:"<i style=\"color:purple !important;\" class=\"fa fa-pencil fa-lg\"></i>", start:"<font color=\"purple\">", end:"</font>"}),
"green":  new MediumButton({label:"<i style=\"color:green !important;\" class=\"fa fa-pencil fa-lg\"></i>", start:"<font color=\"green\">", end:"</font>"}),
"blue":  new MediumButton({label:"<i style=\"color:blue !important;\" class=\"fa fa-pencil fa-lg\"></i>", start:"<font color=\"blue\">", end:"</font>"}),
"red":  new MediumButton({label:"<i style=\"color:red !important;\" class=\"fa fa-pencil fa-lg\"></i>", start:"<font color=\"red\">", end:"</font>"}),
"hr":  new MediumButton({label:"<i class=\"fa fa-ellipsis-h\"></i>", start:"<hr>", end:"<hr>"}),
"imgleft":  new MediumButton({label:"<i class=\"fa fa-image\"></i><i class=\"fa fa-align-left\"></i>", start:"<img src=\"", end:"\" alt=\"geen foto\" style=\"float: left;\">"}),
"imgright":  new MediumButton({label:"<i class=\"fa fa-align-left\"></i><i class=\"fa fa-image\"></i>", start:"<img src=\"", end:"\" alt=\"geen foto\" style=\"float: right;\">"}),
"imgcenter":  new MediumButton({label:"<i class=\"fa fa-image\"></i>", start:"<img src=\"", end:"\" alt=\"geen foto\" style=\"clear: both; display: block; margin-left: auto;  margin-right: auto\"><br>"}),
"save": new MediumButton({label:"<b><h3 style=\"margin-top: -5px;\">Save</h3></b>", action: function(html, mark){var stid=window.savetxtid; sttarget=window.savetxttarget; fieldSave(stid , $(\'#\'+stid).html() , sttarget );return html}}),
"windowdown": new MediumButton({label:"<i class=\"fa fa-arrow-circle-down fa-lg\"></i>", action: function(html, mark){var elem = document.getElementById("medium-editor-toolbar-1"); elem.style.marginTop = "200px" ;return html}}),
"windowup": new MediumButton({label:"<i class=\"fa fa-arrow-circle-up fa-lg\"></i>", action: function(html, mark){var elem = document.getElementById("medium-editor-toolbar-1"); elem.style.marginTop = "0px" ;return html}}),
table: new MediumEditorTable()

}})

</script>';

    if(version<'2.0.0')
        array_push($args[0], $script);
    else
        $args[0].=$script;
	return $args;
}


function loadMediumEditorCSS($args) {
	
	$script = <<<'EOT'

<link rel="stylesheet" href="plugins/mediumeditor_wCMS/font-awesome/css/font-awesome.css" type="text/css" media="screen" charset="utf-8">
<link rel="stylesheet" href="plugins/mediumeditor_wCMS/dist/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">
<link rel="stylesheet" href="plugins/mediumeditor_wCMS/dist/css/medium-editor-tables.min.css" type="text/css" media="screen" charset="utf-8">
<link rel="stylesheet" href="plugins/mediumeditor_wCMS/dist/css/themes/mani.min.css" type="text/css" media="screen" charset="utf-8">
<style>#adminPanel div.editText{color:#555;}div.editText{border:2px dashed #ccc;}div.editText,.toggle{display:block;}div.editText textarea{outline: 0;border:none;width:100%;resize:none;color:inherit;font-size:inherit;font-family:inherit;background-color:transparent;overflow:hidden;box-sizing:content-box;}div.editText:empty{min-height:20px;}
.medium-editor-toolbar {visibility: visible; max-width: 335px; left: 10px !important; top: 10px !important;}.medium-editor-toolbar li button {padding: 5px !important;}.medium-editor-toolbar li button {min-width: 30px !important; height: 30px !important; border: 0 !important;}.medium-editor-toolbar-form a{border:none;}.medium-editor-toolbar-anchor-preview a{border:none;} hr {display: block; height: 1px; border-top: 1px solid #ccc; margin: 0; padding: 0;}h1 { font-size: 2.5em; } h2 { font-size: 2em; } h3 { font-size: 1.5em;  } h4 { font-size: 1em; } h5 { font-size: 0.83em; } h6 { font-size: 0.67em; } h1, h2, h3, h4, h5, h6 { font-weight: normal; line-height: 1.4em; margin-top: 0em;}</style>
EOT;
    if(version<'2.0.0')
        array_push($args[0], $script);
    else
        $args[0].=$script;
	return $args;
}
