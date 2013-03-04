<?php


/**
 * Base class that represents a query for the 'ticket' table.
 *
 * 
 *
 * @method     TicketQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     TicketQuery orderByClienteId($order = Criteria::ASC) Order by the cliente column
 * @method     TicketQuery orderByAtivo($order = Criteria::ASC) Order by the ativo column
 * @method     TicketQuery orderByDataInicio($order = Criteria::ASC) Order by the data_inicio column
 * @method     TicketQuery orderByDataFinal($order = Criteria::ASC) Order by the data_final column
 * @method     TicketQuery orderByHoraInicio($order = Criteria::ASC) Order by the hora_inicio column
 * @method     TicketQuery orderByHoraFinal($order = Criteria::ASC) Order by the hora_final column
 * @method     TicketQuery orderBySenha($order = Criteria::ASC) Order by the senha column
 * @method     TicketQuery orderByAndamento($order = Criteria::ASC) Order by the andamento column
 * @method     TicketQuery orderByDataPrazo($order = Criteria::ASC) Order by the data_prazo column
 * @method     TicketQuery orderByHoraPrazo($order = Criteria::ASC) Order by the hora_prazo column
 * @method     TicketQuery orderByValor($order = Criteria::ASC) Order by the valor column
 *
 * @method     TicketQuery groupById() Group by the id column
 * @method     TicketQuery groupByClienteId() Group by the cliente column
 * @method     TicketQuery groupByAtivo() Group by the ativo column
 * @method     TicketQuery groupByDataInicio() Group by the data_inicio column
 * @method     TicketQuery groupByDataFinal() Group by the data_final column
 * @method     TicketQuery groupByHoraInicio() Group by the hora_inicio column
 * @method     TicketQuery groupByHoraFinal() Group by the hora_final column
 * @method     TicketQuery groupBySenha() Group by the senha column
 * @method     TicketQuery groupByAndamento() Group by the andamento column
 * @method     TicketQuery groupByDataPrazo() Group by the data_prazo column
 * @method     TicketQuery groupByHoraPrazo() Group by the hora_prazo column
 * @method     TicketQuery groupByValor() Group by the valor column
 *
 * @method     TicketQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TicketQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TicketQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TicketQuery leftJoinCliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cliente relation
 * @method     TicketQuery rightJoinCliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cliente relation
 * @method     TicketQuery innerJoinCliente($relationAlias = null) Adds a INNER JOIN clause to the query using the Cliente relation
 *
 * @method     TicketQuery leftJoinComentario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Comentario relation
 * @method     TicketQuery rightJoinComentario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Comentario relation
 * @method     TicketQuery innerJoinComentario($relationAlias = null) Adds a INNER JOIN clause to the query using the Comentario relation
 *
 * @method     TicketQuery leftJoinEmail($relationAlias = null) Adds a LEFT JOIN clause to the query using the Email relation
 * @method     TicketQuery rightJoinEmail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Email relation
 * @method     TicketQuery innerJoinEmail($relationAlias = null) Adds a INNER JOIN clause to the query using the Email relation
 *
 * @method     Ticket findOne(PropelPDO $con = null) Return the first Ticket matching the query
 * @method     Ticket findOneOrCreate(PropelPDO $con = null) Return the first Ticket matching the query, or a new Ticket object populated from the query conditions when no match is found
 *
 * @method     Ticket findOneById(int $id) Return the first Ticket filtered by the id column
 * @method     Ticket findOneByClienteId(int $cliente) Return the first Ticket filtered by the cliente column
 * @method     Ticket findOneByAtivo(string $ativo) Return the first Ticket filtered by the ativo column
 * @method     Ticket findOneByDataInicio(string $data_inicio) Return the first Ticket filtered by the data_inicio column
 * @method     Ticket findOneByDataFinal(string $data_final) Return the first Ticket filtered by the data_final column
 * @method     Ticket findOneByHoraInicio(string $hora_inicio) Return the first Ticket filtered by the hora_inicio column
 * @method     Ticket findOneByHoraFinal(string $hora_final) Return the first Ticket filtered by the hora_final column
 * @method     Ticket findOneBySenha(string $senha) Return the first Ticket filtered by the senha column
 * @method     Ticket findOneByAndamento(int $andamento) Return the first Ticket filtered by the andamento column
 * @method     Ticket findOneByDataPrazo(string $data_prazo) Return the first Ticket filtered by the data_prazo column
 * @method     Ticket findOneByHoraPrazo(string $hora_prazo) Return the first Ticket filtered by the hora_prazo column
 * @method     Ticket findOneByValor(double $valor) Return the first Ticket filtered by the valor column
 *
 * @method     array findById(int $id) Return Ticket objects filtered by the id column
 * @method     array findByClienteId(int $cliente) Return Ticket objects filtered by the cliente column
 * @method     array findByAtivo(string $ativo) Return Ticket objects filtered by the ativo column
 * @method     array findByDataInicio(string $data_inicio) Return Ticket objects filtered by the data_inicio column
 * @method     array findByDataFinal(string $data_final) Return Ticket objects filtered by the data_final column
 * @method     array findByHoraInicio(string $hora_inicio) Return Ticket objects filtered by the hora_inicio column
 * @method     array findByHoraFinal(string $hora_final) Return Ticket objects filtered by the hora_final column
 * @method     array findBySenha(string $senha) Return Ticket objects filtered by the senha column
 * @method     array findByAndamento(int $andamento) Return Ticket objects filtered by the andamento column
 * @method     array findByDataPrazo(string $data_prazo) Return Ticket objects filtered by the data_prazo column
 * @method     array findByHoraPrazo(string $hora_prazo) Return Ticket objects filtered by the hora_prazo column
 * @method     array findByValor(double $valor) Return Ticket objects filtered by the valor column
 *
 * @package    propel.generator..om
 */
