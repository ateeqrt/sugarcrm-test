<?php
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
