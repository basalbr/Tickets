<?php


/**
 * Base class that represents a query for the 'cliente' table.
 *
 * 
 *
 * @method     ClienteQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ClienteQuery orderByNome($order = Criteria::ASC) Order by the nome column
 * @method     ClienteQuery orderBySobrenome($order = Criteria::ASC) Order by the sobrenome column
 * @method     ClienteQuery orderByNomeFantasia($order = Criteria::ASC) Order by the nome_fantasia column
 * @method     ClienteQuery orderByRazaoSocial($order = Criteria::ASC) Order by the razao_social column
 * @method     ClienteQuery orderByCpf($order = Criteria::ASC) Order by the cpf column
 * @method     ClienteQuery orderByCnpj($order = Criteria::ASC) Order by the cnpj column
 * @method     ClienteQuery orderByTipo($order = Criteria::ASC) Order by the tipo column
 * @method     ClienteQuery orderByUsuario($order = Criteria::ASC) Order by the usuario column
 * @method     ClienteQuery orderBySenha($order = Criteria::ASC) Order by the senha column
 * @method     ClienteQuery orderByAtivo($order = Criteria::ASC) Order by the ativo column
 * @method     ClienteQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ClienteQuery orderByUrl($order = Criteria::ASC) Order by the url column
 *
 * @method     ClienteQuery groupById() Group by the id column
 * @method     ClienteQuery groupByNome() Group by the nome column
 * @method     ClienteQuery groupBySobrenome() Group by the sobrenome column
 * @method     ClienteQuery groupByNomeFantasia() Group by the nome_fantasia column
 * @method     ClienteQuery groupByRazaoSocial() Group by the razao_social column
 * @method     ClienteQuery groupByCpf() Group by the cpf column
 * @method     ClienteQuery groupByCnpj() Group by the cnpj column
 * @method     ClienteQuery groupByTipo() Group by the tipo column
 * @method     ClienteQuery groupByUsuario() Group by the usuario column
 * @method     ClienteQuery groupBySenha() Group by the senha column
 * @method     ClienteQuery groupByAtivo() Group by the ativo column
 * @method     ClienteQuery groupByEmail() Group by the email column
 * @method     ClienteQuery groupByUrl() Group by the url column
 *
 * @method     ClienteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ClienteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ClienteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ClienteQuery leftJoinEndereco($relationAlias = null) Adds a LEFT JOIN clause to the query using the Endereco relation
 * @method     ClienteQuery rightJoinEndereco($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Endereco relation
 * @method     ClienteQuery innerJoinEndereco($relationAlias = null) Adds a INNER JOIN clause to the query using the Endereco relation
 *
 * @method     ClienteQuery leftJoinMensagemCliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the MensagemCliente relation
 * @method     ClienteQuery rightJoinMensagemCliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the MensagemCliente relation
 * @method     ClienteQuery innerJoinMensagemCliente($relationAlias = null) Adds a INNER JOIN clause to the query using the MensagemCliente relation
 *
 * @method     ClienteQuery leftJoinTelefone($relationAlias = null) Adds a LEFT JOIN clause to the query using the Telefone relation
 * @method     ClienteQuery rightJoinTelefone($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Telefone relation
 * @method     ClienteQuery innerJoinTelefone($relationAlias = null) Adds a INNER JOIN clause to the query using the Telefone relation
 *
 * @method     ClienteQuery leftJoinTicket($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ticket relation
 * @method     ClienteQuery rightJoinTicket($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ticket relation
 * @method     ClienteQuery innerJoinTicket($relationAlias = null) Adds a INNER JOIN clause to the query using the Ticket relation
 *
 * @method     Cliente findOne(PropelPDO $con = null) Return the first Cliente matching the query
 * @method     Cliente findOneOrCreate(PropelPDO $con = null) Return the first Cliente matching the query, or a new Cliente object populated from the query conditions when no match is found
 *
 * @method     Cliente findOneById(int $id) Return the first Cliente filtered by the id column
 * @method     Cliente findOneByNome(string $nome) Return the first Cliente filtered by the nome column
 * @method     Cliente findOneBySobrenome(string $sobrenome) Return the first Cliente filtered by the sobrenome column
 * @method     Cliente findOneByNomeFantasia(string $nome_fantasia) Return the first Cliente filtered by the nome_fantasia column
 * @method     Cliente findOneByRazaoSocial(string $razao_social) Return the first Cliente filtered by the razao_social column
 * @method     Cliente findOneByCpf(string $cpf) Return the first Cliente filtered by the cpf column
 * @method     Cliente findOneByCnpj(string $cnpj) Return the first Cliente filtered by the cnpj column
 * @method     Cliente findOneByTipo(string $tipo) Return the first Cliente filtered by the tipo column
 * @method     Cliente findOneByUsuario(string $usuario) Return the first Cliente filtered by the usuario column
 * @method     Cliente findOneBySenha(string $senha) Return the first Cliente filtered by the senha column
 * @method     Cliente findOneByAtivo(string $ativo) Return the first Cliente filtered by the ativo column
 * @method     Cliente findOneByEmail(string $email) Return the first Cliente filtered by the email column
 * @method     Cliente findOneByUrl(string $url) Return the first Cliente filtered by the url column
 *
 * @method     array findById(int $id) Return Cliente objects filtered by the id column
 * @method     array findByNome(string $nome) Return Cliente objects filtered by the nome column
 * @method     array findBySobrenome(string $sobrenome) Return Cliente objects filtered by the sobrenome column
 * @method     array findByNomeFantasia(string $nome_fantasia) Return Cliente objects filtered by the nome_fantasia column
 * @method     array findByRazaoSocial(string $razao_social) Return Cliente objects filtered by the razao_social column
 * @method     array findByCpf(string $cpf) Return Cliente objects filtered by the cpf column
 * @method     array findByCnpj(string $cnpj) Return Cliente objects filtered by the cnpj column
 * @method     array findByTipo(string $tipo) Return Cliente objects filtered by the tipo column
 * @method     array findByUsuario(string $usuario) Return Cliente objects filtered by the usuario column
 * @method     array findBySenha(string $senha) Return Cliente objects filtered by the senha column
 * @method     array findByAtivo(string $ativo) Return Cliente objects filtered by the ativo column
 * @method     array findByEmail(string $email) Return Cliente objects filtered by the email column
 * @method     array findByUrl(string $url) Return Cliente objects filtered by the url column
 *
 * @package    propel.generator..om
 */
