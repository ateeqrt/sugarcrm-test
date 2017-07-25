<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/uni_student_accounts_Accounts.php

// created: 2017-07-25 12:03:30
$dictionary["Account"]["fields"]["uni_student_accounts"] = array (
  'name' => 'uni_student_accounts',
  'type' => 'link',
  'relationship' => 'uni_student_accounts',
  'source' => 'non-db',
  'module' => 'uni_Student',
  'bean_name' => false,
  'vname' => 'LBL_UNI_STUDENT_ACCOUNTS_FROM_UNI_STUDENT_TITLE',
  'id_name' => 'uni_student_accountsuni_student_ida',
);
$dictionary["Account"]["fields"]["uni_student_accounts_name"] = array (
  'name' => 'uni_student_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_UNI_STUDENT_ACCOUNTS_FROM_UNI_STUDENT_TITLE',
  'save' => true,
  'id_name' => 'uni_student_accountsuni_student_ida',
  'link' => 'uni_student_accounts',
  'table' => 'uni_student',
  'module' => 'uni_Student',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["uni_student_accountsuni_student_ida"] = array (
  'name' => 'uni_student_accountsuni_student_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_UNI_STUDENT_ACCOUNTS_FROM_UNI_STUDENT_TITLE_ID',
  'id_name' => 'uni_student_accountsuni_student_ida',
  'link' => 'uni_student_accounts',
  'table' => 'uni_student',
  'module' => 'uni_Student',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
