<?php
/**
 * MODx language File
 *
 * @author davaeron, german by Marc Hinse
 * @package MODx
 * @version 1.0
 * @translation
 * Filename:       /install/lang/german/german.inc.php
 * Language:       German
 * Encoding:       UTF-8
 */




$_lang['license'] = '<p class="title">MODx Lizenzvereinbarung.</p>
  <hr style="WIDTH: 90%; HEIGHT: 1px; TEXT-ALIGN: left">

  <h4>Sie m&uuml;ssen der Lizenz zustimmen bevor Sie mit der Installation fortfahren.</h4>

  <p>Die Software ist unter der GPL lizenziert. Das Benutzen der Software unterliegt den bestimmungen der GPL. Die GPL betrifft diese Software sowie Ihre Benutzung in folgender Weise:</p>

  <h4>Die GNU General Public License ist eine freie Software Lizenz.</h4>

  <p>Wie bei jeder freien Softwarelizenz haben Sie folgende Freiheiten:</p>

  <ul>
    <li>Die Freiheit, das Programm zu jedem Zweck zu benutzen.</li>

    <li>Die Freiheit das Programm zu studieren und es Ihren Bed&uuml;rfnissen anzupassen.</li>

    <li>Die Freiheit, Kopien des Programms zu verbreiten und so dem N&auml;chsten zu helfen.</li>

    <li>Die Freiheit, das Programm zu verbessern, weiter zu verbreiten und so der gesamten Nutzergemeinde zu helfen.</li>
  </ul>

  <p>Sie k&ouml;nnen diese Freiheiten aus&uuml;ben wenn Sie mit den Bedingungen der GNU GPL einverstanden erkl&auml;ren. Die Bedingungen finden Sie <a href="http://www.gnu.de/documents/gpl.de.html" target="_blank">hier</a>.</p>

  <p>Das oben stehende ist eine Zusammenfassung der GNU GPL. Wenn Sie fortfahren, stimmen Sie den Bestimmungen der GNU General Public Licence zu, nicht dem hier beschriebenen. Oben stehendes stellt
  nur eine Zusammenfassng dar, seine Richtigkeit kann nicht garantiert werden.&nbsp;Es wird dringend empfohlen, die&nbsp;<a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GNU General
  Public License</a> im Original zu lesen bevor Sie fortfahren, diese k&ouml;nnen Sie auch im heruntergeladenen Paket als Textdatei finden.</p>';
