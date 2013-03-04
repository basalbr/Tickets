<?php


/**
 * Base class that represents a query for the 'mensagem_cliente' table.
 *
 * 
 *
 * @method     MensagemClienteQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     MensagemClienteQuery orderByMensagemId($order = Criteria::ASC) Order by the mensagem column
 * @method     MensagemClienteQuery orderByClienteId($order = Criteria::ASC) Order by the cliente column
 * @method     MensagemClienteQuery orderByLido($order = Criteria::ASC) Order by the lido column
 *
 * @method     MensagemClienteQuery groupById() Group by the id column
 * @method     MensagemClienteQuery groupByMensagemId() Group by the mensagem column
 * @method     MensagemClienteQuery groupByClienteId() Group by the cliente column
 * @method     MensagemClienteQuery groupByLido() Group by the lido column
 *
 * @method     MensagemClienteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     MensagemClienteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     MensagemClienteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     MensagemClienteQuery leftJoinMensagem($relationAlias = null) Adds a LEFT JOIN clause to the query using the Mensagem relation
 * @method     MensagemClienteQuery rightJoinMensagem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Mensagem relation
 * @method     MensagemClienteQuery innerJoinMensagem($relationAlias = null) Adds a INNER JOIN clause to the query using the Mensagem relation
 *
 * @method     MensagemClienteQuery leftJoinCliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cliente relation
 * @method     MensagemClienteQuery rightJoinCliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cliente relation
 * @method     MensagemClienteQuery innerJoinCliente($relationAlias = null) Adds a INNER JOIN clause to the query using the Cliente relation
 *
 * @method     MensagemCliente findOne(PropelPDO $con = null) Return the first MensagemCliente matching the query
 * @method     MensagemCliente findOneOrCreate(PropelPDO $con = null) Return the first MensagemCliente matching the query, or a new MensagemCliente object populated from the query conditions when no match is found
 *
 * @method     MensagemCliente findOneById(int $id) Return the first MensagemCliente filtered by the id column
 * @method     MensagemCliente findOneByMensagemId(int $mensagem) Return the first MensagemCliente filtered by the mensagem column
 * @method     MensagemCliente findOneByClienteId(int $cliente) Return the first MensagemCliente filtered by the cliente column
 * @method     MensagemCliente findOneByLido(string $lido) Return the first MensagemCliente filtered by the lido column
 *
 * @method     array findById(int $id) Return MensagemCliente objects filtered by the id column
 * @method     array findByMensagemId(int $mensagem) Return MensagemCliente objects filtered by the mensagem column
 * @method     array findByClienteId(int $cliente) Return MensagemCliente objects filtered by the cliente column
 * @method     array findByLido(string $lido) Return MensagemCliente objects filtered by the lido column
 *
 * @package    propel.generator..om
 */
abstract class BaseMensagemClienteQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseMensagemClienteQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'tickets', $modelName = 'MensagemCliente', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new MensagemClienteQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    MensagemClienteQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof MensagemClienteQuery) {
			return $criteria;
		}
		$query = new MensagemClienteQuery();
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
	 * @return    MensagemCliente|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = MensagemClientePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(MensagemClientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    MensagemCliente A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `MENSAGEM`, `CLIENTE`, `LIDO` FROM `mensagem_cliente` WHERE `ID` = :p0';
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
			$obj = new MensagemCliente();
			$obj->hydrate($row);
			MensagemClientePeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    MensagemCliente|array|mixed the result, formatted by the current formatter
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
	 * @return    MensagemClienteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(MensagemClientePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    MensagemClienteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(MensagemClientePeer::ID, $keys, Criteria::IN);
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
	 * @return    MensagemClienteQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(MensagemClientePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the mensagem column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByMensagemId(1234); // WHERE mensagem = 1234
	 * $query->filterByMensagemId(array(12, 34)); // WHERE mensagem IN (12, 34)
	 * $query->filterByMensagemId(array('min' => 12)); // WHERE mensagem > 12
	 * </code>
	 *
	 * @see       filterByMensagem()
	 *
	 * @param     mixed $mensagemId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MensagemClienteQuery The current query, for fluid interface
	 */
	public function filterByMensagemId($mensagemId = null, $comparison = null)
	{
		if (is_array($mensagemId)) {
			$useMinMax = false;
			if (isset($mensagemId['min'])) {
				$this->addUsingAlias(MensagemClientePeer::MENSAGEM, $mensagemId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($mensagemId['max'])) {
				$this->addUsingAlias(MensagemClientePeer::MENSAGEM, $mensagemId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(MensagemClientePeer::MENSAGEM, $mensagemId, $comparison);
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
	 * @return    MensagemClienteQuery The current query, for fluid interface
	 */
	public function filterByClienteId($clienteId = null, $comparison = null)
	{
		if (is_array($clienteId)) {
			$useMinMax = false;
			if (isset($clienteId['min'])) {
				$this->addUsingAlias(MensagemClientePeer::CLIENTE, $clienteId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($clienteId['max'])) {
				$this->addUsingAlias(MensagemClientePeer::CLIENTE, $clienteId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(MensagemClientePeer::CLIENTE, $clienteId, $comparison);
	}

	/**
	 * Filter the query on the lido column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLido('fooValue');   // WHERE lido = 'fooValue'
	 * $query->filterByLido('%fooValue%'); // WHERE lido LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $lido The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MensagemClienteQuery The current query, for fluid interface
	 */
	public function filterByLido($lido = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($lido)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $lido)) {
				$lido = str_replace('*', '%', $lido);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(MensagemClientePeer::LIDO, $lido, $comparison);
	}

	/**
	 * Filter the query by a related Mensagem object
	 *
	 * @param     Mensagem|PropelCollection $mensagem The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MensagemClienteQuery The current query, for fluid interface
	 */
	public function filterByMensagem($mensagem, $comparison = null)
	{
		if ($mensagem instanceof Mensagem) {
			return $this
				->addUsingAlias(MensagemClientePeer::MENSAGEM, $mensagem->getId(), $comparison);
		} elseif ($mensagem instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(MensagemClientePeer::MENSAGEM, $mensagem->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByMensagem() only accepts arguments of type Mensagem or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Mensagem relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MensagemClienteQuery The current query, for fluid interface
	 */
	public function joinMensagem($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Mensagem');

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
			$this->addJoinObject($join, 'Mensagem');
		}

		return $this;
	}

	/**
	 * Use the Mensagem relation Mensagem object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MensagemQuery A secondary query class using the current class as primary query
	 */
	public function useMensagemQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinMensagem($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Mensagem', 'MensagemQuery');
	}

	/**
	 * Filter the query by a related Cliente object
	 *
	 * @param     Cliente|PropelCollection $cliente The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MensagemClienteQuery The current query, for fluid interface
	 */
	public function filterByCliente($cliente, $comparison = null)
	{
		if ($cliente instanceof Cliente) {
			return $this
				->addUsingAlias(MensagemClientePeer::CLIENTE, $cliente->getId(), $comparison);
		} elseif ($cliente instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(MensagemClientePeer::CLIENTE, $cliente->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    MensagemClienteQuery The current query, for fluid interface
	 */
	public function joinCliente($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
	public function useClienteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinCliente($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Cliente', 'ClienteQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     MensagemCliente $mensagemCliente Object to remove from the list of results
	 *
	 * @return    MensagemClienteQuery The current query, for fluid interface
	 */
	public function prune($mensagemCliente = null)
	{
		if ($mensagemCliente) {
			$this->addUsingAlias(MensagemClientePeer::ID, $mensagemCliente->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseMensagemClienteQuery