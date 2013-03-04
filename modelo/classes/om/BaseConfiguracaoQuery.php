<?php


/**
 * Base class that represents a query for the 'configuracao' table.
 *
 * 
 *
 * @method     ConfiguracaoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ConfiguracaoQuery orderByManutencao($order = Criteria::ASC) Order by the manutencao column
 * @method     ConfiguracaoQuery orderByHostBd($order = Criteria::ASC) Order by the host_bd column
 * @method     ConfiguracaoQuery orderByPortaBd($order = Criteria::ASC) Order by the porta_bd column
 * @method     ConfiguracaoQuery orderByUsuarioBd($order = Criteria::ASC) Order by the usuario_bd column
 * @method     ConfiguracaoQuery orderByNomeBd($order = Criteria::ASC) Order by the nome_bd column
 * @method     ConfiguracaoQuery orderBySenhaBd($order = Criteria::ASC) Order by the senha_bd column
 * @method     ConfiguracaoQuery orderBySenhaEmail($order = Criteria::ASC) Order by the senha_email column
 * @method     ConfiguracaoQuery orderByHostEmail($order = Criteria::ASC) Order by the host_email column
 * @method     ConfiguracaoQuery orderByUsuarioEmail($order = Criteria::ASC) Order by the usuario_email column
 * @method     ConfiguracaoQuery orderByPortaEmail($order = Criteria::ASC) Order by the porta_email column
 * @method     ConfiguracaoQuery orderBySmtpEmail($order = Criteria::ASC) Order by the smtp_email column
 * @method     ConfiguracaoQuery orderByRemetenteEmail($order = Criteria::ASC) Order by the remetente_email column
 *
 * @method     ConfiguracaoQuery groupById() Group by the id column
 * @method     ConfiguracaoQuery groupByManutencao() Group by the manutencao column
 * @method     ConfiguracaoQuery groupByHostBd() Group by the host_bd column
 * @method     ConfiguracaoQuery groupByPortaBd() Group by the porta_bd column
 * @method     ConfiguracaoQuery groupByUsuarioBd() Group by the usuario_bd column
 * @method     ConfiguracaoQuery groupByNomeBd() Group by the nome_bd column
 * @method     ConfiguracaoQuery groupBySenhaBd() Group by the senha_bd column
 * @method     ConfiguracaoQuery groupBySenhaEmail() Group by the senha_email column
 * @method     ConfiguracaoQuery groupByHostEmail() Group by the host_email column
 * @method     ConfiguracaoQuery groupByUsuarioEmail() Group by the usuario_email column
 * @method     ConfiguracaoQuery groupByPortaEmail() Group by the porta_email column
 * @method     ConfiguracaoQuery groupBySmtpEmail() Group by the smtp_email column
 * @method     ConfiguracaoQuery groupByRemetenteEmail() Group by the remetente_email column
 *
 * @method     ConfiguracaoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ConfiguracaoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ConfiguracaoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Configuracao findOne(PropelPDO $con = null) Return the first Configuracao matching the query
 * @method     Configuracao findOneOrCreate(PropelPDO $con = null) Return the first Configuracao matching the query, or a new Configuracao object populated from the query conditions when no match is found
 *
 * @method     Configuracao findOneById(int $id) Return the first Configuracao filtered by the id column
 * @method     Configuracao findOneByManutencao(string $manutencao) Return the first Configuracao filtered by the manutencao column
 * @method     Configuracao findOneByHostBd(string $host_bd) Return the first Configuracao filtered by the host_bd column
 * @method     Configuracao findOneByPortaBd(string $porta_bd) Return the first Configuracao filtered by the porta_bd column
 * @method     Configuracao findOneByUsuarioBd(string $usuario_bd) Return the first Configuracao filtered by the usuario_bd column
 * @method     Configuracao findOneByNomeBd(string $nome_bd) Return the first Configuracao filtered by the nome_bd column
 * @method     Configuracao findOneBySenhaBd(string $senha_bd) Return the first Configuracao filtered by the senha_bd column
 * @method     Configuracao findOneBySenhaEmail(string $senha_email) Return the first Configuracao filtered by the senha_email column
 * @method     Configuracao findOneByHostEmail(string $host_email) Return the first Configuracao filtered by the host_email column
 * @method     Configuracao findOneByUsuarioEmail(string $usuario_email) Return the first Configuracao filtered by the usuario_email column
 * @method     Configuracao findOneByPortaEmail(string $porta_email) Return the first Configuracao filtered by the porta_email column
 * @method     Configuracao findOneBySmtpEmail(string $smtp_email) Return the first Configuracao filtered by the smtp_email column
 * @method     Configuracao findOneByRemetenteEmail(string $remetente_email) Return the first Configuracao filtered by the remetente_email column
 *
 * @method     array findById(int $id) Return Configuracao objects filtered by the id column
 * @method     array findByManutencao(string $manutencao) Return Configuracao objects filtered by the manutencao column
 * @method     array findByHostBd(string $host_bd) Return Configuracao objects filtered by the host_bd column
 * @method     array findByPortaBd(string $porta_bd) Return Configuracao objects filtered by the porta_bd column
 * @method     array findByUsuarioBd(string $usuario_bd) Return Configuracao objects filtered by the usuario_bd column
 * @method     array findByNomeBd(string $nome_bd) Return Configuracao objects filtered by the nome_bd column
 * @method     array findBySenhaBd(string $senha_bd) Return Configuracao objects filtered by the senha_bd column
 * @method     array findBySenhaEmail(string $senha_email) Return Configuracao objects filtered by the senha_email column
 * @method     array findByHostEmail(string $host_email) Return Configuracao objects filtered by the host_email column
 * @method     array findByUsuarioEmail(string $usuario_email) Return Configuracao objects filtered by the usuario_email column
 * @method     array findByPortaEmail(string $porta_email) Return Configuracao objects filtered by the porta_email column
 * @method     array findBySmtpEmail(string $smtp_email) Return Configuracao objects filtered by the smtp_email column
 * @method     array findByRemetenteEmail(string $remetente_email) Return Configuracao objects filtered by the remetente_email column
 *
 * @package    propel.generator..om
 */
