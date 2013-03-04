<?php


/**
 * Base class that represents a query for the 'comentario' table.
 *
 * 
 *
 * @method     ComentarioQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ComentarioQuery orderByTicketId($order = Criteria::ASC) Order by the ticket column
 * @method     ComentarioQuery orderByOrigem($order = Criteria::ASC) Order by the origem column
 * @method     ComentarioQuery orderByDataHora($order = Criteria::ASC) Order by the data_hora column
 * @method     ComentarioQuery orderByComentario($order = Criteria::ASC) Order by the comentario column
 * @method     ComentarioQuery orderByAtualizacao($order = Criteria::ASC) Order by the atualizacao column
 *
 * @method     ComentarioQuery groupById() Group by the id column
 * @method     ComentarioQuery groupByTicketId() Group by the ticket column
 * @method     ComentarioQuery groupByOrigem() Group by the origem column
 * @method     ComentarioQuery groupByDataHora() Group by the data_hora column
 * @method     ComentarioQuery groupByComentario() Group by the comentario column
 * @method     ComentarioQuery groupByAtualizacao() Group by the atualizacao column
 *
 * @method     ComentarioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ComentarioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ComentarioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ComentarioQuery leftJoinTicket($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ticket relation
 * @method     ComentarioQuery rightJoinTicket($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ticket relation
 * @method     ComentarioQuery innerJoinTicket($relationAlias = null) Adds a INNER JOIN clause to the query using the Ticket relation
 *
 * @method     ComentarioQuery leftJoinImagem($relationAlias = null) Adds a LEFT JOIN clause to the query using the Imagem relation
 * @method     ComentarioQuery rightJoinImagem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Imagem relation
 * @method     ComentarioQuery innerJoinImagem($relationAlias = null) Adds a INNER JOIN clause to the query using the Imagem relation
 *
 * @method     Comentario findOne(PropelPDO $con = null) Return the first Comentario matching the query
 * @method     Comentario findOneOrCreate(PropelPDO $con = null) Return the first Comentario matching the query, or a new Comentario object populated from the query conditions when no match is found
 *
 * @method     Comentario findOneById(int $id) Return the first Comentario filtered by the id column
 * @method     Comentario findOneByTicketId(int $ticket) Return the first Comentario filtered by the ticket column
 * @method     Comentario findOneByOrigem(string $origem) Return the first Comentario filtered by the origem column
 * @method     Comentario findOneByDataHora(string $data_hora) Return the first Comentario filtered by the data_hora column
 * @method     Comentario findOneByComentario(string $comentario) Return the first Comentario filtered by the comentario column
 * @method     Comentario findOneByAtualizacao(string $atualizacao) Return the first Comentario filtered by the atualizacao column
 *
 * @method     array findById(int $id) Return Comentario objects filtered by the id column
 * @method     array findByTicketId(int $ticket) Return Comentario objects filtered by the ticket column
 * @method     array findByOrigem(string $origem) Return Comentario objects filtered by the origem column
 * @method     array findByDataHora(string $data_hora) Return Comentario objects filtered by the data_hora column
 * @method     array findByComentario(string $comentario) Return Comentario objects filtered by the comentario column
 * @method     array findByAtualizacao(string $atualizacao) Return Comentario objects filtered by the atualizacao column
 *
 * @package    propel.generator..om
 */
abstract class BaseComentarioQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseComentarioQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'tickets', $modelName = 'Comentario', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ComentarioQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ComentarioQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ComentarioQuery) {
			return $criteria;
		}
		$query = new ComentarioQuery();
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
	 * @return    Comentario|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = ComentarioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(ComentarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Comentario A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `TICKET`, `ORIGEM`, `DATA_HORA`, `COMENTARIO`, `ATUALIZACAO` FROM `comentario` WHERE `ID` = :p0';
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
			$obj = new Comentario();
			$obj->hydrate($row);
			ComentarioPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    Comentario|array|mixed the result, formatted by the current formatter
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
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ComentarioPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ComentarioPeer::ID, $keys, Criteria::IN);
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
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ComentarioPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the ticket column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTicketId(1234); // WHERE ticket = 1234
	 * $query->filterByTicketId(array(12, 34)); // WHERE ticket IN (12, 34)
	 * $query->filterByTicketId(array('min' => 12)); // WHERE ticket > 12
	 * </code>
	 *
	 * @see       filterByTicket()
	 *
	 * @param     mixed $ticketId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterByTicketId($ticketId = null, $comparison = null)
	{
		if (is_array($ticketId)) {
			$useMinMax = false;
			if (isset($ticketId['min'])) {
				$this->addUsingAlias(ComentarioPeer::TICKET, $ticketId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ticketId['max'])) {
				$this->addUsingAlias(ComentarioPeer::TICKET, $ticketId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ComentarioPeer::TICKET, $ticketId, $comparison);
	}

	/**
	 * Filter the query on the origem column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByOrigem('fooValue');   // WHERE origem = 'fooValue'
	 * $query->filterByOrigem('%fooValue%'); // WHERE origem LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $origem The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterByOrigem($origem = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($origem)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $origem)) {
				$origem = str_replace('*', '%', $origem);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ComentarioPeer::ORIGEM, $origem, $comparison);
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
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterByDataHora($dataHora = null, $comparison = null)
	{
		if (is_array($dataHora)) {
			$useMinMax = false;
			if (isset($dataHora['min'])) {
				$this->addUsingAlias(ComentarioPeer::DATA_HORA, $dataHora['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dataHora['max'])) {
				$this->addUsingAlias(ComentarioPeer::DATA_HORA, $dataHora['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ComentarioPeer::DATA_HORA, $dataHora, $comparison);
	}

	/**
	 * Filter the query on the comentario column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByComentario('fooValue');   // WHERE comentario = 'fooValue'
	 * $query->filterByComentario('%fooValue%'); // WHERE comentario LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $comentario The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterByComentario($comentario = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($comentario)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $comentario)) {
				$comentario = str_replace('*', '%', $comentario);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ComentarioPeer::COMENTARIO, $comentario, $comparison);
	}

	/**
	 * Filter the query on the atualizacao column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAtualizacao('fooValue');   // WHERE atualizacao = 'fooValue'
	 * $query->filterByAtualizacao('%fooValue%'); // WHERE atualizacao LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $atualizacao The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterByAtualizacao($atualizacao = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($atualizacao)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $atualizacao)) {
				$atualizacao = str_replace('*', '%', $atualizacao);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ComentarioPeer::ATUALIZACAO, $atualizacao, $comparison);
	}

	/**
	 * Filter the query by a related Ticket object
	 *
	 * @param     Ticket|PropelCollection $ticket The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterByTicket($ticket, $comparison = null)
	{
		if ($ticket instanceof Ticket) {
			return $this
				->addUsingAlias(ComentarioPeer::TICKET, $ticket->getId(), $comparison);
		} elseif ($ticket instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(ComentarioPeer::TICKET, $ticket->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByTicket() only accepts arguments of type Ticket or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Ticket relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function joinTicket($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Ticket');

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
			$this->addJoinObject($join, 'Ticket');
		}

		return $this;
	}

	/**
	 * Use the Ticket relation Ticket object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TicketQuery A secondary query class using the current class as primary query
	 */
	public function useTicketQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinTicket($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Ticket', 'TicketQuery');
	}

	/**
	 * Filter the query by a related Imagem object
	 *
	 * @param     Imagem $imagem  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterByImagem($imagem, $comparison = null)
	{
		if ($imagem instanceof Imagem) {
			return $this
				->addUsingAlias(ComentarioPeer::ID, $imagem->getComentarioId(), $comparison);
		} elseif ($imagem instanceof PropelCollection) {
			return $this
				->useImagemQuery()
				->filterByPrimaryKeys($imagem->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByImagem() only accepts arguments of type Imagem or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Imagem relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function joinImagem($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Imagem');

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
			$this->addJoinObject($join, 'Imagem');
		}

		return $this;
	}

	/**
	 * Use the Imagem relation Imagem object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ImagemQuery A secondary query class using the current class as primary query
	 */
	public function useImagemQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinImagem($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Imagem', 'ImagemQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Comentario $comentario Object to remove from the list of results
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function prune($comentario = null)
	{
		if ($comentario) {
			$this->addUsingAlias(ComentarioPeer::ID, $comentario->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseComentarioQuery