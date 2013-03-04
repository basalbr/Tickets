<?php



/**
 * This class defines the structure of the 'admin' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator..map
 */
class AdminTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.AdminTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('admin');
		$this->setPhpName('Admin');
		$this->setClassname('Admin');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('USUARIO', 'Usuario', 'VARCHAR', false, 45, null);
		$this->addColumn('SENHA', 'Senha', 'VARCHAR', false, 45, null);
		$this->addColumn('ATIVO', 'Ativo', 'VARCHAR', true, 45, 'S');
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', false, 100, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // AdminTableMap
