<?php


/**
 * Base class that represents a query for the 'endereco' table.
 *
 * 
 *
 * @method     EnderecoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     EnderecoQuery orderByRua($order = Criteria::ASC) Order by the rua column
 * @method     EnderecoQuery orderByBairro($order = Criteria::ASC) Order by the bairro column
 * @method     EnderecoQuery orderByNumero($order = Criteria::ASC) Order by the numero column
 * @method     EnderecoQuery orderByCidade($order = Criteria::ASC) Order by the cidade column
 * @method     EnderecoQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 * @method     EnderecoQuery orderByCep($order = Criteria::ASC) Order by the cep column
 * @method     EnderecoQuery orderByComplemento($order = Criteria::ASC) Order by the complemento column
 * @method     EnderecoQuery orderByClienteId($order = Criteria::ASC) Order by the cliente column
 *
 * @method     EnderecoQuery groupById() Group by the id column
 * @method     EnderecoQuery groupByRua() Group by the rua column
 * @method     EnderecoQuery groupByBairro() Group by the bairro column
 * @method     EnderecoQuery groupByNumero() Group by the numero column
 * @method     EnderecoQuery groupByCidade() Group by the cidade column
 * @method     EnderecoQuery groupByEstado() Group by the estado column
 * @method     EnderecoQuery groupByCep() Group by the cep column
 * @method     EnderecoQuery groupByComplemento() Group by the complemento column
 * @method     EnderecoQuery groupByClienteId() Group by the cliente column
 *
 * @method     EnderecoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EnderecoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EnderecoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     EnderecoQuery leftJoinCliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cliente relation
 * @method     EnderecoQuery rightJoinCliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cliente relation
 * @method     EnderecoQuery innerJoinCliente($relationAlias = null) Adds a INNER JOIN clause to the query using the Cliente relation
 *
 * @method     Endereco findOne(PropelPDO $con = null) Return the first Endereco matching the query
 * @method     Endereco findOneOrCreate(PropelPDO $con = null) Return the first Endereco matching the query, or a new Endereco object populated from the query conditions when no match is found
 *
 * @method     Endereco findOneById(int $id) Return the first Endereco filtered by the id column
 * @method     Endereco findOneByRua(string $rua) Return the first Endereco filtered by the rua column
 * @method     Endereco findOneByBairro(string $bairro) Return the first Endereco filtered by the bairro column
 * @method     Endereco findOneByNumero(int $numero) Return the first Endereco filtered by the numero column
 * @method     Endereco findOneByCidade(string $cidade) Return the first Endereco filtered by the cidade column
 * @method     Endereco findOneByEstado(int $estado) Return the first Endereco filtered by the estado column
 * @method     Endereco findOneByCep(string $cep) Return the first Endereco filtered by the cep column
 * @method     Endereco findOneByComplemento(string $complemento) Return the first Endereco filtered by the complemento column
 * @method     Endereco findOneByClienteId(int $cliente) Return the first Endereco filtered by the cliente column
 *
 * @method     array findById(int $id) Return Endereco objects filtered by the id column
 * @method     array findByRua(string $rua) Return Endereco objects filtered by the rua column
 * @method     array findByBairro(string $bairro) Return Endereco objects filtered by the bairro column
 * @method     array findByNumero(int $numero) Return Endereco objects filtered by the numero column
 * @method     array findByCidade(string $cidade) Return Endereco objects filtered by the cidade column
 * @method     array findByEstado(int $estado) Return Endereco objects filtered by the estado column
 * @method     array findByCep(string $cep) Return Endereco objects filtered by the cep column
 * @method     array findByComplemento(string $complemento) Return Endereco objects filtered by the complemento column
 * @method     array findByClienteId(int $cliente) Return Endereco objects filtered by the cliente column
 *
 * @package    propel.generator..om
 */
