<?php
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
