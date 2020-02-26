<?php

spl_autoload_register(function($name) {
	$fl = __DIR__ . DIRECTORY_SEPARATOR . "libsdk" . DIRECTORY_SEPARATOR . $name . ".php";

	echo "Checking autoload: $fl\n";

	if (file_exists($fl)) {
		echo "Auto-loading $fl\n";
		require_once $fl;
	}
});

spl_autoload_register(function($name) {
	$fl = getenv("PHP_SDK_ROOT_PATH") . DIRECTORY_SEPARATOR . "pgo" . DIRECTORY_SEPARATOR . "cases" . DIRECTORY_SEPARATOR . $name . ".php";

	echo "Checking autoload: $fl\n";

	if (file_exists($fl)) {
		echo "Auto-loading $fl\n";
		require_once $fl;
	}
});

spl_autoload_register(function($name) {
	$fl = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "php-curl" . DIRECTORY_SEPARATOR . "src"  . DIRECTORY_SEPARATOR . $name . ".php";

	echo "Checking autoload: $fl\n";

	if (file_exists($fl)) {
		echo "Auto-loading $fl\n";
		require_once $fl;
	}
});

/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * End:
 * vim600: sw=4 ts=4 fdm=marker
 * vim<600: sw=4 ts=4
 */