abstract class BaseEnderecoQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseEnderecoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'tickets', $modelName = 'Endereco', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new EnderecoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    EnderecoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof EnderecoQuery) {
			return $criteria;
		}
		$query = new EnderecoQuery();
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
	 * @return    Endereco|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = EnderecoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(EnderecoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Endereco A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `RUA`, `BAIRRO`, `NUMERO`, `CIDADE`, `ESTADO`, `CEP`, `COMPLEMENTO`, `CLIENTE` FROM `endereco` WHERE `ID` = :p0';
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
			$obj = new Endereco();
			$obj->hydrate($row);
			EnderecoPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    Endereco|array|mixed the result, formatted by the current formatter
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
	 * @return    EnderecoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(EnderecoPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    EnderecoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(EnderecoPeer::ID, $keys, Criteria::IN);
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
	 * @return    EnderecoQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(EnderecoPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the rua column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByRua('fooValue');   // WHERE rua = 'fooValue'
	 * $query->filterByRua('%fooValue%'); // WHERE rua LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $rua The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EnderecoQuery The current query, for fluid interface
	 */
	public function filterByRua($rua = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($rua)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $rua)) {
				$rua = str_replace('*', '%', $rua);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EnderecoPeer::RUA, $rua, $comparison);
	}

	/**
	 * Filter the query on the bairro column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByBairro('fooValue');   // WHERE bairro = 'fooValue'
	 * $query->filterByBairro('%fooValue%'); // WHERE bairro LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $bairro The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EnderecoQuery The current query, for fluid interface
	 */
	public function filterByBairro($bairro = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($bairro)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $bairro)) {
				$bairro = str_replace('*', '%', $bairro);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EnderecoPeer::BAIRRO, $bairro, $comparison);
	}

	/**
	 * Filter the query on the numero column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNumero(1234); // WHERE numero = 1234
	 * $query->filterByNumero(array(12, 34)); // WHERE numero IN (12, 34)
	 * $query->filterByNumero(array('min' => 12)); // WHERE numero > 12
	 * </code>
	 *
	 * @param     mixed $numero The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EnderecoQuery The current query, for fluid interface
	 */
	public function filterByNumero($numero = null, $comparison = null)
	{
		if (is_array($numero)) {
			$useMinMax = false;
			if (isset($numero['min'])) {
				$this->addUsingAlias(EnderecoPeer::NUMERO, $numero['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($numero['max'])) {
				$this->addUsingAlias(EnderecoPeer::NUMERO, $numero['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(EnderecoPeer::NUMERO, $numero, $comparison);
	}

	/**
	 * Filter the query on the cidade column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCidade('fooValue');   // WHERE cidade = 'fooValue'
	 * $query->filterByCidade('%fooValue%'); // WHERE cidade LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $cidade The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EnderecoQuery The current query, for fluid interface
	 */
	public function filterByCidade($cidade = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($cidade)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $cidade)) {
				$cidade = str_replace('*', '%', $cidade);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EnderecoPeer::CIDADE, $cidade, $comparison);
	}

	/**
	 * Filter the query on the estado column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByEstado(1234); // WHERE estado = 1234
	 * $query->filterByEstado(array(12, 34)); // WHERE estado IN (12, 34)
	 * $query->filterByEstado(array('min' => 12)); // WHERE estado > 12
	 * </code>
	 *
	 * @param     mixed $estado The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EnderecoQuery The current query, for fluid interface
	 */
	public function filterByEstado($estado = null, $comparison = null)
	{
		if (is_array($estado)) {
			$useMinMax = false;
			if (isset($estado['min'])) {
				$this->addUsingAlias(EnderecoPeer::ESTADO, $estado['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($estado['max'])) {
				$this->addUsingAlias(EnderecoPeer::ESTADO, $estado['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(EnderecoPeer::ESTADO, $estado, $comparison);
	}

	/**
	 * Filter the query on the cep column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCep('fooValue');   // WHERE cep = 'fooValue'
	 * $query->filterByCep('%fooValue%'); // WHERE cep LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $cep The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EnderecoQuery The current query, for fluid interface
	 */
	public function filterByCep($cep = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($cep)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $cep)) {
				$cep = str_replace('*', '%', $cep);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EnderecoPeer::CEP, $cep, $comparison);
	}

	/**
	 * Filter the query on the complemento column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByComplemento('fooValue');   // WHERE complemento = 'fooValue'
	 * $query->filterByComplemento('%fooValue%'); // WHERE complemento LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $complemento The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EnderecoQuery The current query, for fluid interface
	 */
	public function filterByComplemento($complemento = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($complemento)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $complemento)) {
				$complemento = str_replace('*', '%', $complemento);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EnderecoPeer::COMPLEMENTO, $complemento, $comparison);
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
	 * @return    EnderecoQuery The current query, for fluid interface
	 */
	public function filterByClienteId($clienteId = null, $comparison = null)
	{
		if (is_array($clienteId)) {
			$useMinMax = false;
			if (isset($clienteId['min'])) {
				$this->addUsingAlias(EnderecoPeer::CLIENTE, $clienteId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($clienteId['max'])) {
				$this->addUsingAlias(EnderecoPeer::CLIENTE, $clienteId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(EnderecoPeer::CLIENTE, $clienteId, $comparison);
	}

	/**
	 * Filter the query by a related Cliente object
	 *
	 * @param     Cliente|PropelCollection $cliente The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EnderecoQuery The current query, for fluid interface
	 */
	public function filterByCliente($cliente, $comparison = null)
	{
		if ($cliente instanceof Cliente) {
			return $this
				->addUsingAlias(EnderecoPeer::CLIENTE, $cliente->getId(), $comparison);
		} elseif ($cliente instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(EnderecoPeer::CLIENTE, $cliente->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    EnderecoQuery The current query, for fluid interface
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
	 * @param     Endereco $endereco Object to remove from the list of results
	 *
	 * @return    EnderecoQuery The current query, for fluid interface
	 */
	public function prune($endereco = null)
	{
		if ($endereco) {
			$this->addUsingAlias(EnderecoPeer::ID, $endereco->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseEnderecoQuery