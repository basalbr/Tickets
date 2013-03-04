<?php


/**
 * Base class that represents a query for the 'admin' table.
 *
 * 
 *
 * @method     AdminQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     AdminQuery orderByUsuario($order = Criteria::ASC) Order by the usuario column
 * @method     AdminQuery orderBySenha($order = Criteria::ASC) Order by the senha column
 * @method     AdminQuery orderByAtivo($order = Criteria::ASC) Order by the ativo column
 * @method     AdminQuery orderByEmail($order = Criteria::ASC) Order by the email column
 *
 * @method     AdminQuery groupById() Group by the id column
 * @method     AdminQuery groupByUsuario() Group by the usuario column
 * @method     AdminQuery groupBySenha() Group by the senha column
 * @method     AdminQuery groupByAtivo() Group by the ativo column
 * @method     AdminQuery groupByEmail() Group by the email column
 *
 * @method     AdminQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AdminQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AdminQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Admin findOne(PropelPDO $con = null) Return the first Admin matching the query
 * @method     Admin findOneOrCreate(PropelPDO $con = null) Return the first Admin matching the query, or a new Admin object populated from the query conditions when no match is found
 *
 * @method     Admin findOneById(int $id) Return the first Admin filtered by the id column
 * @method     Admin findOneByUsuario(string $usuario) Return the first Admin filtered by the usuario column
 * @method     Admin findOneBySenha(string $senha) Return the first Admin filtered by the senha column
 * @method     Admin findOneByAtivo(string $ativo) Return the first Admin filtered by the ativo column
 * @method     Admin findOneByEmail(string $email) Return the first Admin filtered by the email column
 *
 * @method     array findById(int $id) Return Admin objects filtered by the id column
 * @method     array findByUsuario(string $usuario) Return Admin objects filtered by the usuario column
 * @method     array findBySenha(string $senha) Return Admin objects filtered by the senha column
 * @method     array findByAtivo(string $ativo) Return Admin objects filtered by the ativo column
 * @method     array findByEmail(string $email) Return Admin objects filtered by the email column
 *
 * @package    propel.generator..om
 */
abstract class BaseAdminQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseAdminQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'tickets', $modelName = 'Admin', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AdminQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AdminQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AdminQuery) {
			return $criteria;
		}
		$query = new AdminQuery();
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
	 * @return    Admin|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = AdminPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(AdminPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Admin A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `USUARIO`, `SENHA`, `ATIVO`, `EMAIL` FROM `admin` WHERE `ID` = :p0';
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
			$obj = new Admin();
			$obj->hydrate($row);
			AdminPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    Admin|array|mixed the result, formatted by the current formatter
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
	 * @return    AdminQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(AdminPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AdminQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(AdminPeer::ID, $keys, Criteria::IN);
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
	 * @return    AdminQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AdminPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the usuario column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUsuario('fooValue');   // WHERE usuario = 'fooValue'
	 * $query->filterByUsuario('%fooValue%'); // WHERE usuario LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $usuario The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AdminQuery The current query, for fluid interface
	 */
	public function filterByUsuario($usuario = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($usuario)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $usuario)) {
				$usuario = str_replace('*', '%', $usuario);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AdminPeer::USUARIO, $usuario, $comparison);
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
	 * @return    AdminQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AdminPeer::SENHA, $senha, $comparison);
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
	 * @return    AdminQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AdminPeer::ATIVO, $ativo, $comparison);
	}

	/**
	 * Filter the query on the email column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
	 * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $email The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AdminQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AdminPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Admin $admin Object to remove from the list of results
	 *
	 * @return    AdminQuery The current query, for fluid interface
	 */
	public function prune($admin = null)
	{
		if ($admin) {
			$this->addUsingAlias(AdminPeer::ID, $admin->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseAdminQuery