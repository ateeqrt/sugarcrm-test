<?php

$dictionary[uni_course_uni_student_1] = array(
	'true_relationship_type' => 'many-to-many',
	'from_studio' => false,
	'relationships' => 
	array(
		'uni_course_uni_student_1' =>
		array (
			'lhs_module' => 'uni_course',
			'lhs_table' => 'uni_course',
			'lhs_key' => 'id',
			'rhs_module' => 'uni_Student',
			'rhs_table' => 'uni_student',
			'rhs_key' => 'id',
			'relationship_type' => 'many-to-many',
			'join_table' => 'uni_course_uni_student_1_c',
			'join_key_lhs' => 'uni_course_uni_student_1uni_course_ida',
			'join_key_rhs' => 'uni_course_uni_student_1uni_student_idb'
			),
		),

	'table' => 'uni_course_uni_student_1_c',
	'fields' => array(
		'id' => array(
			'name' => 'id',
			'type' => 'id'
			),
		'date_modified' => array(
			'name' => 'date_modified',
			'type' => 'datetime'
			),
		'deleted' => array(
			'name' => 'deleted',
			'type' => 'bool',
			'default' => 0
			),
		'uni_course_uni_student_1uni_course_ida' => array(
			'name' => 'uni_course_uni_student_1uni_course_ida',
			'type' => 'id'
			),
		'uni_course_uni_student_1uni_student_idb' => array(
			'name' => 'uni_course_uni_student_1uni_student_idb',
			'type' => 'id'
			),
		),
	'indices' => array(
		0 => array(
			'name' => 'uni_course_uni_student_1spk',
			'type' => 'primary',
			'fields' => array(
				0 => 'id'
				),
			),
		1 => array(
			'name' => 'uni_course_uni_student_1alt',
			'type' => 'alternative_key',
			'fields' => array(
				0 => 'uni_course_uni_student_1uni_course_ida',
				1 => 'uni_course_uni_student_1uni_student_idb'
				),
			),
		),
	);