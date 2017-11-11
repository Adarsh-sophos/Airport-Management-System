<?php session_start(); ?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Visual Data</title>
    <link href="widget_data/bootstrap.css" rel="stylesheet">
    <link href="widget_data/bootstrap-responsive.css" rel="stylesheet">
    <script type="text/javascript" async="" src="wix_cached_view_data_003/ga.js"></script><script type="text/javascript" src="widget_data/jquery.js"></script>



    <link href="widget_data/widget.css" rel="stylesheet" type="text/css">
    <script src="widget_data/widget.js"></script>

    <style wix-style="">
        body{
            margin:0;padding:0;background-color: transparent;
        }

        #theTable > tbody{
            font:normal normal normal 20px/1.5em brandon-grot-w01-light,sans-serif;
        }
        #theTable > thead{
            font:normal normal normal 24px/1.46em brandon-grot-w01-light,sans-serif;
        }
        #theTable > thead > tr > th{
            color:#393F44;
            background-color: #D8D8D8;
            background-image: none;
            vertical-align: top;
        }
        #theTable > tbody > tr {
            color:#000000;
        }
        .footable-row-detail-name {
            color:#393F44;
            background-color: #D8D8D8;
            border: 1px solid #FFFFFF;
            font:normal normal normal 24px/1.46em brandon-grot-w01-light,sans-serif;
        }
        body{
            border-color: #FFFFFF;
        }
        #theTable.isInnerColor{
            border-top-color: #FFFFFF;
            border-bottom-color: #FFFFFF;

        }
        #theTable.isInnerColor{
            border-right:none;
            border-left:none;
        }
        .footable-row-detail-value {
            border: 1px solid #FFFFFF;
            font:normal normal normal 20px/1.5em brandon-grot-w01-light,sans-serif;
        }
        .footable-sort-indicator{
            font:normal normal normal 20px/1.5em brandon-grot-w01-light,sans-serif;
        }

        tr.footableOdd + tr.footable-row-detail > td > div > table > tbody > tr > td.footable-row-detail-value{
            background-color: #FFFFFF
         }

        tr.footableEven + tr.footable-row-detail > td > div > table > tbody > tr > td.footable-row-detail-value{
            background-color: #FFFFFF;
        }

        .footableOdd {
            background-color: #FFFFFF;
            }

        .footableEven {
            background-color: #FFFFFF;
        }


        .footable>tbody>tr:hover {
            background-color: #d3c179;
        }

        .footable,
        .footable> thead > tr > th,
        .footable > tbody > tr > td {
            border-color: #FFFFFF;
            border-left-color: #FFFFFF;
        }

        .footable .pagination > ul > li > a{
            border-color: #FFFFFF;
        }

        .filter> thead > tr > th,
        .footable > thead > tr > th,
        .footable > thead > tr > td {
            background-color: #FFFFFF;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#FFFFFF), to(#D8D8D8));
            background-image: -webkit-linear-gradient(top, #FFFFFF, #D8D8D8);
            background-image: -moz-linear-gradient(top, #FFFFFF, #D8D8D8);
            background-image: -ms-linear-gradient(top, #FFFFFF, #D8D8D8);
            background-image: -o-linear-gradient(top, #FFFFFF, #D8D8D8);
            background-image: linear-gradient(to bottom, #FFFFFF, #D8D8D8);
        }
        .footable > thead > tr > th,
        .footable > thead > tr > td {
            background-color: #D8D8D8;
        }


        .footable > tfoot > tr > th,
        .footable > tfoot > tr > td {
            background-color: #FFFFFF;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#D8D8D8), to(#FFFFFF));
            background-image: -webkit-linear-gradient(top, #D8D8D8, #FFFFFF);
            background-image: -moz-linear-gradient(top, #D8D8D8, #FFFFFF);
            background-image: -ms-linear-gradient(top, #D8D8D8, #FFFFFF);
            background-image: -o-linear-gradient(top, #D8D8D8, #FFFFFF);
            background-image: linear-gradient(to bottom, #D8D8D8, #FFFFFF);
        }

        .footable .pagination > ul > .disabled > span,
        .footable .pagination > ul > .disabled > a,
        .footable .pagination > ul > .disabled > a:hover,
        .footable .pagination > ul > .disabled > a:focus {
            background-color: #FFFFFF;
            }
        .footable .pagination > ul > li > a:hover,
        .footable .pagination > ul > li > a:focus,
        .footable .pagination > ul > .active > a,
        .footable .pagination > ul > .active > span {
            background-color: #9A9FA5;
        }
        .preview,.error {
            display:none;
            background-color:white;
        }
        .option {
            width: 120px;
        }
        .searchBox{
            width: 147px;
            height: 23px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            background-color: rgba(255,255,255,0.8);
            color:#000;/*#393F44;*/
            -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.4);
            -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,.4);
            box-shadow: inset 0 1px 2px rgba(0,0,0,.4);
            margin-top: 1px;
            outline: 0;
            border:0;
            padding: 0 6px;
            font-size: 12px;
        }
        ::-webkit-input-placeholder {
            color:#000;/*#393F44;*/
            opacity:0.5;
        }

        :-moz-placeholder { /* Firefox 18- */
            color:#000;
            opacity:0.5;
        }

        ::-moz-placeholder {  /* Firefox 19+ */
            color:#000;
            opacity:0.5;
        }

        :-ms-input-placeholder {
            color:#000;
            opacity:0.5;
        }
         /*       .filter{
            border-collapse: separate;
            border-spacing: 0;
            border-width: 1px 1px 0 1px;
            border-style: solid;
            color: #444444;
            background: #ffffff;
            margin :0;
        }
*/
        #tableWrapper::-webkit-scrollbar{-webkit-appearance:none;width:10px;height:10px;border:1px solid #FFFFFF}
        #tableWrapper::-webkit-scrollbar-track{background-color:#FFFFFF}
        #tableWrapper::-webkit-scrollbar-corner{background-color:#FFFFFF}
        #tableWrapper::-webkit-scrollbar-thumb{border-radius:5px;background-color:#FFFFFF;border:solid 1px #FFFFFF;}
/*
        #tableWrapper::-webkit-scrollbar-thumb:horizontal{border-color:#FFFFFF}
*/
        #tableWrapper::-webkit-scrollbar-thumb:hover{background-color:#d3c179;}



    </style>


     
   
<style wix-style="">.Title{ font:normal normal normal 32px/1.25em brandon-grot-w01-light,sans-serif; } .Menu{ font:normal normal normal 14px/1.43em "open sans",sans-serif; } .Page-title{ font:normal normal normal 40px/1.25em brandon-grot-w01-light,sans-serif; } .Heading-XL{ font:normal normal normal 88px/1.14em brandon-grot-w01-light,sans-serif; } .Heading-L{ font:normal normal normal 72px/1.18em brandon-grot-w01-light,sans-serif; } .Heading-M{ font:normal normal normal 56px/1.25em brandon-grot-w01-light,sans-serif; } .Heading-S{ font:normal normal normal 48px/1.25em brandon-grot-w01-light,sans-serif; } .Body-L{ font:normal normal normal 24px/1.46em brandon-grot-w01-light,sans-serif; } .Body-M{ font:normal normal normal 20px/1.5em brandon-grot-w01-light,sans-serif; } .Body-S{ font:normal normal normal 16px/1.55em brandon-grot-w01-light,sans-serif; } .Body-XS{ font:normal normal normal 14px/1.43em "open sans",sans-serif; } }</style><link type="text/css" rel="stylesheet" href="languages.css"><style></style></head>

<body>
<div class="error">
    <div id="errorTitle" style="font-weight:bold">&nbsp;</div>
    <div id="errorData">&nbsp;</div>
</div>
<div id="chartTableDiv" style="">
<table id="filterTable" class="filter outerBorder" style="width:100%;">
    <thead><tr><th colspan="100%" style="height:37px;text-align: center;">
        
    </th></tr></thead>
</table>
</div>
<div id="tableWrapper" style="overflow: auto; max-height: 631px;"><table id="theTable" class="footable table outerBorder footable-loaded isInnerColor" style="width: 100%; margin: 0px;">
<thead><tr><th id="thCol0" data-type="numeric">Flight Number</th><th id="thCol0">Airlines</th><th id="thCol1" data-type="numeric">Departed To</th><th id="thCol2" data-type="numeric">Departure Date</th><th id="thCol2" data-type="numeric">Scheduled</th><th id="thCol3" data-type="numeric">Status</th><th id="thCol4" data-type="numeric">Terminal</th><th id="thCol5" data-type="numeric">Details</th></tr></thead><tbody>
    <?php require("departures_table.php") ?>
</tbody></table></div>
<table id="pagerFilter" class="footable footer outerBorder" style="width: 100%; margin: 0px;">
    <tfoot id="noPager"><tr><td colspan="100%" style="height:26px;"></td></tr></tfoot>
</table>
<div id="chartDiv" tyle="display:none"></div>


<script type="text/javascript" src="widget_data/wix.js"></script>

</body></html>