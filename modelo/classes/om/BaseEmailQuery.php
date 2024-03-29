<?php


/**
 * Base class that represents a query for the 'email' table.
 *
 * 
 *
 * @method     EmailQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     EmailQuery orderByTicketId($order = Criteria::ASC) Order by the ticket column
 * @method     EmailQuery orderByEmail($order = Criteria::ASC) Order by the email column
 *
 * @method     EmailQuery groupById() Group by the id column
 * @method     EmailQuery groupByTicketId() Group by the ticket column
 * @method     EmailQuery groupByEmail() Group by the email column
 *
 * @method     EmailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EmailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EmailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     EmailQuery leftJoinTicket($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ticket relation
 * @method     EmailQuery rightJoinTicket($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ticket relation
 * @method     EmailQuery innerJoinTicket($relationAlias = null) Adds a INNER JOIN clause to the query using the Ticket relation
 *
 * @method     Email findOne(PropelPDO $con = null) Return the first Email matching the query
 * @method     Email findOneOrCreate(PropelPDO $con = null) Return the first Email matching the query, or a new Email object populated from the query conditions when no match is found
 *
 * @method     Email findOneById(int $id) Return the first Email filtered by the id column
 * @method     Email findOneByTicketId(int $ticket) Return the first Email filtered by the ticket column
 * @method     Email findOneByEmail(string $email) Return the first Email filtered by the email column
 *
 * @method     array findById(int $id) Return Email objects filtered by the id column
 * @method     array findByTicketId(int $ticket) Return Email objects filtered by the ticket column
 * @method     array findByEmail(string $email) Return Email objects filtered by the email column
 *
 * @package    propel.generator..om
 */
abstract class BaseEmailQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseEmailQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'tickets', $modelName = 'Email', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new EmailQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    EmailQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof EmailQuery) {
			return $criteria;
		}
		$query = new EmailQuery();
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
	 * @return    Email|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = EmailPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(EmailPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Email A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `TICKET`, `EMAIL` FROM `email` WHERE `ID` = :p0';
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
			$obj = new Email();
			$obj->hydrate($row);
			EmailPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    Email|array|mixed the result, formatted by the current formatter
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
	 * @return    EmailQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(EmailPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    EmailQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(EmailPeer::ID, $keys, Criteria::IN);
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
	 * @return    EmailQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(EmailPeer::ID, $id, $comparison);
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
	 * @return    EmailQuery The current query, for fluid interface
	 */
	public function filterByTicketId($ticketId = null, $comparison = null)
	{
		if (is_array($ticketId)) {
			$useMinMax = false;
			if (isset($ticketId['min'])) {
				$this->addUsingAlias(EmailPeer::TICKET, $ticketId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ticketId['max'])) {
				$this->addUsingAlias(EmailPeer::TICKET, $ticketId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(EmailPeer::TICKET, $ticketId, $comparison);
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
	 * @return    EmailQuery The current query, for fluid interface
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
		return $this->addUsingAlias(EmailPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query by a related Ticket object
	 *
	 * @param     Ticket|PropelCollection $ticket The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailQuery The current query, for fluid interface
	 */
	public function filterByTicket($ticket, $comparison = null)
	{
		if ($ticket instanceof Ticket) {
			return $this
				->addUsingAlias(EmailPeer::TICKET, $ticket->getId(), $comparison);
		} elseif ($ticket instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(EmailPeer::TICKET, $ticket->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    EmailQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     Email $email Object to remove from the list of results
	 *
	 * @return    EmailQuery The current query, for fluid interface
	 */
	public function prune($email = null)
	{
		if ($email) {
			$this->addUsingAlias(EmailPeer::ID, $email->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseEmailQuery