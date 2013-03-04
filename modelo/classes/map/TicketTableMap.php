<?php



/**
 * This class defines the structure of the 'ticket' table.
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
class TicketTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.TicketTableMap';

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
		$this->setName('ticket');
		$this->setPhpName('Ticket');
		$this->setClassname('Ticket');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('CLIENTE', 'ClienteId', 'INTEGER', 'cliente', 'ID', false, null, null);
		$this->addColumn('ATIVO', 'Ativo', 'VARCHAR', true, 1, 'S');
		$this->addColumn('DATA_INICIO', 'DataInicio', 'DATE', false, null, null);
		$this->addColumn('DATA_FINAL', 'DataFinal', 'DATE', false, null, null);
		$this->addColumn('HORA_INICIO', 'HoraInicio', 'TIME', false, null, null);
		$this->addColumn('HORA_FINAL', 'HoraFinal', 'TIME', false, null, null);
		$this->addColumn('SENHA', 'Senha', 'VARCHAR', true, 20, null);
		$this->addColumn('ANDAMENTO', 'Andamento', 'INTEGER', false, null, null);
		$this->addColumn('DATA_PRAZO', 'DataPrazo', 'DATE', false, null, null);
		$this->addColumn('HORA_PRAZO', 'HoraPrazo', 'TIME', false, null, null);
		$this->addColumn('VALOR', 'Valor', 'DOUBLE', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Cliente', 'Cliente', RelationMap::MANY_TO_ONE, array('cliente' => 'id', ), 'CASCADE', 'CASCADE');
		$this->addRelation('Comentario', 'Comentario', RelationMap::ONE_TO_MANY, array('id' => 'ticket', ), 'CASCADE', 'CASCADE', 'Comentarios');
		$this->addRelation('Email', 'Email', RelationMap::ONE_TO_MANY, array('id' => 'ticket', ), 'CASCADE', 'CASCADE', 'Emails');
	} // buildRelations()

} // TicketTableMap