abstract class BaseTicketQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseTicketQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'tickets', $modelName = 'Ticket', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new TicketQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    TicketQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof TicketQuery) {
			return $criteria;
		}
		$query = new TicketQuery();
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
	 * @return    Ticket|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = TicketPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Ticket A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `CLIENTE`, `ATIVO`, `DATA_INICIO`, `DATA_FINAL`, `HORA_INICIO`, `HORA_FINAL`, `SENHA`, `ANDAMENTO`, `DATA_PRAZO`, `HORA_PRAZO`, `VALOR` FROM `ticket` WHERE `ID` = :p0';
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
			$obj = new Ticket();
			$obj->hydrate($row);
			TicketPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    Ticket|array|mixed the result, formatted by the current formatter
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
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(TicketPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(TicketPeer::ID, $keys, Criteria::IN);
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
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(TicketPeer::ID, $id, $comparison);
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
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByClienteId($clienteId = null, $comparison = null)
	{
		if (is_array($clienteId)) {
			$useMinMax = false;
			if (isset($clienteId['min'])) {
				$this->addUsingAlias(TicketPeer::CLIENTE, $clienteId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($clienteId['max'])) {
				$this->addUsingAlias(TicketPeer::CLIENTE, $clienteId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TicketPeer::CLIENTE, $clienteId, $comparison);
	}

	/**
	 * Filter the query on the ativo column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAtivo('fooValue');   // WHERE ativo = 'fooValue'
	 * $query->filterByAtivo('%fooValue%'); // WHERE ativo LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $ativo The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByAtivo($ativo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($ativo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $ativo)) {
				$ativo = str_replace('*', '%', $ativo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TicketPeer::ATIVO, $ativo, $comparison);
	}

	/**
	 * Filter the query on the data_inicio column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDataInicio('2011-03-14'); // WHERE data_inicio = '2011-03-14'
	 * $query->filterByDataInicio('now'); // WHERE data_inicio = '2011-03-14'
	 * $query->filterByDataInicio(array('max' => 'yesterday')); // WHERE data_inicio > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dataInicio The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByDataInicio($dataInicio = null, $comparison = null)
	{
		if (is_array($dataInicio)) {
			$useMinMax = false;
			if (isset($dataInicio['min'])) {
				$this->addUsingAlias(TicketPeer::DATA_INICIO, $dataInicio['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dataInicio['max'])) {
				$this->addUsingAlias(TicketPeer::DATA_INICIO, $dataInicio['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TicketPeer::DATA_INICIO, $dataInicio, $comparison);
	}

	/**
	 * Filter the query on the data_final column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDataFinal('2011-03-14'); // WHERE data_final = '2011-03-14'
	 * $query->filterByDataFinal('now'); // WHERE data_final = '2011-03-14'
	 * $query->filterByDataFinal(array('max' => 'yesterday')); // WHERE data_final > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dataFinal The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByDataFinal($dataFinal = null, $comparison = null)
	{
		if (is_array($dataFinal)) {
			$useMinMax = false;
			if (isset($dataFinal['min'])) {
				$this->addUsingAlias(TicketPeer::DATA_FINAL, $dataFinal['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dataFinal['max'])) {
				$this->addUsingAlias(TicketPeer::DATA_FINAL, $dataFinal['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TicketPeer::DATA_FINAL, $dataFinal, $comparison);
	}

	/**
	 * Filter the query on the hora_inicio column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByHoraInicio('2011-03-14'); // WHERE hora_inicio = '2011-03-14'
	 * $query->filterByHoraInicio('now'); // WHERE hora_inicio = '2011-03-14'
	 * $query->filterByHoraInicio(array('max' => 'yesterday')); // WHERE hora_inicio > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $horaInicio The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByHoraInicio($horaInicio = null, $comparison = null)
	{
		if (is_array($horaInicio)) {
			$useMinMax = false;
			if (isset($horaInicio['min'])) {
				$this->addUsingAlias(TicketPeer::HORA_INICIO, $horaInicio['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($horaInicio['max'])) {
				$this->addUsingAlias(TicketPeer::HORA_INICIO, $horaInicio['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TicketPeer::HORA_INICIO, $horaInicio, $comparison);
	}

	/**
	 * Filter the query on the hora_final column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByHoraFinal('2011-03-14'); // WHERE hora_final = '2011-03-14'
	 * $query->filterByHoraFinal('now'); // WHERE hora_final = '2011-03-14'
	 * $query->filterByHoraFinal(array('max' => 'yesterday')); // WHERE hora_final > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $horaFinal The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByHoraFinal($horaFinal = null, $comparison = null)
	{
		if (is_array($horaFinal)) {
			$useMinMax = false;
			if (isset($horaFinal['min'])) {
				$this->addUsingAlias(TicketPeer::HORA_FINAL, $horaFinal['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($horaFinal['max'])) {
				$this->addUsingAlias(TicketPeer::HORA_FINAL, $horaFinal['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TicketPeer::HORA_FINAL, $horaFinal, $comparison);
	}

	/**
	 * Filter the query on the senha column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySenha('fooValue');   // WHERE senha = 'fooValue'
	 * $query->filterBySenha('%fooValue%'); // WHERE senha LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $senha The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterBySenha($senha = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($senha)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $senha)) {
				$senha = str_replace('*', '%', $senha);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TicketPeer::SENHA, $senha, $comparison);
	}

	/**
	 * Filter the query on the andamento column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAndamento(1234); // WHERE andamento = 1234
	 * $query->filterByAndamento(array(12, 34)); // WHERE andamento IN (12, 34)
	 * $query->filterByAndamento(array('min' => 12)); // WHERE andamento > 12
	 * </code>
	 *
	 * @param     mixed $andamento The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByAndamento($andamento = null, $comparison = null)
	{
		if (is_array($andamento)) {
			$useMinMax = false;
			if (isset($andamento['min'])) {
				$this->addUsingAlias(TicketPeer::ANDAMENTO, $andamento['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($andamento['max'])) {
				$this->addUsingAlias(TicketPeer::ANDAMENTO, $andamento['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TicketPeer::ANDAMENTO, $andamento, $comparison);
	}

	/**
	 * Filter the query on the data_prazo column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDataPrazo('2011-03-14'); // WHERE data_prazo = '2011-03-14'
	 * $query->filterByDataPrazo('now'); // WHERE data_prazo = '2011-03-14'
	 * $query->filterByDataPrazo(array('max' => 'yesterday')); // WHERE data_prazo > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dataPrazo The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByDataPrazo($dataPrazo = null, $comparison = null)
	{
		if (is_array($dataPrazo)) {
			$useMinMax = false;
			if (isset($dataPrazo['min'])) {
				$this->addUsingAlias(TicketPeer::DATA_PRAZO, $dataPrazo['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dataPrazo['max'])) {
				$this->addUsingAlias(TicketPeer::DATA_PRAZO, $dataPrazo['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TicketPeer::DATA_PRAZO, $dataPrazo, $comparison);
	}

	/**
	 * Filter the query on the hora_prazo column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByHoraPrazo('2011-03-14'); // WHERE hora_prazo = '2011-03-14'
	 * $query->filterByHoraPrazo('now'); // WHERE hora_prazo = '2011-03-14'
	 * $query->filterByHoraPrazo(array('max' => 'yesterday')); // WHERE hora_prazo > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $horaPrazo The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByHoraPrazo($horaPrazo = null, $comparison = null)
	{
		if (is_array($horaPrazo)) {
			$useMinMax = false;
			if (isset($horaPrazo['min'])) {
				$this->addUsingAlias(TicketPeer::HORA_PRAZO, $horaPrazo['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($horaPrazo['max'])) {
				$this->addUsingAlias(TicketPeer::HORA_PRAZO, $horaPrazo['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TicketPeer::HORA_PRAZO, $horaPrazo, $comparison);
	}

	/**
	 * Filter the query on the valor column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByValor(1234); // WHERE valor = 1234
	 * $query->filterByValor(array(12, 34)); // WHERE valor IN (12, 34)
	 * $query->filterByValor(array('min' => 12)); // WHERE valor > 12
	 * </code>
	 *
	 * @param     mixed $valor The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByValor($valor = null, $comparison = null)
	{
		if (is_array($valor)) {
			$useMinMax = false;
			if (isset($valor['min'])) {
				$this->addUsingAlias(TicketPeer::VALOR, $valor['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($valor['max'])) {
				$this->addUsingAlias(TicketPeer::VALOR, $valor['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TicketPeer::VALOR, $valor, $comparison);
	}

	/**
	 * Filter the query by a related Cliente object
	 *
	 * @param     Cliente|PropelCollection $cliente The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByCliente($cliente, $comparison = null)
	{
		if ($cliente instanceof Cliente) {
			return $this
				->addUsingAlias(TicketPeer::CLIENTE, $cliente->getId(), $comparison);
		} elseif ($cliente instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TicketPeer::CLIENTE, $cliente->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    TicketQuery The current query, for fluid interface
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
	 * Filter the query by a related Comentario object
	 *
	 * @param     Comentario $comentario  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByComentario($comentario, $comparison = null)
	{
		if ($comentario instanceof Comentario) {
			return $this
				->addUsingAlias(TicketPeer::ID, $comentario->getTicketId(), $comparison);
		} elseif ($comentario instanceof PropelCollection) {
			return $this
				->useComentarioQuery()
				->filterByPrimaryKeys($comentario->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByComentario() only accepts arguments of type Comentario or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Comentario relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function joinComentario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Comentario');

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
			$this->addJoinObject($join, 'Comentario');
		}

		return $this;
	}

	/**
	 * Use the Comentario relation Comentario object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ComentarioQuery A secondary query class using the current class as primary query
	 */
	public function useComentarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinComentario($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Comentario', 'ComentarioQuery');
	}

	/**
	 * Filter the query by a related Email object
	 *
	 * @param     Email $email  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByEmail($email, $comparison = null)
	{
		if ($email instanceof Email) {
			return $this
				->addUsingAlias(TicketPeer::ID, $email->getTicketId(), $comparison);
		} elseif ($email instanceof PropelCollection) {
			return $this
				->useEmailQuery()
				->filterByPrimaryKeys($email->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByEmail() only accepts arguments of type Email or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Email relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function joinEmail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Email');

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
			$this->addJoinObject($join, 'Email');
		}

		return $this;
	}

	/**
	 * Use the Email relation Email object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    EmailQuery A secondary query class using the current class as primary query
	 */
	public function useEmailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinEmail($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Email', 'EmailQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Ticket $ticket Object to remove from the list of results
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function prune($ticket = null)
	{
		if ($ticket) {
			$this->addUsingAlias(TicketPeer::ID, $ticket->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseTicketQuery