<?php
// created: 2017-07-25 12:03:29
$dictionary["uni_course_uni_class"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'uni_course_uni_class' => 
    array (
      'lhs_module' => 'uni_course',
      'lhs_table' => 'uni_course',
      'lhs_key' => 'id',
      'rhs_module' => 'uni_Class',
      'rhs_table' => 'uni_class',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'uni_course_uni_class_c',
      'join_key_lhs' => 'uni_course_uni_classuni_course_ida',
      'join_key_rhs' => 'uni_course_uni_classuni_class_idb',
    ),
  ),
  'table' => 'uni_course_uni_class_c',
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
    'uni_course_uni_classuni_course_ida' => 
    array (
      'name' => 'uni_course_uni_classuni_course_ida',
      'type' => 'id',
    ),
    'uni_course_uni_classuni_class_idb' => 
    array (
      'name' => 'uni_course_uni_classuni_class_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'uni_course_uni_classspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'uni_course_uni_class_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'uni_course_uni_classuni_course_ida',
        1 => 'uni_course_uni_classuni_class_idb',
      ),
    ),
  ),
);