abstract class BaseConfiguracaoQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseConfiguracaoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'tickets', $modelName = 'Configuracao', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ConfiguracaoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ConfiguracaoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ConfiguracaoQuery) {
			return $criteria;
		}
		$query = new ConfiguracaoQuery();
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
	 * @return    Configuracao|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = ConfiguracaoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(ConfiguracaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Configuracao A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `MANUTENCAO`, `HOST_BD`, `PORTA_BD`, `USUARIO_BD`, `NOME_BD`, `SENHA_BD`, `SENHA_EMAIL`, `HOST_EMAIL`, `USUARIO_EMAIL`, `PORTA_EMAIL`, `SMTP_EMAIL`, `REMETENTE_EMAIL` FROM `configuracao` WHERE `ID` = :p0';
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
			$obj = new Configuracao();
			$obj->hydrate($row);
			ConfiguracaoPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    Configuracao|array|mixed the result, formatted by the current formatter
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
	 * @return    ConfiguracaoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ConfiguracaoPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ConfiguracaoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ConfiguracaoPeer::ID, $keys, Criteria::IN);
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
	 * @return    ConfiguracaoQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ConfiguracaoPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the manutencao column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByManutencao('fooValue');   // WHERE manutencao = 'fooValue'
	 * $query->filterByManutencao('%fooValue%'); // WHERE manutencao LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $manutencao The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConfiguracaoQuery The current query, for fluid interface
	 */
	public function filterByManutencao($manutencao = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($manutencao)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $manutencao)) {
				$manutencao = str_replace('*', '%', $manutencao);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ConfiguracaoPeer::MANUTENCAO, $manutencao, $comparison);
	}

	/**
	 * Filter the query on the host_bd column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByHostBd('fooValue');   // WHERE host_bd = 'fooValue'
	 * $query->filterByHostBd('%fooValue%'); // WHERE host_bd LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $hostBd The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConfiguracaoQuery The current query, for fluid interface
	 */
	public function filterByHostBd($hostBd = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($hostBd)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $hostBd)) {
				$hostBd = str_replace('*', '%', $hostBd);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ConfiguracaoPeer::HOST_BD, $hostBd, $comparison);
	}

	/**
	 * Filter the query on the porta_bd column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPortaBd('fooValue');   // WHERE porta_bd = 'fooValue'
	 * $query->filterByPortaBd('%fooValue%'); // WHERE porta_bd LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $portaBd The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConfiguracaoQuery The current query, for fluid interface
	 */
	public function filterByPortaBd($portaBd = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($portaBd)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $portaBd)) {
				$portaBd = str_replace('*', '%', $portaBd);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ConfiguracaoPeer::PORTA_BD, $portaBd, $comparison);
	}

	/**
	 * Filter the query on the usuario_bd column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUsuarioBd('fooValue');   // WHERE usuario_bd = 'fooValue'
	 * $query->filterByUsuarioBd('%fooValue%'); // WHERE usuario_bd LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $usuarioBd The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConfiguracaoQuery The current query, for fluid interface
	 */
	public function filterByUsuarioBd($usuarioBd = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($usuarioBd)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $usuarioBd)) {
				$usuarioBd = str_replace('*', '%', $usuarioBd);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ConfiguracaoPeer::USUARIO_BD, $usuarioBd, $comparison);
	}

	/**
	 * Filter the query on the nome_bd column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNomeBd('fooValue');   // WHERE nome_bd = 'fooValue'
	 * $query->filterByNomeBd('%fooValue%'); // WHERE nome_bd LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nomeBd The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConfiguracaoQuery The current query, for fluid interface
	 */
	public function filterByNomeBd($nomeBd = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nomeBd)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nomeBd)) {
				$nomeBd = str_replace('*', '%', $nomeBd);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ConfiguracaoPeer::NOME_BD, $nomeBd, $comparison);
	}

	/**
	 * Filter the query on the senha_bd column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySenhaBd('fooValue');   // WHERE senha_bd = 'fooValue'
	 * $query->filterBySenhaBd('%fooValue%'); // WHERE senha_bd LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $senhaBd The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConfiguracaoQuery The current query, for fluid interface
	 */
	public function filterBySenhaBd($senhaBd = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($senhaBd)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $senhaBd)) {
				$senhaBd = str_replace('*', '%', $senhaBd);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ConfiguracaoPeer::SENHA_BD, $senhaBd, $comparison);
	}

	/**
	 * Filter the query on the senha_email column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySenhaEmail('fooValue');   // WHERE senha_email = 'fooValue'
	 * $query->filterBySenhaEmail('%fooValue%'); // WHERE senha_email LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $senhaEmail The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConfiguracaoQuery The current query, for fluid interface
	 */
	public function filterBySenhaEmail($senhaEmail = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($senhaEmail)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $senhaEmail)) {
				$senhaEmail = str_replace('*', '%', $senhaEmail);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ConfiguracaoPeer::SENHA_EMAIL, $senhaEmail, $comparison);
	}

	/**
	 * Filter the query on the host_email column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByHostEmail('fooValue');   // WHERE host_email = 'fooValue'
	 * $query->filterByHostEmail('%fooValue%'); // WHERE host_email LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $hostEmail The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConfiguracaoQuery The current query, for fluid interface
	 */
	public function filterByHostEmail($hostEmail = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($hostEmail)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $hostEmail)) {
				$hostEmail = str_replace('*', '%', $hostEmail);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ConfiguracaoPeer::HOST_EMAIL, $hostEmail, $comparison);
	}

	/**
	 * Filter the query on the usuario_email column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUsuarioEmail('fooValue');   // WHERE usuario_email = 'fooValue'
	 * $query->filterByUsuarioEmail('%fooValue%'); // WHERE usuario_email LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $usuarioEmail The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConfiguracaoQuery The current query, for fluid interface
	 */
	public function filterByUsuarioEmail($usuarioEmail = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($usuarioEmail)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $usuarioEmail)) {
				$usuarioEmail = str_replace('*', '%', $usuarioEmail);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ConfiguracaoPeer::USUARIO_EMAIL, $usuarioEmail, $comparison);
	}

	/**
	 * Filter the query on the porta_email column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPortaEmail('fooValue');   // WHERE porta_email = 'fooValue'
	 * $query->filterByPortaEmail('%fooValue%'); // WHERE porta_email LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $portaEmail The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConfiguracaoQuery The current query, for fluid interface
	 */
	public function filterByPortaEmail($portaEmail = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($portaEmail)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $portaEmail)) {
				$portaEmail = str_replace('*', '%', $portaEmail);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ConfiguracaoPeer::PORTA_EMAIL, $portaEmail, $comparison);
	}

	/**
	 * Filter the query on the smtp_email column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySmtpEmail('fooValue');   // WHERE smtp_email = 'fooValue'
	 * $query->filterBySmtpEmail('%fooValue%'); // WHERE smtp_email LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $smtpEmail The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConfiguracaoQuery The current query, for fluid interface
	 */
	public function filterBySmtpEmail($smtpEmail = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($smtpEmail)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $smtpEmail)) {
				$smtpEmail = str_replace('*', '%', $smtpEmail);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ConfiguracaoPeer::SMTP_EMAIL, $smtpEmail, $comparison);
	}

	/**
	 * Filter the query on the remetente_email column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByRemetenteEmail('fooValue');   // WHERE remetente_email = 'fooValue'
	 * $query->filterByRemetenteEmail('%fooValue%'); // WHERE remetente_email LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $remetenteEmail The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConfiguracaoQuery The current query, for fluid interface
	 */
	public function filterByRemetenteEmail($remetenteEmail = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($remetenteEmail)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $remetenteEmail)) {
				$remetenteEmail = str_replace('*', '%', $remetenteEmail);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ConfiguracaoPeer::REMETENTE_EMAIL, $remetenteEmail, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Configuracao $configuracao Object to remove from the list of results
	 *
	 * @return    ConfiguracaoQuery The current query, for fluid interface
	 */
	public function prune($configuracao = null)
	{
		if ($configuracao) {
			$this->addUsingAlias(ConfiguracaoPeer::ID, $configuracao->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseConfiguracaoQuery