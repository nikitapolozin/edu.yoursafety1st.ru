<?php
define("_MODULE_SECURITY_MODULESECURITY", "Модуль безопасности"); //Security module
define("_MODULE_SECURITY_LOCALISSUE", "Критическая проблема безопасности"); //Critical security issue
define("_MODULE_SECURITY_INSTALLATIONFOLDERSTILLEXISTS", "Установочная папка, www/install, все еще существует");//Installation folder, www/install, still exists
define("_MODULE_SECURITY_MAGICQUOTESGPCISON", "параметр php ini 'magic_quotes_gpc' включен"); //php ini setting 'magic_quotes_gpc' is ON
define("_MODULE_SECURITY_DEFAULTACCOUNTSSTILLEXIST", "Учетные записи по умолчанию с учетными данными по умолчанию, «студент/student» и «профессор/professor» все еще существуют");//Default accounts with default credentials, <b>student/student</b> and <b>professor/professor</b> still exist
define("_MODULE_SECURITY_PAGE", "Подробности");//Details
define("_MODULE_SECURITY_SOMEFILESHAVECHANGEDSINCELASTTIME", "системные файлы %x изменились в файловой системе");//%x system files have changed in the filesystem
define("_MODULE_SECURITY_NEWFILESFOUND", "%x новые PHP-файлы, найденные в файловой системе");//%x new PHP files found in the filesystem
define("_MODULE_SECURITY_ADDTOIGNORELIST", "Добавить в список игнорирования");//Add to ignore list
define("_MODULE_SECURITY_MOREINFO", "Дополнительная информация");//More information
define("_MODULE_SECURITY_RECHECKLOCALFILES", "Перепроверьте локальные файлы");//Recheck local files
define("_MODULE_SECURITY_RECHECKSERVERFILES", "Снова получить список с сервера");//Retrieve list from server again
define("_MODULE_SECURITY_RESETIGNORELIST", "Сброс списка игнорирования");//Reset ignore list
define("_MODULE_SECURITY_DELETEINSTALLDIRECTORY", "Удалить каталог установки");//Delete installation directory
define("_MODULE_SECURITY_DEACTIVATEDEFAULTACCOUNTS", "Деактивировать учетные записи по умолчанию");//Deactivate default accounts
define("_MODULE_SECURITY_FILECOULDNOTBEDELETED", "Файл не удалось удалить. Может быть, его больше не существует?");//The file could not be deleted. Perhaps it doesn't exist anymore?
define("_MODULE_SECURITY_RECHECKFILES", "Проверьте файлы еще раз");//Check files again
define("_MODULE_SECURITY_RESETIGNORELIST", "Сброс списка игнорирования");//Reset ignore list
define("_MODULE_SECURITY_THELISTISEMTPY", "Список пуст");//
define("_MODULE_SECURITY_COULDNOTRETRIEVECHECKSUM", "Не удалось получить список удаленных контрольных сумм, вероятно, ваша версия не поддерживается");//The remote checksum list could not be retrieved, probably your version is not supported
define("_MODULE_SECURITY_WHATSTHERISK", "В чем заключается риск?");//What's the risk?
define("_MODULE_SECURITY_INSTALLATIONRISKEXPLANATION", "Наличие каталога установки означает, что любой желающий может выполнить повторную установку вашей системы поверх существующей базы данных, и в этом случае вы потеряете все свои данные");//Having the installation directory in place means that anyone can perform a re-installation of your system, on top of your existing database, in which case you will lose all of your data
define("_MODULE_SECURITY_WHATCANIDO", "Что я могу сделать?");//What can I do?
define("_MODULE_SECURITY_MAGICQUOTESEXPLANATION", "Это устаревший параметр PHP, который несовместим с системой. Если для этого параметра установлено значение вкл, то любые данные, содержащие кавычки, не будут вставлены в базу данных");//This is a deprecated PHP setting that is not compatible with the system. Having this set to &quot;on&quot; will prevent any data that contains a quote ' to be inserted to the database
define("_MODULE_SECURITY_MAGICQUOTESSOLUTIONEXPLANATION", "Обычно система автоматически пытается отключить этот параметр. Если у вас есть доступ к файлу php.ini сервера, найдите 'magic_quotes_gpc' и отключите его (не забудьте после этого перезапустить веб-сервер). Если у вас нет доступа к этому файлу или вы не знаете, что делать, вам следует обратиться к своему хостинг-провайдеру за информацией о том, как отключить его в вашей системе");//Normally the system automatically tries to disable this setting. If you have access to the server's php.ini file, search for 'magic_quotes_gpc' and disable it (remember to restart the web server afterwards). If you don't have access to this file, or you don't know what to do, you should contact your hosting provider for information on how to disable it on your system
define("_MODULE_SECURITY_DEFAULTACCOUNTSEXPLANATION", "В ранних версиях системы использовались учетные записи по умолчанию со стандартными учетными данными. Злоумышленники могут получить доступ к системе, если эти учетные записи все еще активны");//Early versions of the system used to use default accounts with standard credentials. Malicious users can gain access to the system if these accounts are still active
define("_MODULE_SECURITY_CHANGEDFILESEXPLANATION", "Некоторые файлы отличаются от своих оригинальных аналогов. Если вы сами их не изменили, возможно, это признак того, что система была скомпрометирована (взломана)");//Some files are different than their original counterparts. If you haven't changed them yourself, perhaps it's a sign that the system has bee compromised (hacked).
define("_MODULE_SECURITY_CHANGEDFILESSOLUTIONEXPLANATIONPART2", "или загрузите любой из них. Вам рекомендуется заменить их оригинальными копиями из zip-архива текущей версии. Основываясь на вашей версии и издании, это было бы:");//or download any of them. You are recommended to replace them with their original counterparts from the current version's zip archive. Based on your version and edition, that would be:
define("_MODULE_SECURITY_CHANGEDFILESSOLUTIONEXPLANATIONPART1", "Ниже приведен список этих файлов. Используйте маркеры для добавления в");//Below is a list of these files. Use the handles to add to
define("_MODULE_SECURITY_IGNORELIST", "список игнорирования");//ignore list
define("_MODULE_SECURITY_NEWFILESEXPLANATIONPART1", "В вашей системе есть некоторые PHP-файлы, которые не включены в исходный zip-файл. Это может означать, что либо:");//There are some PHP files on your system that where not included on the original zip file. This may mean that either:
define("_MODULE_SECURITY_NEWFILESEXPLANATIONPART2", "Это старые файлы из предыдущих версий, и в этом случае их следует удалить");//They are old files from previous versions, in which case they should be deleted
define("_MODULE_SECURITY_NEWFILESEXPLANATIONPART3", "Они принадлежат модулям, которые не являются частью исходного дистрибутива. Они будут находиться в папке modules.");//They belong to modules that are not part of the original distribution. These would be under the &quot;www/modules&quot; folder
define("_MODULE_SECURITY_NEWFILESEXPLANATIONPART4", "Они были помещены туда кем-то другим. Если вы не установили их сами, возможно, это признак того, что система была скомпрометирована (взломана).");//They where put there from somebody else. If you haven't put them yourself, perhaps it's a sign that the system has bee compromised (hacked).
define("_MODULE_SECURITY_NEWFILESSOLUTIONEXPLANATION", ", загрузите или удалите любой из этих файлов");//download or delete any of these files
define("_MODULE_SECURITY_IGNOREALL", "Игнорировать все");//Ignore all
?>
