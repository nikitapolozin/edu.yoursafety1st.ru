<?php
define("_MODULE_SECURITY_MODULESECURITY", "Модуль безопасности"); // Security module
define("_MODULE_SECURITY_LOCALISSUE", "Критическая проблема безопасности"); // Critical security issue
define("_MODULE_SECURITY_INSTALLATIONFOLDERSTILLEXISTS", "Installation folder, www/install, still exists");
define("_MODULE_SECURITY_MAGICQUOTESGPCISON", "php ini настройки 'magic_quotes_gpc' ВКЛ"); // php ini setting 'magic_quotes_gpc' is ON
define("_MODULE_SECURITY_DEFAULTACCOUNTSSTILLEXIST", "Учётные записи «по-умолчанию» с учетными данными по умолчанию, <b>студент/студент</b> и <b>профессор/профессор</b> все еще существуют"); // Default accounts with default credentials, <b>student/student</b> and <b>professor/professor</b> still exist
define("_MODULE_SECURITY_PAGE", "Подробности"); // Details
define("_MODULE_SECURITY_SOMEFILESHAVECHANGEDSINCELASTTIME", "%x system files have changed in the filesystem");
define("_MODULE_SECURITY_NEWFILESFOUND", "%x new PHP files found in the filesystem");
define("_MODULE_SECURITY_ADDTOIGNORELIST", "Add to ignore list");
define("_MODULE_SECURITY_MOREINFO", "More information");
define("_MODULE_SECURITY_RECHECKLOCALFILES", "Recheck local files");
define("_MODULE_SECURITY_RECHECKSERVERFILES", "Retrieve list from server again");
define("_MODULE_SECURITY_RESETIGNORELIST", "Reset ignore list");
define("_MODULE_SECURITY_DELETEINSTALLDIRECTORY", "Delete installation directory");
define("_MODULE_SECURITY_DEACTIVATEDEFAULTACCOUNTS", "Deactivate default accounts");
define("_MODULE_SECURITY_FILECOULDNOTBEDELETED", "The file could not be deleted. Perhaps it doesn't exist anymore?");
define("_MODULE_SECURITY_RECHECKFILES", "Check files again");
define("_MODULE_SECURITY_RESETIGNORELIST", "Reset ignore list");
define("_MODULE_SECURITY_THELISTISEMTPY", "The list is empty");
define("_MODULE_SECURITY_COULDNOTRETRIEVECHECKSUM", "The remote checksum list could not be retrieved, probably your version is not supported");
define("_MODULE_SECURITY_WHATSTHERISK", "What's the risk?");
define("_MODULE_SECURITY_INSTALLATIONRISKEXPLANATION", "Having the installation directory in place means that anyone can perform a re-installation of your system, on top of your existing database, in which case you will lose all of your data");
define("_MODULE_SECURITY_WHATCANIDO", "What can I do?");
define("_MODULE_SECURITY_MAGICQUOTESEXPLANATION", "This is a deprecated PHP setting that is not compatible with the system. Having this set to &quot;on&quot; will prevent any data that contains a quote ' to be inserted to the database");
define("_MODULE_SECURITY_MAGICQUOTESSOLUTIONEXPLANATION", "Normally the system automatically tries to disable this setting. If you have access to the server's php.ini file, search for 'magic_quotes_gpc' and disable it (remember to restart the web server afterwards). If you don't have access to this file, or you don't know what to do, you should contact your hosting provider for information on how to disable it on your system");
define("_MODULE_SECURITY_DEFAULTACCOUNTSEXPLANATION", "Early versions of the system used to use default accounts with standard credentials. Malicious users can gain access to the system if these accounts are still active");
define("_MODULE_SECURITY_CHANGEDFILESEXPLANATION", "Some files are different than their original counterparts. If you haven't changed them yourself, perhaps it's a sign that the system has bee compromised (hacked).");
define("_MODULE_SECURITY_CHANGEDFILESSOLUTIONEXPLANATIONPART2", "or download any of them. You are recommended to replace them with their original counterparts from the current version's zip archive. Based on your version and edition, that would be:");
define("_MODULE_SECURITY_CHANGEDFILESSOLUTIONEXPLANATIONPART1", "Below is a list of these files. Use the handles to add to");
define("_MODULE_SECURITY_IGNORELIST", "ignore list");
define("_MODULE_SECURITY_NEWFILESEXPLANATIONPART1", "There are some PHP files on your system that where not included on the original zip file. This may mean that either:");
define("_MODULE_SECURITY_NEWFILESEXPLANATIONPART2", "They are old files from previous versions, in which case they should be deleted");
define("_MODULE_SECURITY_NEWFILESEXPLANATIONPART3", "They belong to modules that are not part of the original distribution. These would be under the &quot;www/modules&quot; folder");
define("_MODULE_SECURITY_NEWFILESEXPLANATIONPART4", "They where put there from somebody else. If you haven't put them yourself, perhaps it's a sign that the system has bee compromised (hacked).");
define("_MODULE_SECURITY_NEWFILESSOLUTIONEXPLANATION", ", download or delete any of these files");
define("_MODULE_SECURITY_IGNOREALL", "Ignore all");
?>
