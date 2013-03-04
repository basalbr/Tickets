<?php



/**
 * This class defines the structure of the 'mensagem' table.
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
class MensagemTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.MensagemTableMap';

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
		$this->setName('mensagem');
		$this->setPhpName('Mensagem');
		$this->setClassname('Mensagem');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('MENSAGEM', 'Mensagem', 'LONGVARCHAR', true, null, null);
		$this->addColumn('OBRIGATORIO', 'Obrigatorio', 'VARCHAR', true, 1, 'N');
		$this->addColumn('DATA_HORA', 'DataHora', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('MensagemCliente', 'MensagemCliente', RelationMap::ONE_TO_MANY, array('id' => 'mensagem', ), 'CASCADE', 'CASCADE', 'MensagemClientes');
	} // buildRelations()

} // MensagemTableMap
