 <?php
  
// Include the qrlib file
include 'phpqrcode/qrlib.php';
  
// $text variable has data for QR 
$text = "GEEKS FOR GEEKS";
  
// QR Code generation using png()
// When this function has only the
// text parameter it directly
// outputs QR in the browser
?>
<html dir="ltr" lang="en" xml:lang="en" class="yui3-js-enabled">
<head>
    <title>Dashboard</title>
    <link rel="shortcut icon" href="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/theme/1668789993/favicon">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="keywords" content="moodle, Dashboard">    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="http://putrablastdk.upm.edu.my/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css">
    <script charset="utf-8" id="yui_3_17_2_1_1670843574071_8" src="http://putrablastdk.upm.edu.my/theme/yui_combo.php?m/1668789993/core/event/event-min.js&amp;m/1668789993/filter_mathjaxloader/loader/loader-min.js" async=""></script>
    <script charset="utf-8" id="yui_3_17_2_1_1670843574071_19" src="http://putrablastdk.upm.edu.my/theme/yui_combo.php?m/1668789993/theme_klassroom/colourswitcher/colourswitcher-min.js" async=""></script>
    <script charset="utf-8" id="yui_3_17_2_1_1670843574071_20" src="http://putrablastdk.upm.edu.my/theme/yui_combo.php?3.17.2/cookie/cookie-min.js" async=""></script>
    <script charset="utf-8" id="yui_3_17_2_1_1670843574071_25" src="http://putrablastdk.upm.edu.my/theme/yui_combo.php?3.17.2/event-mousewheel/event-mousewheel-min.js&amp;3.17.2/event-resize/event-resize-min.js&amp;3.17.2/event-hover/event-hover-min.js&amp;3.17.2/event-touch/event-touch-min.js&amp;3.17.2/event-move/event-move-min.js&amp;3.17.2/event-flick/event-flick-min.js&amp;3.17.2/event-valuechange/event-valuechange-min.js&amp;3.17.2/event-tap/event-tap-min.js" async=""></script>
    <script charset="utf-8" id="yui_3_17_2_1_1670843574071_32" src="https://cdn.jsdelivr.net/npm/mathjax@2.7.8/MathJax.js?delayStartupUntil=configured" async=""></script>
    <script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script>
    <link rel="stylesheet" type="text/css" href="http://putrablastdk.upm.edu.my/theme/styles.php/klassroom/1668789993_1/all">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" 
    data-requiremodule="core/first" src="http://putrablastdk.upm.edu.my/lib/requirejs.php/1668789993/core/first.js"></script>
    <script type="text/x-mathjax-config;executed=true">       
    
        MathJax.Hub.Config({
            config: ["Accessible.js", "Safe.js"],
            errorSettings: { message: ["!"] },
            skipStartupTypeset: true,
            messageStyle: "none"
        });
    </script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery" src="http://putrablastdk.upm.edu.my/lib/javascript.php/1668789993/lib/jquery/jquery-3.5.1.min.js"></script>
    <style type="text/css">
        .MathJax_Hover_Frame {
            border-radius: .25em;
            -webkit-border-radius: .25em;
            -moz-border-radius: .25em;
            -khtml-border-radius: .25em;
            box-shadow: 0px 0px 15px #83A;
            -webkit-box-shadow: 0px 0px 15px #83A;
            -moz-box-shadow: 0px 0px 15px #83A;
            -khtml-box-shadow: 0px 0px 15px #83A;
            border: 1px solid #A6D !important;
            display: inline-block;
            position: absolute
        }

        .MathJax_Menu_Button .MathJax_Hover_Arrow {
            position: absolute;
            cursor: pointer;
            display: inline-block;
            border: 2px solid #AAA;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -khtml-border-radius: 4px;
            font-family: 'Courier New',Courier;
            font-size: 9px;
            color: #F0F0F0
        }

            .MathJax_Menu_Button .MathJax_Hover_Arrow span {
                display: block;
                background-color: #AAA;
                border: 1px solid;
                border-radius: 3px;
                line-height: 0;
                padding: 4px
            }

        .MathJax_Hover_Arrow:hover {
            color: white !important;
            border: 2px solid #CCC !important
        }

            .MathJax_Hover_Arrow:hover span {
                background-color: #CCC !important
            }
    </style>
    <style type="text/css">
        #MathJax_About {
            position: fixed;
            left: 50%;
            width: auto;
            text-align: center;
            border: 3px outset;
            padding: 1em 2em;
            background-color: #DDDDDD;
            color: black;
            cursor: default;
            font-family: message-box;
            font-size: 120%;
            font-style: normal;
            text-indent: 0;
            text-transform: none;
            line-height: normal;
            letter-spacing: normal;
            word-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            float: none;
            z-index: 201;
            border-radius: 15px;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            -khtml-border-radius: 15px;
            box-shadow: 0px 10px 20px #808080;
            -webkit-box-shadow: 0px 10px 20px #808080;
            -moz-box-shadow: 0px 10px 20px #808080;
            -khtml-box-shadow: 0px 10px 20px #808080;
            filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')
        }

            #MathJax_About.MathJax_MousePost {
                outline: none
            }

        .MathJax_Menu {
            position: absolute;
            background-color: white;
            color: black;
            width: auto;
            padding: 2px;
            border: 1px solid #CCCCCC;
            margin: 0;
            cursor: default;
            font: menu;
            text-align: left;
            text-indent: 0;
            text-transform: none;
            line-height: normal;
            letter-spacing: normal;
            word-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            float: none;
            z-index: 201;
            box-shadow: 0px 10px 20px #808080;
            -webkit-box-shadow: 0px 10px 20px #808080;
            -moz-box-shadow: 0px 10px 20px #808080;
            -khtml-box-shadow: 0px 10px 20px #808080;
            filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')
        }

        .MathJax_MenuItem {
            padding: 2px 2em;
            background: transparent
        }

        .MathJax_MenuArrow {
            position: absolute;
            right: .5em;
            padding-top: .25em;
            color: #666666;
            font-size: .75em
        }

        .MathJax_MenuActive .MathJax_MenuArrow {
            color: white
        }

        .MathJax_MenuArrow.RTL {
            left: .5em;
            right: auto
        }

        .MathJax_MenuCheck {
            position: absolute;
            left: .7em
        }

            .MathJax_MenuCheck.RTL {
                right: .7em;
                left: auto
            }

        .MathJax_MenuRadioCheck {
            position: absolute;
            left: 1em
        }

            .MathJax_MenuRadioCheck.RTL {
                right: 1em;
                left: auto
            }

        .MathJax_MenuLabel {
            padding: 2px 2em 4px 1.33em;
            font-style: italic
        }

        .MathJax_MenuRule {
            border-top: 1px solid #CCCCCC;
            margin: 4px 1px 0px
        }

        .MathJax_MenuDisabled {
            color: GrayText
        }

        .MathJax_MenuActive {
            background-color: Highlight;
            color: HighlightText
        }

        .MathJax_MenuDisabled:focus, .MathJax_MenuLabel:focus {
            background-color: #E8E8E8
        }

        .MathJax_ContextMenu:focus {
            outline: none
        }

        .MathJax_ContextMenu .MathJax_MenuItem:focus {
            outline: none
        }

        #MathJax_AboutClose {
            top: .2em;
            right: .2em
        }

        .MathJax_Menu .MathJax_MenuClose {
            top: -10px;
            left: -10px
        }

        .MathJax_MenuClose {
            position: absolute;
            cursor: pointer;
            display: inline-block;
            border: 2px solid #AAA;
            border-radius: 18px;
            -webkit-border-radius: 18px;
            -moz-border-radius: 18px;
            -khtml-border-radius: 18px;
            font-family: 'Courier New',Courier;
            font-size: 24px;
            color: #F0F0F0
        }

            .MathJax_MenuClose span {
                display: block;
                background-color: #AAA;
                border: 1.5px solid;
                border-radius: 18px;
                -webkit-border-radius: 18px;
                -moz-border-radius: 18px;
                -khtml-border-radius: 18px;
                line-height: 0;
                padding: 8px 0 6px
            }

            .MathJax_MenuClose:hover {
                color: white !important;
                border: 2px solid #CCC !important
            }

                .MathJax_MenuClose:hover span {
                    background-color: #CCC !important
                }

                .MathJax_MenuClose:hover:focus {
                    outline: none
                }
    </style>
    <style type="text/css">
        .MathJax_Preview .MJXf-math {
            color: inherit !important
        }
    </style>
    <style type="text/css">
        .MJX_Assistive_MathML {
            position: absolute !important;
            top: 0;
            left: 0;
            clip: rect(1px, 1px, 1px, 1px);
            padding: 1px 0 0 0 !important;
            border: 0 !important;
            height: 1px !important;
            width: 1px !important;
            overflow: hidden !important;
            display: block !important;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

            .MJX_Assistive_MathML.MJX_Assistive_MathML_Block {
                width: 100% !important
            }
    </style>
    <style type="text/css">
        #MathJax_Zoom {
            position: absolute;
            background-color: #F0F0F0;
            overflow: auto;
            display: block;
            z-index: 301;
            padding: .5em;
            border: 1px solid black;
            margin: 0;
            font-weight: normal;
            font-style: normal;
            text-align: left;
            text-indent: 0;
            text-transform: none;
            line-height: normal;
            letter-spacing: normal;
            word-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            float: none;
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            box-shadow: 5px 5px 15px #AAAAAA;
            -webkit-box-shadow: 5px 5px 15px #AAAAAA;
            -moz-box-shadow: 5px 5px 15px #AAAAAA;
            -khtml-box-shadow: 5px 5px 15px #AAAAAA;
            filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')
        }

        #MathJax_ZoomOverlay {
            position: absolute;
            left: 0;
            top: 0;
            z-index: 300;
            display: inline-block;
            width: 100%;
            height: 100%;
            border: 0;
            padding: 0;
            margin: 0;
            background-color: white;
            opacity: 0;
            filter: alpha(opacity=0)
        }

        #MathJax_ZoomFrame {
            position: relative;
            display: inline-block;
            height: 0;
            width: 0
        }

        #MathJax_ZoomEventTrap {
            position: absolute;
            left: 0;
            top: 0;
            z-index: 302;
            display: inline-block;
            border: 0;
            padding: 0;
            margin: 0;
            background-color: white;
            opacity: 0;
            filter: alpha(opacity=0)
        }
    </style>
    <style type="text/css">
        .MathJax_Preview {
            color: #888;
            display: contents
        }

        #MathJax_Message {
            position: fixed;
            left: 1em;
            bottom: 1.5em;
            background-color: #E6E6E6;
            border: 1px solid #959595;
            margin: 0px;
            padding: 2px 8px;
            z-index: 102;
            color: black;
            font-size: 80%;
            width: auto;
            white-space: nowrap
        }

        #MathJax_MSIE_Frame {
            position: absolute;
            top: 0;
            left: 0;
            width: 0px;
            z-index: 101;
            border: 0px;
            margin: 0px;
            padding: 0px
        }

        .MathJax_Error {
            color: #CC0000;
            font-style: italic
        }
    </style>
    <style type="text/css">
        .MJXp-script {
            font-size: .8em
        }

        .MJXp-right {
            -webkit-transform-origin: right;
            -moz-transform-origin: right;
            -ms-transform-origin: right;
            -o-transform-origin: right;
            transform-origin: right
        }

        .MJXp-bold {
            font-weight: bold
        }

        .MJXp-italic {
            font-style: italic
        }

        .MJXp-scr {
            font-family: MathJax_Script,'Times New Roman',Times,STIXGeneral,serif
        }

        .MJXp-frak {
            font-family: MathJax_Fraktur,'Times New Roman',Times,STIXGeneral,serif
        }

        .MJXp-sf {
            font-family: MathJax_SansSerif,'Times New Roman',Times,STIXGeneral,serif
        }

        .MJXp-cal {
            font-family: MathJax_Caligraphic,'Times New Roman',Times,STIXGeneral,serif
        }

        .MJXp-mono {
            font-family: MathJax_Typewriter,'Times New Roman',Times,STIXGeneral,serif
        }

        .MJXp-largeop {
            font-size: 150%
        }

            .MJXp-largeop.MJXp-int {
                vertical-align: -.2em
            }

        .MJXp-math {
            display: inline-block;
            line-height: 1.2;
            text-indent: 0;
            font-family: 'Times New Roman',Times,STIXGeneral,serif;
            white-space: nowrap;
            border-collapse: collapse
        }

        .MJXp-display {
            display: block;
            text-align: center;
            margin: 1em 0
        }

        .MJXp-math span {
            display: inline-block
        }

        .MJXp-box {
            display: block !important;
            text-align: center
        }

            .MJXp-box:after {
                content: " "
            }

        .MJXp-rule {
            display: block !important;
            margin-top: .1em
        }

        .MJXp-char {
            display: block !important
        }

        .MJXp-mo {
            margin: 0 .15em
        }

        .MJXp-mfrac {
            margin: 0 .125em;
            vertical-align: .25em
        }

        .MJXp-denom {
            display: inline-table !important;
            width: 100%
        }

            .MJXp-denom > * {
                display: table-row !important
            }

        .MJXp-surd {
            vertical-align: top
        }

            .MJXp-surd > * {
                display: block !important
            }

        .MJXp-script-box > * {
            display: table !important;
            height: 50%
        }

            .MJXp-script-box > * > * {
                display: table-cell !important;
                vertical-align: top
            }

            .MJXp-script-box > *:last-child > * {
                vertical-align: bottom
            }

            .MJXp-script-box > * > * > * {
                display: block !important
            }

        .MJXp-mphantom {
            visibility: hidden
        }

        .MJXp-munderover, .MJXp-munder {
            display: inline-table !important
        }

        .MJXp-over {
            display: inline-block !important;
            text-align: center
        }

            .MJXp-over > * {
                display: block !important
            }

        .MJXp-munderover > *, .MJXp-munder > * {
            display: table-row !important
        }

        .MJXp-mtable {
            vertical-align: .25em;
            margin: 0 .125em
        }

            .MJXp-mtable > * {
                display: inline-table !important;
                vertical-align: middle
            }

        .MJXp-mtr {
            display: table-row !important
        }

        .MJXp-mtd {
            display: table-cell !important;
            text-align: center;
            padding: .5em 0 0 .5em
        }

        .MJXp-mtr > .MJXp-mtd:first-child {
            padding-left: 0
        }

        .MJXp-mtr:first-child > .MJXp-mtd {
            padding-top: 0
        }

        .MJXp-mlabeledtr {
            display: table-row !important
        }

            .MJXp-mlabeledtr > .MJXp-mtd:first-child {
                padding-left: 0
            }

            .MJXp-mlabeledtr:first-child > .MJXp-mtd {
                padding-top: 0
            }

        .MJXp-merror {
            background-color: #FFFF88;
            color: #CC0000;
            border: 1px solid #CC0000;
            padding: 1px 3px;
            font-style: normal;
            font-size: 90%
        }

        .MJXp-scale0 {
            -webkit-transform: scaleX(.0);
            -moz-transform: scaleX(.0);
            -ms-transform: scaleX(.0);
            -o-transform: scaleX(.0);
            transform: scaleX(.0)
        }

        .MJXp-scale1 {
            -webkit-transform: scaleX(.1);
            -moz-transform: scaleX(.1);
            -ms-transform: scaleX(.1);
            -o-transform: scaleX(.1);
            transform: scaleX(.1)
        }

        .MJXp-scale2 {
            -webkit-transform: scaleX(.2);
            -moz-transform: scaleX(.2);
            -ms-transform: scaleX(.2);
            -o-transform: scaleX(.2);
            transform: scaleX(.2)
        }

        .MJXp-scale3 {
            -webkit-transform: scaleX(.3);
            -moz-transform: scaleX(.3);
            -ms-transform: scaleX(.3);
            -o-transform: scaleX(.3);
            transform: scaleX(.3)
        }

        .MJXp-scale4 {
            -webkit-transform: scaleX(.4);
            -moz-transform: scaleX(.4);
            -ms-transform: scaleX(.4);
            -o-transform: scaleX(.4);
            transform: scaleX(.4)
        }

        .MJXp-scale5 {
            -webkit-transform: scaleX(.5);
            -moz-transform: scaleX(.5);
            -ms-transform: scaleX(.5);
            -o-transform: scaleX(.5);
            transform: scaleX(.5)
        }

        .MJXp-scale6 {
            -webkit-transform: scaleX(.6);
            -moz-transform: scaleX(.6);
            -ms-transform: scaleX(.6);
            -o-transform: scaleX(.6);
            transform: scaleX(.6)
        }

        .MJXp-scale7 {
            -webkit-transform: scaleX(.7);
            -moz-transform: scaleX(.7);
            -ms-transform: scaleX(.7);
            -o-transform: scaleX(.7);
            transform: scaleX(.7)
        }

        .MJXp-scale8 {
            -webkit-transform: scaleX(.8);
            -moz-transform: scaleX(.8);
            -ms-transform: scaleX(.8);
            -o-transform: scaleX(.8);
            transform: scaleX(.8)
        }

        .MJXp-scale9 {
            -webkit-transform: scaleX(.9);
            -moz-transform: scaleX(.9);
            -ms-transform: scaleX(.9);
            -o-transform: scaleX(.9);
            transform: scaleX(.9)
        }

        .MathJax_PHTML .noError {
            vertical-align:;
            font-size: 90%;
            text-align: left;
            color: black;
            padding: 1px 3px;
            border: 1px solid
        }
    </style>
    <script type="text/javascript">
    /*
    require(['jquery'], function($) {
    require(['theme_boost/bootstrap/popover'], function() {
        var target = $("#calendar-day-popover-link-1-2022-334-9");
        target.popover({
            content: function() {
                var source = target.next().find("> *:not('.hidden')");
                var content = $('<div>');

                if (source.length) {
                    content.html(source.clone(false));
                } else {
                    content.html(target.data('alternate'));
                }

                return content.html();
            }
        });
    });
});
;

require(['jquery'], function($) {
    require(['theme_boost/bootstrap/popover'], function() {
        var target = $("#calendar-day-popover-link-1-2022-338-9");
        target.popover({
            content: function() {
                var source = target.next().find("> *:not('.hidden')");
                var content = $('<div>');

                if (source.length) {
                    content.html(source.clone(false));
                } else {
                    content.html(target.data('alternate'));
                }

                return content.html();
            }
        });
    });
});
;

require(['jquery'], function($) {
    require(['theme_boost/bootstrap/popover'], function() {
        var target = $("#calendar-day-popover-link-1-2022-341-9");
        target.popover({
            content: function() {
                var source = target.next().find("> *:not('.hidden')");
                var content = $('<div>');

                if (source.length) {
                    content.html(source.clone(false));
                } else {
                    content.html(target.data('alternate'));
                }

                return content.html();
            }
        });
    });
});
;

require(['jquery'], function($) {
    require(['theme_boost/bootstrap/popover'], function() {
        var target = $("#calendar-day-popover-link-1-2022-343-9");
        target.popover({
            content: function() {
                var source = target.next().find("> *:not('.hidden')");
                var content = $('<div>');

                if (source.length) {
                    content.html(source.clone(false));
                } else {
                    content.html(target.data('alternate'));
                }

                return content.html();
            }
        });
    });
});
;

require(['jquery'], function($) {
    require(['theme_boost/bootstrap/popover'], function() {
        var target = $("#calendar-day-popover-link-1-2022-345-9");
        target.popover({
            content: function() {
                var source = target.next().find("> *:not('.hidden')");
                var content = $('<div>');

                if (source.length) {
                    content.html(source.clone(false));
                } else {
                    content.html(target.data('alternate'));
                }

                return content.html();
            }
        });
    });
});
;

require(['jquery'], function($) {
    require(['theme_boost/bootstrap/popover'], function() {
        var target = $("#calendar-day-popover-link-1-2022-347-9");
        target.popover({
            content: function() {
                var source = target.next().find("> *:not('.hidden')");
                var content = $('<div>');

                if (source.length) {
                    content.html(source.clone(false));
                } else {
                    content.html(target.data('alternate'));
                }

                return content.html();
            }
        });
    });
});
;

require(['jquery'], function($) {
    require(['theme_boost/bootstrap/popover'], function() {
        var target = $("#calendar-day-popover-link-1-2022-353-9");
        target.popover({
            content: function() {
                var source = target.next().find("> *:not('.hidden')");
                var content = $('<div>');

                if (source.length) {
                    content.html(source.clone(false));
                } else {
                    content.html(target.data('alternate'));
                }

                return content.html();
            }
        });
    });
});
;

require(['jquery'], function($) {
    require(['theme_boost/bootstrap/popover'], function() {
        var target = $("#calendar-day-popover-link-1-2022-356-9");
        target.popover({
            content: function() {
                var source = target.next().find("> *:not('.hidden')");
                var content = $('<div>');

                if (source.length) {
                    content.html(source.clone(false));
                } else {
                    content.html(target.data('alternate'));
                }

                return content.html();
            }
        });
    });
});
;
*/
require([
    'jquery',
    'core_calendar/selectors',
    'core_calendar/events',
], function(
    $,
    CalendarSelectors,
    CalendarEvents
) {

    $('body').on(CalendarEvents.filterChanged, function(e, data) {
        M.util.js_pending("month-mini-9-filterChanged");
        // A filter value has been changed.
        // Find all matching cells in the popover data, and hide them.
        $("#month-mini-2022-12-9")
            .find(CalendarSelectors.popoverType[data.type])
            .toggleClass('hidden', !!data.hidden);
        M.util.js_complete("month-mini-9-filterChanged");
    });
});</script>
</head>
<body id="page-my-index" class="format-site path-my chrome dir-ltr lang-en yui-skin-sam yui3-skin-sam putrablastdk-upm-edu-my pagelayout-mydashboard course-1 context-11744 klassroom-blue jsenabled fixed-nav">
    <div id="MathJax_Message" style="display: none;"></div>
  
   <!--<div id="page-wrapper">
        <div>
            <a class="sr-only sr-only-focusable" href="#maincontent">Skip to main content</a>
        </div>--> 
        <script src="http://putrablastdk.upm.edu.my/lib/javascript.php/1668789993/lib/babel-polyfill/polyfill.min.js"></script>
        <script src="http://putrablastdk.upm.edu.my/lib/javascript.php/1668789993/lib/polyfills/polyfill.js"></script>
        <script src="http://putrablastdk.upm.edu.my/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script>
        <script src="http://putrablastdk.upm.edu.my/lib/javascript.php/1668789993/lib/javascript-static.js"></script>
        <script src="http://putrablastdk.upm.edu.my/theme/javascript.php/klassroom/1668789993/head"></script>
        <script>//<![CDATA[
document.body.className += ' jsenabled';
//]]></script>


        <div id="page"> 
            <style>
            .feedback2 {
                background-color : #31B0D5;
                color: white;
                padding: 10px 20px;
                border-radius: 4px;
                border-color: #46b8da;
              }
              
              #mybutton {
                font-size:26px;
                position: fixed;
                bottom: 50%;
                right: 2px;
                z-index:1;
              }

              #mybutton2 {
                font-size:18px;
                position: fixed;
                bottom: 50%;
                top:50%;
                right: 2px;
                z-index:1;
                background-color:blue;
              }
              </style>
              <script>
                $(document).ready(function(){
                    $('#mybutton2').hide();

                    $("#mybutton").click(function(){
                        $('#mybutton2').show();
  });
                
                    });
              


                </script>
      <!--  <a href="#" class="btn btn-secondary"  title="Popover Header" id="mybutton" data-placement="left" 
        data-content="Some content inside the popover">
            Toggle popover</a>-->

    <?php 
    
        if(isset($_COOKIE['user'])){
            $hide="";
        }else if(isset($_COOKIE['user_lecturer'])){
            $hide="none";
        }
    
    ?>

    <button href="#" role="button"  class="btn btn-info btn-lg popover-test" id="mybutton" style="display:<?php echo $hide; ?>">
      <span class="glyphicon glyphicon-qrcode"></span> Attendance QRcode
    </button>

    <div id="mybutton2" style="background-color:blue">
    <?php
// Include the qrlib file
//include 'phpqrcode/qrlib.php';
$text = "attendance_record.php";
  
// $path variable store the location where to 
// store image and $file creates directory name
// of the QR code file by using 'uniqid'
// uniqid creates unique id based on microtime
$path = 'images/';
$file = $path.uniqid().".png";
  
// $ecc stores error correction capability('L')
$ecc = 'L';
$pixel_Size = 5;
//$frame_Size = 5;
  
// Generates QR Code and Stores it in directory given
//QRcode::png($text, $file, $ecc, $pixel_Size, $frame_size);
QRcode::png($text, $file, $ecc, $pixel_Size);
// Displaying the stored QR code from directory
//echo "<img src='".$file."'>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "putrablast_attendance";
$false="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM student_enroll WHERE student_matrix='".$_COOKIE['user']."'";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $subject_name = $row['subject_name'];
        $subject_code = $row['subject_name_code'];
    }

}   


    $sql2 = "SELECT * FROM qr_code WHERE subject_name_code='".$subject_code."'";
    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {
        while($row2 = mysqli_fetch_assoc($result2)) {
          $lecturer_matrix = $row2['lecturer_id'];
          $start_time =$row2['start_time'];
          $end_time =$row2['end_time'];
        }
    }
?>
<div style="background-color:white;margin-right:30px">
<p>Time: <?php echo $start_time.'-'.$end_time;?></p>

    </p>
        <p>Subject Code & Name:<br><?php echo $subject_code." ".$subject_name;?></p>
</div>
        <img src="<?php echo $file; ?>" style="float:left">
    </div>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
        <center>  <span class="modal-title">Login form</span></center>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		</div>
        </div>
    </div>
</div>
        
    

  
   <!-- Start navigation -->
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <ul class="top-left col-lg-6 col-md-6 col-sm-12">
                        </ul>

                        <ul class="top-right col-lg-6 col-md-6 col-sm-12">

                            <li class="nav-item d-flex">
                                <span></span>                        
                                <div class="usermenu">
                                    <div class="action-menu moodle-actionmenu nowrap-items d-inline" id="action-menu-0" data-enhance="moodle-core-actionmenu">

                                        <div class="menubar d-flex " id="action-menu-0-menubar" role="menubar">




                                            <div class="action-menu-trigger">
                                                <div class="dropdown">
                                                    <a href="#" tabindex="0" class="d-inline-block  dropdown-toggle icon-no-margin" id="action-menu-toggle-0" aria-label="User menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="action-menu-0-menu">

                                                        <span class="userbutton"><span class="usertext mr-1"></span><span class="avatars"><span class="avatar current"><img src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/core/1668789993/u/f2" class="userpicture defaultuserpic" width="35" height="35" alt=""></span></span></span>

                                                        <b class="caret"></b>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right menu  align-tr-br" id="action-menu-0-menu" data-rel="menu-content" aria-labelledby="action-menu-toggle-0" role="menu" data-align="tr-br">
                                                        <a href="http://putrablastdk.upm.edu.my/my/" class="dropdown-item menu-action" role="menuitem" data-title="mymoodle,admin" aria-labelledby="actionmenuaction-1">
                                                            <i class="icon fa fa-tachometer fa-fw " aria-hidden="true"></i>
                                                            <span class="menu-action-text" id="actionmenuaction-1">Dashboard</span>
                                                        </a>
                                                        <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                                                        <a href="http://putrablastdk.upm.edu.my/user/profile.php?id=6325" class="dropdown-item menu-action" role="menuitem" data-title="profile,moodle" aria-labelledby="actionmenuaction-2">
                                                            <i class="icon fa fa-user fa-fw " aria-hidden="true"></i>
                                                            <span class="menu-action-text" id="actionmenuaction-2">Profile</span>
                                                        </a>
                                                        <a href="http://putrablastdk.upm.edu.my/grade/report/overview/index.php" class="dropdown-item menu-action" role="menuitem" data-title="grades,grades" aria-labelledby="actionmenuaction-3">
                                                            <i class="icon fa fa-table fa-fw " aria-hidden="true"></i>
                                                            <span class="menu-action-text" id="actionmenuaction-3">Grades</span>
                                                        </a>
                                                        <a href="http://putrablastdk.upm.edu.my/message/index.php" class="dropdown-item menu-action" role="menuitem" data-title="messages,message" aria-labelledby="actionmenuaction-4">
                                                            <i class="icon fa fa-comment fa-fw " aria-hidden="true"></i>
                                                            <span class="menu-action-text" id="actionmenuaction-4">Messages</span>
                                                        </a>
                                                        <a href="http://putrablastdk.upm.edu.my/user/preferences.php" class="dropdown-item menu-action" role="menuitem" data-title="preferences,moodle" aria-labelledby="actionmenuaction-5">
                                                            <i class="icon fa fa-wrench fa-fw " aria-hidden="true"></i>
                                                            <span class="menu-action-text" id="actionmenuaction-5">Preferences</span>
                                                        </a>
                                                        <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                                                        <a href="http://putrablastdk.upm.edu.my/login/logout.php?sesskey=Bnj1Lsxrog" class="dropdown-item menu-action" role="menuitem" data-title="logout,moodle" aria-labelledby="actionmenuaction-6">
                                                            <i class="icon fa fa-sign-out fa-fw " aria-hidden="true"></i>
                                                            <span class="menu-action-text" id="actionmenuaction-6">Log out</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="popover-region collapsed popover-region-notifications" id="nav-notification-popover-container" data-userid="6325" data-region="popover-region">
                                    <div class="popover-region-toggle nav-link" data-region="popover-region-toggle" role="button" aria-controls="popover-region-container-63970cb2125dc63970cb1bd4ac25" aria-haspopup="true" aria-label="Show notification window with no new notifications" tabindex="0">
                                        <i class="icon fa fa-bell fa-fw " title="Toggle notifications menu" aria-label="Toggle notifications menu"></i>
                                        <div class="count-container " data-region="count-container" aria-label="There are 3 unread notifications">3</div>

                                    </div>
                                    <div id="popover-region-container-63970cb2125dc63970cb1bd4ac25" class="popover-region-container" data-region="popover-region-container" aria-expanded="false" aria-hidden="true" aria-label="Notification window" role="region">
                                        <div class="popover-region-header-container">
                                            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Notifications</h3>
                                            <div class="popover-region-header-actions" data-region="popover-region-header-actions">
                                                <a class="mark-all-read-button" href="#" title="Mark all as read" data-action="mark-all-read" role="button" aria-label="Mark all as read">
                                                    <span class="normal-icon"><i class="icon fa fa-check fa-fw " aria-hidden="true"></i></span>
                                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                                </a>
                                                <a href="http://putrablastdk.upm.edu.my/message/notificationpreferences.php?userid=6325" title="Notification preferences" aria-label="Notification preferences">
                                                    <i class="icon fa fa-cog fa-fw " aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="popover-region-content-container" data-region="popover-region-content-container">
                                            <div class="popover-region-content" data-region="popover-region-content">
                                                <div class="all-notifications" data-region="all-notifications" role="log" aria-busy="false" aria-atomic="false" aria-relevant="additions"></div>
                                                <div class="empty-message" tabindex="0" data-region="empty-message">You have no notifications</div>

                                            </div>
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                        </div>
                                        <a class="see-all-link" href="http://putrablastdk.upm.edu.my/message/output/popup/notifications.php">
                                            <div class="popover-region-footer-container">
                                                <div class="popover-region-seeall-text">See all</div>
                                            </div>
                                        </a>
                                    </div>
                                </div><div class="popover-region collapsed" data-region="popover-region-messages">
                                    <a id="message-drawer-toggle-63970cb2138c763970cb1bd4ac26" class="nav-link d-inline-block popover-region-toggle position-relative" href="#" role="button">
                                        <i class="icon fa fa-comment fa-fw " title="Toggle messaging drawer" aria-label="Toggle messaging drawer"></i>
                                        <div class="count-container hidden" data-region="count-container" aria-label="There are 0 unread conversations">0</div>
                                    </a>
                                    <span class="sr-only sr-only-focusable" data-region="jumpto" tabindex="-1"></span>
                                </div>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
            <div class="fixed-nav-element" style="height: 80px;"></div>
            <div id="nav-main" class="top-page-header navbar-fixed-top">
                <div class="container">
                    <div class="float-left"><a class="logo" href="http://putrablastdk.upm.edu.my">
                        <img src="//putrablastdk.upm.edu.my/pluginfile.php/1/theme_klassroom/logo/1668789993/Logo%20Putablast%20copy3%20%283%29.png" alt="logo"></a></div>
                    <nav class="navbar navbar-bootswatch navbar-expand moodle-has-zindex float-right">
                        <a href="http://putrablastdk.upm.edu.my" class="navbar-brand
                  d-none d-sm-inline
                  ">
                            <span class="site-name d-none d-md-inline">PutraBLASTDK sesi 1, 2022/2023</span>
                        </a>
                        <a class="show-menu" href="#"><i class="fa fa-bars"></i></a>
                        <ul class="pull-left navigation-wrapper">
                            <!-- custom_menu -->
                            <!-- page_heading_menu -->

                        </ul>

                    </nav>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Start Colour Switcher Section -->
            <!-- End Colour Switcher Section -->
            <!-- End navigation -->
            <!-- Start Full-header -->
            <header id="page-header" class="internalbanner">
                <div class="container">
                    <div class="card ">
                        <div class="card-body ">
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <div class="sr-only"><h1>PutraBLASTDK sesi 1, 2022/2023: Dashboard</h1></div>
                                </div>
                            </div>
                            <p id="internalbannertagline" class="tagline">The only source of knowledge is experience.</p><div class="mini-block"></div>
                        </div>
                    </div>
                </div>
            </header>
            <div id="page-navbar-con">
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-wrap">
                                <div class="ml-auto d-flex">
                                    <div class="singlebutton">
                                        <form method="post" action="http://putrablastdk.upm.edu.my/my/index.php">
                                            <input type="hidden" name="edit" value="1">
                                            <input type="hidden" name="sesskey" value="Bnj1Lsxrog">
                                            <button type="submit" class="btn btn-secondary" id="single_button63970cb1bd4ac1" title="">Customise this page</button>
                                        </form>
                                    </div>
                                </div>
                                <div id="course-header">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Full-header -->
      
            <div class="container-fluid container-wrapper">
                <div id="page-content" class="row  blocks-pre   blocks-post ">
                    <div id="region-main-box" class="region-main">
                        <section id="region-main" class="region-main-content" aria-label="Content">
                            <span class="notifications" id="user-notifications"></span>
                            <div role="main">
                                <span id="maincontent"></span><aside id="block-region-content" class="block-region" data-blockregion="content" data-droptarget="1">
                                    <a href="#sb-11" class="sr-only sr-only-focusable">Skip Latest announcements</a>

                                    <section id="inst276220" class=" block_news_items block  card mb-3" role="complementary" data-block="news_items" aria-labelledby="instance-276220-header">

                                        <div class="card-body p-3">

                                            <h5 id="instance-276220-header" class="card-title d-inline">Latest announcements</h5>
                                            

                                            <div class="card-text content mt-3">

                                                <ul class="unlist">
                                                    <li class="post"><div class="head clearfix"><div class="date">30 Nov, 12:00</div><div class="name">Admin Faris .</div></div><div class="info"><a href="http://putrablastdk.upm.edu.my/mod/forum/discuss.php?d=8192">Test Announcement</a></div></li>
                                                </ul>

                                                <div class="footer"><a href="http://putrablastdk.upm.edu.my/mod/forum/view.php?f=2299">Older topics</a> ...</div>

                                            </div>

                                        </div>

                                    </section>

                                    <span id="sb-11"></span><a href="#sb-13" class="sr-only sr-only-focusable">Skip Recently accessed courses</a>

                                    <section id="inst276222" class=" block_recentlyaccessedcourses block  card mb-3" role="complementary" data-block="recentlyaccessedcourses" aria-labelledby="instance-276222-header">

                                        <div class="card-body p-3">

                                            <h5 id="instance-276222-header" class="card-title d-inline">Recently accessed courses</h5>


                                            <div class="card-text content mt-3">
                                                <div id="block-recentlyaccessedcourses-63970cb21025163970cb1bd4ac14" class="block-recentlyaccessedcourses block-cards" data-region="recentlyaccessedcourses" data-userid="6325" data-displaycoursecategory="1">
                                                    <div class="container-fluid p-0">
                                                        <div id="recentlyaccessedcourses-view-63970cb21025163970cb1bd4ac14" data-region="recentlyaccessedcourses-view">
                                                            <div data-region="loading-placeholder" class="hidden">
                                                                <div class="card-deck dashboard-card-deck one-row overflow-hidden" style="height: 13.05rem">
                                                                    <div class="card dashboard-card border-0">
                                                                        <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
                                                                        </div>
                                                                        <div class="card-body pr-1 course-info-container">
                                                                            <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card dashboard-card border-0">
                                                                        <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
                                                                        </div>
                                                                        <div class="card-body pr-1 course-info-container">
                                                                            <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card dashboard-card border-0">
                                                                        <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
                                                                        </div>
                                                                        <div class="card-body pr-1 course-info-container">
                                                                            <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card dashboard-card border-0">
                                                                        <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
                                                                        </div>
                                                                        <div class="card-body pr-1 course-info-container">
                                                                            <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="" data-region="view-content">
                                                                <div class="d-flex paging-bar-container mb-3" data-region="paging-bar-container">
                                                                    <div data-region="paging-control-container" class="d-flex">

                                                                        <nav id="paging-bar-63970cb21025163970cb1bd4ac14" class="" data-region="paging-bar" data-ignore-control-while-loading="" data-hide-control-on-single-page="" data-active-page-number="1" aria-label="Pagination navigation" data-aria-label-components-pagination-item="pagedcontentnavigationitem, core" data-aria-label-components-pagination-active-item="pagedcontentnavigationactiveitem, core" aria-hidden="false" style="opacity: 1; visibility: visible;">

                                                                            <ul class="pagination mb-0">
                                                                                <li class="page-item disabled" data-region="page-item" data-control="previous" aria-disabled="true">

                                                                                    <a href="#" class="page-link" data-region="page-link" aria-label="Previous page">
                                                                                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                                                                                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="page-item" data-region="page-item" data-control="next">

                                                                                    <a href="#" class="page-link" data-region="page-link" aria-label="Next page">
                                                                                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                                                                                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </nav>
                                                                    </div>
                                                                </div>

                                                                <div class="card-deck dashboard-card-deck one-row fixed-width-cards justify-content-center overflow-hidden" data-region="card-deck" role="list">
                                                                    <div class="card dashboard-card" role="listitem" data-region="course-content" data-course-id="4116">
                                                                        <a href="http://putrablastdk.upm.edu.my/course/view.php?id=4116" tabindex="-1">
                                                                            <div class="card-img dashboard-card-img" style="background-image: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyODAiIGhlaWdodD0iMjgwIj48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2IoMTc4LCAxOTAsIDE5NSkiIC8+PGNpcmNsZSBjeD0iMCIgY3k9IjAiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjExNTMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMjgwIiBjeT0iMCIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTE1MzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIwIiBjeT0iMjgwIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMTUzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjI4MCIgY3k9IjI4MCIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTE1MzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSI0Ni42NjY2NjY2NjY2NjciIGN5PSIwIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNzI7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSI0Ni42NjY2NjY2NjY2NjciIGN5PSIyODAiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA3MjtzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjkzLjMzMzMzMzMzMzMzMyIgY3k9IjAiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjE1O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iOTMuMzMzMzMzMzMzMzMzIiBjeT0iMjgwIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xNTtzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjE0MCIgY3k9IjAiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAyO3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMTQwIiBjeT0iMjgwIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjtzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjE4Ni42NjY2NjY2NjY2NyIgY3k9IjAiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEwNjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMTg2LjY2NjY2NjY2NjY3IiBjeT0iMjgwIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMDY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjIzMy4zMzMzMzMzMzMzMyIgY3k9IjAiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAyO3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMjMzLjMzMzMzMzMzMzMzIiBjeT0iMjgwIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjtzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjAiIGN5PSI0Ni42NjY2NjY2NjY2NjciIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA2MzMzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjI4MCIgY3k9IjQ2LjY2NjY2NjY2NjY2NyIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDYzMzMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iNDYuNjY2NjY2NjY2NjY3IiBjeT0iNDYuNjY2NjY2NjY2NjY3IiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNzI7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSI5My4zMzMzMzMzMzMzMzMiIGN5PSI0Ni42NjY2NjY2NjY2NjciIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAzNzMzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjE0MCIgY3k9IjQ2LjY2NjY2NjY2NjY2NyIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDI4NjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMTg2LjY2NjY2NjY2NjY3IiBjeT0iNDYuNjY2NjY2NjY2NjY3IiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wMjg2NjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIyMzMuMzMzMzMzMzMzMzMiIGN5PSI0Ni42NjY2NjY2NjY2NjciIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEwNjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMCIgY3k9IjkzLjMzMzMzMzMzMzMzMyIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDI4NjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMjgwIiBjeT0iOTMuMzMzMzMzMzMzMzMzIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wMjg2NjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSI0Ni42NjY2NjY2NjY2NjciIGN5PSI5My4zMzMzMzMzMzMzMzMiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA2MzMzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjkzLjMzMzMzMzMzMzMzMyIgY3k9IjkzLjMzMzMzMzMzMzMzMyIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDgwNjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMTQwIiBjeT0iOTMuMzMzMzMzMzMzMzMzIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjtzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjE4Ni42NjY2NjY2NjY2NyIgY3k9IjkzLjMzMzMzMzMzMzMzMyIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDgwNjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMjMzLjMzMzMzMzMzMzMzIiBjeT0iOTMuMzMzMzMzMzMzMzMzIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wODA2NjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIwIiBjeT0iMTQwIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wODkzMzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIyODAiIGN5PSIxNDAiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA4OTMzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjQ2LjY2NjY2NjY2NjY2NyIgY3k9IjE0MCIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDcyO3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iOTMuMzMzMzMzMzMzMzMzIiBjeT0iMTQwIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNzI7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIxNDAiIGN5PSIxNDAiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEwNjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMTg2LjY2NjY2NjY2NjY3IiBjeT0iMTQwIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMDY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjIzMy4zMzMzMzMzMzMzMyIgY3k9IjE0MCIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTE1MzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIwIiBjeT0iMTg2LjY2NjY2NjY2NjY3IiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMTUzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjI4MCIgY3k9IjE4Ni42NjY2NjY2NjY2NyIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTE1MzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSI0Ni42NjY2NjY2NjY2NjciIGN5PSIxODYuNjY2NjY2NjY2NjciIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjE1O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iOTMuMzMzMzMzMzMzMzMzIiBjeT0iMTg2LjY2NjY2NjY2NjY3IiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjtzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjE0MCIgY3k9IjE4Ni42NjY2NjY2NjY2NyIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDgwNjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMTg2LjY2NjY2NjY2NjY3IiBjeT0iMTg2LjY2NjY2NjY2NjY3IiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNDY7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIyMzMuMzMzMzMzMzMzMzMiIGN5PSIxODYuNjY2NjY2NjY2NjciIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA4MDY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjAiIGN5PSIyMzMuMzMzMzMzMzMzMzMiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjE0MTMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMjgwIiBjeT0iMjMzLjMzMzMzMzMzMzMzIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xNDEzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjQ2LjY2NjY2NjY2NjY2NyIgY3k9IjIzMy4zMzMzMzMzMzMzMyIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDQ2O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iOTMuMzMzMzMzMzMzMzMzIiBjeT0iMjMzLjMzMzMzMzMzMzMzIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMzczMzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIxNDAiIGN5PSIyMzMuMzMzMzMzMzMzMzMiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjAyODY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjE4Ni42NjY2NjY2NjY2NyIgY3k9IjIzMy4zMzMzMzMzMzMzMyIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDQ2O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMjMzLjMzMzMzMzMzMzMzIiBjeT0iMjMzLjMzMzMzMzMzMzMzIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xNDEzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjwvc3ZnPg==&quot;);">
                                                                                <span class="sr-only">Course image</span>
                                                                            </div>
                                                                        </a>
                                                                        <div class="card-body pr-1 course-info-container" id="course-info-container-4116-3">
                                                                            <div class="d-flex align-items-start">
                                                                                <div class="w-100 text-truncate">
                                                                                    <div class="text-muted muted d-flex mb-1 flex-wrap">

                                                                                        <span class="sr-only">
                                                                                            Course category
                                                                                        </span>
                                                                                        <span class="text-truncate">FAKULTI SAINS KOMPUTER DAN TEKNOLOGI MAKLUMAT</span>
                                                                                    </div>
                                                                                    <a href="http://putrablastdk.upm.edu.my/course/view.php?id=4116" class="aalink coursename mr-2">


                                                                                        <span id="favorite-icon-4116-3" data-region="favourite-icon" data-course-id="4116">
                                                                                            <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                                                                                                <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                                                                                                <span class="sr-only">Course is starred</span>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="sr-only">
                                                                                            Course name
                                                                                        </span>
                                                                                        <span class="text-truncate">SSE5210-1: KAEDAH EMPIRIKAL BAGI KEJURUTERAAN PERISIAN(EMPIRICAL METHODS FOR SOFTWARE ENGINEERING)</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><div class="card dashboard-card" role="listitem" data-region="course-content" data-course-id="3989">
                                                                        <a href="http://putrablastdk.upm.edu.my/course/view.php?id=3989" tabindex="-1">
                                                                            <div class="card-img dashboard-card-img" style="background-image: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyOTAiIGhlaWdodD0iMzM1Ij48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2IoMTA4LCA5MiwgMjMxKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDgwNjY2NjY2NjY2NjY3IiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMzIuMjY2NjY2NjY2NjY3LCAtMjcuOTQzNzUzMDI4Nzc4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDgwNjY2NjY2NjY2NjY3IiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNTguMTMzMzMzMzMzMzMsIC0yNy45NDM3NTMwMjg3NzgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wODA2NjY2NjY2NjY2NjciIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0zMi4yNjY2NjY2NjY2NjcsIDMwNy4zODEyODMzMTY1NikiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA4MDY2NjY2NjY2NjY2NyIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjU4LjEzMzMzMzMzMzMzLCAzMDcuMzgxMjgzMzE2NTYpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4xMjQiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE2LjEzMzMzMzMzMzMzMywgMCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjEyNCIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTYuMTMzMzMzMzMzMzMzLCAzMzUuMzI1MDM2MzQ1MzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4xNDEzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjQuNTMzMzMzMzMzMzMzLCAtMjcuOTQzNzUzMDI4Nzc4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDY0LjUzMzMzMzMzMzMzMywgMzA3LjM4MTI4MzMxNjU2KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDU0NjY2NjY2NjY2NjY3IiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMTIuOTMzMzMzMzMzMzMsIDApIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wNTQ2NjY2NjY2NjY2NjciIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDExMi45MzMzMzMzMzMzMywgMzM1LjMyNTAzNjM0NTMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTE1MzMzMzMzMzMzMzMiIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE2MS4zMzMzMzMzMzMzMywgLTI3Ljk0Mzc1MzAyODc3OCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNjEuMzMzMzMzMzMzMzMsIDMwNy4zODEyODMzMTY1NikiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NyIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjA5LjczMzMzMzMzMzMzLCAwKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDI4NjY2NjY2NjY2NjY3IiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyMDkuNzMzMzMzMzMzMzMsIDMzNS4zMjUwMzYzNDUzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjEyNCIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTMyLjI2NjY2NjY2NjY2NywgMjcuOTQzNzUzMDI4Nzc4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTI0IiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNTguMTMzMzMzMzMzMzMsIDI3Ljk0Mzc1MzAyODc3OCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjE0MTMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNi4xMzMzMzMzMzMzMzMsIDU1Ljg4NzUwNjA1NzU1NikiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2NC41MzMzMzMzMzMzMzMsIDI3Ljk0Mzc1MzAyODc3OCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA2MzMzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTEyLjkzMzMzMzMzMzMzLCA1NS44ODc1MDYwNTc1NTYpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4xMzI2NjY2NjY2NjY2NyIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTYxLjMzMzMzMzMzMzMzLCAyNy45NDM3NTMwMjg3NzgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wMjg2NjY2NjY2NjY2NjciIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIwOS43MzMzMzMzMzMzMywgNTUuODg3NTA2MDU3NTU2KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDg5MzMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMzIuMjY2NjY2NjY2NjY3LCA4My44MzEyNTkwODYzMzQpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wODkzMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI1OC4xMzMzMzMzMzMzMywgODMuODMxMjU5MDg2MzM0KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTI0IiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNi4xMzMzMzMzMzMzMzMsIDExMS43NzUwMTIxMTUxMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA5OCIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjQuNTMzMzMzMzMzMzMzLCA4My44MzEyNTkwODYzMzQpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4xMjQiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDExMi45MzMzMzMzMzMzMywgMTExLjc3NTAxMjExNTExKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE2MS4zMzMzMzMzMzMzMywgODMuODMxMjU5MDg2MzM0KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTUiIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIwOS43MzMzMzMzMzMzMywgMTExLjc3NTAxMjExNTExKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0zMi4yNjY2NjY2NjY2NjcsIDEzOS43MTg3NjUxNDM4OSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjAyIiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNTguMTMzMzMzMzMzMzMsIDEzOS43MTg3NjUxNDM4OSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA4OTMzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTYuMTMzMzMzMzMzMzMzLCAxNjcuNjYyNTE4MTcyNjcpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wNjMzMzMzMzMzMzMzMzMiIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDY0LjUzMzMzMzMzMzMzMywgMTM5LjcxODc2NTE0Mzg5KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTA2NjY2NjY2NjY2NjciIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDExMi45MzMzMzMzMzMzMywgMTY3LjY2MjUxODE3MjY3KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE2MS4zMzMzMzMzMzMzMywgMTM5LjcxODc2NTE0Mzg5KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDI4NjY2NjY2NjY2NjY3IiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyMDkuNzMzMzMzMzMzMzMsIDE2Ny42NjI1MTgxNzI2NykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA5OCIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTMyLjI2NjY2NjY2NjY2NywgMTk1LjYwNjI3MTIwMTQ1KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDk4IiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNTguMTMzMzMzMzMzMzMsIDE5NS42MDYyNzEyMDE0NSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA5OCIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTYuMTMzMzMzMzMzMzMzLCAyMjMuNTUwMDI0MjMwMjIpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4xNDEzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjQuNTMzMzMzMzMzMzMzLCAxOTUuNjA2MjcxMjAxNDUpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4xMjQiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDExMi45MzMzMzMzMzMzMywgMjIzLjU1MDAyNDIzMDIyKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE2MS4zMzMzMzMzMzMzMywgMTk1LjYwNjI3MTIwMTQ1KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDk4IiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyMDkuNzMzMzMzMzMzMzMsIDIyMy41NTAwMjQyMzAyMikiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjAyIiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMzIuMjY2NjY2NjY2NjY3LCAyNTEuNDkzNzc3MjU5KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI1OC4xMzMzMzMzMzMzMywgMjUxLjQ5Mzc3NzI1OSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjE1IiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNi4xMzMzMzMzMzMzMzMsIDI3OS40Mzc1MzAyODc3OCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA4OTMzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjQuNTMzMzMzMzMzMzMzLCAyNTEuNDkzNzc3MjU5KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTE1MzMzMzMzMzMzMzMiIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDExMi45MzMzMzMzMzMzMywgMjc5LjQzNzUzMDI4Nzc4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDI4NjY2NjY2NjY2NjY3IiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNjEuMzMzMzMzMzMzMzMsIDI1MS40OTM3NzcyNTkpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wOTgiIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIwOS43MzMzMzMzMzMzMywgMjc5LjQzNzUzMDI4Nzc4KSIgLz48L3N2Zz4=&quot;);">
                                                                                <span class="sr-only">Course image</span>
                                                                            </div>
                                                                        </a>
                                                                        <div class="card-body pr-1 course-info-container" id="course-info-container-3989-4">
                                                                            <div class="d-flex align-items-start">
                                                                                <div class="w-100 text-truncate">
                                                                                    <div class="text-muted muted d-flex mb-1 flex-wrap">

                                                                                        <span class="sr-only">
                                                                                            Course category
                                                                                        </span>
                                                                                        <span class="text-truncate">FAKULTI SAINS KOMPUTER DAN TEKNOLOGI MAKLUMAT</span>
                                                                                    </div>
                                                                                    <a href="http://putrablastdk.upm.edu.my/course/view.php?id=3989" class="aalink coursename mr-2">


                                                                                        <span id="favorite-icon-3989-4" data-region="favourite-icon" data-course-id="3989">
                                                                                            <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                                                                                                <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                                                                                                <span class="sr-only">Course is starred</span>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="sr-only">
                                                                                            Course name
                                                                                        </span>
                                                                                        <span class="text-truncate">SSE5203-1: PENGURUSAN PROJEK BAGI PEMBINAAN PERISIAN(PROJECT MANAGEMENT FOR SOFTWARE CONSTRUCTION)</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="hidden text-xs-center text-center mt-3" data-region="empty-message">
                                                                <img class="empty-placeholder-image-lg mt-1" src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/block_recentlyaccessedcourses/1668789993/courses" alt="">
                                                                <p class="text-muted mt-3">No recent courses</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="footer"></div>

                                            </div>

                                        </div>

                                    </section>

                                    <span id="sb-13"></span><a href="#sb-14" class="sr-only sr-only-focusable">Skip Course overview</a>

                                    <section id="inst276221" class=" block_myoverview block  card mb-3" role="complementary" data-block="myoverview" aria-labelledby="instance-276221-header">

                                        <div class="card-body p-3">

                                            <h5 id="instance-276221-header" class="card-title d-inline">Course overview</h5>


                                            <div class="card-text content mt-3">
                                                <div id="block-myoverview-63970cb210da363970cb1bd4ac15" class="block-myoverview block-cards" data-region="myoverview" role="navigation" data-init="true">

                                                    <div data-region="filter" class="d-flex align-items-center flex-wrap" aria-label="Course overview controls">
                                                        <div class="dropdown mb-1 mr-auto">
                                                            <button id="groupingdropdown" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Grouping drop-down menu">
                                                                <i class="icon fa fa-filter fa-fw " aria-hidden="true"></i>
                                                                <span class="d-sm-inline-block" data-active-item-text="">

                                                                    All (except removed from view)






                                                                </span>
                                                            </button>
                                                            <ul class="dropdown-menu" role="menu" data-show-active-item="" data-skip-active-class="true" data-active-item-text="" aria-labelledby="groupingdropdown">
                                                                <li class="dropdown-divider" role="presentation">
                                                                    <span class="filler">&nbsp;</span>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#" data-filter="grouping" data-value="all" data-pref="all" aria-label="Show all courses except courses removed from view" aria-controls="courses-view-63970cb210da363970cb1bd4ac15" role="menuitem" aria-current="true">
                                                                        All (except removed from view)
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider" role="presentation">
                                                                    <span class="filler">&nbsp;</span>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#" data-filter="grouping" data-value="inprogress" data-pref="inprogress" aria-label="Show courses in progress" aria-controls="courses-view-63970cb210da363970cb1bd4ac15" role="menuitem">
                                                                        In progress
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#" data-filter="grouping" data-value="future" data-pref="future" aria-label="Show future courses" aria-controls="courses-view-63970cb210da363970cb1bd4ac15" role="menuitem">
                                                                        Future
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#" data-filter="grouping" data-value="past" data-pref="past" aria-label="Show past courses" aria-controls="courses-view-63970cb210da363970cb1bd4ac15" role="menuitem">
                                                                        Past
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider" role="presentation">
                                                                    <span class="filler">&nbsp;</span>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#" data-filter="grouping" data-value="favourites" data-pref="favourites" aria-label="Show starred courses" aria-controls="courses-view-63970cb210da363970cb1bd4ac15" role="menuitem">
                                                                        Starred
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider" role="presentation">
                                                                    <span class="filler">&nbsp;</span>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#" data-filter="grouping" data-value="hidden" data-pref="hidden" aria-label="Show courses removed from view" aria-controls="courses-view-63970cb210da363970cb1bd4ac15" role="menuitem">
                                                                        Removed from view
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>


                                                        <div class="mb-1 mr-1 d-flex align-items-center">
                                                            <div class="dropdown">
                                                                <button id="sortingdropdown" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Sorting drop-down menu">
                                                                    <i class="icon fa fa-sort-amount-asc fa-fw " aria-hidden="true"></i>
                                                                    <span class="d-sm-inline-block" data-active-item-text="">
                                                                        Course name


                                                                    </span>
                                                                </button>
                                                                <ul class="dropdown-menu" role="menu" data-show-active-item="" data-skip-active-class="true" aria-labelledby="sortingdropdown">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-filter="sort" data-pref="title" data-value="fullname" aria-label="Sort courses by course name" aria-controls="courses-view-63970cb210da363970cb1bd4ac15" role="menuitem" aria-current="true">
                                                                            Course name
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-filter="sort" data-pref="lastaccessed" data-value="ul.timeaccess desc" aria-label="Sort courses by last accessed date" aria-controls="courses-view-63970cb210da363970cb1bd4ac15" role="menuitem">
                                                                            Last accessed
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown mb-1">
                                                            <button id="displaydropdown" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Display drop-down menu">
                                                                <i class="icon fa fa-th fa-fw " aria-hidden="true"></i>
                                                                <span class="d-sm-inline-block" data-active-item-text="">
                                                                    Card


                                                                </span>
                                                            </button>
                                                            <ul class="dropdown-menu" role="menu" data-show-active-item="" data-skip-active-class="true" aria-labelledby="displaydropdown">
                                                                <li>
                                                                    <a class="dropdown-item" href="#" data-display-option="display" data-value="card" data-pref="card" aria-label="Switch to card view" aria-controls="courses-view-63970cb210da363970cb1bd4ac15" role="menuitem" aria-current="true">
                                                                        Card
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#" data-display-option="display" data-value="list" data-pref="list" aria-label="Switch to list view" aria-controls="courses-view-63970cb210da363970cb1bd4ac15" role="menuitem">
                                                                        List
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#" data-display-option="display" data-value="summary" data-pref="summary" aria-label="Switch to summary view" aria-controls="courses-view-63970cb210da363970cb1bd4ac15" role="menuitem">
                                                                        Summary
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="container-fluid p-0">
                                                        <div id="courses-view-63970cb210da363970cb1bd4ac15" data-region="courses-view" data-display="card" data-grouping="all" data-customfieldname="" data-customfieldvalue="" data-sort="fullname" data-prev-display="card" data-paging="12" data-nocoursesimg="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/block_myoverview/1668789993/courses" data-totalcoursecount="4" data-displaycategories="on">
                                                            <div id="paged-content-container-1" data-region="paged-content-container">


                                                                <div id="page-container-1" data-region="page-container" class="paged-content-page-container" aria-live="polite" style="">
                                                                    <div data-region="paged-content-page" data-page="1" class="">
                                                                        <div class="card-deck dashboard-card-deck " data-region="card-deck" role="list">


                                                                            <div class="card dashboard-card" role="listitem" data-region="course-content" data-course-id="3989">
                                                                                <a href="http://putrablastdk.upm.edu.my/course/view.php?id=3989" tabindex="-1">
                                                                                    <div class="card-img dashboard-card-img" style="background-image: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyOTAiIGhlaWdodD0iMzM1Ij48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2IoMTA4LCA5MiwgMjMxKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDgwNjY2NjY2NjY2NjY3IiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMzIuMjY2NjY2NjY2NjY3LCAtMjcuOTQzNzUzMDI4Nzc4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDgwNjY2NjY2NjY2NjY3IiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNTguMTMzMzMzMzMzMzMsIC0yNy45NDM3NTMwMjg3NzgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wODA2NjY2NjY2NjY2NjciIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0zMi4yNjY2NjY2NjY2NjcsIDMwNy4zODEyODMzMTY1NikiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA4MDY2NjY2NjY2NjY2NyIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjU4LjEzMzMzMzMzMzMzLCAzMDcuMzgxMjgzMzE2NTYpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4xMjQiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE2LjEzMzMzMzMzMzMzMywgMCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjEyNCIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTYuMTMzMzMzMzMzMzMzLCAzMzUuMzI1MDM2MzQ1MzMpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4xNDEzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjQuNTMzMzMzMzMzMzMzLCAtMjcuOTQzNzUzMDI4Nzc4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDY0LjUzMzMzMzMzMzMzMywgMzA3LjM4MTI4MzMxNjU2KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDU0NjY2NjY2NjY2NjY3IiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMTIuOTMzMzMzMzMzMzMsIDApIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wNTQ2NjY2NjY2NjY2NjciIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDExMi45MzMzMzMzMzMzMywgMzM1LjMyNTAzNjM0NTMzKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTE1MzMzMzMzMzMzMzMiIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE2MS4zMzMzMzMzMzMzMywgLTI3Ljk0Mzc1MzAyODc3OCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNjEuMzMzMzMzMzMzMzMsIDMwNy4zODEyODMzMTY1NikiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NyIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjA5LjczMzMzMzMzMzMzLCAwKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDI4NjY2NjY2NjY2NjY3IiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyMDkuNzMzMzMzMzMzMzMsIDMzNS4zMjUwMzYzNDUzMykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjEyNCIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTMyLjI2NjY2NjY2NjY2NywgMjcuOTQzNzUzMDI4Nzc4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTI0IiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNTguMTMzMzMzMzMzMzMsIDI3Ljk0Mzc1MzAyODc3OCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjE0MTMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNi4xMzMzMzMzMzMzMzMsIDU1Ljg4NzUwNjA1NzU1NikiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2NC41MzMzMzMzMzMzMzMsIDI3Ljk0Mzc1MzAyODc3OCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA2MzMzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTEyLjkzMzMzMzMzMzMzLCA1NS44ODc1MDYwNTc1NTYpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4xMzI2NjY2NjY2NjY2NyIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTYxLjMzMzMzMzMzMzMzLCAyNy45NDM3NTMwMjg3NzgpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wMjg2NjY2NjY2NjY2NjciIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIwOS43MzMzMzMzMzMzMywgNTUuODg3NTA2MDU3NTU2KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDg5MzMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMzIuMjY2NjY2NjY2NjY3LCA4My44MzEyNTkwODYzMzQpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wODkzMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI1OC4xMzMzMzMzMzMzMywgODMuODMxMjU5MDg2MzM0KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTI0IiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNi4xMzMzMzMzMzMzMzMsIDExMS43NzUwMTIxMTUxMSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA5OCIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjQuNTMzMzMzMzMzMzMzLCA4My44MzEyNTkwODYzMzQpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4xMjQiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDExMi45MzMzMzMzMzMzMywgMTExLjc3NTAxMjExNTExKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE2MS4zMzMzMzMzMzMzMywgODMuODMxMjU5MDg2MzM0KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTUiIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIwOS43MzMzMzMzMzMzMywgMTExLjc3NTAxMjExNTExKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0zMi4yNjY2NjY2NjY2NjcsIDEzOS43MTg3NjUxNDM4OSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjAyIiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNTguMTMzMzMzMzMzMzMsIDEzOS43MTg3NjUxNDM4OSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA4OTMzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTYuMTMzMzMzMzMzMzMzLCAxNjcuNjYyNTE4MTcyNjcpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wNjMzMzMzMzMzMzMzMzMiIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDY0LjUzMzMzMzMzMzMzMywgMTM5LjcxODc2NTE0Mzg5KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTA2NjY2NjY2NjY2NjciIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDExMi45MzMzMzMzMzMzMywgMTY3LjY2MjUxODE3MjY3KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE2MS4zMzMzMzMzMzMzMywgMTM5LjcxODc2NTE0Mzg5KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDI4NjY2NjY2NjY2NjY3IiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyMDkuNzMzMzMzMzMzMzMsIDE2Ny42NjI1MTgxNzI2NykiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA5OCIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTMyLjI2NjY2NjY2NjY2NywgMTk1LjYwNjI3MTIwMTQ1KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDk4IiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNTguMTMzMzMzMzMzMzMsIDE5NS42MDYyNzEyMDE0NSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA5OCIgZmlsbD0iIzIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTYuMTMzMzMzMzMzMzMzLCAyMjMuNTUwMDI0MjMwMjIpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4xNDEzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjQuNTMzMzMzMzMzMzMzLCAxOTUuNjA2MjcxMjAxNDUpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4xMjQiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDExMi45MzMzMzMzMzMzMywgMjIzLjU1MDAyNDIzMDIyKSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE2MS4zMzMzMzMzMzMzMywgMTk1LjYwNjI3MTIwMTQ1KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDk4IiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyMDkuNzMzMzMzMzMzMzMsIDIyMy41NTAwMjQyMzAyMikiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjAyIiBmaWxsPSIjZGRkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMzIuMjY2NjY2NjY2NjY3LCAyNTEuNDkzNzc3MjU5KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiNkZGQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI1OC4xMzMzMzMzMzMzMywgMjUxLjQ5Mzc3NzI1OSkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjE1IiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNi4xMzMzMzMzMzMzMzMsIDI3OS40Mzc1MzAyODc3OCkiIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwyNy45NDM3NTMwMjg3NzgsMTYuMTMzMzMzMzMzMzMzLDAsNDguNCwwLDY0LjUzMzMzMzMzMzMzMywyNy45NDM3NTMwMjg3NzgsNDguNCw1NS44ODc1MDYwNTc1NTYsMTYuMTMzMzMzMzMzMzMzLDU1Ljg4NzUwNjA1NzU1NiwwLDI3Ljk0Mzc1MzAyODc3OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbC1vcGFjaXR5PSIwLjA4OTMzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjQuNTMzMzMzMzMzMzMzLCAyNTEuNDkzNzc3MjU5KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMTE1MzMzMzMzMzMzMzMiIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDExMi45MzMzMzMzMzMzMywgMjc5LjQzNzUzMDI4Nzc4KSIgLz48cG9seWxpbmUgcG9pbnRzPSIwLDI3Ljk0Mzc1MzAyODc3OCwxNi4xMzMzMzMzMzMzMzMsMCw0OC40LDAsNjQuNTMzMzMzMzMzMzMzLDI3Ljk0Mzc1MzAyODc3OCw0OC40LDU1Ljg4NzUwNjA1NzU1NiwxNi4xMzMzMzMzMzMzMzMsNTUuODg3NTA2MDU3NTU2LDAsMjcuOTQzNzUzMDI4Nzc4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsLW9wYWNpdHk9IjAuMDI4NjY2NjY2NjY2NjY3IiBmaWxsPSIjMjIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNjEuMzMzMzMzMzMzMzMsIDI1MS40OTM3NzcyNTkpIiAvPjxwb2x5bGluZSBwb2ludHM9IjAsMjcuOTQzNzUzMDI4Nzc4LDE2LjEzMzMzMzMzMzMzMywwLDQ4LjQsMCw2NC41MzMzMzMzMzMzMzMsMjcuOTQzNzUzMDI4Nzc4LDQ4LjQsNTUuODg3NTA2MDU3NTU2LDE2LjEzMzMzMzMzMzMzMyw1NS44ODc1MDYwNTc1NTYsMCwyNy45NDM3NTMwMjg3NzgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGwtb3BhY2l0eT0iMC4wOTgiIGZpbGw9IiMyMjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIwOS43MzMzMzMzMzMzMywgMjc5LjQzNzUzMDI4Nzc4KSIgLz48L3N2Zz4=&quot;);">
                                                                                        <span class="sr-only">Course image</span>
                                                                                    </div>
                                                                                </a>
                                                                                <div class="card-body pr-1 course-info-container" id="course-info-container-3989-10">
                                                                                    <div class="d-flex align-items-start">
                                                                                        <div class="w-100 text-truncate">
                                                                                            <div class="text-muted muted d-flex mb-1 flex-wrap">

                                                                                                <span class="sr-only">
                                                                                                    Course category
                                                                                                </span>
                                                                                                <span class="categoryname text-truncate">
                                                                                                    FAKULTI SAINS KOMPUTER DAN TEKNOLOGI MAKLUMAT
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="http://putrablastdk.upm.edu.my/course/view.php?id=3989" class="aalink coursename mr-2">


                                                                                                <span id="favorite-icon-3989-10" data-region="favourite-icon" data-course-id="3989">
                                                                                                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                                                                                                        <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                                                                                                        <span class="sr-only">Course is starred</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="sr-only">
                                                                                                    Course name
                                                                                                </span>

                                                                                                <span class="multiline">
                                                                                                    SSE5203-1: PENGURUSAN PROJEK BAGI PEMBINAAN ...
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>



                                                                                        <div class="ml-auto dropdown">
                                                                                            <button class="btn btn-link btn-icon icon-size-3 coursemenubtn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                <i class="icon fa fa-ellipsis-h fa-fw " aria-hidden="true"></i>
                                                                                                <span class="sr-only">
                                                                                                    Actions for current course SSE5203-1: PENGURUSAN PROJEK BAGI PEMBINAAN PERISIAN(PROJECT MANAGEMENT FOR SOFTWARE CONSTRUCTION)
                                                                                                </span>
                                                                                            </button>
                                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                                <a class="dropdown-item " href="#" data-action="add-favourite" data-course-id="3989" aria-controls="favorite-icon-3989-10">
                                                                                                    Star this course
                                                                                                    <div class="sr-only">
                                                                                                        Star for SSE5203-1: PENGURUSAN PROJEK BAGI PEMBINAAN PERISIAN(PROJECT MANAGEMENT FOR SOFTWARE CONSTRUCTION)
                                                                                                    </div>
                                                                                                </a>
                                                                                                <a class="dropdown-item hidden" href="#" data-action="remove-favourite" data-course-id="3989" aria-controls="favorite-icon-3989-10">
                                                                                                    Unstar this course
                                                                                                    <div class="sr-only">
                                                                                                        Remove star for SSE5203-1: PENGURUSAN PROJEK BAGI PEMBINAAN PERISIAN(PROJECT MANAGEMENT FOR SOFTWARE CONSTRUCTION)
                                                                                                    </div>
                                                                                                </a>
                                                                                                <a class="dropdown-item hidden" href="#" data-action="show-course" data-course-id="3989" aria-controls="favorite-icon-3989-10">
                                                                                                    Restore to view
                                                                                                    <div class="sr-only">
                                                                                                        Restore SSE5203-1: PENGURUSAN PROJEK BAGI PEMBINAAN PERISIAN(PROJECT MANAGEMENT FOR SOFTWARE CONSTRUCTION) to view
                                                                                                    </div>
                                                                                                </a>
                                                                                                <a class="dropdown-item " href="#" data-action="hide-course" data-course-id="3989" aria-controls="favorite-icon-3989-10">
                                                                                                    Remove from view
                                                                                                    <div class="sr-only">
                                                                                                        Remove SSE5203-1: PENGURUSAN PROJEK BAGI PEMBINAAN PERISIAN(PROJECT MANAGEMENT FOR SOFTWARE CONSTRUCTION) from view
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>


                                                                            <div class="card dashboard-card" role="listitem" data-region="course-content" data-course-id="4116">
                                                                                <a href="http://putrablastdk.upm.edu.my/course/view.php?id=4116" tabindex="-1">
                                                                                    <div class="card-img dashboard-card-img" style="background-image: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyODAiIGhlaWdodD0iMjgwIj48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2IoMTc4LCAxOTAsIDE5NSkiIC8+PGNpcmNsZSBjeD0iMCIgY3k9IjAiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjExNTMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMjgwIiBjeT0iMCIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTE1MzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIwIiBjeT0iMjgwIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMTUzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjI4MCIgY3k9IjI4MCIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTE1MzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSI0Ni42NjY2NjY2NjY2NjciIGN5PSIwIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNzI7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSI0Ni42NjY2NjY2NjY2NjciIGN5PSIyODAiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA3MjtzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjkzLjMzMzMzMzMzMzMzMyIgY3k9IjAiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjE1O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iOTMuMzMzMzMzMzMzMzMzIiBjeT0iMjgwIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xNTtzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjE0MCIgY3k9IjAiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAyO3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMTQwIiBjeT0iMjgwIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjtzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjE4Ni42NjY2NjY2NjY2NyIgY3k9IjAiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEwNjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMTg2LjY2NjY2NjY2NjY3IiBjeT0iMjgwIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMDY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjIzMy4zMzMzMzMzMzMzMyIgY3k9IjAiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAyO3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMjMzLjMzMzMzMzMzMzMzIiBjeT0iMjgwIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjtzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjAiIGN5PSI0Ni42NjY2NjY2NjY2NjciIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA2MzMzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjI4MCIgY3k9IjQ2LjY2NjY2NjY2NjY2NyIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDYzMzMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iNDYuNjY2NjY2NjY2NjY3IiBjeT0iNDYuNjY2NjY2NjY2NjY3IiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNzI7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSI5My4zMzMzMzMzMzMzMzMiIGN5PSI0Ni42NjY2NjY2NjY2NjciIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAzNzMzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjE0MCIgY3k9IjQ2LjY2NjY2NjY2NjY2NyIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDI4NjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMTg2LjY2NjY2NjY2NjY3IiBjeT0iNDYuNjY2NjY2NjY2NjY3IiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wMjg2NjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIyMzMuMzMzMzMzMzMzMzMiIGN5PSI0Ni42NjY2NjY2NjY2NjciIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEwNjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMCIgY3k9IjkzLjMzMzMzMzMzMzMzMyIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDI4NjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMjgwIiBjeT0iOTMuMzMzMzMzMzMzMzMzIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wMjg2NjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSI0Ni42NjY2NjY2NjY2NjciIGN5PSI5My4zMzMzMzMzMzMzMzMiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA2MzMzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjkzLjMzMzMzMzMzMzMzMyIgY3k9IjkzLjMzMzMzMzMzMzMzMyIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDgwNjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMTQwIiBjeT0iOTMuMzMzMzMzMzMzMzMzIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjtzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjE4Ni42NjY2NjY2NjY2NyIgY3k9IjkzLjMzMzMzMzMzMzMzMyIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDgwNjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMjMzLjMzMzMzMzMzMzMzIiBjeT0iOTMuMzMzMzMzMzMzMzMzIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wODA2NjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIwIiBjeT0iMTQwIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wODkzMzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIyODAiIGN5PSIxNDAiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA4OTMzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjQ2LjY2NjY2NjY2NjY2NyIgY3k9IjE0MCIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDcyO3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iOTMuMzMzMzMzMzMzMzMzIiBjeT0iMTQwIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNzI7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIxNDAiIGN5PSIxNDAiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEwNjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMTg2LjY2NjY2NjY2NjY3IiBjeT0iMTQwIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMDY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjIzMy4zMzMzMzMzMzMzMyIgY3k9IjE0MCIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTE1MzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIwIiBjeT0iMTg2LjY2NjY2NjY2NjY3IiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMTUzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjI4MCIgY3k9IjE4Ni42NjY2NjY2NjY2NyIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTE1MzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSI0Ni42NjY2NjY2NjY2NjciIGN5PSIxODYuNjY2NjY2NjY2NjciIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjE1O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iOTMuMzMzMzMzMzMzMzMzIiBjeT0iMTg2LjY2NjY2NjY2NjY3IiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjtzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjE0MCIgY3k9IjE4Ni42NjY2NjY2NjY2NyIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDgwNjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMTg2LjY2NjY2NjY2NjY3IiBjeT0iMTg2LjY2NjY2NjY2NjY3IiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNDY7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIyMzMuMzMzMzMzMzMzMzMiIGN5PSIxODYuNjY2NjY2NjY2NjciIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA4MDY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjAiIGN5PSIyMzMuMzMzMzMzMzMzMzMiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjE0MTMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMjgwIiBjeT0iMjMzLjMzMzMzMzMzMzMzIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xNDEzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjQ2LjY2NjY2NjY2NjY2NyIgY3k9IjIzMy4zMzMzMzMzMzMzMyIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDQ2O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iOTMuMzMzMzMzMzMzMzMzIiBjeT0iMjMzLjMzMzMzMzMzMzMzIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMzczMzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjExLjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIxNDAiIGN5PSIyMzMuMzMzMzMzMzMzMzMiIHI9IjQwLjgzMzMzMzMzMzMzMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjAyODY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjE4Ni42NjY2NjY2NjY2NyIgY3k9IjIzMy4zMzMzMzMzMzMzMyIgcj0iNDAuODMzMzMzMzMzMzMzIiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDQ2O3N0cm9rZS13aWR0aDoxMS42NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMjMzLjMzMzMzMzMzMzMzIiBjeT0iMjMzLjMzMzMzMzMzMzMzIiByPSI0MC44MzMzMzMzMzMzMzMiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xNDEzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6MTEuNjY2NjY2NjY2NjY3cHg7IiAvPjwvc3ZnPg==&quot;);">
                                                                                        <span class="sr-only">Course image</span>
                                                                                    </div>
                                                                                </a>
                                                                                <div class="card-body pr-1 course-info-container" id="course-info-container-4116-10">
                                                                                    <div class="d-flex align-items-start">
                                                                                        <div class="w-100 text-truncate">
                                                                                            <div class="text-muted muted d-flex mb-1 flex-wrap">

                                                                                                <span class="sr-only">
                                                                                                    Course category
                                                                                                </span>
                                                                                                <span class="categoryname text-truncate">
                                                                                                    FAKULTI SAINS KOMPUTER DAN TEKNOLOGI MAKLUMAT
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="http://putrablastdk.upm.edu.my/course/view.php?id=4116" class="aalink coursename mr-2">


                                                                                                <span id="favorite-icon-4116-10" data-region="favourite-icon" data-course-id="4116">
                                                                                                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                                                                                                        <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                                                                                                        <span class="sr-only">Course is starred</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="sr-only">
                                                                                                    Course name
                                                                                                </span>

                                                                                                <span class="multiline">
                                                                                                    SSE5210-1: KAEDAH EMPIRIKAL BAGI KEJURUTERAAN ...
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>



                                                                                        <div class="ml-auto dropdown">
                                                                                            <button class="btn btn-link btn-icon icon-size-3 coursemenubtn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                <i class="icon fa fa-ellipsis-h fa-fw " aria-hidden="true"></i>
                                                                                                <span class="sr-only">
                                                                                                    Actions for current course SSE5210-1: KAEDAH EMPIRIKAL BAGI KEJURUTERAAN PERISIAN(EMPIRICAL METHODS FOR SOFTWARE ENGINEERING)
                                                                                                </span>
                                                                                            </button>
                                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                                <a class="dropdown-item " href="#" data-action="add-favourite" data-course-id="4116" aria-controls="favorite-icon-4116-10">
                                                                                                    Star this course
                                                                                                    <div class="sr-only">
                                                                                                        Star for SSE5210-1: KAEDAH EMPIRIKAL BAGI KEJURUTERAAN PERISIAN(EMPIRICAL METHODS FOR SOFTWARE ENGINEERING)
                                                                                                    </div>
                                                                                                </a>
                                                                                                <a class="dropdown-item hidden" href="#" data-action="remove-favourite" data-course-id="4116" aria-controls="favorite-icon-4116-10">
                                                                                                    Unstar this course
                                                                                                    <div class="sr-only">
                                                                                                        Remove star for SSE5210-1: KAEDAH EMPIRIKAL BAGI KEJURUTERAAN PERISIAN(EMPIRICAL METHODS FOR SOFTWARE ENGINEERING)
                                                                                                    </div>
                                                                                                </a>
                                                                                                <a class="dropdown-item hidden" href="#" data-action="show-course" data-course-id="4116" aria-controls="favorite-icon-4116-10">
                                                                                                    Restore to view
                                                                                                    <div class="sr-only">
                                                                                                        Restore SSE5210-1: KAEDAH EMPIRIKAL BAGI KEJURUTERAAN PERISIAN(EMPIRICAL METHODS FOR SOFTWARE ENGINEERING) to view
                                                                                                    </div>
                                                                                                </a>
                                                                                                <a class="dropdown-item " href="#" data-action="hide-course" data-course-id="4116" aria-controls="favorite-icon-4116-10">
                                                                                                    Remove from view
                                                                                                    <div class="sr-only">
                                                                                                        Remove SSE5210-1: KAEDAH EMPIRIKAL BAGI KEJURUTERAAN PERISIAN(EMPIRICAL METHODS FOR SOFTWARE ENGINEERING) from view
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>


                                                                            <div class="card dashboard-card" role="listitem" data-region="course-content" data-course-id="4220">
                                                                                <a href="http://putrablastdk.upm.edu.my/course/view.php?id=4220" tabindex="-1">
                                                                                    <div class="card-img dashboard-card-img" style="background-image: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMTIiIGhlaWdodD0iMzEyIj48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2IoMTI5LCAyMzYsIDIzNikiIC8+PGNpcmNsZSBjeD0iMjYiIGN5PSIyNiIgcj0iMjEuNjY2NjY2NjY2NjY3IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTA2NjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjguNjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIyNiIgY3k9IjI2IiByPSIxMC44MzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNzIiIC8+PGNpcmNsZSBjeD0iNzgiIGN5PSIyNiIgcj0iMjEuNjY2NjY2NjY2NjY3IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDgwNjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDo4LjY2NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iNzgiIGN5PSIyNiIgcj0iMTAuODMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTI0IiAvPjxjaXJjbGUgY3g9IjEzMCIgY3k9IjI2IiByPSIyMS42NjY2NjY2NjY2NjciIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMzczMzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjguNjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIxMzAiIGN5PSIyNiIgcj0iMTAuODMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDk4IiAvPjxjaXJjbGUgY3g9IjE4MiIgY3k9IjI2IiByPSIyMS42NjY2NjY2NjY2NjciIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNzI7c3Ryb2tlLXdpZHRoOjguNjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIxODIiIGN5PSIyNiIgcj0iMTAuODMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDIiIC8+PGNpcmNsZSBjeD0iMjM0IiBjeT0iMjYiIHI9IjIxLjY2NjY2NjY2NjY2NyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjExNTMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDo4LjY2NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMjM0IiBjeT0iMjYiIHI9IjEwLjgzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjAzNzMzMzMzMzMzMzMzMyIgLz48Y2lyY2xlIGN4PSIyODYiIGN5PSIyNiIgcj0iMjEuNjY2NjY2NjY2NjY3IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTA2NjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjguNjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIyODYiIGN5PSIyNiIgcj0iMTAuODMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTE1MzMzMzMzMzMzMzMiIC8+PGNpcmNsZSBjeD0iMjYiIGN5PSI3OCIgcj0iMjEuNjY2NjY2NjY2NjY3IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDg5MzMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDo4LjY2NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMjYiIGN5PSI3OCIgcj0iMTAuODMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDU0NjY2NjY2NjY2NjY3IiAvPjxjaXJjbGUgY3g9Ijc4IiBjeT0iNzgiIHI9IjIxLjY2NjY2NjY2NjY2NyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA3MjtzdHJva2Utd2lkdGg6OC42NjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9Ijc4IiBjeT0iNzgiIHI9IjEwLjgzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzIiAvPjxjaXJjbGUgY3g9IjEzMCIgY3k9Ijc4IiByPSIyMS42NjY2NjY2NjY2NjciIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xNDEzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6OC42NjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjEzMCIgY3k9Ijc4IiByPSIxMC44MzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNzIiIC8+PGNpcmNsZSBjeD0iMTgyIiBjeT0iNzgiIHI9IjIxLjY2NjY2NjY2NjY2NyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA4OTMzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6OC42NjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjE4MiIgY3k9Ijc4IiByPSIxMC44MzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4xNDEzMzMzMzMzMzMzMyIgLz48Y2lyY2xlIGN4PSIyMzQiIGN5PSI3OCIgcj0iMjEuNjY2NjY2NjY2NjY3IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDk4O3N0cm9rZS13aWR0aDo4LjY2NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMjM0IiBjeT0iNzgiIHI9IjEwLjgzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjEzMjY2NjY2NjY2NjY3IiAvPjxjaXJjbGUgY3g9IjI4NiIgY3k9Ijc4IiByPSIyMS42NjY2NjY2NjY2NjciIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMzI2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6OC42NjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjI4NiIgY3k9Ijc4IiByPSIxMC44MzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wODkzMzMzMzMzMzMzMzMiIC8+PGNpcmNsZSBjeD0iMjYiIGN5PSIxMzAiIHI9IjIxLjY2NjY2NjY2NjY2NyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA1NDY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6OC42NjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjI2IiBjeT0iMTMwIiByPSIxMC44MzMzMzMzMzMzMzMiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wNjMzMzMzMzMzMzMzMzMiIC8+PGNpcmNsZSBjeD0iNzgiIGN5PSIxMzAiIHI9IjIxLjY2NjY2NjY2NjY2NyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAzNzMzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6OC42NjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9Ijc4IiBjeT0iMTMwIiByPSIxMC44MzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNTQ2NjY2NjY2NjY2NjciIC8+PGNpcmNsZSBjeD0iMTMwIiBjeT0iMTMwIiByPSIyMS42NjY2NjY2NjY2NjciIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNzI7c3Ryb2tlLXdpZHRoOjguNjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIxMzAiIGN5PSIxMzAiIHI9IjEwLjgzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjE0MTMzMzMzMzMzMzMzIiAvPjxjaXJjbGUgY3g9IjE4MiIgY3k9IjEzMCIgcj0iMjEuNjY2NjY2NjY2NjY3IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDg5MzMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDo4LjY2NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMTgyIiBjeT0iMTMwIiByPSIxMC44MzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNTQ2NjY2NjY2NjY2NjciIC8+PGNpcmNsZSBjeD0iMjM0IiBjeT0iMTMwIiByPSIyMS42NjY2NjY2NjY2NjciIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjtzdHJva2Utd2lkdGg6OC42NjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjIzNCIgY3k9IjEzMCIgcj0iMTAuODMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTE1MzMzMzMzMzMzMzMiIC8+PGNpcmNsZSBjeD0iMjg2IiBjeT0iMTMwIiByPSIyMS42NjY2NjY2NjY2NjciIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xNTtzdHJva2Utd2lkdGg6OC42NjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjI4NiIgY3k9IjEzMCIgcj0iMTAuODMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDYzMzMzMzMzMzMzMzMzIiAvPjxjaXJjbGUgY3g9IjI2IiBjeT0iMTgyIiByPSIyMS42NjY2NjY2NjY2NjciIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjtzdHJva2Utd2lkdGg6OC42NjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjI2IiBjeT0iMTgyIiByPSIxMC44MzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNTQ2NjY2NjY2NjY2NjciIC8+PGNpcmNsZSBjeD0iNzgiIGN5PSIxODIiIHI9IjIxLjY2NjY2NjY2NjY2NyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjE0MTMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDo4LjY2NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iNzgiIGN5PSIxODIiIHI9IjEwLjgzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjEwNjY2NjY2NjY2NjY3IiAvPjxjaXJjbGUgY3g9IjEzMCIgY3k9IjE4MiIgcj0iMjEuNjY2NjY2NjY2NjY3IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTA2NjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjguNjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIxMzAiIGN5PSIxODIiIHI9IjEwLjgzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjE0MTMzMzMzMzMzMzMzIiAvPjxjaXJjbGUgY3g9IjE4MiIgY3k9IjE4MiIgcj0iMjEuNjY2NjY2NjY2NjY3IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDU0NjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDo4LjY2NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMTgyIiBjeT0iMTgyIiByPSIxMC44MzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wMiIgLz48Y2lyY2xlIGN4PSIyMzQiIGN5PSIxODIiIHI9IjIxLjY2NjY2NjY2NjY2NyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA2MzMzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6OC42NjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjIzNCIgY3k9IjE4MiIgcj0iMTAuODMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTUiIC8+PGNpcmNsZSBjeD0iMjg2IiBjeT0iMTgyIiByPSIyMS42NjY2NjY2NjY2NjciIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMTUzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6OC42NjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjI4NiIgY3k9IjE4MiIgcj0iMTAuODMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDIiIC8+PGNpcmNsZSBjeD0iMjYiIGN5PSIyMzQiIHI9IjIxLjY2NjY2NjY2NjY2NyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA1NDY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6OC42NjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjI2IiBjeT0iMjM0IiByPSIxMC44MzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wODkzMzMzMzMzMzMzMzMiIC8+PGNpcmNsZSBjeD0iNzgiIGN5PSIyMzQiIHI9IjIxLjY2NjY2NjY2NjY2NyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjE0MTMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDo4LjY2NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iNzgiIGN5PSIyMzQiIHI9IjEwLjgzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA3MiIgLz48Y2lyY2xlIGN4PSIxMzAiIGN5PSIyMzQiIHI9IjIxLjY2NjY2NjY2NjY2NyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA1NDY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6OC42NjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjEzMCIgY3k9IjIzNCIgcj0iMTAuODMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDM3MzMzMzMzMzMzMzMzIiAvPjxjaXJjbGUgY3g9IjE4MiIgY3k9IjIzNCIgcj0iMjEuNjY2NjY2NjY2NjY3IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDYzMzMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDo4LjY2NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMTgyIiBjeT0iMjM0IiByPSIxMC44MzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNTQ2NjY2NjY2NjY2NjciIC8+PGNpcmNsZSBjeD0iMjM0IiBjeT0iMjM0IiByPSIyMS42NjY2NjY2NjY2NjciIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wODkzMzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjguNjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIyMzQiIGN5PSIyMzQiIHI9IjEwLjgzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjEzMjY2NjY2NjY2NjY3IiAvPjxjaXJjbGUgY3g9IjI4NiIgY3k9IjIzNCIgcj0iMjEuNjY2NjY2NjY2NjY3IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTMyNjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjguNjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIyODYiIGN5PSIyMzQiIHI9IjEwLjgzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA5OCIgLz48Y2lyY2xlIGN4PSIyNiIgY3k9IjI4NiIgcj0iMjEuNjY2NjY2NjY2NjY3IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTQxMzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjguNjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIyNiIgY3k9IjI4NiIgcj0iMTAuODMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDg5MzMzMzMzMzMzMzMzIiAvPjxjaXJjbGUgY3g9Ijc4IiBjeT0iMjg2IiByPSIyMS42NjY2NjY2NjY2NjciIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNzI7c3Ryb2tlLXdpZHRoOjguNjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSI3OCIgY3k9IjI4NiIgcj0iMTAuODMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMiIC8+PGNpcmNsZSBjeD0iMTMwIiBjeT0iMjg2IiByPSIyMS42NjY2NjY2NjY2NjciIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMTUzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6OC42NjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjEzMCIgY3k9IjI4NiIgcj0iMTAuODMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDcyIiAvPjxjaXJjbGUgY3g9IjE4MiIgY3k9IjI4NiIgcj0iMjEuNjY2NjY2NjY2NjY3IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDU0NjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDo4LjY2NjY2NjY2NjY2NjdweDsiIC8+PGNpcmNsZSBjeD0iMTgyIiBjeT0iMjg2IiByPSIxMC44MzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wODkzMzMzMzMzMzMzMzMiIC8+PGNpcmNsZSBjeD0iMjM0IiBjeT0iMjg2IiByPSIyMS42NjY2NjY2NjY2NjciIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMTUzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6OC42NjY2NjY2NjY2NjY3cHg7IiAvPjxjaXJjbGUgY3g9IjIzNCIgY3k9IjI4NiIgcj0iMTAuODMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTA2NjY2NjY2NjY2NjciIC8+PGNpcmNsZSBjeD0iMjg2IiBjeT0iMjg2IiByPSIyMS42NjY2NjY2NjY2NjciIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMzczMzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjguNjY2NjY2NjY2NjY2N3B4OyIgLz48Y2lyY2xlIGN4PSIyODYiIGN5PSIyODYiIHI9IjEwLjgzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzIiAvPjwvc3ZnPg==&quot;);">
                                                                                        <span class="sr-only">Course image</span>
                                                                                    </div>
                                                                                </a>
                                                                                <div class="card-body pr-1 course-info-container" id="course-info-container-4220-10">
                                                                                    <div class="d-flex align-items-start">
                                                                                        <div class="w-100 text-truncate">
                                                                                            <div class="text-muted muted d-flex mb-1 flex-wrap">

                                                                                                <span class="sr-only">
                                                                                                    Course category
                                                                                                </span>
                                                                                                <span class="categoryname text-truncate">
                                                                                                    FAKULTI SAINS KOMPUTER DAN TEKNOLOGI MAKLUMAT
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="http://putrablastdk.upm.edu.my/course/view.php?id=4220" class="aalink coursename mr-2">


                                                                                                <span id="favorite-icon-4220-10" data-region="favourite-icon" data-course-id="4220">
                                                                                                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                                                                                                        <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                                                                                                        <span class="sr-only">Course is starred</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="sr-only">
                                                                                                    Course name
                                                                                                </span>

                                                                                                <span class="multiline">
                                                                                                    SSE5302-1: KEJURUTERAAN KEPERLUAN(REQUIREMENT ...
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>



                                                                                        <div class="ml-auto dropdown">
                                                                                            <button class="btn btn-link btn-icon icon-size-3 coursemenubtn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                <i class="icon fa fa-ellipsis-h fa-fw " aria-hidden="true"></i>
                                                                                                <span class="sr-only">
                                                                                                    Actions for current course SSE5302-1: KEJURUTERAAN KEPERLUAN(REQUIREMENT ENGINEERING)
                                                                                                </span>
                                                                                            </button>
                                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                                <a class="dropdown-item " href="#" data-action="add-favourite" data-course-id="4220" aria-controls="favorite-icon-4220-10">
                                                                                                    Star this course
                                                                                                    <div class="sr-only">
                                                                                                        Star for SSE5302-1: KEJURUTERAAN KEPERLUAN(REQUIREMENT ENGINEERING)
                                                                                                    </div>
                                                                                                </a>
                                                                                                <a class="dropdown-item hidden" href="#" data-action="remove-favourite" data-course-id="4220" aria-controls="favorite-icon-4220-10">
                                                                                                    Unstar this course
                                                                                                    <div class="sr-only">
                                                                                                        Remove star for SSE5302-1: KEJURUTERAAN KEPERLUAN(REQUIREMENT ENGINEERING)
                                                                                                    </div>
                                                                                                </a>
                                                                                                <a class="dropdown-item hidden" href="#" data-action="show-course" data-course-id="4220" aria-controls="favorite-icon-4220-10">
                                                                                                    Restore to view
                                                                                                    <div class="sr-only">
                                                                                                        Restore SSE5302-1: KEJURUTERAAN KEPERLUAN(REQUIREMENT ENGINEERING) to view
                                                                                                    </div>
                                                                                                </a>
                                                                                                <a class="dropdown-item " href="#" data-action="hide-course" data-course-id="4220" aria-controls="favorite-icon-4220-10">
                                                                                                    Remove from view
                                                                                                    <div class="sr-only">
                                                                                                        Remove SSE5302-1: KEJURUTERAAN KEPERLUAN(REQUIREMENT ENGINEERING) from view
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>


                                                                            <div class="card dashboard-card" role="listitem" data-region="course-content" data-course-id="4430">
                                                                                <a href="http://putrablastdk.upm.edu.my/course/view.php?id=4430" tabindex="-1">
                                                                                    <div class="card-img dashboard-card-img" style="background-image: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MzAiIGhlaWdodD0iNTMwIj48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2IoMTI5LCAyMzYsIDIzNikiIC8+PGNpcmNsZSBjeD0iMCIgY3k9IjAiIHI9Ijg4LjMzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMzI2NjY2NjY2NjY2NzsiIC8+PGNpcmNsZSBjeD0iNTMwIiBjeT0iMCIgcj0iODguMzMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjEzMjY2NjY2NjY2NjY3OyIgLz48Y2lyY2xlIGN4PSIwIiBjeT0iNTMwIiByPSI4OC4zMzMzMzMzMzMzMzMiIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTMyNjY2NjY2NjY2Njc7IiAvPjxjaXJjbGUgY3g9IjUzMCIgY3k9IjUzMCIgcj0iODguMzMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjEzMjY2NjY2NjY2NjY3OyIgLz48Y2lyY2xlIGN4PSI4OC4zMzMzMzMzMzMzMzMiIGN5PSIwIiByPSI4OC4zMzMzMzMzMzMzMzMiIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDgwNjY2NjY2NjY2NjY3OyIgLz48Y2lyY2xlIGN4PSI4OC4zMzMzMzMzMzMzMzMiIGN5PSI1MzAiIHI9Ijg4LjMzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wODA2NjY2NjY2NjY2Njc7IiAvPjxjaXJjbGUgY3g9IjE3Ni42NjY2NjY2NjY2NyIgY3k9IjAiIHI9Ijg4LjMzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNjMzMzMzMzMzMzMzMzM7IiAvPjxjaXJjbGUgY3g9IjE3Ni42NjY2NjY2NjY2NyIgY3k9IjUzMCIgcj0iODguMzMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA2MzMzMzMzMzMzMzMzMzsiIC8+PGNpcmNsZSBjeD0iMjY1IiBjeT0iMCIgcj0iODguMzMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA4OTMzMzMzMzMzMzMzMzsiIC8+PGNpcmNsZSBjeD0iMjY1IiBjeT0iNTMwIiByPSI4OC4zMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDg5MzMzMzMzMzMzMzMzOyIgLz48Y2lyY2xlIGN4PSIzNTMuMzMzMzMzMzMzMzMiIGN5PSIwIiByPSI4OC4zMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDg5MzMzMzMzMzMzMzMzOyIgLz48Y2lyY2xlIGN4PSIzNTMuMzMzMzMzMzMzMzMiIGN5PSI1MzAiIHI9Ijg4LjMzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wODkzMzMzMzMzMzMzMzM7IiAvPjxjaXJjbGUgY3g9IjQ0MS42NjY2NjY2NjY2NyIgY3k9IjAiIHI9Ijg4LjMzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNDY7IiAvPjxjaXJjbGUgY3g9IjQ0MS42NjY2NjY2NjY2NyIgY3k9IjUzMCIgcj0iODguMzMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA0NjsiIC8+PGNpcmNsZSBjeD0iMCIgY3k9Ijg4LjMzMzMzMzMzMzMzMyIgcj0iODguMzMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjE1OyIgLz48Y2lyY2xlIGN4PSI1MzAiIGN5PSI4OC4zMzMzMzMzMzMzMzMiIHI9Ijg4LjMzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xNTsiIC8+PGNpcmNsZSBjeD0iODguMzMzMzMzMzMzMzMzIiBjeT0iODguMzMzMzMzMzMzMzMzIiByPSI4OC4zMzMzMzMzMzMzMzMiIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTE1MzMzMzMzMzMzMzM7IiAvPjxjaXJjbGUgY3g9IjE3Ni42NjY2NjY2NjY2NyIgY3k9Ijg4LjMzMzMzMzMzMzMzMyIgcj0iODguMzMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAyOyIgLz48Y2lyY2xlIGN4PSIyNjUiIGN5PSI4OC4zMzMzMzMzMzMzMzMiIHI9Ijg4LjMzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNjMzMzMzMzMzMzMzMzM7IiAvPjxjaXJjbGUgY3g9IjM1My4zMzMzMzMzMzMzMyIgY3k9Ijg4LjMzMzMzMzMzMzMzMyIgcj0iODguMzMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA5ODsiIC8+PGNpcmNsZSBjeD0iNDQxLjY2NjY2NjY2NjY3IiBjeT0iODguMzMzMzMzMzMzMzMzIiByPSI4OC4zMzMzMzMzMzMzMzMiIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDQ2OyIgLz48Y2lyY2xlIGN4PSIwIiBjeT0iMTc2LjY2NjY2NjY2NjY3IiByPSI4OC4zMzMzMzMzMzMzMzMiIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDI4NjY2NjY2NjY2NjY3OyIgLz48Y2lyY2xlIGN4PSI1MzAiIGN5PSIxNzYuNjY2NjY2NjY2NjciIHI9Ijg4LjMzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wMjg2NjY2NjY2NjY2Njc7IiAvPjxjaXJjbGUgY3g9Ijg4LjMzMzMzMzMzMzMzMyIgY3k9IjE3Ni42NjY2NjY2NjY2NyIgcj0iODguMzMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAzNzMzMzMzMzMzMzMzMzsiIC8+PGNpcmNsZSBjeD0iMTc2LjY2NjY2NjY2NjY3IiBjeT0iMTc2LjY2NjY2NjY2NjY3IiByPSI4OC4zMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTI0OyIgLz48Y2lyY2xlIGN4PSIyNjUiIGN5PSIxNzYuNjY2NjY2NjY2NjciIHI9Ijg4LjMzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMjQ7IiAvPjxjaXJjbGUgY3g9IjM1My4zMzMzMzMzMzMzMyIgY3k9IjE3Ni42NjY2NjY2NjY2NyIgcj0iODguMzMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjE1OyIgLz48Y2lyY2xlIGN4PSI0NDEuNjY2NjY2NjY2NjciIGN5PSIxNzYuNjY2NjY2NjY2NjciIHI9Ijg4LjMzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNTQ2NjY2NjY2NjY2Njc7IiAvPjxjaXJjbGUgY3g9IjAiIGN5PSIyNjUiIHI9Ijg4LjMzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNzI7IiAvPjxjaXJjbGUgY3g9IjUzMCIgY3k9IjI2NSIgcj0iODguMzMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA3MjsiIC8+PGNpcmNsZSBjeD0iODguMzMzMzMzMzMzMzMzIiBjeT0iMjY1IiByPSI4OC4zMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDcyOyIgLz48Y2lyY2xlIGN4PSIxNzYuNjY2NjY2NjY2NjciIGN5PSIyNjUiIHI9Ijg4LjMzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wMjg2NjY2NjY2NjY2Njc7IiAvPjxjaXJjbGUgY3g9IjI2NSIgY3k9IjI2NSIgcj0iODguMzMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjE1OyIgLz48Y2lyY2xlIGN4PSIzNTMuMzMzMzMzMzMzMzMiIGN5PSIyNjUiIHI9Ijg4LjMzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNjMzMzMzMzMzMzMzMzM7IiAvPjxjaXJjbGUgY3g9IjQ0MS42NjY2NjY2NjY2NyIgY3k9IjI2NSIgcj0iODguMzMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjAyODY2NjY2NjY2NjY2NzsiIC8+PGNpcmNsZSBjeD0iMCIgY3k9IjM1My4zMzMzMzMzMzMzMyIgcj0iODguMzMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA2MzMzMzMzMzMzMzMzMzsiIC8+PGNpcmNsZSBjeD0iNTMwIiBjeT0iMzUzLjMzMzMzMzMzMzMzIiByPSI4OC4zMzMzMzMzMzMzMzMiIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDYzMzMzMzMzMzMzMzMzOyIgLz48Y2lyY2xlIGN4PSI4OC4zMzMzMzMzMzMzMzMiIGN5PSIzNTMuMzMzMzMzMzMzMzMiIHI9Ijg4LjMzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wODA2NjY2NjY2NjY2Njc7IiAvPjxjaXJjbGUgY3g9IjE3Ni42NjY2NjY2NjY2NyIgY3k9IjM1My4zMzMzMzMzMzMzMyIgcj0iODguMzMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA4OTMzMzMzMzMzMzMzMzsiIC8+PGNpcmNsZSBjeD0iMjY1IiBjeT0iMzUzLjMzMzMzMzMzMzMzIiByPSI4OC4zMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTQxMzMzMzMzMzMzMzM7IiAvPjxjaXJjbGUgY3g9IjM1My4zMzMzMzMzMzMzMyIgY3k9IjM1My4zMzMzMzMzMzMzMyIgcj0iODguMzMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjExNTMzMzMzMzMzMzMzOyIgLz48Y2lyY2xlIGN4PSI0NDEuNjY2NjY2NjY2NjciIGN5PSIzNTMuMzMzMzMzMzMzMzMiIHI9Ijg4LjMzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNjMzMzMzMzMzMzMzMzM7IiAvPjxjaXJjbGUgY3g9IjAiIGN5PSI0NDEuNjY2NjY2NjY2NjciIHI9Ijg4LjMzMzMzMzMzMzMzMyIgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wODkzMzMzMzMzMzMzMzM7IiAvPjxjaXJjbGUgY3g9IjUzMCIgY3k9IjQ0MS42NjY2NjY2NjY2NyIgcj0iODguMzMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA4OTMzMzMzMzMzMzMzMzsiIC8+PGNpcmNsZSBjeD0iODguMzMzMzMzMzMzMzMzIiBjeT0iNDQxLjY2NjY2NjY2NjY3IiByPSI4OC4zMzMzMzMzMzMzMzMiIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTU7IiAvPjxjaXJjbGUgY3g9IjE3Ni42NjY2NjY2NjY2NyIgY3k9IjQ0MS42NjY2NjY2NjY2NyIgcj0iODguMzMzMzMzMzMzMzMzIiBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjE1OyIgLz48Y2lyY2xlIGN4PSIyNjUiIGN5PSI0NDEuNjY2NjY2NjY2NjciIHI9Ijg4LjMzMzMzMzMzMzMzMyIgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xNTsiIC8+PGNpcmNsZSBjeD0iMzUzLjMzMzMzMzMzMzMzIiBjeT0iNDQxLjY2NjY2NjY2NjY3IiByPSI4OC4zMzMzMzMzMzMzMzMiIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTA2NjY2NjY2NjY2Njc7IiAvPjxjaXJjbGUgY3g9IjQ0MS42NjY2NjY2NjY2NyIgY3k9IjQ0MS42NjY2NjY2NjY2NyIgcj0iODguMzMzMzMzMzMzMzMzIiBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA3MjsiIC8+PC9zdmc+&quot;);">
                                                                                        <span class="sr-only">Course image</span>
                                                                                    </div>
                                                                                </a>
                                                                                <div class="card-body pr-1 course-info-container" id="course-info-container-4430-10">
                                                                                    <div class="d-flex align-items-start">
                                                                                        <div class="w-100 text-truncate">
                                                                                            <div class="text-muted muted d-flex mb-1 flex-wrap">

                                                                                                <span class="sr-only">
                                                                                                    Course category
                                                                                                </span>
                                                                                                <span class="categoryname text-truncate">
                                                                                                    FAKULTI SAINS KOMPUTER DAN TEKNOLOGI MAKLUMAT
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="http://putrablastdk.upm.edu.my/course/view.php?id=4430" class="aalink coursename mr-2">


                                                                                                <span id="favorite-icon-4430-10" data-region="favourite-icon" data-course-id="4430">
                                                                                                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                                                                                                        <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                                                                                                        <span class="sr-only">Course is starred</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="sr-only">
                                                                                                    Course name
                                                                                                </span>

                                                                                                <span class="multiline">
                                                                                                    SSE5988-1: PROJEK(PROJECT)
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>



                                                                                        <div class="ml-auto dropdown">
                                                                                            <button class="btn btn-link btn-icon icon-size-3 coursemenubtn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                <i class="icon fa fa-ellipsis-h fa-fw " aria-hidden="true"></i>
                                                                                                <span class="sr-only">
                                                                                                    Actions for current course SSE5988-1: PROJEK(PROJECT)
                                                                                                </span>
                                                                                            </button>
                                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                                <a class="dropdown-item " href="#" data-action="add-favourite" data-course-id="4430" aria-controls="favorite-icon-4430-10">
                                                                                                    Star this course
                                                                                                    <div class="sr-only">
                                                                                                        Star for SSE5988-1: PROJEK(PROJECT)
                                                                                                    </div>
                                                                                                </a>
                                                                                                <a class="dropdown-item hidden" href="#" data-action="remove-favourite" data-course-id="4430" aria-controls="favorite-icon-4430-10">
                                                                                                    Unstar this course
                                                                                                    <div class="sr-only">
                                                                                                        Remove star for SSE5988-1: PROJEK(PROJECT)
                                                                                                    </div>
                                                                                                </a>
                                                                                                <a class="dropdown-item hidden" href="#" data-action="show-course" data-course-id="4430" aria-controls="favorite-icon-4430-10">
                                                                                                    Restore to view
                                                                                                    <div class="sr-only">
                                                                                                        Restore SSE5988-1: PROJEK(PROJECT) to view
                                                                                                    </div>
                                                                                                </a>
                                                                                                <a class="dropdown-item " href="#" data-action="hide-course" data-course-id="4430" aria-controls="favorite-icon-4430-10">
                                                                                                    Remove from view
                                                                                                    <div class="sr-only">
                                                                                                        Remove SSE5988-1: PROJEK(PROJECT) from view
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-1">


                                                                    <div data-region="paging-control-container" class="d-flex">

                                                                        <nav id="paging-bar-1" class="hidden" data-region="paging-bar" data-ignore-control-while-loading="true" data-hide-control-on-single-page="true" data-active-page-number="1" data-items-per-page="0" aria-label="Pagination navigation" data-aria-label-components-pagination-item="pagedcontentnavigationitem, core" data-aria-label-components-pagination-active-item="pagedcontentnavigationactiveitem, core" data-last-page-number="1">

                                                                            <ul class="pagination mb-0">


                                                                                <li class="page-item disabled" data-region="page-item" data-control="previous" aria-disabled="true">

                                                                                    <a href="#" class="page-link" data-region="page-link" aria-label="Previous page">

                                                                                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                                                                                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                                                                                    </a>
                                                                                </li>


                                                                                <li class="page-item disabled" data-region="page-item" data-control="next" aria-disabled="true">

                                                                                    <a href="#" class="page-link" data-region="page-link" aria-label="Next page">

                                                                                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                                                                                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </nav>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="footer"></div>

                                            </div>

                                        </div>

                                    </section>

                                    <span id="sb-14"></span>
                                </aside>
                            </div>


                        </section>
                    </div>
                    <div class="columnleft blockcolumn  has-blocks ">
                        <section data-region="blocks-column" class="hidden-print" aria-label="Blocks">
                            <aside id="block-region-side-pre" class="block-region" data-blockregion="side-pre" data-droptarget="1">
                                <a href="#sb-1" class="sr-only sr-only-focusable">Skip Navigation</a>

                                <section id="inst15042" class=" block_navigation block  card mb-3" role="navigation" data-block="navigation" aria-labelledby="instance-15042-header">

                                    <div class="card-body p-3">

                                        <h5 id="instance-15042-header" class="card-title d-inline">Navigation</h5>


                                        <div class="card-text content mt-3">
                                            <ul class="block_tree list" role="tree" data-ajax-loader="block_navigation/nav_loader"><li class="type_unknown depth_1 contains_branch current_branch" aria-labelledby="label_1_1" tabindex="-1"><p class="tree_item branch active_tree_node navigation_node" role="treeitem" aria-expanded="true" aria-owns="random63970cb1bd4ac2_group" data-collapsible="false" tabindex="0" aria-selected="true"><a tabindex="-1" id="label_1_1" href="http://putrablastdk.upm.edu.my/my/">Dashboard</a></p><ul id="random63970cb1bd4ac2_group" role="group" tabindex="-1"><li class="type_setting depth_2 item_with_icon" aria-labelledby="label_2_2" tabindex="-1"><p class="tree_item hasicon" role="treeitem" tabindex="-1" aria-selected="false"><a tabindex="-1" id="label_2_2" href="http://putrablastdk.upm.edu.my/?redirect=0"><i class="icon fa fa-home fa-fw navicon" aria-hidden="true" tabindex="-1"></i><span class="item-content-wrap" tabindex="-1">Site home</span></a></p></li><li class="type_course depth_2 contains_branch" aria-labelledby="label_2_3" tabindex="-1"><p class="tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random63970cb1bd4ac4_group" tabindex="-1" aria-selected="false"><span tabindex="-1" id="label_2_3" title="PutraBLASTDK sesi 1, 2022/2023">Site pages</span></p><ul id="random63970cb1bd4ac4_group" role="group" aria-hidden="true" tabindex="-1"><li class="type_unknown depth_3 item_with_icon" aria-labelledby="label_3_5" tabindex="-1"><p class="tree_item hasicon" role="treeitem" tabindex="-1" aria-selected="false"><a tabindex="-1" id="label_3_5" href="http://putrablastdk.upm.edu.my/blog/index.php"><i class="icon fa fa-fw fa-fw navicon" aria-hidden="true" tabindex="-1"></i><span class="item-content-wrap" tabindex="-1">Site blogs</span></a></p></li><li class="type_custom depth_3 item_with_icon" aria-labelledby="label_3_6" tabindex="-1"><p class="tree_item hasicon" role="treeitem" tabindex="-1" aria-selected="false"><a tabindex="-1" id="label_3_6" href="http://putrablastdk.upm.edu.my/badges/view.php?type=1"><i class="icon fa fa-fw fa-fw navicon" aria-hidden="true" tabindex="-1"></i><span class="item-content-wrap" tabindex="-1">Site badges</span></a></p></li><li class="type_setting depth_3 item_with_icon" aria-labelledby="label_3_7" tabindex="-1"><p class="tree_item hasicon" role="treeitem" tabindex="-1" aria-selected="false"><a tabindex="-1" id="label_3_7" href="http://putrablastdk.upm.edu.my/tag/search.php"><i class="icon fa fa-fw fa-fw navicon" aria-hidden="true" tabindex="-1"></i><span class="item-content-wrap" tabindex="-1">Tags</span></a></p></li><li class="type_custom depth_3 item_with_icon" aria-labelledby="label_3_8" tabindex="-1"><p class="tree_item hasicon" role="treeitem" tabindex="-1" aria-selected="false"><a tabindex="-1" id="label_3_8" href="http://putrablastdk.upm.edu.my/calendar/view.php?view=month"><i class="icon fa fa-calendar fa-fw navicon" aria-hidden="true" tabindex="-1"></i><span class="item-content-wrap" tabindex="-1">Calendar</span></a></p></li><li class="type_activity depth_3 item_with_icon" aria-labelledby="label_3_10" tabindex="-1"><p class="tree_item hasicon" role="treeitem" tabindex="-1" aria-selected="false"><a tabindex="-1" id="label_3_10" title="Forum" href="http://putrablastdk.upm.edu.my/mod/forum/view.php?id=32863"><img class="icon navicon" alt="Forum" title="Forum" src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/forum/1668789993/icon" tabindex="-1"><span class="item-content-wrap" tabindex="-1">Site announcements</span></a></p></li></ul></li><li class="type_system depth_2 contains_branch" aria-labelledby="label_2_11" tabindex="-1"><p class="tree_item branch canexpand" role="treeitem" aria-expanded="true" aria-owns="random63970cb1bd4ac10_group" tabindex="-1" aria-selected="false"><span tabindex="-1" id="label_2_11">My courses</span></p><ul id="random63970cb1bd4ac10_group" role="group" tabindex="-1"><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_12" tabindex="-1"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_4430" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_4430" data-node-key="4430" data-node-type="20" tabindex="-1" aria-selected="false"><a tabindex="-1" id="label_3_12" title="SSE5988-1: PROJEK(PROJECT)" href="http://putrablastdk.upm.edu.my/course/view.php?id=4430">SSE5988-1</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_13" tabindex="-1"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_4220" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_4220" data-node-key="4220" data-node-type="20" tabindex="-1" aria-selected="false"><a tabindex="-1" id="label_3_13" title="SSE5302-1: KEJURUTERAAN KEPERLUAN(REQUIREMENT ENGINEERING)" href="http://putrablastdk.upm.edu.my/course/view.php?id=4220">SSE5302-1</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_14" tabindex="-1"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_4116" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_4116" data-node-key="4116" data-node-type="20" tabindex="-1" aria-selected="false"><a tabindex="-1" id="label_3_14" title="SSE5210-1: KAEDAH EMPIRIKAL BAGI KEJURUTERAAN PERISIAN(EMPIRICAL METHODS FOR SOFTWARE ENGINEERING)" href="http://putrablastdk.upm.edu.my/course/view.php?id=4116">SSE5210-1</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_15" tabindex="-1"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_3989" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_3989" data-node-key="3989" data-node-type="20" tabindex="-1" aria-selected="false"><a tabindex="-1" id="label_3_15" title="SSE5203-1: PENGURUSAN PROJEK BAGI PEMBINAAN PERISIAN(PROJECT MANAGEMENT FOR SOFTWARE CONSTRUCTION)" href="http://putrablastdk.upm.edu.my/course/view.php?id=3989">SSE5203-1</a></p></li></ul></li></ul></li></ul>
                                            <div class="footer"></div>

                                        </div>

                                    </div>

                                </section>

                                <span id="sb-1"></span><a href="#sb-3" class="sr-only sr-only-focusable">Skip PutraBLAST Helpdesk</a>

                                <section id="inst15044" class=" block_html block  card mb-3" role="complementary" data-block="html" aria-labelledby="instance-15044-header">

                                    <div class="card-body p-3">

                                        <h5 id="instance-15044-header" class="card-title d-inline">PutraBLAST Helpdesk</h5>


                                        <div class="card-text content mt-3">
                                            <div class="no-overflow"><p dir="ltr" style="text-align: left;"></p><p><span><strong>Inquiry regarding PutraBLAST please contact:</strong></span></p><p>Tel. No.:&nbsp;03-9769 6136<br></p><p>(Open weekdays except for public holidays/weekend from 9.00 am until 12.30 pm, continue&nbsp;at 2.00 pm until 5.00 pm)</p><p>Email: cadeinovasi@upm.edu.my</p><p>(All inquiries will be answered not later than 48 working hours)</p><p></p><p><strong>Inquiry regarding UPM-ID/student ID/student email please contact:</strong></p><p>Tel. No.: 03-9769 1990</p><p>Email: idec_helpdesk@upm.edu.my</p><br><p></p></div>
                                            <div class="footer"></div>

                                        </div>

                                    </div>

                                </section>

                                <span id="sb-3"></span><a href="#sb-4" class="sr-only sr-only-focusable">Skip BLAST Archiving System</a>

                                <section id="inst15045" class=" block_html block  card mb-3" role="complementary" data-block="html" aria-labelledby="instance-15045-header">

                                    <div class="card-body p-3">

                                        <h5 id="instance-15045-header" class="card-title d-inline">BLAST Archiving System</h5>


                                        <div class="card-text content mt-3">
                                            <div class="no-overflow">
                                                <p style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px;"><br></p>
                                                <p style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px;"><span style="font-size: small; font-family: arial, helvetica, sans-serif;"><strong>In Campus Program (Bachelor and Master)</strong></span></p>

                                                <p style="text-align: center;"><a href="http://learninghub.upm.edu.my/blastarc/blastdk/20212" target="_blank" style="font-size: small; background-color: rgb(255, 255, 255); color: rgb(0, 136, 204);">Semester 2 [2020/2021]</a><br></p>
                                                <p style="text-align: center;"><span style="font-size: small;"><a href="http://learninghub.upm.edu.my/blastarc/blastdk/20213" target="_blank" style="color: #0088cc;">Semester 3 [2020/2021]</a></span></p>
                                                <p style="text-align: center;"><span style="font-size: small;"><a href="http://learninghub.upm.edu.my/blastarc/blastdk/21221" target="_blank" style="color: #0088cc;">Semester 1 [2021/2022]</a></span></p>
                                                <p style="text-align: center;"><span style="font-size: small;"><a href="http://learninghub.upm.edu.my/blastarc/blastdk/21222" target="_blank" style="color: #0088cc;">Semester 2 [2021/2022]</a></span></p>

                                                <p style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px;"><br></p>
                                            </div>
                                            <div class="footer"></div>

                                        </div>

                                    </div>

                                </section>

                                <span id="sb-4"></span>
                            </aside>
                        </section>
                    </div>
                    <div class="columnright blockcolumn  has-blocks ">
                        <section data-region="blocks-column" class="hidden-print" aria-label="Blocks">
                            <aside id="block-region-side-post" class="block-region" data-blockregion="side-post" data-droptarget="1">
                                <a href="#sb-5" class="sr-only sr-only-focusable">Skip Timeline</a>

                                <section id="inst276229" class=" block_timeline block  card mb-3" role="complementary" data-block="timeline" aria-labelledby="instance-276229-header">

                                    <div class="card-body p-3">

                                        <h5 id="instance-276229-header" class="card-title d-inline">Timeline</h5>


                                        <div class="card-text content mt-3">
                                            <div id="block-timeline-63970cb1ca13363970cb1bd4ac11" class="block-timeline" data-region="timeline">
                                                <div class="container p-0 pb-3 border-bottom">
                                                    <div class="row no-gutters">
                                                        <div class="col-sm d-flex justify-content-start">
                                                            <div data-region="day-filter" class="dropdown">
                                                                <button type="button" class="btn btn-outline-secondary dropdown-toggle icon-no-margin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Filter timeline items" aria-controls="menudayfilter">
                                                                    <i class="icon fa fa-clock-o fa-fw " aria-hidden="true"></i>
                                                                    <span class="sr-only" data-active-item-text="">


                                                                        Next 7 days



                                                                    </span>
                                                                </button>
                                                                <div id="menudayfilter" role="menu" class="dropdown-menu" data-show-active-item="" data-skip-active-class="true">
                                                                    <a class="dropdown-item" href="#" data-from="-14" data-filtername="all" aria-label="All filter option" role="menuitem">
                                                                        All
                                                                    </a>
                                                                    <a class="dropdown-item" href="#" data-from="-14" data-to="0" data-filtername="overdue" aria-label="Overdue filter option" role="menuitem">
                                                                        Overdue
                                                                    </a>
                                                                    <div class="dropdown-divider" role="separator"></div>
                                                                    <h6 class="dropdown-header">Due date</h6>
                                                                    <a class="dropdown-item" href="#" data-from="0" data-to="7" data-filtername="next7days" aria-current="true" aria-label="Next 7 days filter option" role="menuitem">
                                                                        Next 7 days
                                                                    </a>
                                                                    <a class="dropdown-item" href="#" data-from="0" data-to="30" data-filtername="next30days" aria-label="Next 30 days filter option" role="menuitem">
                                                                        Next 30 days
                                                                    </a>
                                                                    <a class="dropdown-item" href="#" data-from="0" data-to="90" data-filtername="next3months" aria-label="Next 3 months filter option" role="menuitem">
                                                                        Next 3 months
                                                                    </a>
                                                                    <a class="dropdown-item " href="#" data-from="0" data-to="180" data-filtername="next6months" aria-label="Next 6 months filter option" role="menuitem">
                                                                        Next 6 months
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm d-flex justify-content-end">
                                                            <div data-region="view-selector" class="btn-group">
                                                                <button type="button" class="btn btn-outline-secondary dropdown-toggle icon-no-margin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Sort timeline items" aria-controls="menusortby">
                                                                    <i class="icon fa fa-sort-amount-asc fa-fw " aria-hidden="true"></i>
                                                                    <span class="sr-only" data-active-item-text="">

                                                                        Sort by dates
                                                                    </span>
                                                                </button>
                                                                <div id="menusortby" role="menu" class="dropdown-menu dropdown-menu-right list-group hidden" data-show-active-item="" data-skip-active-class="true">
                                                                    <a class="dropdown-item" href="#view_dates_63970cb1ca13363970cb1bd4ac11" data-toggle="tab" data-filtername="sortbydates" aria-current="true" aria-label="Sort by dates sort option" role="menuitem">
                                                                        Sort by dates
                                                                    </a>
                                                                    <a class="dropdown-item" href="#view_courses_63970cb1ca13363970cb1bd4ac11" data-toggle="tab" data-filtername="sortbycourses" aria-label="Sort by courses sort option" role="menuitem">
                                                                        Sort by courses
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container p-0">
                                                    <div data-region="timeline-view">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active show fade" data-limit="10" data-region="view-dates" id="view_dates_63970cb1ca13363970cb1bd4ac11">
                                                                <div data-region="timeline-view-dates">
                                                                    <div data-region="event-list-container" data-days-offset="0" data-days-limit="7" data-course-id="" data-midnight="1670774400">
                                                                        <div data-region="event-list-loading-placeholder" class="hidden">
                                                                            <ul class="pl-0 list-group list-group-flush">
                                                                                <li class="list-group-item pl-0 pr-0">
                                                                                    <div class="row">
                                                                                        <div class="col-8 pr-0">
                                                                                            <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                                                                <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                                                                <div style="flex: 1" class="pl-2">
                                                                                                    <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                                                                    <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-4 pr-3">
                                                                                            <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                                                                <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item pl-0 pr-0">
                                                                                    <div class="row">
                                                                                        <div class="col-8 pr-0">
                                                                                            <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                                                                <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                                                                <div style="flex: 1" class="pl-2">
                                                                                                    <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                                                                    <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-4 pr-3">
                                                                                            <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                                                                <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item pl-0 pr-0">
                                                                                    <div class="row">
                                                                                        <div class="col-8 pr-0">
                                                                                            <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                                                                <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                                                                <div style="flex: 1" class="pl-2">
                                                                                                    <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                                                                    <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-4 pr-3">
                                                                                            <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                                                                <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item pl-0 pr-0">
                                                                                    <div class="row">
                                                                                        <div class="col-8 pr-0">
                                                                                            <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                                                                <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                                                                <div style="flex: 1" class="pl-2">
                                                                                                    <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                                                                    <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-4 pr-3">
                                                                                            <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                                                                <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item pl-0 pr-0">
                                                                                    <div class="row">
                                                                                        <div class="col-8 pr-0">
                                                                                            <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                                                                <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                                                                <div style="flex: 1" class="pl-2">
                                                                                                    <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                                                                    <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-4 pr-3">
                                                                                            <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                                                                <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="pt-3 d-flex justify-content-between">
                                                                                <div class="w-25 bg-pulse-grey" style="height: 35px"></div>
                                                                                <div class="w-25 bg-pulse-grey" style="height: 35px"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div data-region="event-list-content">
                                                                            <div id="paged-content-container-2" data-region="paged-content-container" class="">


                                                                                <div id="page-container-2" data-region="page-container" class="paged-content-page-container" aria-live="polite" style="">
                                                                                    <div data-region="paged-content-page" data-page="1" class="">
                                                                                        <div class="border-bottom pb-2">
                                                                                            <h5 class="h6 mt-3 mb-0 ">Wednesday, 14 December 2022</h5>


                                                                                            <div class="pl-0 list-group list-group-flush">


                                                                                                <div class="list-group-item flex-column py-2 pl-0 pr-0 border-0" data-region="event-list-item">
                                                                                                    <div class="d-flex">
                                                                                                        <div class="icon-size-4 d-flex align-self-top">
                                                                                                            <img class="icon " src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/assign/1668789993/icon" alt="Activity event" title="Activity event">
                                                                                                        </div>
                                                                                                        <div class="w-100 event-name-container text-truncate line-height-3">
                                                                                                            <a href="http://putrablastdk.upm.edu.my/mod/assign/view.php?id=86521" title="Exercise 7-11 Submission is due" aria-label="Exercise 7-11 Submission is due activity in SSE5210-1: KAEDAH EMPIRIKAL BAGI KEJURUTERAAN PERISIAN(EMPIRICAL METHODS FOR SOFTWARE ENGINEERING) is due on 14 December 2022, 6:30 PM"><h6 class="event-name text-truncate mb-0">Exercise 7-11 Submission is due</h6></a>
                                                                                                            <small class="text-muted text-truncate mb-0">SSE5210-1: KAEDAH EMPIRIKAL BAGI KEJURUTERAAN PERISIAN(EMPIRICAL METHODS FOR SOFTWARE ENGINEERING)</small>
                                                                                                            <h6 class="mb-0 pt-2">
                                                                                                                <a href="http://putrablastdk.upm.edu.my/mod/assign/view.php?id=86521&amp;action=editsubmission" aria-label="Add submission" title="Add submission" class="list-group-item-action">Add submission</a>
                                                                                                            </h6>
                                                                                                        </div>
                                                                                                        <small class="text-right text-nowrap ml-1">
                                                                                                            18:30
                                                                                                        </small>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mt-1">


                                                                                    <div data-region="paging-control-container" class="d-flex">
                                                                                        <div id="paging-control-limit-container-2" data-region="paging-control-limit-container" class="d-inline-flex align-items-center">
                                                                                            <span class="mr-1">Show</span>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-action="limit-toggle" aria-label="Show 5 activities per page">
                                                                                                    10

                                                                                                </button>
                                                                                                <div role="menu" class="dropdown-menu" data-show-active-item="" data-skip-active-class="true" data-active-item-button-aria-label-components="ariaeventlistpagelimit, block_timeline">
                                                                                                    <a class="dropdown-item " href="#" data-limit="5" role="menuitem">
                                                                                                        5

                                                                                                    </a>
                                                                                                    <a class="dropdown-item active" href="#" data-limit="10" role="menuitem" aria-current="true">
                                                                                                        10

                                                                                                    </a>
                                                                                                    <a class="dropdown-item " href="#" data-limit="25" role="menuitem">
                                                                                                        25

                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <nav id="paging-bar-2" class="ml-auto hidden" data-region="paging-bar" data-ignore-control-while-loading="true" data-hide-control-on-single-page="true" data-active-page-number="1" data-items-per-page="10" aria-label="Timeline activities pagination" data-aria-label-components-pagination-item="pagedcontentnavigationitem, core" data-aria-label-components-pagination-active-item="pagedcontentnavigationactiveitem, core" data-last-page-number="1">

                                                                                            <ul class="pagination mb-0">


                                                                                                <li class="page-item disabled" data-region="page-item" data-control="previous" aria-disabled="true">

                                                                                                    <a href="#" class="page-link" data-region="page-link" aria-label="Previous page">

                                                                                                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                                                                                                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                                                                                                    </a>
                                                                                                </li>


                                                                                                <li class="page-item disabled" data-region="page-item" data-control="next" aria-disabled="true">

                                                                                                    <a href="#" class="page-link" data-region="page-link" aria-label="Next page">

                                                                                                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                                                                                                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                                                                                                    </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </nav>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden text-xs-center text-center mt-3" data-region="empty-message">
                                                                            <img src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/block_timeline/1668789993/activities" alt="" style="height: 70px; width: 70px">
                                                                            <p class="text-muted mt-1">No upcoming activities due</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane  fade" data-region="view-courses" data-midnight="1670774400" data-limit="2" data-offset="0" data-days-limit="7" data-days-offset="0" data-no-events-url="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/block_timeline/1668789993/activities" id="view_courses_63970cb1ca13363970cb1bd4ac11">
                                                                <div data-region="course-items-loading-placeholder">
                                                                    <ul class="list-group unstyled">
                                                                        <li class="list-group-item mt-3 p-0 border-0">
                                                                            <div class="w-50 bg-pulse-grey mb-2" style="height: 20px"></div>
                                                                            <div>
                                                                                <ul class="pl-0 list-group list-group-flush">
                                                                                    <li class="list-group-item pl-0 pr-0">
                                                                                        <div class="row">
                                                                                            <div class="col-8 pr-0">
                                                                                                <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                                                                    <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                                                                    <div style="flex: 1" class="pl-2">
                                                                                                        <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                                                                        <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-4 pr-3">
                                                                                                <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                                                                    <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="list-group-item pl-0 pr-0">
                                                                                        <div class="row">
                                                                                            <div class="col-8 pr-0">
                                                                                                <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                                                                    <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                                                                    <div style="flex: 1" class="pl-2">
                                                                                                        <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                                                                        <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-4 pr-3">
                                                                                                <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                                                                    <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="list-group-item pl-0 pr-0">
                                                                                        <div class="row">
                                                                                            <div class="col-8 pr-0">
                                                                                                <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                                                                    <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                                                                    <div style="flex: 1" class="pl-2">
                                                                                                        <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                                                                        <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-4 pr-3">
                                                                                                <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                                                                    <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="list-group-item pl-0 pr-0">
                                                                                        <div class="row">
                                                                                            <div class="col-8 pr-0">
                                                                                                <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                                                                    <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                                                                    <div style="flex: 1" class="pl-2">
                                                                                                        <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                                                                        <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-4 pr-3">
                                                                                                <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                                                                    <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="list-group-item pl-0 pr-0">
                                                                                        <div class="row">
                                                                                            <div class="col-8 pr-0">
                                                                                                <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                                                                    <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                                                                    <div style="flex: 1" class="pl-2">
                                                                                                        <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                                                                        <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-4 pr-3">
                                                                                                <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                                                                    <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                                <div class="pt-3 d-flex justify-content-between">
                                                                                    <div class="w-25 bg-pulse-grey" style="height: 35px"></div>
                                                                                    <div class="w-25 bg-pulse-grey" style="height: 35px"></div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item mt-3 p-0 border-0">
                                                                            <div class="w-50 bg-pulse-grey mb-2" style="height: 20px"></div>
                                                                            <div>
                                                                                <ul class="pl-0 list-group list-group-flush">
                                                                                    <li class="list-group-item pl-0 pr-0">
                                                                                        <div class="row">
                                                                                            <div class="col-8 pr-0">
                                                                                                <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                                                                    <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                                                                    <div style="flex: 1" class="pl-2">
                                                                                                        <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                                                                        <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-4 pr-3">
                                                                                                <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                                                                    <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="list-group-item pl-0 pr-0">
                                                                                        <div class="row">
                                                                                            <div class="col-8 pr-0">
                                                                                                <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                                                                    <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                                                                    <div style="flex: 1" class="pl-2">
                                                                                                        <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                                                                        <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-4 pr-3">
                                                                                                <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                                                                    <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="list-group-item pl-0 pr-0">
                                                                                        <div class="row">
                                                                                            <div class="col-8 pr-0">
                                                                                                <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                                                                    <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                                                                    <div style="flex: 1" class="pl-2">
                                                                                                        <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                                                                        <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-4 pr-3">
                                                                                                <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                                                                    <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="list-group-item pl-0 pr-0">
                                                                                        <div class="row">
                                                                                            <div class="col-8 pr-0">
                                                                                                <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                                                                    <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                                                                    <div style="flex: 1" class="pl-2">
                                                                                                        <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                                                                        <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-4 pr-3">
                                                                                                <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                                                                    <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="list-group-item pl-0 pr-0">
                                                                                        <div class="row">
                                                                                            <div class="col-8 pr-0">
                                                                                                <div class="d-flex flex-row align-items-center" style="height: 32px">
                                                                                                    <div class="bg-pulse-grey rounded-circle" style="height: 32px; width: 32px;"></div>
                                                                                                    <div style="flex: 1" class="pl-2">
                                                                                                        <div class="bg-pulse-grey w-100" style="height: 15px;"></div>
                                                                                                        <div class="bg-pulse-grey w-75 mt-1" style="height: 10px;"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-4 pr-3">
                                                                                                <div class="d-flex flex-row justify-content-end" style="height: 32px; padding-top: 2px">
                                                                                                    <div class="bg-pulse-grey w-75" style="height: 15px;"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                                <div class="pt-3 d-flex justify-content-between">
                                                                                    <div class="w-25 bg-pulse-grey" style="height: 35px"></div>
                                                                                    <div class="w-25 bg-pulse-grey" style="height: 35px"></div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="bg-pulse-grey mt-1" style="width: 100px; height: 30px; margin-left: auto; margin-right: auto"></div>
                                                                </div>
                                                                <ul class="list-group unstyled" data-region="courses-list"></ul>
                                                                <div class="hidden text-xs-center text-center pt-3" data-region="more-courses-button-container">
                                                                    <button type="button" class="btn btn-secondary" data-action="more-courses">
                                                                        More courses
                                                                        <span class="hidden" data-region="loading-icon-container">
                                                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div class="hidden text-xs-center text-center mt-3" data-region="no-courses-empty-message">
                                                                    <img src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/block_timeline/1668789993/activities" alt="" style="height: 70px; width: 70px">
                                                                    <p class="text-muted mt-1">No in-progress courses</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="footer"></div>

                                        </div>

                                    </div>

                                </section>

                                <span id="sb-5"></span><a href="#sb-6" class="sr-only sr-only-focusable">Skip Private files</a>

                                <section id="inst276228" class=" block_private_files block  card mb-3" role="complementary" data-block="private_files" aria-labelledby="instance-276228-header">

                                    <div class="card-body p-3">

                                        <h5 id="instance-276228-header" class="card-title d-inline">Private files</h5>


                                        <div class="card-text content mt-3">
                                            <div class="box py-3 generalbox">No files available</div>
                                            <div class="footer"><a href="http://putrablastdk.upm.edu.my/user/files.php?returnurl=http%3A%2F%2Fputrablastdk.upm.edu.my%2Fmy%2Findex.php">Manage private files...</a></div>

                                        </div>

                                    </div>

                                </section>

                                <span id="sb-6"></span><a href="#sb-7" class="sr-only sr-only-focusable">Skip Online users</a>

                                <section id="inst276227" class=" block_online_users block  card mb-3" role="complementary" data-block="online_users" aria-labelledby="instance-276227-header">

                                    <div class="card-body p-3">

                                        <h5 id="instance-276227-header" class="card-title d-inline">Online users</h5>


                                        <div class="card-text content mt-3">
                                            <div class="info">126 online users (last 5 minutes)</div><ul class="list">
                                                <li class="listentry"><div class="user"><a href="http://putrablastdk.upm.edu.my/user/view.php?id=6325&amp;course=1" title="now"><img src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/core/1668789993/u/f2" class="userpicture defaultuserpic" width="16" height="16" alt="">LAW TENG YI .</a></div><div class="uservisibility"><a title="Hide my online status from other users" data-action="hide" data-userid="6325" id="change-user-visibility" href=""><i class="icon fa fa-eye fa-fw " title="Hide my online status from other users" aria-label="Hide my online status from other users"></i></a></div></li>
                                                <li class="listentry"><div class="user"><a href="http://putrablastdk.upm.edu.my/user/view.php?id=2677&amp;course=1" title="5 secs"><img src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/core/1668789993/u/f2" class="userpicture defaultuserpic" width="16" height="16" alt="">PROF. MADYA DR. ZULKIFLLE BIN LEMAN .</a></div><div class="message"><a title="Send a message" href="http://putrablastdk.upm.edu.my/message/index.php?id=2677"><i class="icon fa fa-comment fa-fw " title="Send a message" aria-label="Send a message"></i></a></div></li>
                                                <li class="listentry"><div class="user"><a href="http://putrablastdk.upm.edu.my/user/view.php?id=2364&amp;course=1" title="18 secs"><img src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/core/1668789993/u/f2" class="userpicture defaultuserpic" width="16" height="16" alt="">PROF. MADYA DR. CHEN HUI CHENG .</a></div><div class="message"><a title="Send a message" href="http://putrablastdk.upm.edu.my/message/index.php?id=2364"><i class="icon fa fa-comment fa-fw " title="Send a message" aria-label="Send a message"></i></a></div></li>
                                                <li class="listentry"><div class="user"><a href="http://putrablastdk.upm.edu.my/user/view.php?id=1606&amp;course=1" title="33 secs"><img src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/core/1668789993/u/f2" class="userpicture defaultuserpic" width="16" height="16" alt="">MOHD SHAMZI BIN MOHAMED .</a></div><div class="message"><a title="Send a message" href="http://putrablastdk.upm.edu.my/message/index.php?id=1606"><i class="icon fa fa-comment fa-fw " title="Send a message" aria-label="Send a message"></i></a></div></li>
                                                <li class="listentry"><div class="otherusers"><span>Other users (46)</span></div></li>
                                            </ul><div class="clearer"><!-- --></div>
                                            <div class="footer"></div>

                                        </div>

                                    </div>

                                </section>

                                <span id="sb-7"></span><a href="#sb-8" class="sr-only sr-only-focusable">Skip Latest badges</a>

                                <section id="inst276226" class=" block_badges block  card mb-3" role="complementary" data-block="badges" aria-labelledby="instance-276226-header">

                                    <div class="card-body p-3">

                                        <h5 id="instance-276226-header" class="card-title d-inline">Latest badges</h5>


                                        <div class="card-text content mt-3">
                                            You have no badges to display
                                            <div class="footer"></div>

                                        </div>

                                    </div>

                                </section>

                                <span id="sb-8"></span><a href="#sb-9" class="sr-only sr-only-focusable">Skip Calendar</a>

                                <section id="inst276225" class=" block_calendar_month block  card mb-3" role="complementary" data-block="calendar_month" aria-labelledby="instance-276225-header">

                                    <div class="card-body p-3">

                                        <h5 id="instance-276225-header" class="card-title d-inline">Calendar</h5>


                                        <div class="card-text content mt-3">
                                            <div id="calendar-month-2022-12-63970cb1ef5f963970cb1bd4ac12" data-template="core_calendar/month_mini" data-includenavigation="true" data-mini="true">
                                                <div id="month-mini-2022-12-9" class="calendarwrapper" data-courseid="1" data-categoryid="0" data-month="12" data-year="2022" data-day="12" data-view="month">


                                                    <span class="overlay-icon-container hidden" data-region="overlay-icon-container">


                                                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                                    </span>
                                                    <table class="minicalendar calendartable">
                                                        <caption class="calendar-controls">
                                                            <a href="#" class="arrow_link previous" title="Previous month" data-year="2022" data-month="11">
                                                                <span class="arrow">◄</span>
                                                            </a>
                                                            <span class="hide"> | </span>
                                                            <span class="current">
                                                                <a href="http://putrablastdk.upm.edu.my/calendar/view.php?view=month&amp;time=1670774400" title="This month">December 2022</a>
                                                            </span>
                                                            <span class="hide"> | </span>
                                                            <a href="#" class="arrow_link next" title="Next month" data-year="2023" data-month="1">
                                                                <span class="arrow">►</span>
                                                            </a>
                                                        </caption>
                                                        <thead>
                                                            <tr>
                                                                <th class="header text-xs-center">
                                                                    <span class="sr-only">Monday</span>
                                                                    <span aria-hidden="true">Mon</span>
                                                                </th>
                                                                <th class="header text-xs-center">
                                                                    <span class="sr-only">Tuesday</span>
                                                                    <span aria-hidden="true">Tue</span>
                                                                </th>
                                                                <th class="header text-xs-center">
                                                                    <span class="sr-only">Wednesday</span>
                                                                    <span aria-hidden="true">Wed</span>
                                                                </th>
                                                                <th class="header text-xs-center">
                                                                    <span class="sr-only">Thursday</span>
                                                                    <span aria-hidden="true">Thu</span>
                                                                </th>
                                                                <th class="header text-xs-center">
                                                                    <span class="sr-only">Friday</span>
                                                                    <span aria-hidden="true">Fri</span>
                                                                </th>
                                                                <th class="header text-xs-center">
                                                                    <span class="sr-only">Saturday</span>
                                                                    <span aria-hidden="true">Sat</span>
                                                                </th>
                                                                <th class="header text-xs-center">
                                                                    <span class="sr-only">Sunday</span>
                                                                    <span aria-hidden="true">Sun</span>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr data-region="month-view-week">
                                                                <td class="dayblank">&nbsp;</td>
                                                                <td class="dayblank">&nbsp;</td>
                                                                <td class="dayblank">&nbsp;</td>
                                                                <td class="day text-center hasevent calendar_event_course duration_finish" data-eventtype-course="1" data-day-timestamp="1669824000">
                                                                    <span class="sr-only">2 events, Thursday, 1 December</span>


                                                                    <a id="calendar-day-popover-link-1-2022-334-9" href="http://putrablastdk.upm.edu.my/calendar/view.php?view=day&amp;time=1669824000" data-container="body" data-toggle="popover" data-html="true" data-region="mini-day-link" data-trigger="hover focus" data-placement="top" data-year="2022" data-month="12" data-courseid="1" data-categoryid="0" data-title="Thursday, 1 December events" data-alternate="No events" aria-label="Thursday, 1 December events" data-original-title="" title="">1</a>
                                                                    <div class="hidden">

                                                                        <div data-popover-eventtype-course="1">


                                                                            <img class="icon " src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/attendance/1668789993/icon" alt="" title="">
                                                                            SSE5302-1: Attendance
                                                                        </div>
                                                                        <div data-popover-eventtype-course="1">


                                                                            <img class="icon " src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/assign/1668789993/icon" alt="" title="">
                                                                            SSE5302-1: Individual Assignment is due
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="day text-center" data-day-timestamp="1669910400">
                                                                    <span class="sr-only">No events, Friday, 2 December</span>
                                                                    <span aria-hidden="true">2</span>
                                                                </td>
                                                                <td class="day text-center weekend" data-day-timestamp="1669996800">
                                                                    <span class="sr-only">No events, Saturday, 3 December</span>
                                                                    <span aria-hidden="true">3</span>
                                                                </td>
                                                                <td class="day text-center weekend" data-day-timestamp="1670083200">
                                                                    <span class="sr-only">No events, Sunday, 4 December</span>
                                                                    <span aria-hidden="true">4</span>
                                                                </td>
                                                            </tr>
                                                            <tr data-region="month-view-week">
                                                                <td class="day text-center hasevent calendar_event_course duration_finish" data-eventtype-course="1" data-day-timestamp="1670169600">
                                                                    <span class="sr-only">1 event, Monday, 5 December</span>


                                                                    <a id="calendar-day-popover-link-1-2022-338-9" href="http://putrablastdk.upm.edu.my/calendar/view.php?view=day&amp;time=1670169600" data-container="body" data-toggle="popover" data-html="true" data-region="mini-day-link" data-trigger="hover focus" data-placement="top" data-year="2022" data-month="12" data-courseid="1" data-categoryid="0" data-title="Monday, 5 December events" data-alternate="No events" aria-label="Monday, 5 December events" data-original-title="" title="">5</a>
                                                                    <div class="hidden">

                                                                        <div data-popover-eventtype-course="1">


                                                                            <img class="icon " src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/attendance/1668789993/icon" alt="" title="">
                                                                            SSE5203-1: Attendance for W7
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="day text-center" data-day-timestamp="1670256000">
                                                                    <span class="sr-only">No events, Tuesday, 6 December</span>
                                                                    <span aria-hidden="true">6</span>
                                                                </td>
                                                                <td class="day text-center" data-day-timestamp="1670342400">
                                                                    <span class="sr-only">No events, Wednesday, 7 December</span>
                                                                    <span aria-hidden="true">7</span>
                                                                </td>
                                                                <td class="day text-center hasevent calendar_event_course duration_finish" data-eventtype-course="1" data-day-timestamp="1670428800">
                                                                    <span class="sr-only">2 events, Thursday, 8 December</span>


                                                                    <a id="calendar-day-popover-link-1-2022-341-9" href="http://putrablastdk.upm.edu.my/calendar/view.php?view=day&amp;time=1670428800" data-container="body" data-toggle="popover" data-html="true" data-region="mini-day-link" data-trigger="hover focus" data-placement="top" data-year="2022" data-month="12" data-courseid="1" data-categoryid="0" data-title="Thursday, 8 December events" data-alternate="No events" aria-label="Thursday, 8 December events" data-original-title="" title="">8</a>
                                                                    <div class="hidden">

                                                                        <div data-popover-eventtype-course="1">


                                                                            <img class="icon " src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/assign/1668789993/icon" alt="" title="">
                                                                            SSE5302-1: Group Project 1 is due
                                                                        </div>
                                                                        <div data-popover-eventtype-course="1">


                                                                            <img class="icon " src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/attendance/1668789993/icon" alt="" title="">
                                                                            SSE5302-1: Attendance
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="day text-center" data-day-timestamp="1670515200">
                                                                    <span class="sr-only">No events, Friday, 9 December</span>
                                                                    <span aria-hidden="true">9</span>
                                                                </td>
                                                                <td class="day text-center weekend hasevent calendar_event_course duration_finish" data-eventtype-course="1" data-day-timestamp="1670601600">
                                                                    <span class="sr-only">1 event, Saturday, 10 December</span>


                                                                    <a id="calendar-day-popover-link-1-2022-343-9" href="http://putrablastdk.upm.edu.my/calendar/view.php?view=day&amp;time=1670601600" data-container="body" data-toggle="popover" data-html="true" data-region="mini-day-link" data-trigger="hover focus" data-placement="top" data-year="2022" data-month="12" data-courseid="1" data-categoryid="0" data-title="Saturday, 10 December events" data-alternate="No events" aria-label="Saturday, 10 December events" data-original-title="" title="">10</a>
                                                                    <div class="hidden">

                                                                        <div data-popover-eventtype-course="1">


                                                                            <img class="icon " src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/attendance/1668789993/icon" alt="" title="">
                                                                            SSE5203-1: Attendance for Replacement Class W8
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="day text-center weekend" data-day-timestamp="1670688000">
                                                                    <span class="sr-only">No events, Sunday, 11 December</span>
                                                                    <span aria-hidden="true">11</span>
                                                                </td>
                                                            </tr>
                                                            <tr data-region="month-view-week">
                                                                <td class="day text-center today" data-day-timestamp="1670774400">
                                                                    <span class="sr-only">No events, Monday, 12 December</span>


                                                                    <a id="calendar-day-popover-link-1-2022-345-9" href="http://putrablastdk.upm.edu.my/calendar/view.php?view=day&amp;time=1670774400" data-container="body" data-toggle="popover" data-html="true" data-region="mini-day-link" data-trigger="hover focus" data-placement="top" data-year="2022" data-month="12" data-courseid="1" data-categoryid="0" data-title="Today Monday, 12 December" data-alternate="No events" aria-label="Today Monday, 12 December" data-original-title="" title="">12</a>
                                                                    <div class="hidden">

                                                                    </div>
                                                                </td>
                                                                <td class="day text-center" data-day-timestamp="1670860800">
                                                                    <span class="sr-only">No events, Tuesday, 13 December</span>
                                                                    <span aria-hidden="true">13</span>
                                                                </td>
                                                                <td class="day text-center hasevent calendar_event_course duration_finish" data-eventtype-course="1" data-day-timestamp="1670947200">
                                                                    <span class="sr-only">1 event, Wednesday, 14 December</span>


                                                                    <a id="calendar-day-popover-link-1-2022-347-9" href="http://putrablastdk.upm.edu.my/calendar/view.php?view=day&amp;time=1670947200" data-container="body" data-toggle="popover" data-html="true" data-region="mini-day-link" data-trigger="hover focus" data-placement="top" data-year="2022" data-month="12" data-courseid="1" data-categoryid="0" data-title="Wednesday, 14 December events" data-alternate="No events" aria-label="Wednesday, 14 December events" data-original-title="" title="">14</a>
                                                                    <div class="hidden">

                                                                        <div data-popover-eventtype-course="1">


                                                                            <img class="icon " src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/assign/1668789993/icon" alt="" title="">
                                                                            SSE5210-1: Exercise 7-11 Submission is due
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="day text-center" data-day-timestamp="1671033600">
                                                                    <span class="sr-only">No events, Thursday, 15 December</span>
                                                                    <span aria-hidden="true">15</span>
                                                                </td>
                                                                <td class="day text-center" data-day-timestamp="1671120000">
                                                                    <span class="sr-only">No events, Friday, 16 December</span>
                                                                    <span aria-hidden="true">16</span>
                                                                </td>
                                                                <td class="day text-center weekend" data-day-timestamp="1671206400">
                                                                    <span class="sr-only">No events, Saturday, 17 December</span>
                                                                    <span aria-hidden="true">17</span>
                                                                </td>
                                                                <td class="day text-center weekend" data-day-timestamp="1671292800">
                                                                    <span class="sr-only">No events, Sunday, 18 December</span>
                                                                    <span aria-hidden="true">18</span>
                                                                </td>
                                                            </tr>
                                                            <tr data-region="month-view-week">
                                                                <td class="day text-center" data-day-timestamp="1671379200">
                                                                    <span class="sr-only">No events, Monday, 19 December</span>
                                                                    <span aria-hidden="true">19</span>
                                                                </td>
                                                                <td class="day text-center hasevent calendar_event_course duration_finish" data-eventtype-course="1" data-day-timestamp="1671465600">
                                                                    <span class="sr-only">1 event, Tuesday, 20 December</span>


                                                                    <a id="calendar-day-popover-link-1-2022-353-9" href="http://putrablastdk.upm.edu.my/calendar/view.php?view=day&amp;time=1671465600" data-container="body" data-toggle="popover" data-html="true" data-region="mini-day-link" data-trigger="hover focus" data-placement="top" data-year="2022" data-month="12" data-courseid="1" data-categoryid="0" data-title="Tuesday, 20 December events" data-alternate="No events" aria-label="Tuesday, 20 December events" data-original-title="" title="">20</a>
                                                                    <div class="hidden">

                                                                        <div data-popover-eventtype-course="1">


                                                                            <img class="icon " src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/assign/1668789993/icon" alt="" title="">
                                                                            SSE5203-1: Individual Assignment  is due
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="day text-center" data-day-timestamp="1671552000">
                                                                    <span class="sr-only">No events, Wednesday, 21 December</span>
                                                                    <span aria-hidden="true">21</span>
                                                                </td>
                                                                <td class="day text-center" data-day-timestamp="1671638400">
                                                                    <span class="sr-only">No events, Thursday, 22 December</span>
                                                                    <span aria-hidden="true">22</span>
                                                                </td>
                                                                <td class="day text-center hasevent calendar_event_course duration_finish" data-eventtype-course="1" data-day-timestamp="1671724800">
                                                                    <span class="sr-only">1 event, Friday, 23 December</span>


                                                                    <a id="calendar-day-popover-link-1-2022-356-9" href="http://putrablastdk.upm.edu.my/calendar/view.php?view=day&amp;time=1671724800" data-container="body" data-toggle="popover" data-html="true" data-region="mini-day-link" data-trigger="hover focus" data-placement="top" data-year="2022" data-month="12" data-courseid="1" data-categoryid="0" data-title="Friday, 23 December events" data-alternate="No events" aria-label="Friday, 23 December events" data-original-title="" title="">23</a>
                                                                    <div class="hidden">

                                                                        <div data-popover-eventtype-course="1">


                                                                            <img class="icon " src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/assign/1668789993/icon" alt="" title="">
                                                                            SSE5203-1: Project Execution and Monitoring Submission Link is due
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="day text-center weekend" data-day-timestamp="1671811200">
                                                                    <span class="sr-only">No events, Saturday, 24 December</span>
                                                                    <span aria-hidden="true">24</span>
                                                                </td>
                                                                <td class="day text-center weekend" data-day-timestamp="1671897600">
                                                                    <span class="sr-only">No events, Sunday, 25 December</span>
                                                                    <span aria-hidden="true">25</span>
                                                                </td>
                                                            </tr>
                                                            <tr data-region="month-view-week">
                                                                <td class="day text-center" data-day-timestamp="1671984000">
                                                                    <span class="sr-only">No events, Monday, 26 December</span>
                                                                    <span aria-hidden="true">26</span>
                                                                </td>
                                                                <td class="day text-center" data-day-timestamp="1672070400">
                                                                    <span class="sr-only">No events, Tuesday, 27 December</span>
                                                                    <span aria-hidden="true">27</span>
                                                                </td>
                                                                <td class="day text-center" data-day-timestamp="1672156800">
                                                                    <span class="sr-only">No events, Wednesday, 28 December</span>
                                                                    <span aria-hidden="true">28</span>
                                                                </td>
                                                                <td class="day text-center" data-day-timestamp="1672243200">
                                                                    <span class="sr-only">No events, Thursday, 29 December</span>
                                                                    <span aria-hidden="true">29</span>
                                                                </td>
                                                                <td class="day text-center" data-day-timestamp="1672329600">
                                                                    <span class="sr-only">No events, Friday, 30 December</span>
                                                                    <span aria-hidden="true">30</span>
                                                                </td>
                                                                <td class="day text-center weekend" data-day-timestamp="1672416000">
                                                                    <span class="sr-only">No events, Saturday, 31 December</span>
                                                                    <span aria-hidden="true">31</span>
                                                                </td>
                                                                <td class="dayblank">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="footer"></div>

                                        </div>

                                    </div>

                                </section>

                                <span id="sb-9"></span><a href="#sb-10" class="sr-only sr-only-focusable">Skip Upcoming events</a>

                                <section id="inst276224" class=" block_calendar_upcoming block  card mb-3" role="complementary" data-block="calendar_upcoming" aria-labelledby="instance-276224-header">

                                    <div class="card-body p-3">

                                        <h5 id="instance-276224-header" class="card-title d-inline">Upcoming events</h5>


                                        <div class="card-text content mt-3">
                                            <div id="calendar-upcoming-block-63970cb20daa263970cb1bd4ac13" data-template="core_calendar/upcoming_mini">
                                                <div class="card-text content calendarwrapper" id="month-upcoming-mini-63970cb20daa263970cb1bd4ac13" data-context-id="2" data-courseid="1" data-categoryid="0">
                                                    <span class="overlay-icon-container hidden" data-region="overlay-icon-container">
                                                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                                    </span>
                                                    <div class="event" data-eventtype-course="1" data-region="event-item">
                                                        <span><img class="icon " alt="Activity event" title="Activity event" src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/assign/1668789993/icon"></span>
                                                        <a data-type="event" data-action="view-event" data-event-id="39810" href="http://putrablastdk.upm.edu.my/calendar/view.php?view=day&amp;course=4116&amp;time=1671013800#event_39810">Exercise 7-11 Submission is due</a>
                                                        <div class="date"><a href="http://putrablastdk.upm.edu.my/calendar/view.php?view=day&amp;time=1671013800">Wednesday, 14 December</a>, 6:30 PM</div>
                                                        <hr>
                                                    </div>
                                                    <div class="event" data-eventtype-course="1" data-region="event-item">
                                                        <span><img class="icon " alt="Activity event" title="Activity event" src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/assign/1668789993/icon"></span>
                                                        <a data-type="event" data-action="view-event" data-event-id="29016" href="http://putrablastdk.upm.edu.my/calendar/view.php?view=day&amp;course=3989&amp;time=1671465600#event_29016">Individual Assignment  is due</a>
                                                        <div class="date"><a href="http://putrablastdk.upm.edu.my/calendar/view.php?view=day&amp;time=1671465600">Tuesday, 20 December</a>, 12:00 AM</div>
                                                        <hr>
                                                    </div>
                                                    <div class="event" data-eventtype-course="1" data-region="event-item">
                                                        <span><img class="icon " alt="Activity event" title="Activity event" src="http://putrablastdk.upm.edu.my/theme/image.php/klassroom/assign/1668789993/icon"></span>
                                                        <a data-type="event" data-action="view-event" data-event-id="38810" href="http://putrablastdk.upm.edu.my/calendar/view.php?view=day&amp;course=3989&amp;time=1671811140#event_38810">Project Execution and Monitoring Submission Link is due</a>
                                                        <div class="date"><a href="http://putrablastdk.upm.edu.my/calendar/view.php?view=day&amp;time=1671811140">Friday, 23 December</a>, 11:59 PM</div>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="footer"><div class="gotocal"><a href="http://putrablastdk.upm.edu.my/calendar/view.php?view=upcoming">Go to calendar...</a></div></div>

                                        </div>

                                    </div>

                                </section>

                                <span id="sb-10"></span>
                            </aside>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div id="drawer-63970cb214ca963970cb1bd4ac27" class=" drawer bg-white hidden" aria-expanded="false" aria-hidden="true" data-region="right-hand-drawer" role="region" tabindex="0">
            <div id="message-drawer-63970cb214ca963970cb1bd4ac27" class="message-app" data-region="message-drawer" role="region">
                <div class="closewidget bg-light border-bottom text-right">
                    <a class="text-dark" data-action="closedrawer" href="#" title="Close" aria-label="Close">
                        <i class="icon fa fa-window-close fa-fw " aria-hidden="true"></i>
                    </a>
                </div>
                <div class="header-container position-relative" data-region="header-container">
                    <div class="hidden border-bottom px-2 py-3" aria-hidden="true" data-region="view-contacts">
                        <div class="d-flex align-items-center">
                            <div class="align-self-stretch">
                                <a class="h-100 d-flex align-items-center mr-2" href="#" data-route-back="" role="button">
                                    <div class="icon-back-in-drawer">
                                        <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                                        <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                                    </div>
                                    <div class="icon-back-in-app">
                                        <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"></i></span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                Contacts
                            </div>
                            <div class="ml-auto">
                                <a href="#" data-route="view-search" role="button" aria-label="Search">
                                    <i class="icon fa fa-search fa-fw " aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden bg-white position-relative border-bottom p-1 p-sm-2" aria-hidden="true" data-region="view-conversation">
                        <div class="hidden" data-region="header-content"></div>
                        <div class="hidden" data-region="header-edit-mode">

                            <div class="d-flex p-2 align-items-center">
                                Messages selected:
                                <span class="ml-1" data-region="message-selected-court">1</span>
                                <button type="button" class="ml-auto close" aria-label="Cancel message selection" data-action="cancel-edit-mode">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        </div>
                        <div data-region="header-placeholder">
                            <div class="d-flex">
                                <div class="ml-2 rounded-circle bg-pulse-grey align-self-center" style="height: 38px; width: 38px">
                                </div>
                                <div class="ml-2 " style="flex: 1">
                                    <div class="mt-1 bg-pulse-grey w-75" style="height: 16px;">
                                    </div>
                                </div>
                                <div class="ml-2 bg-pulse-grey align-self-center" style="height: 16px; width: 20px">
                                </div>
                            </div>
                        </div>
                        <div class="hidden position-absolute z-index-1" data-region="confirm-dialogue-container" style="top: 0; bottom: -1px; right: 0; left: 0; background: rgba(0,0,0,0.3);"></div>
                    </div>                <div class="border-bottom  p-1 px-sm-2 py-sm-3" aria-hidden="false" data-region="view-overview">
                        <div class="d-flex align-items-center">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text pr-2 bg-white">
                                        <i class="icon fa fa-search fa-fw " aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control border-left-0" placeholder="Search" aria-label="Search" data-region="view-overview-search-input">
                            </div>
                            <div class="ml-2">
                                <a href="#" data-route="view-settings" data-route-param="6325" aria-label="Settings" role="button">
                                    <i class="icon fa fa-cog fa-fw " aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-right mt-sm-3">
                            <a href="#" data-route="view-contacts" role="button">
                                <i class="icon fa fa-user fa-fw " aria-hidden="true"></i>
                                Contacts
                                <span class="badge badge-primary bg-primary ml-2 hidden" data-region="contact-request-count" aria-label="There are 0 pending contact requests">
                                    0
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="hidden border-bottom px-2 py-3 view-search" aria-hidden="true" data-region="view-search">
                        <div class="d-flex align-items-center">
                            <a class="mr-2 align-self-stretch d-flex align-items-center" href="#" data-route-back="" data-action="cancel-search" role="button">
                                <div class="icon-back-in-drawer">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                                    <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                                </div>
                                <div class="icon-back-in-app">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"></i></span>
                                </div>
                            </a>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search" data-region="search-input">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" data-action="search" aria-label="Search">
                                        <span data-region="search-icon-container">
                                            <i class="icon fa fa-search fa-fw " aria-hidden="true"></i>
                                        </span>
                                        <span class="hidden" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden border-bottom px-2 py-3" aria-hidden="true" data-region="view-settings">
                        <div class="d-flex align-items-center">
                            <div class="align-self-stretch">
                                <a class="h-100 d-flex mr-2 align-items-center" href="#" data-route-back="" role="button">
                                    <div class="icon-back-in-drawer">
                                        <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                                        <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                                    </div>
                                    <div class="icon-back-in-app">
                                        <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"></i></span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                Settings
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body-container position-relative" data-region="body-container">

                    <div class="hidden" data-region="view-contact" aria-hidden="true">
                        <div class="p-2 pt-3" data-region="content-container"></div>
                    </div>                <div class="hidden h-100" data-region="view-contacts" aria-hidden="true" data-user-id="6325">
                        <div class="d-flex flex-column h-100">
                            <div class="p-3 border-bottom">
                                <ul class="nav nav-pills nav-fill" role="tablist">
                                    <li class="nav-item">
                                        <a id="contacts-tab-63970cb214ca963970cb1bd4ac27" class="nav-link active" href="#contacts-tab-panel-63970cb214ca963970cb1bd4ac27" data-toggle="tab" data-action="show-contacts-section" role="tab" aria-controls="contacts-tab-panel-63970cb214ca963970cb1bd4ac27" aria-selected="true">
                                            Contacts
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="requests-tab-63970cb214ca963970cb1bd4ac27" class="nav-link" href="#requests-tab-panel-63970cb214ca963970cb1bd4ac27" data-toggle="tab" data-action="show-requests-section" role="tab" aria-controls="requests-tab-panel-63970cb214ca963970cb1bd4ac27" aria-selected="false">
                                            Requests
                                            <span class="badge badge-primary bg-primary ml-2 hidden" data-region="contact-request-count" aria-label="There are 0 pending contact requests">
                                                0
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content d-flex flex-column h-100">
                                <div class="tab-pane fade show active h-100 lazy-load-list" aria-live="polite" data-region="lazy-load-list" data-user-id="6325" id="contacts-tab-panel-63970cb214ca963970cb1bd4ac27" data-section="contacts" role="tabpanel" aria-labelledby="contacts-tab-63970cb214ca963970cb1bd4ac27">

                                    <div class="hidden text-center p-2" data-region="empty-message-container">
                                        No contacts
                                    </div>
                                    <div class="hidden list-group" data-region="content-container">

                                    </div>
                                    <div class="list-group" data-region="placeholder-container">

                                    </div>
                                    <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container">
                                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                    </div>
                                </div>

                                <div class="tab-pane fade h-100 lazy-load-list" aria-live="polite" data-region="lazy-load-list" data-user-id="6325" id="requests-tab-panel-63970cb214ca963970cb1bd4ac27" data-section="requests" role="tabpanel" aria-labelledby="requests-tab-63970cb214ca963970cb1bd4ac27">

                                    <div class="hidden text-center p-2" data-region="empty-message-container">
                                        No contact requests
                                    </div>
                                    <div class="hidden list-group" data-region="content-container">

                                    </div>
                                    <div class="list-group" data-region="placeholder-container">

                                    </div>
                                    <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container">
                                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view-conversation hidden h-100" aria-hidden="true" data-region="view-conversation" data-user-id="6325" data-midnight="1670774400" data-message-poll-min="10" data-message-poll-max="120" data-message-poll-after-max="300" style="overflow-y: auto; overflow-x: hidden">
                        <div class="position-relative h-100" data-region="content-container" style="overflow-y: auto; overflow-x: hidden">
                            <div class="content-message-container hidden h-100 px-2 pt-0" data-region="content-message-container" role="log" style="overflow-y: auto; overflow-x: hidden">
                                <div class="py-3 sticky-top z-index-1 border-bottom text-center hidden" data-region="contact-request-sent-message-container">
                                    <p class="m-0">Contact request sent</p>
                                    <p class="font-italic font-weight-light" data-region="text"></p>
                                </div>
                                <div class="p-3 text-center hidden" data-region="self-conversation-message-container">
                                    <p class="m-0">Personal space</p>
                                    <p class="font-italic font-weight-light" data-region="text">Save draft messages, links, notes etc. to access later.</p>
                                </div>
                                <div class="hidden text-center p-3" data-region="more-messages-loading-icon-container">
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                </div>
                            </div>
                            <div class="p-4 w-100 h-100 hidden position-absolute z-index-1" data-region="confirm-dialogue-container" style="top: 0; background: rgba(0,0,0,0.3);">

                                <div class="p-3 bg-white" data-region="confirm-dialogue" role="alert">
                                    <p class="text-muted" data-region="dialogue-text"></p>
                                    <div class="mb-2 custom-control custom-checkbox hidden" data-region="delete-messages-for-all-users-toggle-container">
                                        <input type="checkbox" class="custom-control-input" id="delete-messages-for-all-users" data-region="delete-messages-for-all-users-toggle">
                                        <label class="custom-control-label text-muted" for="delete-messages-for-all-users">
                                            Delete for me and for everyone else
                                        </label>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-block">
                                        <span data-region="dialogue-button-text">Block</span>
                                        <span class="hidden" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-unblock">
                                        <span data-region="dialogue-button-text">Unblock</span>
                                        <span class="hidden" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-remove-contact">
                                        <span data-region="dialogue-button-text">Remove</span>
                                        <span class="hidden" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-add-contact">
                                        <span data-region="dialogue-button-text">Add</span>
                                        <span class="hidden" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-selected-messages">
                                        <span data-region="dialogue-button-text">Delete</span>
                                        <span class="hidden" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-conversation">
                                        <span data-region="dialogue-button-text">Delete</span>
                                        <span class="hidden" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-block hidden" data-action="request-add-contact">
                                        <span data-region="dialogue-button-text">Send contact request</span>
                                        <span class="hidden" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-block hidden" data-action="accept-contact-request">
                                        <span data-region="dialogue-button-text">Accept and add to contacts</span>
                                        <span class="hidden" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-block hidden" data-action="decline-contact-request">
                                        <span data-region="dialogue-button-text">Decline</span>
                                        <span class="hidden" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-block" data-action="okay-confirm">OK</button>
                                    <button type="button" class="btn btn-secondary btn-block" data-action="cancel-confirm">Cancel</button>
                                </div>
                            </div>
                            <div class="px-2 pb-2 pt-0" data-region="content-placeholder">
                                <div class="h-100 d-flex flex-column">
                                    <div class="px-2 pb-2 pt-0 bg-light h-100" style="overflow-y: auto">
                                        <div class="mt-4">
                                            <div class="mb-4">
                                                <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="mr-2">
                                                        <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                    </div>
                                                    <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                    <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                                </div>
                                                <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="mr-2">
                                                        <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                    </div>
                                                    <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                    <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                                </div>
                                                <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="mr-2">
                                                        <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                    </div>
                                                    <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                    <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                                </div>
                                                <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                            </div>
                                        </div>                                    <div class="mt-4">
                                            <div class="mb-4">
                                                <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="mr-2">
                                                        <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                    </div>
                                                    <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                    <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                                </div>
                                                <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="mr-2">
                                                        <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                    </div>
                                                    <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                    <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                                </div>
                                                <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="mr-2">
                                                        <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                    </div>
                                                    <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                    <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                                </div>
                                                <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                            </div>
                                        </div>                                    <div class="mt-4">
                                            <div class="mb-4">
                                                <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="mr-2">
                                                        <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                    </div>
                                                    <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                    <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                                </div>
                                                <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="mr-2">
                                                        <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                    </div>
                                                    <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                    <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                                </div>
                                                <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="mr-2">
                                                        <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                    </div>
                                                    <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                    <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                                </div>
                                                <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                            </div>
                                        </div>                                    <div class="mt-4">
                                            <div class="mb-4">
                                                <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="mr-2">
                                                        <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                    </div>
                                                    <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                    <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                                </div>
                                                <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="mr-2">
                                                        <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                    </div>
                                                    <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                    <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                                </div>
                                                <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="mr-2">
                                                        <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                    </div>
                                                    <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                    <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                                </div>
                                                <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                            </div>
                                        </div>                                    <div class="mt-4">
                                            <div class="mb-4">
                                                <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="mr-2">
                                                        <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                    </div>
                                                    <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                    <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                                </div>
                                                <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="mr-2">
                                                        <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                    </div>
                                                    <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                    <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                                </div>
                                                <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="mr-2">
                                                        <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                    </div>
                                                    <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                    <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                                </div>
                                                <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                                <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hidden" aria-hidden="true" data-region="view-group-info">
                        <div class="pt-3 h-100 d-flex flex-column" data-region="group-info-content-container" style="overflow-y: auto"></div>
                    </div>                <div class="h-100 view-overview-body" aria-hidden="false" data-region="view-overview" data-user-id="6325">
                        <div id="message-drawer-view-overview-container-63970cb214ca963970cb1bd4ac27" class="d-flex flex-column h-100" style="overflow-y: auto">


                            <div class="section border-0 card" data-region="view-overview-favourites">
                                <div id="view-overview-favourites-toggle" class="card-header p-0" data-region="toggle">
                                    <button class="btn btn-link w-100 text-left p-1 p-sm-2 d-flex align-items-center overview-section-toggle collapsed" data-toggle="collapse" data-target="#view-overview-favourites-target-63970cb214ca963970cb1bd4ac27" aria-expanded="false" aria-controls="view-overview-favourites-target-63970cb214ca963970cb1bd4ac27">
                                        <span class="collapsed-icon-container">
                                            <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"></i>
                                        </span>
                                        <span class="expanded-icon-container">
                                            <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"></i>
                                        </span>
                                        <span class="font-weight-bold">Starred</span>
                                        <small class="hidden ml-1" data-region="section-total-count-container" aria-label=" total conversations">
                                            (<span data-region="section-total-count"></span>)
                                        </small>
                                        <span class="hidden ml-2" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                        <span class="hidden badge badge-pill badge-primary ml-auto bg-primary" data-region="section-unread-count">

                                        </span>
                                    </button>
                                </div>
                                <div class="collapse border-bottom  lazy-load-list" aria-live="polite" data-region="lazy-load-list" data-user-id="6325" id="view-overview-favourites-target-63970cb214ca963970cb1bd4ac27" aria-labelledby="view-overview-favourites-toggle" data-parent="#message-drawer-view-overview-container-63970cb214ca963970cb1bd4ac27">

                                    <div class="hidden text-center p-2" data-region="empty-message-container">
                                        <p class="text-muted mt-2">No starred conversations</p>

                                    </div>
                                    <div class="hidden list-group" data-region="content-container">

                                    </div>
                                    <div class="list-group" data-region="placeholder-container">
                                        <div class="text-center py-2">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                        </div>

                                    </div>
                                    <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container">
                                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                    </div>
                                </div>
                            </div>


                            <div class="section border-0 card" data-region="view-overview-group-messages">
                                <div id="view-overview-group-messages-toggle" class="card-header p-0" data-region="toggle">
                                    <button class="btn btn-link w-100 text-left p-1 p-sm-2 d-flex align-items-center overview-section-toggle collapsed" data-toggle="collapse" data-target="#view-overview-group-messages-target-63970cb214ca963970cb1bd4ac27" aria-expanded="false" aria-controls="view-overview-group-messages-target-63970cb214ca963970cb1bd4ac27">
                                        <span class="collapsed-icon-container">
                                            <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"></i>
                                        </span>
                                        <span class="expanded-icon-container">
                                            <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"></i>
                                        </span>
                                        <span class="font-weight-bold">Group</span>
                                        <small class="hidden ml-1" data-region="section-total-count-container" aria-label=" total conversations">
                                            (<span data-region="section-total-count"></span>)
                                        </small>
                                        <span class="hidden ml-2" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                        <span class="hidden badge badge-pill badge-primary ml-auto bg-primary" data-region="section-unread-count">

                                        </span>
                                    </button>
                                </div>
                                <div class="collapse border-bottom  lazy-load-list" aria-live="polite" data-region="lazy-load-list" data-user-id="6325" id="view-overview-group-messages-target-63970cb214ca963970cb1bd4ac27" aria-labelledby="view-overview-group-messages-toggle" data-parent="#message-drawer-view-overview-container-63970cb214ca963970cb1bd4ac27">

                                    <div class="hidden text-center p-2" data-region="empty-message-container">
                                        <p class="text-muted mt-2">No group conversations</p>

                                    </div>
                                    <div class="hidden list-group" data-region="content-container">

                                    </div>
                                    <div class="list-group" data-region="placeholder-container">
                                        <div class="text-center py-2">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                        </div>

                                    </div>
                                    <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container">
                                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                    </div>
                                </div>
                            </div>


                            <div class="section border-0 card" data-region="view-overview-messages">
                                <div id="view-overview-messages-toggle" class="card-header p-0" data-region="toggle">
                                    <button class="btn btn-link w-100 text-left p-1 p-sm-2 d-flex align-items-center overview-section-toggle collapsed" data-toggle="collapse" data-target="#view-overview-messages-target-63970cb214ca963970cb1bd4ac27" aria-expanded="false" aria-controls="view-overview-messages-target-63970cb214ca963970cb1bd4ac27">
                                        <span class="collapsed-icon-container">
                                            <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"></i>
                                        </span>
                                        <span class="expanded-icon-container">
                                            <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"></i>
                                        </span>
                                        <span class="font-weight-bold">Private</span>
                                        <small class="hidden ml-1" data-region="section-total-count-container" aria-label=" total conversations">
                                            (<span data-region="section-total-count"></span>)
                                        </small>
                                        <span class="hidden ml-2" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                        <span class="hidden badge badge-pill badge-primary ml-auto bg-primary" data-region="section-unread-count">

                                        </span>
                                    </button>
                                </div>
                                <div class="collapse border-bottom  lazy-load-list" aria-live="polite" data-region="lazy-load-list" data-user-id="6325" id="view-overview-messages-target-63970cb214ca963970cb1bd4ac27" aria-labelledby="view-overview-messages-toggle" data-parent="#message-drawer-view-overview-container-63970cb214ca963970cb1bd4ac27">

                                    <div class="hidden text-center p-2" data-region="empty-message-container">
                                        <p class="text-muted mt-2">No private conversations</p>

                                    </div>
                                    <div class="hidden list-group" data-region="content-container">

                                    </div>
                                    <div class="list-group" data-region="placeholder-container">
                                        <div class="text-center py-2">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                        </div>

                                    </div>
                                    <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container">
                                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div data-region="view-search" aria-hidden="true" class="h-100 hidden" data-user-id="6325" data-users-offset="0" data-messages-offset="0" style="overflow-y: auto">
                        <div class="hidden" data-region="search-results-container" style="overflow-y: auto">

                            <div class="d-flex flex-column">
                                <div class="mb-3 bg-white" data-region="all-contacts-container">
                                    <div data-region="contacts-container" class="pt-2">
                                        <h4 class="h6 px-2">Contacts</h4>
                                        <div class="list-group" data-region="list"></div>
                                    </div>
                                    <div data-region="non-contacts-container" class="pt-2 border-top">
                                        <h4 class="h6 px-2">Non-contacts</h4>
                                        <div class="list-group" data-region="list"></div>
                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-link text-primary" data-action="load-more-users">
                                            <span data-region="button-text">Load more</span>
                                            <span data-region="loading-icon-container" class="hidden">
                                                <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="bg-white" data-region="messages-container">
                                    <h4 class="h6 px-2 pt-2">Messages</h4>
                                    <div class="list-group" data-region="list"></div>
                                    <div class="text-right">
                                        <button class="btn btn-link text-primary" data-action="load-more-messages">
                                            <span data-region="button-text">Load more</span>
                                            <span data-region="loading-icon-container" class="hidden">
                                                <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <p class="hidden p-3 text-center" data-region="no-results-container">No results</p>
                            </div>
                        </div>
                        <div class="hidden" data-region="loading-placeholder">
                            <div class="text-center pt-3 icon-size-4">
                                <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                            </div>
                        </div>
                        <div class="p-3 text-center" data-region="empty-message-container">
                            <p>Search people and messages</p>
                        </div>
                    </div>
                    <div class="h-100 hidden bg-white" aria-hidden="true" data-region="view-settings">
                        <div class="hidden" data-region="content-container">

                            <div data-region="settings" class="p-3">
                                <h3 class="h6 font-weight-bold">Privacy</h3>
                                <p>You can restrict who can message you</p>
                                <div data-preference="blocknoncontacts" class="mb-3">
                                    <fieldset>
                                        <legend class="sr-only">Accept messages from:</legend>
                                        <div class="custom-control custom-radio mb-2">
                                            <input type="radio" name="message_blocknoncontacts" class="custom-control-input" id="block-noncontacts-63970cb214ca963970cb1bd4ac27-1" value="1">
                                            <label class="custom-control-label ml-2" for="block-noncontacts-63970cb214ca963970cb1bd4ac27-1">
                                                My contacts only
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio mb-2">
                                            <input type="radio" name="message_blocknoncontacts" class="custom-control-input" id="block-noncontacts-63970cb214ca963970cb1bd4ac27-0" value="0">
                                            <label class="custom-control-label ml-2" for="block-noncontacts-63970cb214ca963970cb1bd4ac27-0">
                                                My contacts and anyone in my courses
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="hidden" data-region="notification-preference-container">
                                    <h3 class="mb-2 mt-4 h6 font-weight-bold">Notification preferences</h3>
                                </div>

                                <h3 class="mb-2 mt-4 h6 font-weight-bold">General</h3>
                                <div data-preference="entertosend">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="enter-to-send-63970cb214ca963970cb1bd4ac27" checked="">
                                        <label class="custom-control-label" for="enter-to-send-63970cb214ca963970cb1bd4ac27">
                                            Use enter to send
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-region="placeholder-container">

                            <div class="d-flex flex-column p-3">
                                <div class="w-25 bg-pulse-grey h6" style="height: 18px"></div>
                                <div class="w-75 bg-pulse-grey mb-4" style="height: 18px"></div>
                                <div class="mb-3">
                                    <div class="w-100 d-flex mb-3">
                                        <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                                        <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                    </div>
                                    <div class="w-100 d-flex mb-3">
                                        <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                                        <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                    </div>
                                    <div class="w-100 d-flex mb-3">
                                        <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                                        <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                    </div>
                                </div>
                                <div class="w-50 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                                <div class="mb-4">
                                    <div class="w-100 d-flex mb-2 align-items-center">
                                        <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                                        <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                                    </div>
                                    <div class="w-100 d-flex mb-2 align-items-center">
                                        <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                                        <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                                    </div>
                                </div>
                                <div class="w-25 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                                <div class="mb-3">
                                    <div class="w-100 d-flex mb-2 align-items-center">
                                        <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                                        <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-container position-relative" data-region="footer-container">

                    <div class="hidden border-top bg-white position-relative" aria-hidden="true" data-region="view-conversation" data-enter-to-send="1">
                        <div class="hidden p-sm-2" data-region="content-messages-footer-container">

                            <div class="emoji-auto-complete-container w-100 hidden" data-region="emoji-auto-complete-container" aria-live="polite" aria-hidden="true">
                            </div>
                            <div class="d-flex mt-sm-1">
                                <textarea dir="auto" data-region="send-message-txt" class="form-control bg-light" rows="3" data-auto-rows="" data-min-rows="3" data-max-rows="5" aria-label="Write a message..." placeholder="Write a message..." style="resize: none" maxlength="4096"></textarea>

                                <div class="position-relative d-flex flex-column">
                                    <div data-region="emoji-picker-container" class="emoji-picker-container hidden" aria-hidden="true">

                                        <div data-region="emoji-picker" class="card shadow emoji-picker">
                                            <div class="card-header px-1 pt-1 pb-0 d-flex justify-content-between flex-shrink-0">
                                                <button class="btn btn-outline-secondary icon-no-margin category-button selected" data-action="show-category" data-category="Recent" title="Recent">
                                                    <i class="icon fa fa-clock-o fa-fw " aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary icon-no-margin category-button" data-action="show-category" data-category="Smileys &amp; People" title="Smileys &amp; people">
                                                    <i class="icon fa fa-smile-o fa-fw " aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary icon-no-margin category-button" data-action="show-category" data-category="Animals &amp; Nature" title="Animals &amp; nature">
                                                    <i class="icon fa fa-leaf fa-fw " aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary icon-no-margin category-button" data-action="show-category" data-category="Food &amp; Drink" title="Food &amp; drink">
                                                    <i class="icon fa fa-cutlery fa-fw " aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary icon-no-margin category-button" data-action="show-category" data-category="Travel &amp; Places" title="Travel &amp; places">
                                                    <i class="icon fa fa-plane fa-fw " aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary icon-no-margin category-button" data-action="show-category" data-category="Activities" title="Activities">
                                                    <i class="icon fa fa-futbol-o fa-fw " aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary icon-no-margin category-button" data-action="show-category" data-category="Objects" title="Objects">
                                                    <i class="icon fa fa-lightbulb-o fa-fw " aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary icon-no-margin category-button" data-action="show-category" data-category="Symbols" title="Symbols">
                                                    <i class="icon fa fa-heart fa-fw " aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary icon-no-margin category-button" data-action="show-category" data-category="Flags" title="Flags">
                                                    <i class="icon fa fa-flag fa-fw " aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <div class="card-body p-2 d-flex flex-column overflow-hidden">
                                                <div class="input-group mb-1 flex-shrink-0">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text pr-0 bg-white text-muted">
                                                            <i class="icon fa fa-search fa-fw " aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control border-left-0" placeholder="Search" aria-label="Search" data-region="search-input">
                                                </div>
                                                <div class="flex-grow-1 overflow-auto emojis-container h-100" data-region="emojis-container">
                                                    <div class="position-relative" data-region="row-container"></div>
                                                </div>
                                                <div class="flex-grow-1 overflow-auto search-results-container h-100 hidden" data-region="search-results-container">
                                                    <div class="position-relative" data-region="row-container"></div>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex flex-shrink-0" data-region="footer">
                                                <div class="emoji-preview" data-region="emoji-preview"></div>
                                                <div data-region="emoji-short-name" class="emoji-short-name text-muted text-wrap ml-2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-link btn-icon icon-size-3 ml-1" aria-label="Toggle emoji picker" data-action="toggle-emoji-picker">
                                        <i class="icon fa fa-smile-o fa-fw " aria-hidden="true"></i>
                                    </button>
                                    <button class="btn btn-link btn-icon icon-size-3 ml-1 mt-auto" aria-label="Send message" data-action="send-message">
                                        <span data-region="send-icon-container"><i class="icon fa fa-paper-plane fa-fw " aria-hidden="true"></i></span>
                                        <span class="hidden" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="hidden p-sm-2" data-region="content-messages-footer-edit-mode-container">

                            <div class="d-flex p-3 justify-content-end">
                                <button class="btn btn-link btn-icon my-1 icon-size-4" data-action="delete-selected-messages" data-toggle="tooltip" data-placement="top" title="Delete selected messages">
                                    <span data-region="icon-container"><i class="icon fa fa-trash fa-fw " aria-hidden="true"></i></span>
                                    <span class="hidden" data-region="loading-icon-container">
                                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                    </span>
                                    <span class="sr-only">Delete selected messages</span>
                                </button>
                            </div>
                        </div>
                        <div class="hidden bg-secondary p-sm-3" data-region="content-messages-footer-require-contact-container">

                            <div class="p-3 bg-white">
                                <p data-region="title"></p>
                                <p class="text-muted" data-region="text"></p>
                                <button type="button" class="btn btn-primary btn-block" data-action="request-add-contact">
                                    <span data-region="dialogue-button-text">Send contact request</span>
                                    <span class="hidden" data-region="loading-icon-container">
                                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="hidden bg-secondary p-sm-3" data-region="content-messages-footer-require-unblock-container">

                            <div class="p-3 bg-white">
                                <p class="text-muted" data-region="text">You have blocked this user.</p>
                                <button type="button" class="btn btn-primary btn-block" data-action="request-unblock">
                                    <span data-region="dialogue-button-text">Unblock user</span>
                                    <span class="hidden" data-region="loading-icon-container">
                                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="hidden bg-secondary p-sm-3" data-region="content-messages-footer-unable-to-message">

                            <div class="p-3 bg-white">
                                <p class="text-muted" data-region="text">You are unable to message this user</p>
                            </div>
                        </div>
                        <div class="p-sm-2" data-region="placeholder-container">
                            <div class="d-flex">
                                <div class="bg-pulse-grey w-100" style="height: 80px"></div>
                                <div class="mx-2 mb-2 align-self-end bg-pulse-grey" style="height: 20px; width: 20px"></div>
                            </div>
                        </div>
                        <div class="hidden position-absolute z-index-1" data-region="confirm-dialogue-container" style="top: -1px; bottom: 0; right: 0; left: 0; background: rgba(0,0,0,0.3);"></div>
                    </div>                    <div data-region="view-overview" class="text-center">
                        <a href="http://putrablastdk.upm.edu.my/message/index.php">
                            See all
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <!-- Start Clients Logo section -->
        <!-- End Clients Logo section -->
        <!-- Start Footer Section -->
        <footer id="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 footersection">
                        <img class="footer-logo" src="//putrablastdk.upm.edu.my/pluginfile.php/1/theme_klassroom/footerlogo/1668789993/Logo%20Putablast%20copy3%20%283%29.png" alt="footer-logo">
                        <p>
                            Centre for Academic Development (CADe) and Universiti Putra Malaysia (UPM) shall not be liable for any loss or damage caused by the usage of any information obtained from this website.

                            Copyright 2016 Centre for Academic Development .
                            Universiti Putra Malaysia - All Rights Reserved
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footersection">
                        <ul>
                            <li>
                                <h5>Internal Link</h5>
                                <ul class="common">
                                    <li><a href="http://www.upm.edu.my">Universiti Putra Malaysia</a></li>
                                    <li><a href="http://cade.upm.edu.my">Centre for Academic Development</a></li>
                                    <li><a href="http://akademik.upm.edu.my">Division of Admission and Division of Academic Governance</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footersection">
                        <ul>
                            <li>
                                <ul class="common">
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footersection">
                        <ul>
                            <li>
                                <ul class="common">
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="bottom-footer">
                    <div id="course-footer"></div>
                    <!-- Start Custom Menu -->
                    <nav class="nav navbar-nav d-md-none" aria-label="Custom menu">
                        <ul class="list-unstyled pt-3">
                        </ul>
                    </nav>
                    <!-- End Custom Menu-->
                    <div class="tool_dataprivacy"><a href="http://putrablastdk.upm.edu.my/admin/tool/dataprivacy/summary.php">Data retention summary</a></div>
                    <script>//<![CDATA[
var require = {
    baseUrl : 'http://putrablastdk.upm.edu.my/lib/requirejs.php/1668789993/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'http://putrablastdk.upm.edu.my/lib/javascript.php/1668789993/lib/jquery/jquery-3.5.1.min',
        jqueryui: 'http://putrablastdk.upm.edu.my/lib/javascript.php/1668789993/lib/jquery/ui-1.12.1/jquery-ui.min',
        jqueryprivate: 'http://putrablastdk.upm.edu.my/lib/javascript.php/1668789993/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]></script>
                    <script src="http://putrablastdk.upm.edu.my/lib/javascript.php/1668789993/lib/requirejs/require.min.js"></script>
                    <script>//<![CDATA[
M.util.js_pending("core/first");require(['core/first'], function() {
require(['core/prefetch']);
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp(function(videojs) {
        videojs.options.flash.swf = "http://putrablastdk.upm.edu.my/media/player/videojs/videojs/video-js.swf";
videojs.addLanguage('en', {
  "Audio Player": "Audio Player",
  "Video Player": "Video Player",
  "Play": "Play",
  "Pause": "Pause",
  "Replay": "Replay",
  "Current Time": "Current Time",
  "Duration": "Duration",
  "Remaining Time": "Remaining Time",
  "Stream Type": "Stream Type",
  "LIVE": "LIVE",
  "Seek to live, currently behind live": "Seek to live, currently behind live",
  "Seek to live, currently playing live": "Seek to live, currently playing live",
  "Loaded": "Loaded",
  "Progress": "Progress",
  "Progress Bar": "Progress Bar",
  "progress bar timing: currentTime={1} duration={2}": "{1} of {2}",
  "Fullscreen": "Fullscreen",
  "Non-Fullscreen": "Non-Fullscreen",
  "Mute": "Mute",
  "Unmute": "Unmute",
  "Playback Rate": "Playback Rate",
  "Subtitles": "Subtitles",
  "subtitles off": "subtitles off",
  "Captions": "Captions",
  "captions off": "captions off",
  "Chapters": "Chapters",
  "Descriptions": "Descriptions",
  "descriptions off": "descriptions off",
  "Audio Track": "Audio Track",
  "Volume Level": "Volume Level",
  "You aborted the media playback": "You aborted the media playback",
  "A network error caused the media download to fail part-way.": "A network error caused the media download to fail part-way.",
  "The media could not be loaded, either because the server or network failed or because the format is not supported.": "The media could not be loaded, either because the server or network failed or because the format is not supported.",
  "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.": "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.",
  "No compatible source was found for this media.": "No compatible source was found for this media.",
  "The media is encrypted and we do not have the keys to decrypt it.": "The media is encrypted and we do not have the keys to decrypt it.",
  "Play Video": "Play Video",
  "Close": "Close",
  "Close Modal Dialog": "Close Modal Dialog",
  "Modal Window": "Modal Window",
  "This is a modal window": "This is a modal window",
  "This modal can be closed by pressing the Escape key or activating the close button.": "This modal can be closed by pressing the Escape key or activating the close button.",
  ", opens captions settings dialog": ", opens captions settings dialog",
  ", opens subtitles settings dialog": ", opens subtitles settings dialog",
  ", opens descriptions settings dialog": ", opens descriptions settings dialog",
  ", selected": ", selected",
  "captions settings": "captions settings",
  "subtitles settings": "subtitles settings",
  "descriptions settings": "descriptions settings",
  "Text": "Text",
  "White": "White",
  "Black": "Black",
  "Red": "Red",
  "Green": "Green",
  "Blue": "Blue",
  "Yellow": "Yellow",
  "Magenta": "Magenta",
  "Cyan": "Cyan",
  "Background": "Background",
  "Window": "Window",
  "Transparent": "Transparent",
  "Semi-Transparent": "Semi-Transparent",
  "Opaque": "Opaque",
  "Font Size": "Font Size",
  "Text Edge Style": "Text Edge Style",
  "None": "None",
  "Raised": "Raised",
  "Depressed": "Depressed",
  "Uniform": "Uniform",
  "Dropshadow": "Dropshadow",
  "Font Family": "Font Family",
  "Proportional Sans-Serif": "Proportional Sans-Serif",
  "Monospace Sans-Serif": "Monospace Sans-Serif",
  "Proportional Serif": "Proportional Serif",
  "Monospace Serif": "Monospace Serif",
  "Casual": "Casual",
  "Script": "Script",
  "Small Caps": "Small Caps",
  "Reset": "Reset",
  "restore all settings to the default values": "restore all settings to the default values",
  "Done": "Done",
  "Caption Settings Dialog": "Caption Settings Dialog",
  "Beginning of dialog window. Escape will cancel and close the window.": "Beginning of dialog window. Escape will cancel and close the window.",
  "End of dialog window.": "End of dialog window.",
  "{1} is loading.": "{1} is loading.",
  "Exit Picture-in-Picture": "Exit Picture-in-Picture",
  "Picture-in-Picture": "Picture-in-Picture"
});

    });
});;
M.util.js_pending('block_navigation/navblock'); require(['block_navigation/navblock'], function(amd) {amd.init("15042"); M.util.js_complete('block_navigation/navblock');});;
M.util.js_pending('block_settings/settingsblock'); require(['block_settings/settingsblock'], function(amd) {amd.init("15043", null); M.util.js_complete('block_settings/settingsblock');});;

require(
[
    'jquery',
    'block_timeline/main',
],
function(
    $,
    Main
) {
    var root = $('#block-timeline-63970cb1ca13363970cb1bd4ac11');
    Main.init(root);
});
;
M.util.js_pending('block_online_users/change_user_visibility'); require(['block_online_users/change_user_visibility'], function(amd) {amd.init(); M.util.js_complete('block_online_users/change_user_visibility');});;

require(['jquery'], function($) {
    require(['theme_boost/bootstrap/popover'], function() {
        var target = $("#calendar-day-popover-link-1-2022-345-63970cb1ef5f963970cb1bd4ac12");
        target.popover({
            content: function() {
                var source = target.next().find("> *:not('.hidden')");
                var content = $('<div>');

                if (source.length) {
                    content.html(source.clone(false));
                } else {
                    content.html(target.data('alternate'));
                }

                return content.html();
            }
        });
    });
});
;

require([
    'jquery',
    'core_calendar/selectors',
    'core_calendar/events',
], function(
    $,
    CalendarSelectors,
    CalendarEvents
) {

    $('body').on(CalendarEvents.filterChanged, function(e, data) {
        M.util.js_pending("month-mini-63970cb1ef5f963970cb1bd4ac12-filterChanged");
        // A filter value has been changed.
        // Find all matching cells in the popover data, and hide them.
        $("#month-mini-2022-12-63970cb1ef5f963970cb1bd4ac12")
            .find(CalendarSelectors.popoverType[data.type])
            .toggleClass('hidden', !!data.hidden);
        M.util.js_complete("month-mini-63970cb1ef5f963970cb1bd4ac12-filterChanged");
    });
});
;

require(['jquery', 'core_calendar/calendar_mini'], function($, CalendarMini) {
    CalendarMini.init($("#calendar-month-2022-12-63970cb1ef5f963970cb1bd4ac12"), !0);
});
;

require([
    'jquery',
    'core_calendar/selectors',
    'core_calendar/events',
], function(
    $,
    CalendarSelectors,
    CalendarEvents
) {
    var root = $('#month-upcoming-mini-63970cb20daa263970cb1bd4ac13');

    $('body').on(CalendarEvents.filterChanged, function(e, data) {
        M.util.js_pending("month-upcoming-mini-63970cb20daa263970cb1bd4ac13-filterChanged");

        // A filter value has been changed.
        // Find all matching cells in the popover data, and hide them.
        var target = $("#month-upcoming-mini-63970cb20daa263970cb1bd4ac13").find(CalendarSelectors.eventType[data.type]);

        var transitionPromise = $.Deferred();
        if (data.hidden) {
            transitionPromise.then(function() {
                return target.slideUp('fast').promise();
            });
        } else {
            transitionPromise.then(function() {
                return target.slideDown('fast').promise();
            });
        }

        transitionPromise.then(function() {
            M.util.js_complete("month-upcoming-mini-63970cb20daa263970cb1bd4ac13-filterChanged");

            return;
        });

        transitionPromise.resolve();
    });
});
;

require(['jquery', 'core_calendar/calendar_view'], function($, CalendarView) {
    CalendarView.init($("#calendar-upcoming-block-63970cb20daa263970cb1bd4ac13"), 'upcoming');
});
;

require(
[
    'jquery',
    'block_recentlyaccessedcourses/main'
],
function(
    $,
    Main
) {
    var root = $('#block-recentlyaccessedcourses-63970cb21025163970cb1bd4ac14');
    var userid = root.attr('data-userid');

    Main.init(userid, root);
});
;

require(
[
    'jquery',
    'block_myoverview/main',
],
function(
    $,
    Main
) {
    var root = $('#block-myoverview-63970cb210da363970cb1bd4ac15');
    Main.init(root);
});
;

require(['jquery', 'message_popup/notification_popover_controller'], function($, controller) {
    var container = $('#nav-notification-popover-container');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

require(
[
    'jquery',
    'core_message/message_popover'
],
function(
    $,
    Popover
) {
    var toggle = $('#message-drawer-toggle-63970cb2138c763970cb1bd4ac26');
    Popover.init(toggle);
});
;

require(['jquery', 'core_message/message_drawer'], function($, MessageDrawer) {
    var root = $('#message-drawer-63970cb214ca963970cb1bd4ac27');
    MessageDrawer.init(root, '63970cb214ca963970cb1bd4ac27', false);
});
;

require(['theme_boost/loader']);
;
M.util.js_pending('core/notification'); require(['core/notification'], function(amd) {amd.init(11744, [], true); M.util.js_complete('core/notification');});;
M.util.js_pending('core/log'); require(['core/log'], function(amd) {amd.setConfig({"level":"warn"}); M.util.js_complete('core/log');});;
M.util.js_pending('core/page_global'); require(['core/page_global'], function(amd) {amd.init(); M.util.js_complete('core/page_global');});M.util.js_complete("core/first");
});
//]]></script>
                    <script>//<![CDATA[
M.str = {"moodle":{"lastmodified":"Last modified","name":"Name","error":"Error","info":"Information","yes":"Yes","no":"No","viewallcourses":"View all courses","cancel":"Cancel","changesmadereallygoaway":"You have made changes. Are you sure you want to navigate away and lose your changes?","confirm":"Confirm","areyousure":"Are you sure?","closebuttontitle":"Close","unknownerror":"Unknown error","file":"File","url":"URL"},"repository":{"type":"Type","size":"Size","invalidjson":"Invalid JSON string","nofilesattached":"No files attached","filepicker":"File picker","logout":"Logout","nofilesavailable":"No files available","norepositoriesavailable":"Sorry, none of your current repositories can return files in the required format.","fileexistsdialogheader":"File exists","fileexistsdialog_editor":"A file with that name has already been attached to the text you are editing.","fileexistsdialog_filemanager":"A file with that name has already been attached","renameto":"Rename to \"{$a}\"","referencesexist":"There are {$a} links to this file","select":"Select"},"admin":{"confirmdeletecomments":"You are about to delete comments, are you sure?","confirmation":"Confirmation"},"debug":{"debuginfo":"Debug info","line":"Line","stacktrace":"Stack trace"},"langconfig":{"labelsep":": "}};
//]]></script>
                    <script>//<![CDATA[
(function() {Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"MathJax.Hub.Config({\r\n    config: [\"Accessible.js\", \"Safe.js\"],\r\n    errorSettings: { message: [\"!\"] },\r\n    skipStartupTypeset: true,\r\n    messageStyle: \"none\"\r\n});\r\n","lang":"en"});
});
Y.use("moodle-theme_klassroom-colourswitcher",function() {M.theme_klassroom.initColourSwitcher({"div":"#colourswitcher"});
});
M.util.help_popups.setup(Y);
 M.util.js_pending('random63970cb1bd4ac28'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random63970cb1bd4ac28'); });
})();
//]]></script>

                </div> <style>
                        #sty{
                            float:right;
                            display: block;
                        }
                    </style>
              
                <!-- Start Back To Top -->
                <div id="backtotop" style="display: block;">
                   
                  

                    <a class="scrollup" href="javascript:void(0);" title="Go to top" style="">
                    </a>
            
                </div>  
                <!-- End Back To Top -->
            </div>
        </footer>
        <!-- End Footer Section   <button class="btn btn-lg btn-success" id="sty"><i class="bi bi-qr-code"></i>
                    <span class="glyphicon glyphicon-earphone push-right"></span></button>-->
    </div><div id="yui3-css-stamp" style="position: absolute !important; visibility: hidden !important" class=""></div>

    <script type="text/javascript">var categorytagline = "All Our Available Categories Listed Below.";
    var allcoursestagline = "All Our Available Courses Listed Below.";
    var mycoursestagline = "You Can Enroll Wide Range Of Courses In This Canvas To Full Fill Your Dreams.";
    var internalbannertagline = "The only source of knowledge is experience.";</script>

    <div></div>
</body>
</html>