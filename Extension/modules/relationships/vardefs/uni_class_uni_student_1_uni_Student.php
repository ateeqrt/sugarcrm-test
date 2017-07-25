<?php
// created: 2017-07-21 15:43:53
$dictionary["uni_Student"]["fields"]["uni_class_uni_student_1"] = array (
  'name' => 'uni_class_uni_student_1',
  'type' => 'link',
  'relationship' => 'uni_class_uni_student_1',
  'source' => 'non-db',
  'module' => 'uni_Class',
  'bean_name' => 'uni_Class',
  'side' => 'right',
  'vname' => 'LBL_UNI_CLASS_UNI_STUDENT_1_FROM_UNI_STUDENT_TITLE',
  'id_name' => 'uni_class_uni_student_1uni_class_ida',
  'link-type' => 'one',
);
$dictionary["uni_Student"]["fields"]["uni_class_uni_student_1_name"] = array (
  'name' => 'uni_class_uni_student_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_UNI_CLASS_UNI_STUDENT_1_FROM_UNI_CLASS_TITLE',
  'save' => true,
  'id_name' => 'uni_class_uni_student_1uni_class_ida',
  'link' => 'uni_class_uni_student_1',
  'table' => 'uni_class',
  'module' => 'uni_Class',
  'rname' => 'name',
);
$dictionary["uni_Student"]["fields"]["uni_class_uni_student_1uni_class_ida"] = array (
  'name' => 'uni_class_uni_student_1uni_class_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_UNI_CLASS_UNI_STUDENT_1_FROM_UNI_STUDENT_TITLE_ID',
  'id_name' => 'uni_class_uni_student_1uni_class_ida',
  'link' => 'uni_class_uni_student_1',
  'table' => 'uni_class',
  'module' => 'uni_Class',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
