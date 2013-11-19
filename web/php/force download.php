<?php
	header("Content-Type: application/octet-stream");
	header("Content-Disposition: attachment; filename=\"forced.file\"");
	readfile("source.file");
	exit;
?>