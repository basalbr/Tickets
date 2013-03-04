<?php



/**
 * This class defines the structure of the 'configuracao' table.
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
class ConfiguracaoTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.ConfiguracaoTableMap';

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
		$this->setName('configuracao');
		$this->setPhpName('Configuracao');
		$this->setClassname('Configuracao');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('MANUTENCAO', 'Manutencao', 'VARCHAR', true, 1, 'N');
		$this->addColumn('HOST_BD', 'HostBd', 'VARCHAR', true, 100, null);
		$this->addColumn('PORTA_BD', 'PortaBd', 'VARCHAR', true, 45, null);
		$this->addColumn('USUARIO_BD', 'UsuarioBd', 'VARCHAR', true, 45, null);
		$this->addColumn('NOME_BD', 'NomeBd', 'VARCHAR', true, 45, null);
		$this->addColumn('SENHA_BD', 'SenhaBd', 'VARCHAR', true, 45, null);
		$this->addColumn('SENHA_EMAIL', 'SenhaEmail', 'VARCHAR', true, 45, null);
		$this->addColumn('HOST_EMAIL', 'HostEmail', 'VARCHAR', true, 80, null);
		$this->addColumn('USUARIO_EMAIL', 'UsuarioEmail', 'VARCHAR', true, 80, null);
		$this->addColumn('PORTA_EMAIL', 'PortaEmail', 'VARCHAR', true, 5, null);
		$this->addColumn('SMTP_EMAIL', 'SmtpEmail', 'VARCHAR', true, 1, 'N');
		$this->addColumn('REMETENTE_EMAIL', 'RemetenteEmail', 'VARCHAR', true, 50, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ConfiguracaoTableMap
