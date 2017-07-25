<?php
// created: 2017-07-21 15:43:53
$dictionary["uni_class_uni_student_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'uni_class_uni_student_1' => 
    array (
      'lhs_module' => 'uni_Class',
      'lhs_table' => 'uni_class',
      'lhs_key' => 'id',
      'rhs_module' => 'uni_Student',
      'rhs_table' => 'uni_student',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'uni_class_uni_student_1_c',
      'join_key_lhs' => 'uni_class_uni_student_1uni_class_ida',
      'join_key_rhs' => 'uni_class_uni_student_1uni_student_idb',
    ),
  ),
  'table' => 'uni_class_uni_student_1_c',
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
    'uni_class_uni_student_1uni_class_ida' => 
    array (
      'name' => 'uni_class_uni_student_1uni_class_ida',
      'type' => 'id',
    ),
    'uni_class_uni_student_1uni_student_idb' => 
    array (
      'name' => 'uni_class_uni_student_1uni_student_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'uni_class_uni_student_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'uni_class_uni_student_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'uni_class_uni_student_1uni_class_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'uni_class_uni_student_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'uni_class_uni_student_1uni_student_idb',
      ),
    ),
  ),
);