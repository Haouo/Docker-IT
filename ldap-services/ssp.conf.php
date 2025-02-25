<?php // My SSP configuration
$keyphrase = "mysecret";
$debug = true;
$ldap_url = "ldap://openldap:389";
$ldap_base = "";
$ldap_filter = "(uid={login})";
$ldap_binddn = ""; // TODO: you have to set this filed
$ldap_bindpw = ""; // TODO: you have to set this field
$who_change_password = "user";
$hash = "auto";
$pwd_min_length = 8;
$use_questions = false;
$use_tokens = false;
$use_sms = false;
?>
