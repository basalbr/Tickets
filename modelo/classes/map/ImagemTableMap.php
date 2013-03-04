<?php



/**
 * This class defines the structure of the 'imagem' table.
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
class ImagemTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.ImagemTableMap';

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
		$this->setName('imagem');
		$this->setPhpName('Imagem');
		$this->setClassname('Imagem');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('COMENTARIO', 'ComentarioId', 'INTEGER', 'comentario', 'ID', false, null, null);
		$this->addColumn('NOME', 'Nome', 'VARCHAR', false, 250, null);
		$this->addColumn('LEGENDA', 'Legenda', 'VARCHAR', false, 100, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Comentario', 'Comentario', RelationMap::MANY_TO_ONE, array('comentario' => 'id', ), 'CASCADE', 'CASCADE');
	} // buildRelations()

} // ImagemTableMap
