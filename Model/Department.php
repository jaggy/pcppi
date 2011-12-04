<?php
App::uses('AppModel', 'Model');
/**
 * Department Model
 *
 * @property User $User
 */
class Department extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
        public $displayField = 'department';
	public $validate = array(
		'department' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			'message' => 'Please do not leave this field blank',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'department_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
