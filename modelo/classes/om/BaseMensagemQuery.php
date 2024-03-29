<?php


/**
 * Base class that represents a query for the 'mensagem' table.
 *
 * 
 *
 * @method     MensagemQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     MensagemQuery orderByMensagem($order = Criteria::ASC) Order by the mensagem column
 * @method     MensagemQuery orderByObrigatorio($order = Criteria::ASC) Order by the obrigatorio column
 * @method     MensagemQuery orderByDataHora($order = Criteria::ASC) Order by the data_hora column
 *
 * @method     MensagemQuery groupById() Group by the id column
 * @method     MensagemQuery groupByMensagem() Group by the mensagem column
 * @method     MensagemQuery groupByObrigatorio() Group by the obrigatorio column
 * @method     MensagemQuery groupByDataHora() Group by the data_hora column
 *
 * @method     MensagemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     MensagemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     MensagemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     MensagemQuery leftJoinMensagemCliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the MensagemCliente relation
 * @method     MensagemQuery rightJoinMensagemCliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the MensagemCliente relation
 * @method     MensagemQuery innerJoinMensagemCliente($relationAlias = null) Adds a INNER JOIN clause to the query using the MensagemCliente relation
 *
 * @method     Mensagem findOne(PropelPDO $con = null) Return the first Mensagem matching the query
 * @method     Mensagem findOneOrCreate(PropelPDO $con = null) Return the first Mensagem matching the query, or a new Mensagem object populated from the query conditions when no match is found
 *
 * @method     Mensagem findOneById(int $id) Return the first Mensagem filtered by the id column
 * @method     Mensagem findOneByMensagem(string $mensagem) Return the first Mensagem filtered by the mensagem column
 * @method     Mensagem findOneByObrigatorio(string $obrigatorio) Return the first Mensagem filtered by the obrigatorio column
 * @method     Mensagem findOneByDataHora(string $data_hora) Return the first Mensagem filtered by the data_hora column
 *
 * @method     array findById(int $id) Return Mensagem objects filtered by the id column
 * @method     array findByMensagem(string $mensagem) Return Mensagem objects filtered by the mensagem column
 * @method     array findByObrigatorio(string $obrigatorio) Return Mensagem objects filtered by the obrigatorio column
 * @method     array findByDataHora(string $data_hora) Return Mensagem objects filtered by the data_hora column
 *
 * @package    propel.generator..om
 */
abstract class BaseMensagemQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseMensagemQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'tickets', $modelName = 'Mensagem', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new MensagemQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    MensagemQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof MensagemQuery) {
			return $criteria;
		}
		$query = new MensagemQuery();
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
	 * @return    Mensagem|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = MensagemPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(MensagemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Mensagem A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `MENSAGEM`, `OBRIGATORIO`, `DATA_HORA` FROM `mensagem` WHERE `ID` = :p0';
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
			$obj = new Mensagem();
			$obj->hydrate($row);
			MensagemPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    Mensagem|array|mixed the result, formatted by the current formatter
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
	 * @return    MensagemQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(MensagemPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    MensagemQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(MensagemPeer::ID, $keys, Criteria::IN);
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
	 * @return    MensagemQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(MensagemPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the mensagem column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByMensagem('fooValue');   // WHERE mensagem = 'fooValue'
	 * $query->filterByMensagem('%fooValue%'); // WHERE mensagem LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $mensagem The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MensagemQuery The current query, for fluid interface
	 */
	public function filterByMensagem($mensagem = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($mensagem)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $mensagem)) {
				$mensagem = str_replace('*', '%', $mensagem);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(MensagemPeer::MENSAGEM, $mensagem, $comparison);
	}

	/**
	 * Filter the query on the obrigatorio column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByObrigatorio('fooValue');   // WHERE obrigatorio = 'fooValue'
	 * $query->filterByObrigatorio('%fooValue%'); // WHERE obrigatorio LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $obrigatorio The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MensagemQuery The current query, for fluid interface
	 */
	public function filterByObrigatorio($obrigatorio = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($obrigatorio)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $obrigatorio)) {
				$obrigatorio = str_replace('*', '%', $obrigatorio);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(MensagemPeer::OBRIGATORIO, $obrigatorio, $comparison);
	}

	/**
	 * Filter the query on the data_hora column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDataHora('2011-03-14'); // WHERE data_hora = '2011-03-14'
	 * $query->filterByDataHora('now'); // WHERE data_hora = '2011-03-14'
	 * $query->filterByDataHora(array('max' => 'yesterday')); // WHERE data_hora > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dataHora The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MensagemQuery The current query, for fluid interface
	 */
	public function filterByDataHora($dataHora = null, $comparison = null)
	{
		if (is_array($dataHora)) {
			$useMinMax = false;
			if (isset($dataHora['min'])) {
				$this->addUsingAlias(MensagemPeer::DATA_HORA, $dataHora['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dataHora['max'])) {
				$this->addUsingAlias(MensagemPeer::DATA_HORA, $dataHora['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(MensagemPeer::DATA_HORA, $dataHora, $comparison);
	}

	/**
	 * Filter the query by a related MensagemCliente object
	 *
	 * @param     MensagemCliente $mensagemCliente  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MensagemQuery The current query, for fluid interface
	 */
	public function filterByMensagemCliente($mensagemCliente, $comparison = null)
	{
		if ($mensagemCliente instanceof MensagemCliente) {
			return $this
				->addUsingAlias(MensagemPeer::ID, $mensagemCliente->getMensagemId(), $comparison);
		} elseif ($mensagemCliente instanceof PropelCollection) {
			return $this
				->useMensagemClienteQuery()
				->filterByPrimaryKeys($mensagemCliente->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByMensagemCliente() only accepts arguments of type MensagemCliente or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the MensagemCliente relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MensagemQuery The current query, for fluid interface
	 */
	public function joinMensagemCliente($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('MensagemCliente');

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
			$this->addJoinObject($join, 'MensagemCliente');
		}

		return $this;
	}

	/**
	 * Use the MensagemCliente relation MensagemCliente object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MensagemClienteQuery A secondary query class using the current class as primary query
	 */
	public function useMensagemClienteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinMensagemCliente($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'MensagemCliente', 'MensagemClienteQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Mensagem $mensagem Object to remove from the list of results
	 *
	 * @return    MensagemQuery The current query, for fluid interface
	 */
	public function prune($mensagem = null)
	{
		if ($mensagem) {
			$this->addUsingAlias(MensagemPeer::ID, $mensagem->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseMensagemQuery