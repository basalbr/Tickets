<?php



/**
 * This class defines the structure of the 'mensagem_cliente' table.
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
class MensagemClienteTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.MensagemClienteTableMap';

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
		$this->setName('mensagem_cliente');
		$this->setPhpName('MensagemCliente');
		$this->setClassname('MensagemCliente');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('MENSAGEM', 'MensagemId', 'INTEGER', 'mensagem', 'ID', false, null, null);
		$this->addForeignKey('CLIENTE', 'ClienteId', 'INTEGER', 'cliente', 'ID', false, null, null);
		$this->addColumn('LIDO', 'Lido', 'VARCHAR', true, 1, 'N');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Mensagem', 'Mensagem', RelationMap::MANY_TO_ONE, array('mensagem' => 'id', ), 'CASCADE', 'CASCADE');
		$this->addRelation('Cliente', 'Cliente', RelationMap::MANY_TO_ONE, array('cliente' => 'id', ), 'CASCADE', 'CASCADE');
	} // buildRelations()

} // MensagemClienteTableMap
