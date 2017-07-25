<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/uni_Student/Ext/Vardefs/uni_student_accounts_uni_Student.php

// created: 2017-07-25 12:03:30
$dictionary["uni_Student"]["fields"]["uni_student_accounts"] = array (
  'name' => 'uni_student_accounts',
  'type' => 'link',
  'relationship' => 'uni_student_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_UNI_STUDENT_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'uni_student_accountsaccounts_idb',
);
$dictionary["uni_Student"]["fields"]["uni_student_accounts_name"] = array (
  'name' => 'uni_student_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_UNI_STUDENT_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'uni_student_accountsaccounts_idb',
  'link' => 'uni_student_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["uni_Student"]["fields"]["uni_student_accountsaccounts_idb"] = array (
  'name' => 'uni_student_accountsaccounts_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_UNI_STUDENT_ACCOUNTS_FROM_ACCOUNTS_TITLE_ID',
  'id_name' => 'uni_student_accountsaccounts_idb',
  'link' => 'uni_student_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/uni_Student/Ext/Vardefs/uni_student_uni_class_uni_Student.php

// created: 2017-07-25 12:03:30
$dictionary["uni_Student"]["fields"]["uni_student_uni_class"] = array (
  'name' => 'uni_student_uni_class',
  'type' => 'link',
  'relationship' => 'uni_student_uni_class',
  'source' => 'non-db',
  'module' => 'uni_Class',
  'bean_name' => false,
  'side' => 'right',
  'vname' => 'LBL_UNI_STUDENT_UNI_CLASS_FROM_UNI_STUDENT_TITLE',
  'id_name' => 'uni_student_uni_classuni_class_ida',
  'link-type' => 'one',
);
$dictionary["uni_Student"]["fields"]["uni_student_uni_class_name"] = array (
  'name' => 'uni_student_uni_class_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_UNI_STUDENT_UNI_CLASS_FROM_UNI_CLASS_TITLE',
  'save' => true,
  'id_name' => 'uni_student_uni_classuni_class_ida',
  'link' => 'uni_student_uni_class',
  'table' => 'uni_class',
  'module' => 'uni_Class',
  'rname' => 'name',
);
$dictionary["uni_Student"]["fields"]["uni_student_uni_classuni_class_ida"] = array (
  'name' => 'uni_student_uni_classuni_class_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_UNI_STUDENT_UNI_CLASS_FROM_UNI_STUDENT_TITLE_ID',
  'id_name' => 'uni_student_uni_classuni_class_ida',
  'link' => 'uni_student_uni_class',
  'table' => 'uni_class',
  'module' => 'uni_Class',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
