<?php

/**
 * BaseEducation
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property Doctrine_Collection $EmployeeEducation
 * 
 * @method integer             getId()                Returns the current record's "id" value
 * @method string              getName()              Returns the current record's "name" value
 * @method Doctrine_Collection getEmployeeEducation() Returns the current record's "EmployeeEducation" collection
 * @method Education           setId()                Sets the current record's "id" value
 * @method Education           setName()              Sets the current record's "name" value
 * @method Education           setEmployeeEducation() Sets the current record's "EmployeeEducation" collection
 * 
 * @package    orangehrm
 * @subpackage model\admin\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEducation extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_education');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('EmployeeEducation', array(
             'local' => 'id',
             'foreign' => 'educationId'));
    }
}