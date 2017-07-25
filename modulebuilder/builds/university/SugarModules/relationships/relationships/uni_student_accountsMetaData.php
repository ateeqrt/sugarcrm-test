<?php
// created: 2017-07-25 12:03:30
$dictionary["uni_student_accounts"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'uni_student_accounts' => 
    array (
      'lhs_module' => 'uni_Student',
      'lhs_table' => 'uni_student',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'uni_student_accounts_c',
      'join_key_lhs' => 'uni_student_accountsuni_student_ida',
      'join_key_rhs' => 'uni_student_accountsaccounts_idb',
    ),
  ),
  'table' => 'uni_student_accounts_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'uni_student_accountsuni_student_ida' => 
    array (
      'name' => 'uni_student_accountsuni_student_ida',
      'type' => 'id',
    ),
    'uni_student_accountsaccounts_idb' => 
    array (
      'name' => 'uni_student_accountsaccounts_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'uni_student_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'uni_student_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'uni_student_accountsuni_student_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'uni_student_accounts_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'uni_student_accountsaccounts_idb',
      ),
    ),
  ),
);