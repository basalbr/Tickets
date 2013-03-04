<?php


/**
 * Base class that represents a query for the 'imagem' table.
 *
 * 
 *
 * @method     ImagemQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ImagemQuery orderByComentarioId($order = Criteria::ASC) Order by the comentario column
 * @method     ImagemQuery orderByNome($order = Criteria::ASC) Order by the nome column
 * @method     ImagemQuery orderByLegenda($order = Criteria::ASC) Order by the legenda column
 *
 * @method     ImagemQuery groupById() Group by the id column
 * @method     ImagemQuery groupByComentarioId() Group by the comentario column
 * @method     ImagemQuery groupByNome() Group by the nome column
 * @method     ImagemQuery groupByLegenda() Group by the legenda column
 *
 * @method     ImagemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ImagemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ImagemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ImagemQuery leftJoinComentario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Comentario relation
 * @method     ImagemQuery rightJoinComentario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Comentario relation
 * @method     ImagemQuery innerJoinComentario($relationAlias = null) Adds a INNER JOIN clause to the query using the Comentario relation
 *
 * @method     Imagem findOne(PropelPDO $con = null) Return the first Imagem matching the query
 * @method     Imagem findOneOrCreate(PropelPDO $con = null) Return the first Imagem matching the query, or a new Imagem object populated from the query conditions when no match is found
 *
 * @method     Imagem findOneById(int $id) Return the first Imagem filtered by the id column
 * @method     Imagem findOneByComentarioId(int $comentario) Return the first Imagem filtered by the comentario column
 * @method     Imagem findOneByNome(string $nome) Return the first Imagem filtered by the nome column
 * @method     Imagem findOneByLegenda(string $legenda) Return the first Imagem filtered by the legenda column
 *
 * @method     array findById(int $id) Return Imagem objects filtered by the id column
 * @method     array findByComentarioId(int $comentario) Return Imagem objects filtered by the comentario column
 * @method     array findByNome(string $nome) Return Imagem objects filtered by the nome column
 * @method     array findByLegenda(string $legenda) Return Imagem objects filtered by the legenda column
 *
 * @package    propel.generator..om
 */
abstract class BaseImagemQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseImagemQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'tickets', $modelName = 'Imagem', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ImagemQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ImagemQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ImagemQuery) {
			return $criteria;
		}
		$query = new ImagemQuery();
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
	 * @return    Imagem|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = ImagemPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(ImagemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Imagem A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `COMENTARIO`, `NOME`, `LEGENDA` FROM `imagem` WHERE `ID` = :p0';
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
			$obj = new Imagem();
			$obj->hydrate($row);
			ImagemPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    Imagem|array|mixed the result, formatted by the current formatter
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
	 * @return    ImagemQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ImagemPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ImagemQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ImagemPeer::ID, $keys, Criteria::IN);
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
	 * @return    ImagemQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ImagemPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the comentario column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByComentarioId(1234); // WHERE comentario = 1234
	 * $query->filterByComentarioId(array(12, 34)); // WHERE comentario IN (12, 34)
	 * $query->filterByComentarioId(array('min' => 12)); // WHERE comentario > 12
	 * </code>
	 *
	 * @see       filterByComentario()
	 *
	 * @param     mixed $comentarioId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImagemQuery The current query, for fluid interface
	 */
	public function filterByComentarioId($comentarioId = null, $comparison = null)
	{
		if (is_array($comentarioId)) {
			$useMinMax = false;
			if (isset($comentarioId['min'])) {
				$this->addUsingAlias(ImagemPeer::COMENTARIO, $comentarioId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($comentarioId['max'])) {
				$this->addUsingAlias(ImagemPeer::COMENTARIO, $comentarioId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ImagemPeer::COMENTARIO, $comentarioId, $comparison);
	}

	/**
	 * Filter the query on the nome column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNome('fooValue');   // WHERE nome = 'fooValue'
	 * $query->filterByNome('%fooValue%'); // WHERE nome LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nome The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImagemQuery The current query, for fluid interface
	 */
	public function filterByNome($nome = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nome)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nome)) {
				$nome = str_replace('*', '%', $nome);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ImagemPeer::NOME, $nome, $comparison);
	}

	/**
	 * Filter the query on the legenda column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLegenda('fooValue');   // WHERE legenda = 'fooValue'
	 * $query->filterByLegenda('%fooValue%'); // WHERE legenda LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $legenda The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImagemQuery The current query, for fluid interface
	 */
	public function filterByLegenda($legenda = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($legenda)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $legenda)) {
				$legenda = str_replace('*', '%', $legenda);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ImagemPeer::LEGENDA, $legenda, $comparison);
	}

	/**
	 * Filter the query by a related Comentario object
	 *
	 * @param     Comentario|PropelCollection $comentario The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImagemQuery The current query, for fluid interface
	 */
	public function filterByComentario($comentario, $comparison = null)
	{
		if ($comentario instanceof Comentario) {
			return $this
				->addUsingAlias(ImagemPeer::COMENTARIO, $comentario->getId(), $comparison);
		} elseif ($comentario instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(ImagemPeer::COMENTARIO, $comentario->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    ImagemQuery The current query, for fluid interface
	 */
	public function joinComentario($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
	public function useComentarioQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinComentario($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Comentario', 'ComentarioQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Imagem $imagem Object to remove from the list of results
	 *
	 * @return    ImagemQuery The current query, for fluid interface
	 */
	public function prune($imagem = null)
	{
		if ($imagem) {
			$this->addUsingAlias(ImagemPeer::ID, $imagem->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseImagemQuery