<?php


/**
 * Base static class for performing query and update operations on the 'configuracao' table.
 *
 * 
 *
 * @package    propel.generator..om
 */
abstract class BaseConfiguracaoPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'tickets';

	/** the table name for this class */
	const TABLE_NAME = 'configuracao';

	/** the related Propel class for this table */
	const OM_CLASS = 'Configuracao';

	/** the related TableMap class for this table */
	const TM_CLASS = 'ConfiguracaoTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 13;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 13;

	/** the column name for the ID field */
	const ID = 'configuracao.ID';

	/** the column name for the MANUTENCAO field */
	const MANUTENCAO = 'configuracao.MANUTENCAO';

	/** the column name for the HOST_BD field */
	const HOST_BD = 'configuracao.HOST_BD';

	/** the column name for the PORTA_BD field */
	const PORTA_BD = 'configuracao.PORTA_BD';

	/** the column name for the USUARIO_BD field */
	const USUARIO_BD = 'configuracao.USUARIO_BD';

	/** the column name for the NOME_BD field */
	const NOME_BD = 'configuracao.NOME_BD';

	/** the column name for the SENHA_BD field */
	const SENHA_BD = 'configuracao.SENHA_BD';

	/** the column name for the SENHA_EMAIL field */
	const SENHA_EMAIL = 'configuracao.SENHA_EMAIL';

	/** the column name for the HOST_EMAIL field */
	const HOST_EMAIL = 'configuracao.HOST_EMAIL';

	/** the column name for the USUARIO_EMAIL field */
	const USUARIO_EMAIL = 'configuracao.USUARIO_EMAIL';

	/** the column name for the PORTA_EMAIL field */
	const PORTA_EMAIL = 'configuracao.PORTA_EMAIL';

	/** the column name for the SMTP_EMAIL field */
	const SMTP_EMAIL = 'configuracao.SMTP_EMAIL';

	/** the column name for the REMETENTE_EMAIL field */
	const REMETENTE_EMAIL = 'configuracao.REMETENTE_EMAIL';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Configuracao objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Configuracao[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Manutencao', 'HostBd', 'PortaBd', 'UsuarioBd', 'NomeBd', 'SenhaBd', 'SenhaEmail', 'HostEmail', 'UsuarioEmail', 'PortaEmail', 'SmtpEmail', 'RemetenteEmail', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'manutencao', 'hostBd', 'portaBd', 'usuarioBd', 'nomeBd', 'senhaBd', 'senhaEmail', 'hostEmail', 'usuarioEmail', 'portaEmail', 'smtpEmail', 'remetenteEmail', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::MANUTENCAO, self::HOST_BD, self::PORTA_BD, self::USUARIO_BD, self::NOME_BD, self::SENHA_BD, self::SENHA_EMAIL, self::HOST_EMAIL, self::USUARIO_EMAIL, self::PORTA_EMAIL, self::SMTP_EMAIL, self::REMETENTE_EMAIL, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'MANUTENCAO', 'HOST_BD', 'PORTA_BD', 'USUARIO_BD', 'NOME_BD', 'SENHA_BD', 'SENHA_EMAIL', 'HOST_EMAIL', 'USUARIO_EMAIL', 'PORTA_EMAIL', 'SMTP_EMAIL', 'REMETENTE_EMAIL', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'manutencao', 'host_bd', 'porta_bd', 'usuario_bd', 'nome_bd', 'senha_bd', 'senha_email', 'host_email', 'usuario_email', 'porta_email', 'smtp_email', 'remetente_email', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Manutencao' => 1, 'HostBd' => 2, 'PortaBd' => 3, 'UsuarioBd' => 4, 'NomeBd' => 5, 'SenhaBd' => 6, 'SenhaEmail' => 7, 'HostEmail' => 8, 'UsuarioEmail' => 9, 'PortaEmail' => 10, 'SmtpEmail' => 11, 'RemetenteEmail' => 12, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'manutencao' => 1, 'hostBd' => 2, 'portaBd' => 3, 'usuarioBd' => 4, 'nomeBd' => 5, 'senhaBd' => 6, 'senhaEmail' => 7, 'hostEmail' => 8, 'usuarioEmail' => 9, 'portaEmail' => 10, 'smtpEmail' => 11, 'remetenteEmail' => 12, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::MANUTENCAO => 1, self::HOST_BD => 2, self::PORTA_BD => 3, self::USUARIO_BD => 4, self::NOME_BD => 5, self::SENHA_BD => 6, self::SENHA_EMAIL => 7, self::HOST_EMAIL => 8, self::USUARIO_EMAIL => 9, self::PORTA_EMAIL => 10, self::SMTP_EMAIL => 11, self::REMETENTE_EMAIL => 12, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'MANUTENCAO' => 1, 'HOST_BD' => 2, 'PORTA_BD' => 3, 'USUARIO_BD' => 4, 'NOME_BD' => 5, 'SENHA_BD' => 6, 'SENHA_EMAIL' => 7, 'HOST_EMAIL' => 8, 'USUARIO_EMAIL' => 9, 'PORTA_EMAIL' => 10, 'SMTP_EMAIL' => 11, 'REMETENTE_EMAIL' => 12, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'manutencao' => 1, 'host_bd' => 2, 'porta_bd' => 3, 'usuario_bd' => 4, 'nome_bd' => 5, 'senha_bd' => 6, 'senha_email' => 7, 'host_email' => 8, 'usuario_email' => 9, 'porta_email' => 10, 'smtp_email' => 11, 'remetente_email' => 12, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. ConfiguracaoPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(ConfiguracaoPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(ConfiguracaoPeer::ID);
			$criteria->addSelectColumn(ConfiguracaoPeer::MANUTENCAO);
			$criteria->addSelectColumn(ConfiguracaoPeer::HOST_BD);
			$criteria->addSelectColumn(ConfiguracaoPeer::PORTA_BD);
			$criteria->addSelectColumn(ConfiguracaoPeer::USUARIO_BD);
			$criteria->addSelectColumn(ConfiguracaoPeer::NOME_BD);
			$criteria->addSelectColumn(ConfiguracaoPeer::SENHA_BD);
			$criteria->addSelectColumn(ConfiguracaoPeer::SENHA_EMAIL);
			$criteria->addSelectColumn(ConfiguracaoPeer::HOST_EMAIL);
			$criteria->addSelectColumn(ConfiguracaoPeer::USUARIO_EMAIL);
			$criteria->addSelectColumn(ConfiguracaoPeer::PORTA_EMAIL);
			$criteria->addSelectColumn(ConfiguracaoPeer::SMTP_EMAIL);
			$criteria->addSelectColumn(ConfiguracaoPeer::REMETENTE_EMAIL);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.MANUTENCAO');
			$criteria->addSelectColumn($alias . '.HOST_BD');
			$criteria->addSelectColumn($alias . '.PORTA_BD');
			$criteria->addSelectColumn($alias . '.USUARIO_BD');
			$criteria->addSelectColumn($alias . '.NOME_BD');
			$criteria->addSelectColumn($alias . '.SENHA_BD');
			$criteria->addSelectColumn($alias . '.SENHA_EMAIL');
			$criteria->addSelectColumn($alias . '.HOST_EMAIL');
			$criteria->addSelectColumn($alias . '.USUARIO_EMAIL');
			$criteria->addSelectColumn($alias . '.PORTA_EMAIL');
			$criteria->addSelectColumn($alias . '.SMTP_EMAIL');
			$criteria->addSelectColumn($alias . '.REMETENTE_EMAIL');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ConfiguracaoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ConfiguracaoPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(ConfiguracaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Selects one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     Configuracao
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = ConfiguracaoPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Selects several row from the DB.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return ConfiguracaoPeer::populateObjects(ConfiguracaoPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ConfiguracaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			ConfiguracaoPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      Configuracao $value A Configuracao object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A Configuracao object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Configuracao) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Configuracao object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     Configuracao Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to configuracao
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * Retrieves the primary key from the DB resultset row
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (int) $row[$startcol];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = ConfiguracaoPeer::getOMClass();
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = ConfiguracaoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = ConfiguracaoPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				ConfiguracaoPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (Configuracao object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = ConfiguracaoPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = ConfiguracaoPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + ConfiguracaoPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = ConfiguracaoPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			ConfiguracaoPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseConfiguracaoPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseConfiguracaoPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new ConfiguracaoTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 *
	 * @return     string ClassName
	 */
	public static function getOMClass()
	{
		return ConfiguracaoPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Configuracao or Criteria object.
	 *
	 * @param      mixed $values Criteria or Configuracao object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ConfiguracaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Configuracao object
		}

		if ($criteria->containsKey(ConfiguracaoPeer::ID) && $criteria->keyContainsValue(ConfiguracaoPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.ConfiguracaoPeer::ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Performs an UPDATE on the database, given a Configuracao or Criteria object.
	 *
	 * @param      mixed $values Criteria or Configuracao object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ConfiguracaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(ConfiguracaoPeer::ID);
			$value = $criteria->remove(ConfiguracaoPeer::ID);
			if ($value) {
				$selectCriteria->add(ConfiguracaoPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(ConfiguracaoPeer::TABLE_NAME);
			}

		} else { // $values is Configuracao object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the configuracao table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ConfiguracaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(ConfiguracaoPeer::TABLE_NAME, $con, ConfiguracaoPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			ConfiguracaoPeer::clearInstancePool();
			ConfiguracaoPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Configuracao or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Configuracao object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(ConfiguracaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			ConfiguracaoPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Configuracao) { // it's a model object
			// invalidate the cache for this single object
			ConfiguracaoPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ConfiguracaoPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				ConfiguracaoPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			ConfiguracaoPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Configuracao object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Configuracao $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ConfiguracaoPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ConfiguracaoPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(ConfiguracaoPeer::DATABASE_NAME, ConfiguracaoPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Configuracao
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = ConfiguracaoPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(ConfiguracaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(ConfiguracaoPeer::DATABASE_NAME);
		$criteria->add(ConfiguracaoPeer::ID, $pk);

		$v = ConfiguracaoPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ConfiguracaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(ConfiguracaoPeer::DATABASE_NAME);
			$criteria->add(ConfiguracaoPeer::ID, $pks, Criteria::IN);
			$objs = ConfiguracaoPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseConfiguracaoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseConfiguracaoPeer::buildTableMap();

