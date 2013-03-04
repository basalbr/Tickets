<?php



/**
 * This class defines the structure of the 'endereco' table.
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
class EnderecoTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.EnderecoTableMap';

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
		$this->setName('endereco');
		$this->setPhpName('Endereco');
		$this->setClassname('Endereco');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('RUA', 'Rua', 'VARCHAR', false, 150, null);
		$this->addColumn('BAIRRO', 'Bairro', 'VARCHAR', false, 150, null);
		$this->addColumn('NUMERO', 'Numero', 'INTEGER', false, null, null);
		$this->addColumn('CIDADE', 'Cidade', 'VARCHAR', false, 150, null);
		$this->addColumn('ESTADO', 'Estado', 'INTEGER', false, null, null);
		$this->addColumn('CEP', 'Cep', 'VARCHAR', false, 15, null);
		$this->addColumn('COMPLEMENTO', 'Complemento', 'VARCHAR', false, 150, null);
		$this->addForeignKey('CLIENTE', 'ClienteId', 'INTEGER', 'cliente', 'ID', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Cliente', 'Cliente', RelationMap::MANY_TO_ONE, array('cliente' => 'id', ), 'CASCADE', 'CASCADE');
	} // buildRelations()

} // EnderecoTableMap
