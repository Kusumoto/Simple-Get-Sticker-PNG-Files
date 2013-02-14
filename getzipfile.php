<?php
/*
Line Sticker Downloader by Kusumoto
http://kusumoto.co
Version 1.0
*/

//require line sticker id
$sticker_id = $_REQUEST['sticker_id'];
//check line sticker id
if (empty($sticker_id)) {
	echo "Error API";
	exit;
	}
//get sticker content
header('Content-type: application/zip');
header('Content-Disposition: attachment; filename="line_sticker_by_admin_k_' . $sticker_id . '.zip"');
echo file_get_contents('http://dl.stickershop.line.naver.jp/products/0/0/3/' . $sticker_id . '/iphone/stickers@2x.zip');
?>