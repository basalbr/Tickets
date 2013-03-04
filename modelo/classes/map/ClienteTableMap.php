<?php



/**
 * This class defines the structure of the 'cliente' table.
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
class ClienteTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.ClienteTableMap';

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
		$this->setName('cliente');
		$this->setPhpName('Cliente');
		$this->setClassname('Cliente');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('NOME', 'Nome', 'VARCHAR', false, 45, null);
		$this->addColumn('SOBRENOME', 'Sobrenome', 'VARCHAR', false, 45, null);
		$this->addColumn('NOME_FANTASIA', 'NomeFantasia', 'VARCHAR', false, 45, null);
		$this->addColumn('RAZAO_SOCIAL', 'RazaoSocial', 'VARCHAR', false, 100, null);
		$this->addColumn('CPF', 'Cpf', 'VARCHAR', false, 45, null);
		$this->addColumn('CNPJ', 'Cnpj', 'VARCHAR', false, 45, null);
		$this->addColumn('TIPO', 'Tipo', 'VARCHAR', false, 1, 'F');
		$this->addColumn('USUARIO', 'Usuario', 'VARCHAR', true, 20, null);
		$this->addColumn('SENHA', 'Senha', 'VARCHAR', true, 12, null);
		$this->addColumn('ATIVO', 'Ativo', 'VARCHAR', true, 1, 'S');
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', true, 100, null);
		$this->addColumn('URL', 'Url', 'VARCHAR', true, 20, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Endereco', 'Endereco', RelationMap::ONE_TO_MANY, array('id' => 'cliente', ), 'CASCADE', 'CASCADE', 'Enderecos');
		$this->addRelation('MensagemCliente', 'MensagemCliente', RelationMap::ONE_TO_MANY, array('id' => 'cliente', ), 'CASCADE', 'CASCADE', 'MensagemClientes');
		$this->addRelation('Telefone', 'Telefone', RelationMap::ONE_TO_MANY, array('id' => 'cliente', ), 'CASCADE', 'CASCADE', 'Telefones');
		$this->addRelation('Ticket', 'Ticket', RelationMap::ONE_TO_MANY, array('id' => 'cliente', ), 'CASCADE', 'CASCADE', 'Tickets');
	} // buildRelations()

} // ClienteTableMap
