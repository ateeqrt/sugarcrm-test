<?php

$dictionary[uni_student_uni_course] = array(
	'true_relationship_type' => 'many-to-many',
	'from_studio' => false,
	'relationships' => 
	array(
		'uni_course_uni_student' =>
		array (
			'lhs_module' => 'uni_Student',
			'lhs_table' => 'uni_student',
			'lhs_key' => 'id',
			'rhs_module' => 'uni_course',
			'rhs_table' => 'uni_course',
			'rhs_key' => 'id',
			'relationship_type' => 'many-to-many',
			'join_table' => 'uni_studnet_uni_course_c',
			'join_key_lhs' => 'uni_student_uni_courseuni_student_ida',
			'join_key_rhs' => 'uni_student_uni_courseuni_course_idb'
			),
		),

	'table' => 'uni_student_uni_course_c',
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
		'uni_student_uni_courseuni_student_ida' => array(
			'name' => 'uni_student_uni_courseuni_student_ida',
			'type' => 'id'
			),
		'uni_student_uni_courseuni_course_idb' => array(
			'name' => 'uni_student_uni_courseuni_course_idb',
			'type' => 'id'
			),
		),
	'indices' => array(
		0 => array(
			'name' => 'uni_student_uni_coursespk',
			'type' => 'primary',
			'fields' => array(
				0 => 'id'
				),
			),
		1 => array(
			'name' => 'uni_student_uni_coursealt',
			'type' => 'alternative_key',
			'fields' => array(
				0 => 'uni_student_uni_courseuni_student_ida',
				1 => 'uni_student_uni_courseuni_course_idb'
				),
			),
		),
	);