abstract class BaseClienteQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseClienteQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'tickets', $modelName = 'Cliente', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ClienteQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ClienteQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ClienteQuery) {
			return $criteria;
		}
		$query = new ClienteQuery();
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
	 * @return    Cliente|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = ClientePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Cliente A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `NOME`, `SOBRENOME`, `NOME_FANTASIA`, `RAZAO_SOCIAL`, `CPF`, `CNPJ`, `TIPO`, `USUARIO`, `SENHA`, `ATIVO`, `EMAIL`, `URL` FROM `cliente` WHERE `ID` = :p0';
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
			$obj = new Cliente();
			$obj->hydrate($row);
			ClientePeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    Cliente|array|mixed the result, formatted by the current formatter
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
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ClientePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ClientePeer::ID, $keys, Criteria::IN);
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
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ClientePeer::ID, $id, $comparison);
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
	 * @return    ClienteQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ClientePeer::NOME, $nome, $comparison);
	}

	/**
	 * Filter the query on the sobrenome column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySobrenome('fooValue');   // WHERE sobrenome = 'fooValue'
	 * $query->filterBySobrenome('%fooValue%'); // WHERE sobrenome LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $sobrenome The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterBySobrenome($sobrenome = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sobrenome)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sobrenome)) {
				$sobrenome = str_replace('*', '%', $sobrenome);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::SOBRENOME, $sobrenome, $comparison);
	}

	/**
	 * Filter the query on the nome_fantasia column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNomeFantasia('fooValue');   // WHERE nome_fantasia = 'fooValue'
	 * $query->filterByNomeFantasia('%fooValue%'); // WHERE nome_fantasia LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nomeFantasia The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByNomeFantasia($nomeFantasia = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nomeFantasia)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nomeFantasia)) {
				$nomeFantasia = str_replace('*', '%', $nomeFantasia);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::NOME_FANTASIA, $nomeFantasia, $comparison);
	}

	/**
	 * Filter the query on the razao_social column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByRazaoSocial('fooValue');   // WHERE razao_social = 'fooValue'
	 * $query->filterByRazaoSocial('%fooValue%'); // WHERE razao_social LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $razaoSocial The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByRazaoSocial($razaoSocial = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($razaoSocial)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $razaoSocial)) {
				$razaoSocial = str_replace('*', '%', $razaoSocial);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::RAZAO_SOCIAL, $razaoSocial, $comparison);
	}

	/**
	 * Filter the query on the cpf column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCpf('fooValue');   // WHERE cpf = 'fooValue'
	 * $query->filterByCpf('%fooValue%'); // WHERE cpf LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $cpf The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByCpf($cpf = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($cpf)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $cpf)) {
				$cpf = str_replace('*', '%', $cpf);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::CPF, $cpf, $comparison);
	}

	/**
	 * Filter the query on the cnpj column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCnpj('fooValue');   // WHERE cnpj = 'fooValue'
	 * $query->filterByCnpj('%fooValue%'); // WHERE cnpj LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $cnpj The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByCnpj($cnpj = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($cnpj)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $cnpj)) {
				$cnpj = str_replace('*', '%', $cnpj);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::CNPJ, $cnpj, $comparison);
	}

	/**
	 * Filter the query on the tipo column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTipo('fooValue');   // WHERE tipo = 'fooValue'
	 * $query->filterByTipo('%fooValue%'); // WHERE tipo LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $tipo The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByTipo($tipo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($tipo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $tipo)) {
				$tipo = str_replace('*', '%', $tipo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::TIPO, $tipo, $comparison);
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
	 * @return    ClienteQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ClientePeer::USUARIO, $usuario, $comparison);
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
	 * @return    ClienteQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ClientePeer::SENHA, $senha, $comparison);
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
	 * @return    ClienteQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ClientePeer::ATIVO, $ativo, $comparison);
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
	 * @return    ClienteQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ClientePeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the url column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUrl('fooValue');   // WHERE url = 'fooValue'
	 * $query->filterByUrl('%fooValue%'); // WHERE url LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $url The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByUrl($url = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($url)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $url)) {
				$url = str_replace('*', '%', $url);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::URL, $url, $comparison);
	}

	/**
	 * Filter the query by a related Endereco object
	 *
	 * @param     Endereco $endereco  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByEndereco($endereco, $comparison = null)
	{
		if ($endereco instanceof Endereco) {
			return $this
				->addUsingAlias(ClientePeer::ID, $endereco->getClienteId(), $comparison);
		} elseif ($endereco instanceof PropelCollection) {
			return $this
				->useEnderecoQuery()
				->filterByPrimaryKeys($endereco->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByEndereco() only accepts arguments of type Endereco or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Endereco relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function joinEndereco($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Endereco');

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
			$this->addJoinObject($join, 'Endereco');
		}

		return $this;
	}

	/**
	 * Use the Endereco relation Endereco object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    EnderecoQuery A secondary query class using the current class as primary query
	 */
	public function useEnderecoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinEndereco($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Endereco', 'EnderecoQuery');
	}

	/**
	 * Filter the query by a related MensagemCliente object
	 *
	 * @param     MensagemCliente $mensagemCliente  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByMensagemCliente($mensagemCliente, $comparison = null)
	{
		if ($mensagemCliente instanceof MensagemCliente) {
			return $this
				->addUsingAlias(ClientePeer::ID, $mensagemCliente->getClienteId(), $comparison);
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
	 * @return    ClienteQuery The current query, for fluid interface
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
	 * Filter the query by a related Telefone object
	 *
	 * @param     Telefone $telefone  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByTelefone($telefone, $comparison = null)
	{
		if ($telefone instanceof Telefone) {
			return $this
				->addUsingAlias(ClientePeer::ID, $telefone->getClienteId(), $comparison);
		} elseif ($telefone instanceof PropelCollection) {
			return $this
				->useTelefoneQuery()
				->filterByPrimaryKeys($telefone->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByTelefone() only accepts arguments of type Telefone or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Telefone relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function joinTelefone($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Telefone');

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
			$this->addJoinObject($join, 'Telefone');
		}

		return $this;
	}

	/**
	 * Use the Telefone relation Telefone object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TelefoneQuery A secondary query class using the current class as primary query
	 */
	public function useTelefoneQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinTelefone($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Telefone', 'TelefoneQuery');
	}

	/**
	 * Filter the query by a related Ticket object
	 *
	 * @param     Ticket $ticket  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByTicket($ticket, $comparison = null)
	{
		if ($ticket instanceof Ticket) {
			return $this
				->addUsingAlias(ClientePeer::ID, $ticket->getClienteId(), $comparison);
		} elseif ($ticket instanceof PropelCollection) {
			return $this
				->useTicketQuery()
				->filterByPrimaryKeys($ticket->getPrimaryKeys())
				->endUse();
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
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function joinTicket($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
	public function useTicketQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinTicket($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Ticket', 'TicketQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Cliente $cliente Object to remove from the list of results
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function prune($cliente = null)
	{
		if ($cliente) {
			$this->addUsingAlias(ClientePeer::ID, $cliente->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseClienteQuery