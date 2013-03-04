<?php


/**
 * Base class that represents a query for the 'telefone' table.
 *
 * 
 *
 * @method     TelefoneQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     TelefoneQuery orderByClienteId($order = Criteria::ASC) Order by the cliente column
 * @method     TelefoneQuery orderByTelefone($order = Criteria::ASC) Order by the telefone column
 * @method     TelefoneQuery orderByDescricao($order = Criteria::ASC) Order by the descricao column
 *
 * @method     TelefoneQuery groupById() Group by the id column
 * @method     TelefoneQuery groupByClienteId() Group by the cliente column
 * @method     TelefoneQuery groupByTelefone() Group by the telefone column
 * @method     TelefoneQuery groupByDescricao() Group by the descricao column
 *
 * @method     TelefoneQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TelefoneQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TelefoneQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TelefoneQuery leftJoinCliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cliente relation
 * @method     TelefoneQuery rightJoinCliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cliente relation
 * @method     TelefoneQuery innerJoinCliente($relationAlias = null) Adds a INNER JOIN clause to the query using the Cliente relation
 *
 * @method     Telefone findOne(PropelPDO $con = null) Return the first Telefone matching the query
 * @method     Telefone findOneOrCreate(PropelPDO $con = null) Return the first Telefone matching the query, or a new Telefone object populated from the query conditions when no match is found
 *
 * @method     Telefone findOneById(int $id) Return the first Telefone filtered by the id column
 * @method     Telefone findOneByClienteId(int $cliente) Return the first Telefone filtered by the cliente column
 * @method     Telefone findOneByTelefone(string $telefone) Return the first Telefone filtered by the telefone column
 * @method     Telefone findOneByDescricao(string $descricao) Return the first Telefone filtered by the descricao column
 *
 * @method     array findById(int $id) Return Telefone objects filtered by the id column
 * @method     array findByClienteId(int $cliente) Return Telefone objects filtered by the cliente column
 * @method     array findByTelefone(string $telefone) Return Telefone objects filtered by the telefone column
 * @method     array findByDescricao(string $descricao) Return Telefone objects filtered by the descricao column
 *
 * @package    propel.generator..om
 */
abstract class BaseTelefoneQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseTelefoneQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'tickets', $modelName = 'Telefone', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new TelefoneQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    TelefoneQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof TelefoneQuery) {
			return $criteria;
		}
		$query = new TelefoneQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key.
	 * Propel uses the instance pool to skip the database if the object exists.
	 * Go fast if the query is untouched.
	 *
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Telefone|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = TelefonePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(TelefonePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		if ($this->formatter || $this->modelAlias || $this->with || $this->select
		 || $this->selectColumns || $this->asColumns || $this->selectModifiers
		 || $this->map || $this->having || $this->joins) {
			return $this->findPkComplex($key, $con);
		} else {
			return $this->findPkSimple($key, $con);
		}
	}

	/**
	 * Find object by primary key using raw SQL to go fast.
	 * Bypass doSelect() and the object formatter by using generated code.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Telefone A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `CLIENTE`, `TELEFONE`, `DESCRICAO` FROM `telefone` WHERE `ID` = :p0';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Telefone();
			$obj->hydrate($row);
			TelefonePeer::addInstanceToPool($obj, (string) $key);
		}
		$stmt->closeCursor();

		return $obj;
	}

	/**
	 * Find object by primary key.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Telefone|array|mixed the result, formatted by the current formatter
	 */
	protected function findPkComplex($key, $con)
	{
		// As the query uses a PK condition, no limit(1) is necessary.
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKey($key)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKeys($keys)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->format($stmt);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    TelefoneQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(TelefonePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    TelefoneQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(TelefonePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterById(1234); // WHERE id = 1234
	 * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
	 * $query->filterById(array('min' => 12)); // WHERE id > 12
	 * </code>
	 *
	 * @param     mixed $id The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TelefoneQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(TelefonePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the cliente column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByClienteId(1234); // WHERE cliente = 1234
	 * $query->filterByClienteId(array(12, 34)); // WHERE cliente IN (12, 34)
	 * $query->filterByClienteId(array('min' => 12)); // WHERE cliente > 12
	 * </code>
	 *
	 * @see       filterByCliente()
	 *
	 * @param     mixed $clienteId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TelefoneQuery The current query, for fluid interface
	 */
	public function filterByClienteId($clienteId = null, $comparison = null)
	{
		if (is_array($clienteId)) {
			$useMinMax = false;
			if (isset($clienteId['min'])) {
				$this->addUsingAlias(TelefonePeer::CLIENTE, $clienteId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($clienteId['max'])) {
				$this->addUsingAlias(TelefonePeer::CLIENTE, $clienteId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TelefonePeer::CLIENTE, $clienteId, $comparison);
	}

	/**
	 * Filter the query on the telefone column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTelefone('fooValue');   // WHERE telefone = 'fooValue'
	 * $query->filterByTelefone('%fooValue%'); // WHERE telefone LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $telefone The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TelefoneQuery The current query, for fluid interface
	 */
	public function filterByTelefone($telefone = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($telefone)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $telefone)) {
				$telefone = str_replace('*', '%', $telefone);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TelefonePeer::TELEFONE, $telefone, $comparison);
	}

	/**
	 * Filter the query on the descricao column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDescricao('fooValue');   // WHERE descricao = 'fooValue'
	 * $query->filterByDescricao('%fooValue%'); // WHERE descricao LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $descricao The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TelefoneQuery The current query, for fluid interface
	 */
	public function filterByDescricao($descricao = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($descricao)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $descricao)) {
				$descricao = str_replace('*', '%', $descricao);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TelefonePeer::DESCRICAO, $descricao, $comparison);
	}

	/**
	 * Filter the query by a related Cliente object
	 *
	 * @param     Cliente|PropelCollection $cliente The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TelefoneQuery The current query, for fluid interface
	 */
	public function filterByCliente($cliente, $comparison = null)
	{
		if ($cliente instanceof Cliente) {
			return $this
				->addUsingAlias(TelefonePeer::CLIENTE, $cliente->getId(), $comparison);
		} elseif ($cliente instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TelefonePeer::CLIENTE, $cliente->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByCliente() only accepts arguments of type Cliente or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Cliente relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TelefoneQuery The current query, for fluid interface
	 */
	public function joinCliente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Cliente');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Cliente');
		}

		return $this;
	}

	/**
	 * Use the Cliente relation Cliente object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ClienteQuery A secondary query class using the current class as primary query
	 */
	public function useClienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCliente($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Cliente', 'ClienteQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Telefone $telefone Object to remove from the list of results
	 *
	 * @return    TelefoneQuery The current query, for fluid interface
	 */
	public function prune($telefone = null)
	{
		if ($telefone) {
			$this->addUsingAlias(TelefonePeer::ID, $telefone->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseTelefoneQuery