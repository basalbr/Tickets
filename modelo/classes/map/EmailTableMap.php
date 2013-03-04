<?php



/**
 * This class defines the structure of the 'email' table.
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
class EmailTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.EmailTableMap';

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
		$this->setName('email');
		$this->setPhpName('Email');
		$this->setClassname('Email');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('TICKET', 'TicketId', 'INTEGER', 'ticket', 'ID', true, null, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', true, 150, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Ticket', 'Ticket', RelationMap::MANY_TO_ONE, array('ticket' => 'id', ), 'CASCADE', 'CASCADE');
	} // buildRelations()

} // EmailTableMap
