<?php
// created: 2017-07-25 12:03:30
$dictionary["uni_student_uni_class"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'uni_student_uni_class' => 
    array (
      'lhs_module' => 'uni_Class',
      'lhs_table' => 'uni_class',
      'lhs_key' => 'id',
      'rhs_module' => 'uni_Student',
      'rhs_table' => 'uni_student',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'uni_student_uni_class_c',
      'join_key_lhs' => 'uni_student_uni_classuni_class_ida',
      'join_key_rhs' => 'uni_student_uni_classuni_student_idb',
    ),
  ),
  'table' => 'uni_student_uni_class_c',
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
    'uni_student_uni_classuni_class_ida' => 
    array (
      'name' => 'uni_student_uni_classuni_class_ida',
      'type' => 'id',
    ),
    'uni_student_uni_classuni_student_idb' => 
    array (
      'name' => 'uni_student_uni_classuni_student_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'uni_student_uni_classspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'uni_student_uni_class_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'uni_student_uni_classuni_class_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'uni_student_uni_class_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'uni_student_uni_classuni_student_idb',
      ),
    ),
  ),
);