<?php
$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
$description=$postObj->Description;
$alarmContent=$postObj->AlarmContent;
$timeStamp=$postObj->TimeStamp;
?>