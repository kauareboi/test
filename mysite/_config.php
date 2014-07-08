<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	"type" => 'MySQLDatabase',
	"server" => 'localhost',
	"username" => 'ss_test',
	"password" => 'ss_test',
	"database" => 'ss_test',
	"path" => '',
);

// Set the site locale
i18n::set_locale('en_US');