$_lang["encoding"] = 'utf-8';	//charset encoding for html header
$_lang["modx_install"] = 'MODx &raquo; Installation';
$_lang["loading"] = 'Laden...';
$_lang["Begin"] = 'Anfang';
$_lang["status_connecting"] = ' Verbindung zu Host: ';
$_lang["status_failed"] = 'fehlgeschlagen!';
$_lang["status_passed"] = 'In Ordnung - Datenbank ausgewählt';
$_lang["status_passed_server"] = 'In Ordung - Kollationen sind nun auswählbar';
$_lang["status_passed_database_created"] = 'In Ordnung - Datenbank erstellt';
$_lang["status_checking_database"] = 'Überprüfe Datenbank: ';
$_lang["status_failed_could_not_select_database"] = 'failed - could not select database';//translate this
$_lang["status_failed_could_not_create_database"] = 'fehlgeschlagen - konnte Datenbank nicht erstellen';
$_lang["status_failed_table_prefix_already_in_use"] = 'fehlgeschlagen - Tabellen Prefix bereits verwendet!';
$_lang["welcome_message_welcome"] = 'Willkommen beim MODx Installationsprogramm.';
$_lang["welcome_message_text"] = 'Dieses Programm wird Sie durch die Installation begleiten.';
$_lang["welcome_message_select_begin_button"] = 'Bitte klicken Sie auf `Anfang` um zu beginnen:';
$_lang["installation_mode"] = 'Installationsmodus';
$_lang["installation_new_installation"] = 'Neue Installation';
$_lang["installation_install_new_copy"] = 'Neue Kopie installieren von ';
$_lang["installation_install_new_note"] = 'Beachten Sie, dass diese Option alle Daten in der Datenbank überschreibt.';
$_lang["installation_upgrade_existing"] = 'Upgrade einer existierenden Installation';
$_lang["installation_upgrade_existing_note"] = 'Upgrade Ihrer Dateien und der Datenbank.';
$_lang["installation_upgrade_advanced"] = 'Upgrade Installation für Fortgeschrittene<br /><small>(ändere Datenbankkonfiguration)</small>';
$_lang["installation_upgrade_advanced_note"] = 'For fortgeschrittene Datenbank Administratoren oder bei Umzug auf Server mit einem anderen Datenbank Zeichensatz/Kollation. <b>Sie müssen Ihren vollständigen Datenkbanknamen, -Benutzer, -Passwort und -Verbindung/Kollation wissen.</b>';
$_lang["connection_screen_connection_information"] = 'Verbindungsinformation';
$_lang["connection_screen_server_connection_information"] = 'Serververbindungs- und Logininformation';
$_lang["connection_screen_server_connection_note"] = 'Bitte geben Sie den Datenbankserver, den Loginnamen sowie das Datenbankpasswort ein und testen Sie dann die Verbindung.';
$_lang["connection_screen_server_test_connection"] = 'Klicken Sie hier, um die Datenbankverbindung zu testen und die verfügbaren Kollationen aufzulisten.';
$_lang["connection_screen_database_connection_information"] = 'Datenbankinformationen';
$_lang["connection_screen_database_connection_note"] = 'Bitte geben Sie den Namen der Datenbank an, die Sie für MODx nutzen wollen. Falls die Datenbank nicht existiert, wird MODx sie erstellen. Dies kann fehlschlagen, falls Sie nicht die nötigen Rechte besitzen, selbst eine Datenbank zu erstellen. Bei Hostingangeboten sind die Datenbanken meist eingerichtet bzw. können in der Administrationsoberfläche des Hostingangebots erstellt werden. Notieren Sie diesen Namen und geben Sie ihn hier ein.';
$_lang["connection_screen_database_test_connection"] = 'Klicken Sie hier, um die Datenbank zu erstellen bzw. die Verbinding zu testen.';
$_lang["connection_screen_database_name"] = 'Datenbank Name:';
$_lang["connection_screen_table_prefix"] = 'Tabellen Prefix:';
$_lang["connection_screen_collation"] = 'Kollation:';
$_lang["connection_screen_character_set"] = 'Zeichensatz der Verbindung:';
$_lang["connection_screen_database_host"] = 'Datenbank host:';
$_lang["connection_screen_database_login"] = 'Datenbank Login Name:';
$_lang["connection_screen_database_pass"] = 'Datenbank Passwort:';
$_lang["connection_screen_default_admin_information"] = 'Administrator Informationen';
$_lang["connection_screen_default_admin_user"] = 'Standard Administrationskonto';
$_lang["connection_screen_default_admin_note"] = 'Bitte geben Sie weitere Details für Ihren Administrator-Account an. Sie können Ihren Namen angeben und vergessen Sie bitte nicht das frei wählbare Passwort.Diese Daten benötigen Sie für den Login in die Administrationsoberfläche von MODx, den Manager.';
$_lang["connection_screen_default_admin_login"] = 'Administrator Username:';
$_lang["connection_screen_default_admin_email"] = 'Administrator E-Mail:';
$_lang["connection_screen_default_admin_password"] = 'Administrator Passwort:';
$_lang["connection_screen_default_admin_password_confirm"] = 'Passwort bestätigen:';
$_lang["optional_items"] = 'Optionale Einstellungen';
$_lang["optional_items_note"] = 'Bitte wählen Sie Ihre Installationsoptionen und klicken Sie auf Install:';
$_lang["sample_web_site"] = 'Beispiel-Website';
$_lang["install_overwrite"] = 'Installieren/Überschreiben';
$_lang["sample_web_site_note"] = 'Beachten Sie, dass damit alle Dokumente und Ressourcen <b style=\"color:#CC0000\">überschrieben</b> werden.';
$_lang["checkbox_select_options"] = 'Checkbox Auswahlmöglichkeiten:';
$_lang["all"] = 'Alle';
$_lang["none"] = 'Keine';
$_lang["toggle"] = 'Umschalten';
$_lang["templates"] = 'Templates';
$_lang["install_update"] = 'Installation/Update';
$_lang["chunks"] = 'Chunks';
$_lang["modules"] = 'Module';
$_lang["plugins"] = 'Plugins';
$_lang["snippets"] = 'Snippets';
$_lang["preinstall_validation"] = 'Pre-install Prüfung';
$_lang["summary_setup_check"] = 'Das Programm führt einige Checks durch, um zu prüfen ob alles für die Installation bereit ist.';
$_lang["checking_php_version"] = "Überprüfe PHP-Version: ";
$_lang["failed"] = 'fehlgeschlagen!';
$_lang["ok"] = 'OK!';
$_lang["you_running_php"] = ' - Benutzte PHP Version ';
$_lang["modx_requires_php"] = ', und MODx benötigt PHP 4.1.0. oder höher';
$_lang["php_security_notice"] = '<legend>Sicherheitshinweis</legend><p>MODx wird mit Ihrer PHP Version wohl laufen, aber unter dieser PHP Version wird die Benutzung von MODx nicht empfohlen. Ihre Version von PHP ist angreifbar aufgrund verschiedener Sicherheitslöcher. Bitte upgraden Sie auf PHP 4.4.1. oder höher, was diese Lücken schließt. Bitte upgraden, es geht um Ihre Sicherheit.</p>';
$_lang["checking_registerglobals"] = 'Überprüfe ob Register_Globals ausgeschaltet sind: ';
$_lang["checking_registerglobals_note"] = 'Diese Konfiguration macht Ihre Website angreifbarer für Cross Site Scripting (XSS) Attacken. Sie sollten mit Ihrem Provider sprechen, ob diese Einstellung geändert werden kann, normalerweise gibt es drei Möglichkeiten: Ändern der globalen php.ini, Hinzufügen von Regeln zu der .htaccess Datei im Root Verzeichnis der MODx Installation, oder durch Hinzufügen einer angepassten php.ini in jedem Verzeichnis Ihrer MODx Installation. (das wären dann einige...). Das Funktionieren von MODx ist nicht von dieser Einstellung beeinträchtigt, aber fühlen Sie sich gewarnt.'; //Look at changing this to provide a solution.
$_lang["checking_sessions"] = 'Überprüfe ob Sessions sauber definiert sind: ';
$_lang["checking_if_cache_exist"] = 'Überprüfen ob Ordner <span class=\"mono\">assets/cache</span> existiert: ';
$_lang["checking_if_cache_writable"] = 'Überprüfen ob Ordner <span class=\"mono\">assets/cache</spanbeschreibbar ist: ';
$_lang["checking_if_cache_file_writable"] = 'Überprüfen ob die Datei <span class=\"mono\">assets/cache/siteCache.idx.php</span> beschreibbar ist: ';
$_lang["checking_if_cache_file2_writable"] = 'Überprüfen ob die Datei <span class=\"mono\">assets/cache/sitePublishing.idx.php</span> beschreibbar ist: ';
$_lang["checking_if_images_exist"] = 'Überprüfen ob Ordner <span class=\"mono\">assets/images</span> existiert: ';
$_lang["checking_if_images_writable"] = 'Überprüfen ob Ordner <span class=\"mono\">assets/images</span> beschreibbar ist: ';
$_lang["checking_if_export_exists"] = 'Überprüfen ob Ordner <span class=\"mono\">assets/export</span> existiert: ';
$_lang["checking_if_export_writable"] = 'Überprüfen ob Ordner <span class=\"mono\">assets/export</span> beschreibbar ist: ';
$_lang["checking_if_config_exist_and_writable"] = 'Überprüfen ob Datei <span class=\"mono\">manager/includes/config.inc.php</span> existiert und beschreibbar ist: ';
$_lang["config_permissions_note"] = 'Für neue Linux/Unix Installationen bitt eine leere Datei <span class=\"mono\">config.inc.php</span> im Ordner <span class=\"mono\">manager/includes/</span> anlegen und die Dateirechte auf 0666 setzen.';
$_lang["creating_database_connection"] = 'Stelle Verbindung zur Datenbank: ';
$_lang["database_connection_failed"] = 'Datenbankverbindung fehlgeschlagen!';
$_lang["database_connection_failed_note"] = 'Bitte Überprüfen Sie Ihre Datenbank-Login-Daten und versuchen Sie es erneut.';
$_lang["database_use_failed"] = 'Datenbank konnte nicht ausgewählt werden!';
$_lang["database_use_failed_note"] = 'Bitte prüfen Sie den Datenbankzugang für den gewählten Benutzer und versuchen Sie es erneut.';
$_lang["mysql_5051"] = 'Warnunng : MySQL Server Version ist 5.0.51';
$_lang["strict_mode"] = 'Warnung : MySQL Server ist in strict mode';
$_lang["checking_table_prefix"] = 'Check Tabellen Prefix `';
$_lang["table_prefix_already_inuse"] = ' - Tabellen Präfix wird bereits benutzt!';
$_lang["table_prefix_already_inuse_note"] = 'Das Programm konnte nicht in die gewählte Datenbank installiert werden, da der Tabellen Prefix bereits verwendet wird. Bitte wählen Sie einen anderen Prefix und wiederholen Sie die Installation.';
$_lang["table_prefix_not_exist"] = ' - Tabellen Präfix existiert nicht in der gewählten Datenbank!';
$_lang["table_prefix_not_exist_note"] = 'Das Programm konnte nicht in der gewählten Datenbank installiert werden, da keine Tabellen mit dem gewählten Prefix existieren. to be upgraded. Bitte wählen Sie einen exisiterenden Prefix und wiederholen Sie die Installation.';
$_lang["setup_cannot_continue"] = 'Leider kann die Installation nicht fortgesetzt werden wegen oben aufgeführter Gründe. ';
$_lang["error"] = 'Fehler';
$_lang["errors"] = 'Fehler'; //Plural form
$_lang["please_correct_error"] = '. Bitte korrigieren Sie den Fehler';
$_lang["please_correct_errors"] = '. Bitte korrigieren Sie die Fehler'; //Plural form
$_lang["and_try_again"] = ', und versuchen Sie es erneut. Falls Sie Hilfe bei der Lösung des Problems benötigen';
$_lang["and_try_again_plural"] = ', und versuchen Sie es erneut. Falls Sie Hilfe bei der Lösung der Probleme benötigen'; //Plural form
$_lang["checking_mysql_version"] = 'Checking MySQL version: ';//translate from here
$_lang["mysql_version_is"] = ' Your MySQL version is: ';
$_lang["mysql_5051_warning"] = 'There are known issues with MySQL 5.0.51. It is recommended that you upgrade before continuing.';
$_lang["mysql_5051"] = ' MySQL server version is 5.0.51!';
$_lang["checking_mysql_strict_mode"] = 'Checking MySQL for strict mode: ';
$_lang["strict_mode_error"] = 'MODx requires that strict mode be disabled. You can set the MySQL mode by editing the my.cnf file or contact your server administrator.';
$_lang["strict_mode"] = ' MySQL server is in strict mode!';//translate up to here
$_lang["visit_forum"] = ', besuchen Sie die <a href="http://www.modxcms.com/forums/" target="_blank">MODx Foren</a>.';
$_lang["testing_connection"] = 'Teste Verbindung...';
$_lang["btnback_value"] = 'zurück';
$_lang["btnnext_value"] = 'Weiter';
$_lang["retry"] = 'Nochmal versuchen';
$_lang["alert_enter_host"] = 'Sie müssen einen Datenbank Host angeben!';
$_lang["alert_enter_login"] = 'Sie müssen einen Datenbank Login Name angeben!';
$_lang["alert_server_test_connection"] = 'Bitte testen Sie Ihre Datenbankverbindung!';
$_lang["alert_server_test_connection_failed"] = 'Der Test der Datenbankverbindung schlug fehl!';
$_lang["alert_enter_database_name"] = 'Bitte einen Datenbanknamen eintragen!';
$_lang["alert_table_prefixes"] = 'Tabellen Präfixe müssen mit einem Buchstaben beginnen!';
$_lang["alert_database_test_connection"] = 'Sie müssen eine Datenbank erstellen oder die Datenbankverbindung testen!';
$_lang["alert_database_test_connection_failed"] = 'Der Test der Datenbankauswahl schlug fehl!';
$_lang["alert_enter_adminlogin"] = 'Sie müssen einen Usernamen für den Standard Administratoraccount angeben!';
$_lang["alert_enter_adminpassword"] = 'Sie müssen ein Passwort für den Standard Administratoraccount angeben!';
$_lang["alert_enter_adminconfirm"] = 'Administrator-Passwort und dessen Bestätigung stimmen nicht überein!';
$_lang["iagree_box"] = 'Ich stimme den Lizenzbedingungen zu.';
$_lang["btnclose_value"] = 'Schließen';
$_lang["running_setup_script"] = 'Starte Setup Script... bitte warten';
$_lang["modx_footer1"] = '&copy; 2005-2008 <a href="http://www.modxcms.com/" target="_blank" style="color: green; text-decoration:underline">MODx</a> Content Mangement Framework (CMF) Projekt. Alle Rechte vorbehalten. MODx unter der GNU GPL lizenziert.';
$_lang["modx_footer2"] = 'MODx is freie Software.  Wir ermutigen Sie, kreativ zu sein und MODx so zu nutzen wie es Ihnen am besten passt. Stellen Sie nur sicher, dass Sie bei Veränderungen des Quelltextes und der Weiterverbreitung der modifizierten MODx-Version den Quelltext frei zugänglich belassen!';
$_lang["setup_database"] = 'Setup will now attempt to setup the database:<br />'; //translate this
$_lang["setup_database_create_connection"] = 'Verbindund zur Datenbank: ';
$_lang["setup_database_create_connection_failed"] = 'Datenbank Verbindung fehlgeschlagen!';
$_lang["setup_database_create_connection_failed_note"] = 'Bitte prüfen Sie die Datenbank-Details und versuchen Sie es erneut.';
$_lang["setup_database_selection"] = 'Datenbank wählen`';
$_lang["setup_database_selection_failed"] = 'Datenbank Auswahl fehlgeschlagen...';
$_lang["setup_database_selection_failed_note"] = 'Die Datenbank existiert nicht. Setup versucht sie anzulegen.';
$_lang["setup_database_creation"] = 'Lege Datenbank an `';
$_lang["setup_database_creation_failed"] = 'Datenbank Erstellung fehlgeschlagen!';
$_lang["setup_database_creation_failed_note"] = ' - Setup konnte die Datenbank nicht anlegen!';
$_lang["setup_database_creation_failed_note2"] = 'Setup konnte die Datenbank nicht anlegen, und keine Datenbank mit gleichem Namen wurde gefunden. Höchstwahrscheinlich lässt Ihr Provider das Anlegen von Datenbanken mittel externem Script nicht zu. Bitte legen Sie die Datenbank wie vom Provider beschrieben an oder geben Sie die Verbindungsdaten einer bereits angelegten Datenbank an.';
$_lang["setup_database_creating_tables"] = 'Erstelle Datenbanktabellen: ';
$_lang["database_alerts"] = 'Datenbank Meldungen!';
$_lang["setup_couldnt_install"] = 'MODx setup konnte die Tabellen in der gewählten Datenbank nicht anlegen/ändern.';
$_lang["installation_error_occured"] = 'Folgende Fehler sind während der Installation aufgetreten';
$_lang["during_execution_of_sql"] = ' während des Ausführes des SQL-Statements ';
$_lang["some_tables_not_updated"] = 'Manche Tabellen wurden nicht geupdatet. Dies könnte an zuvor individuell ausgeführten Modifikationen liegen.';
$_lang["installing_demo_site"] = 'Installiere Beispielinhalt: ';
$_lang["writing_config_file"] = 'Schreibe Konfigurationsdatei: ';
$_lang["cant_write_config_file"] = 'MODx konnte die Konfigurationsdatei nicht erstellen. Bitte fügen Sie folgendes in eine leere Datei ein:';
$_lang["cant_write_config_file_note"] = 'Sobald dies beendet ist, können Sie sich im Manager einloggen unter YourSiteName.com/manager/.';
$_lang["unable_install_template"] = 'Konnte Template nicht installieren.  Datei';
$_lang["unable_install_chunk"] = 'Konnte Chunk nicht installieren.  Datei';
$_lang["unable_install_module"] = 'Konnte Modul nicht installieren.  Datei';
$_lang["unable_install_plugin"] = 'Konnte Plugin nicht installieren.  Datei';
$_lang["unable_install_snippet"] = 'Konnte Snippet nicht installieren.  Datei';
$_lang["not_found"] = 'nicht gefunden';
$_lang["upgraded"] = 'Aktualisiert';
$_lang["installed"] = 'Installiert';
$_lang["running_database_updates"] = 'Führe Datenbank Updates aus: ';
$_lang["installation_successful"] = 'Installation war erfolgreich!';
$_lang["to_log_into_content_manager"] = 'Um sich im Manager einzuloggen, (manager/index.php) klicken Sie auf den `Schließen` Button.';
$_lang["install"] = 'Installieren';
$_lang["remove_install_folder_auto"] = 'Entferne den Installationsordner von meinem Webspace <br />&nbsp;(Dies erfordert das Recht, Ordner löschen zu können).';
$_lang["remove_install_folder_manual"] = 'Bitte denken Sie daran den Ordner &quot;<b>install</b>&quot;zu löschen bevor Sie sich das erste Mal im Manager einloggen.';
$_lang["install_results"] = 'Installationsergebnisse';
$_lang["installation_note"] = '<strong>Achtung:</strong> Nach dem Einloggen im Manager sollten Sie die Konfigurationseinstellungen vornehmen und speichern, bevor Sie Ihre Seite aufrufen: <strong>Werkzeuge</strong> -> Konfiguration im MODx Manager.';
$_lang["upgrade_note"] = '<strong>Achtung:</strong> Nach dem Einloggen im Manager sollten Sie die Konfigurationseinstellungen überprüfen und speichern, bevor Sie Ihre Seite aufrufen: <strong>Werkzeuge</strong> -> Konfiguration im MODx Manager.';
?>