<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$relationships = array (
  'uni_student_accounts' => 
  array (
    'lhs_module' => 'uni_Student',
    'rhs_module' => 'Accounts',
    'relationship_type' => 'one-to-one',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'uni_student_accounts',
  ),
  'uni_student_uni_class' => 
  array (
    'rhs_label' => 'Classes',
    'lhs_label' => 'Students',
    'lhs_subpanel' => 'default',
    'lhs_module' => 'uni_Student',
    'rhs_module' => 'uni_Class',
    'relationship_type' => 'many-to-one',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'uni_student_uni_class',
  ),
);