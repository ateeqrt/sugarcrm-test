<?php
 // created: 2017-07-25 12:03:30
$layout_defs["uni_Class"]["subpanel_setup"]['uni_student_uni_class'] = array (
  'order' => 100,
  'module' => 'uni_Student',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_UNI_STUDENT_UNI_CLASS_FROM_UNI_STUDENT_TITLE',
  'get_subpanel_data' => 'uni_student_uni_class',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
