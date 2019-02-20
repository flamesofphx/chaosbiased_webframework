<?php
#Sample Get Global Site Settings for simply session in flamesofphx.com
#TODO: Session Encryption, and handler, and Make this an MVC Application (Really need that for gallery site is getting complex, and not followable view templates)...
$dsn = 'mysql:dbname=YourDBNAME;host=YourHostLocation';
$password = 'YourSuperSecurePassword';
$user = 'DatabaseUserName';
try {
    $Site_Settings = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    die('Unable To Connect to Primary Database!!');
}
session_start();
$sql = "Select * FROM global_settings";
$settings = $Site_Settings->query($sql);
foreach($settings as $setting)
{
	$realkey = $setting['Global_Setting_Name'];
	$_SESSION[$realkey] = $setting['Global_Setting_Value'];
}

/*
CREATE TABLE `global_settings` (
	`Global_Settings_ID` INT(11) NOT NULL AUTO_INCREMENT,
	`Global_Setting_Name` TEXT NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`Global_Setting_Value` MEDIUMTEXT NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`Global_Setting_LastModified` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`Global_Settings_ID`),
	UNIQUE INDEX `Global_Setting_Name` (`Global_Setting_Name`(64))
)
COMMENT='Global Settings for Flamesofphx Sites'
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB
AUTO_INCREMENT=10002
;

*/
// Notes:
// I always start my autonumbers at 10000 (Unless told otherwise), and usually add in two test values (Especially, if the code has a test/disabled field, that can make it so it's values are ignoreable). 
// I typically unless told otherwise do the AutoNumber Number name as <Upper_Camel_Case_TableName_ID>
// I also create and cascade on update TimeStamp for all tables, As it can be good for tracing, tracking, and even in worst case repair, if it wasn't damaged.
?>

