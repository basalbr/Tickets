<?php


/**
 * Base class that represents a row from the 'cliente' table.
 *
 * 
 *
 * @package    propel.generator..om
 */
abstract class BaseCliente extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'ClientePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ClientePeer
	 */
	protected static $peer;

	/**
	 * The flag var to prevent infinit loop in deep copy
	 * @var       boolean
	 */
	protected $startCopy = false;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the nome field.
	 * @var        string
	 */
	protected $nome;

	/**
	 * The value for the sobrenome field.
	 * @var        string
	 */
	protected $sobrenome;

	/**
	 * The value for the nome_fantasia field.
	 * @var        string
	 */
	protected $nome_fantasia;

	/**
	 * The value for the razao_social field.
	 * @var        string
	 */
	protected $razao_social;

	/**
	 * The value for the cpf field.
	 * @var        string
	 */
	protected $cpf;

	/**
	 * The value for the cnpj field.
	 * @var        string
	 */
	protected $cnpj;

	/**
	 * The value for the tipo field.
	 * Note: this column has a database default value of: 'F'
	 * @var        string
	 */
	protected $tipo;

	/**
	 * The value for the usuario field.
	 * @var        string
	 */
	protected $usuario;

	/**
	 * The value for the senha field.
	 * @var        string
	 */
	protected $senha;

	/**
	 * The value for the ativo field.
	 * Note: this column has a database default value of: 'S'
	 * @var        string
	 */
	protected $ativo;

	/**
	 * The value for the email field.
	 * @var        string
	 */
	protected $email;

	/**
	 * The value for the url field.
	 * @var        string
	 */
	protected $url;

	/**
	 * @var        array Endereco[] Collection to store aggregation of Endereco objects.
	 */
	protected $collEnderecos;

	/**
	 * @var        array MensagemCliente[] Collection to store aggregation of MensagemCliente objects.
	 */
	protected $collMensagemClientes;

	/**
	 * @var        array Telefone[] Collection to store aggregation of Telefone objects.
	 */
	protected $collTelefones;

	/**
	 * @var        array Ticket[] Collection to store aggregation of Ticket objects.
	 */
	protected $collTickets;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $enderecosScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $mensagemClientesScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $telefonesScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $ticketsScheduledForDeletion = null;

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->tipo = 'F';
		$this->ativo = 'S';
	}

	/**
	 * Initializes internal state of BaseCliente object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [nome] column value.
	 * 
	 * @return     string
	 */
	public function getNome()
	{
		return $this->nome;
	}

	/**
	 * Get the [sobrenome] column value.
	 * 
	 * @return     string
	 */
	public function getSobrenome()
	{
		return $this->sobrenome;
	}

	/**
	 * Get the [nome_fantasia] column value.
	 * 
	 * @return     string
	 */
	public function getNomeFantasia()
	{
		return $this->nome_fantasia;
	}

	/**
	 * Get the [razao_social] column value.
	 * 
	 * @return     string
	 */
	public function getRazaoSocial()
	{
		return $this->razao_social;
	}

	/**
	 * Get the [cpf] column value.
	 * 
	 * @return     string
	 */
	public function getCpf()
	{
		return $this->cpf;
	}

	/**
	 * Get the [cnpj] column value.
	 * 
	 * @return     string
	 */
	public function getCnpj()
	{
		return $this->cnpj;
	}

	/**
	 * Get the [tipo] column value.
	 * 
	 * @return     string
	 */
	public function getTipo()
	{
		return $this->tipo;
	}

	/**
	 * Get the [usuario] column value.
	 * 
	 * @return     string
	 */
	public function getUsuario()
	{
		return $this->usuario;
	}

	/**
	 * Get the [senha] column value.
	 * 
	 * @return     string
	 */
	public function getSenha()
	{
		return $this->senha;
	}

	/**
	 * Get the [ativo] column value.
	 * 
	 * @return     string
	 */
	public function getAtivo()
	{
		return $this->ativo;
	}

	/**
	 * Get the [email] column value.
	 * 
	 * @return     string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Get the [url] column value.
	 * 
	 * @return     string
	 */
	public function getUrl()
	{
		return $this->url;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ClientePeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [nome] column.
	 * 
	 * @param      string $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setNome($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nome !== $v) {
			$this->nome = $v;
			$this->modifiedColumns[] = ClientePeer::NOME;
		}

		return $this;
	} // setNome()

	/**
	 * Set the value of [sobrenome] column.
	 * 
	 * @param      string $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setSobrenome($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sobrenome !== $v) {
			$this->sobrenome = $v;
			$this->modifiedColumns[] = ClientePeer::SOBRENOME;
		}

		return $this;
	} // setSobrenome()

	/**
	 * Set the value of [nome_fantasia] column.
	 * 
	 * @param      string $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setNomeFantasia($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nome_fantasia !== $v) {
			$this->nome_fantasia = $v;
			$this->modifiedColumns[] = ClientePeer::NOME_FANTASIA;
		}

		return $this;
	} // setNomeFantasia()

	/**
	 * Set the value of [razao_social] column.
	 * 
	 * @param      string $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setRazaoSocial($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->razao_social !== $v) {
			$this->razao_social = $v;
			$this->modifiedColumns[] = ClientePeer::RAZAO_SOCIAL;
		}

		return $this;
	} // setRazaoSocial()

	/**
	 * Set the value of [cpf] column.
	 * 
	 * @param      string $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setCpf($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->cpf !== $v) {
			$this->cpf = $v;
			$this->modifiedColumns[] = ClientePeer::CPF;
		}

		return $this;
	} // setCpf()

	/**
	 * Set the value of [cnpj] column.
	 * 
	 * @param      string $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setCnpj($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->cnpj !== $v) {
			$this->cnpj = $v;
			$this->modifiedColumns[] = ClientePeer::CNPJ;
		}

		return $this;
	} // setCnpj()

	/**
	 * Set the value of [tipo] column.
	 * 
	 * @param      string $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setTipo($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tipo !== $v) {
			$this->tipo = $v;
			$this->modifiedColumns[] = ClientePeer::TIPO;
		}

		return $this;
	} // setTipo()

	/**
	 * Set the value of [usuario] column.
	 * 
	 * @param      string $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setUsuario($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usuario !== $v) {
			$this->usuario = $v;
			$this->modifiedColumns[] = ClientePeer::USUARIO;
		}

		return $this;
	} // setUsuario()

	/**
	 * Set the value of [senha] column.
	 * 
	 * @param      string $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setSenha($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->senha !== $v) {
			$this->senha = $v;
			$this->modifiedColumns[] = ClientePeer::SENHA;
		}

		return $this;
	} // setSenha()

	/**
	 * Set the value of [ativo] column.
	 * 
	 * @param      string $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setAtivo($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ativo !== $v) {
			$this->ativo = $v;
			$this->modifiedColumns[] = ClientePeer::ATIVO;
		}

		return $this;
	} // setAtivo()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = ClientePeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [url] column.
	 * 
	 * @param      string $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->url !== $v) {
			$this->url = $v;
			$this->modifiedColumns[] = ClientePeer::URL;
		}

		return $this;
	} // setUrl()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			if ($this->tipo !== 'F') {
				return false;
			}

			if ($this->ativo !== 'S') {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->nome = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->sobrenome = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->nome_fantasia = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->razao_social = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->cpf = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->cnpj = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->tipo = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->usuario = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->senha = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->ativo = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->email = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->url = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 13; // 13 = ClientePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Cliente object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ClientePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collEnderecos = null;

			$this->collMensagemClientes = null;

			$this->collTelefones = null;

			$this->collTickets = null;

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = ClienteQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				ClientePeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() || $this->isModified()) {
				// persist changes
				if ($this->isNew()) {
					$this->doInsert($con);
				} else {
					$this->doUpdate($con);
				}
				$affectedRows += 1;
				$this->resetModified();
			}

			if ($this->enderecosScheduledForDeletion !== null) {
				if (!$this->enderecosScheduledForDeletion->isEmpty()) {
					EnderecoQuery::create()
						->filterByPrimaryKeys($this->enderecosScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->enderecosScheduledForDeletion = null;
				}
			}

			if ($this->collEnderecos !== null) {
				foreach ($this->collEnderecos as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->mensagemClientesScheduledForDeletion !== null) {
				if (!$this->mensagemClientesScheduledForDeletion->isEmpty()) {
					MensagemClienteQuery::create()
						->filterByPrimaryKeys($this->mensagemClientesScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->mensagemClientesScheduledForDeletion = null;
				}
			}

			if ($this->collMensagemClientes !== null) {
				foreach ($this->collMensagemClientes as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->telefonesScheduledForDeletion !== null) {
				if (!$this->telefonesScheduledForDeletion->isEmpty()) {
					TelefoneQuery::create()
						->filterByPrimaryKeys($this->telefonesScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->telefonesScheduledForDeletion = null;
				}
			}

			if ($this->collTelefones !== null) {
				foreach ($this->collTelefones as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->ticketsScheduledForDeletion !== null) {
				if (!$this->ticketsScheduledForDeletion->isEmpty()) {
					TicketQuery::create()
						->filterByPrimaryKeys($this->ticketsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->ticketsScheduledForDeletion = null;
				}
			}

			if ($this->collTickets !== null) {
				foreach ($this->collTickets as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Insert the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @throws     PropelException
	 * @see        doSave()
	 */
	protected function doInsert(PropelPDO $con)
	{
		$modifiedColumns = array();
		$index = 0;

		$this->modifiedColumns[] = ClientePeer::ID;
		if (null !== $this->id) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . ClientePeer::ID . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(ClientePeer::ID)) {
			$modifiedColumns[':p' . $index++]  = '`ID`';
		}
		if ($this->isColumnModified(ClientePeer::NOME)) {
			$modifiedColumns[':p' . $index++]  = '`NOME`';
		}
		if ($this->isColumnModified(ClientePeer::SOBRENOME)) {
			$modifiedColumns[':p' . $index++]  = '`SOBRENOME`';
		}
		if ($this->isColumnModified(ClientePeer::NOME_FANTASIA)) {
			$modifiedColumns[':p' . $index++]  = '`NOME_FANTASIA`';
		}
		if ($this->isColumnModified(ClientePeer::RAZAO_SOCIAL)) {
			$modifiedColumns[':p' . $index++]  = '`RAZAO_SOCIAL`';
		}
		if ($this->isColumnModified(ClientePeer::CPF)) {
			$modifiedColumns[':p' . $index++]  = '`CPF`';
		}
		if ($this->isColumnModified(ClientePeer::CNPJ)) {
			$modifiedColumns[':p' . $index++]  = '`CNPJ`';
		}
		if ($this->isColumnModified(ClientePeer::TIPO)) {
			$modifiedColumns[':p' . $index++]  = '`TIPO`';
		}
		if ($this->isColumnModified(ClientePeer::USUARIO)) {
			$modifiedColumns[':p' . $index++]  = '`USUARIO`';
		}
		if ($this->isColumnModified(ClientePeer::SENHA)) {
			$modifiedColumns[':p' . $index++]  = '`SENHA`';
		}
		if ($this->isColumnModified(ClientePeer::ATIVO)) {
			$modifiedColumns[':p' . $index++]  = '`ATIVO`';
		}
		if ($this->isColumnModified(ClientePeer::EMAIL)) {
			$modifiedColumns[':p' . $index++]  = '`EMAIL`';
		}
		if ($this->isColumnModified(ClientePeer::URL)) {
			$modifiedColumns[':p' . $index++]  = '`URL`';
		}

		$sql = sprintf(
			'INSERT INTO `cliente` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID`':
						$stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
						break;
					case '`NOME`':
						$stmt->bindValue($identifier, $this->nome, PDO::PARAM_STR);
						break;
					case '`SOBRENOME`':
						$stmt->bindValue($identifier, $this->sobrenome, PDO::PARAM_STR);
						break;
					case '`NOME_FANTASIA`':
						$stmt->bindValue($identifier, $this->nome_fantasia, PDO::PARAM_STR);
						break;
					case '`RAZAO_SOCIAL`':
						$stmt->bindValue($identifier, $this->razao_social, PDO::PARAM_STR);
						break;
					case '`CPF`':
						$stmt->bindValue($identifier, $this->cpf, PDO::PARAM_STR);
						break;
					case '`CNPJ`':
						$stmt->bindValue($identifier, $this->cnpj, PDO::PARAM_STR);
						break;
					case '`TIPO`':
						$stmt->bindValue($identifier, $this->tipo, PDO::PARAM_STR);
						break;
					case '`USUARIO`':
						$stmt->bindValue($identifier, $this->usuario, PDO::PARAM_STR);
						break;
					case '`SENHA`':
						$stmt->bindValue($identifier, $this->senha, PDO::PARAM_STR);
						break;
					case '`ATIVO`':
						$stmt->bindValue($identifier, $this->ativo, PDO::PARAM_STR);
						break;
					case '`EMAIL`':
						$stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
						break;
					case '`URL`':
						$stmt->bindValue($identifier, $this->url, PDO::PARAM_STR);
						break;
				}
			}
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
		}

		try {
			$pk = $con->lastInsertId();
		} catch (Exception $e) {
			throw new PropelException('Unable to get autoincrement id.', $e);
		}
		$this->setId($pk);

		$this->setNew(false);
	}

	/**
	 * Update the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @see        doSave()
	 */
	protected function doUpdate(PropelPDO $con)
	{
		$selectCriteria = $this->buildPkeyCriteria();
		$valuesCriteria = $this->buildCriteria();
		BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
	}

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = ClientePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collEnderecos !== null) {
					foreach ($this->collEnderecos as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collMensagemClientes !== null) {
					foreach ($this->collMensagemClientes as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTelefones !== null) {
					foreach ($this->collTelefones as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTickets !== null) {
					foreach ($this->collTickets as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ClientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getNome();
				break;
			case 2:
				return $this->getSobrenome();
				break;
			case 3:
				return $this->getNomeFantasia();
				break;
			case 4:
				return $this->getRazaoSocial();
				break;
			case 5:
				return $this->getCpf();
				break;
			case 6:
				return $this->getCnpj();
				break;
			case 7:
				return $this->getTipo();
				break;
			case 8:
				return $this->getUsuario();
				break;
			case 9:
				return $this->getSenha();
				break;
			case 10:
				return $this->getAtivo();
				break;
			case 11:
				return $this->getEmail();
				break;
			case 12:
				return $this->getUrl();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
	{
		if (isset($alreadyDumpedObjects['Cliente'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Cliente'][$this->getPrimaryKey()] = true;
		$keys = ClientePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getNome(),
			$keys[2] => $this->getSobrenome(),
			$keys[3] => $this->getNomeFantasia(),
			$keys[4] => $this->getRazaoSocial(),
			$keys[5] => $this->getCpf(),
			$keys[6] => $this->getCnpj(),
			$keys[7] => $this->getTipo(),
			$keys[8] => $this->getUsuario(),
			$keys[9] => $this->getSenha(),
			$keys[10] => $this->getAtivo(),
			$keys[11] => $this->getEmail(),
			$keys[12] => $this->getUrl(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collEnderecos) {
				$result['Enderecos'] = $this->collEnderecos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collMensagemClientes) {
				$result['MensagemClientes'] = $this->collMensagemClientes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collTelefones) {
				$result['Telefones'] = $this->collTelefones->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collTickets) {
				$result['Tickets'] = $this->collTickets->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
		}
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ClientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setNome($value);
				break;
			case 2:
				$this->setSobrenome($value);
				break;
			case 3:
				$this->setNomeFantasia($value);
				break;
			case 4:
				$this->setRazaoSocial($value);
				break;
			case 5:
				$this->setCpf($value);
				break;
			case 6:
				$this->setCnpj($value);
				break;
			case 7:
				$this->setTipo($value);
				break;
			case 8:
				$this->setUsuario($value);
				break;
			case 9:
				$this->setSenha($value);
				break;
			case 10:
				$this->setAtivo($value);
				break;
			case 11:
				$this->setEmail($value);
				break;
			case 12:
				$this->setUrl($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ClientePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNome($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setSobrenome($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNomeFantasia($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setRazaoSocial($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCpf($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCnpj($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTipo($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setUsuario($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setSenha($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setAtivo($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setEmail($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setUrl($arr[$keys[12]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ClientePeer::DATABASE_NAME);

		if ($this->isColumnModified(ClientePeer::ID)) $criteria->add(ClientePeer::ID, $this->id);
		if ($this->isColumnModified(ClientePeer::NOME)) $criteria->add(ClientePeer::NOME, $this->nome);
		if ($this->isColumnModified(ClientePeer::SOBRENOME)) $criteria->add(ClientePeer::SOBRENOME, $this->sobrenome);
		if ($this->isColumnModified(ClientePeer::NOME_FANTASIA)) $criteria->add(ClientePeer::NOME_FANTASIA, $this->nome_fantasia);
		if ($this->isColumnModified(ClientePeer::RAZAO_SOCIAL)) $criteria->add(ClientePeer::RAZAO_SOCIAL, $this->razao_social);
		if ($this->isColumnModified(ClientePeer::CPF)) $criteria->add(ClientePeer::CPF, $this->cpf);
		if ($this->isColumnModified(ClientePeer::CNPJ)) $criteria->add(ClientePeer::CNPJ, $this->cnpj);
		if ($this->isColumnModified(ClientePeer::TIPO)) $criteria->add(ClientePeer::TIPO, $this->tipo);
		if ($this->isColumnModified(ClientePeer::USUARIO)) $criteria->add(ClientePeer::USUARIO, $this->usuario);
		if ($this->isColumnModified(ClientePeer::SENHA)) $criteria->add(ClientePeer::SENHA, $this->senha);
		if ($this->isColumnModified(ClientePeer::ATIVO)) $criteria->add(ClientePeer::ATIVO, $this->ativo);
		if ($this->isColumnModified(ClientePeer::EMAIL)) $criteria->add(ClientePeer::EMAIL, $this->email);
		if ($this->isColumnModified(ClientePeer::URL)) $criteria->add(ClientePeer::URL, $this->url);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ClientePeer::DATABASE_NAME);
		$criteria->add(ClientePeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Cliente (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setNome($this->getNome());
		$copyObj->setSobrenome($this->getSobrenome());
		$copyObj->setNomeFantasia($this->getNomeFantasia());
		$copyObj->setRazaoSocial($this->getRazaoSocial());
		$copyObj->setCpf($this->getCpf());
		$copyObj->setCnpj($this->getCnpj());
		$copyObj->setTipo($this->getTipo());
		$copyObj->setUsuario($this->getUsuario());
		$copyObj->setSenha($this->getSenha());
		$copyObj->setAtivo($this->getAtivo());
		$copyObj->setEmail($this->getEmail());
		$copyObj->setUrl($this->getUrl());

		if ($deepCopy && !$this->startCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);
			// store object hash to prevent cycle
			$this->startCopy = true;

			foreach ($this->getEnderecos() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addEndereco($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getMensagemClientes() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addMensagemCliente($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getTelefones() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTelefone($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getTickets() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTicket($relObj->copy($deepCopy));
				}
			}

			//unflag object copy
			$this->startCopy = false;
		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setId(NULL); // this is a auto-increment column, so set to default value
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Cliente Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     ClientePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ClientePeer();
		}
		return self::$peer;
	}


	/**
	 * Initializes a collection based on the name of a relation.
	 * Avoids crafting an 'init[$relationName]s' method name
	 * that wouldn't work when StandardEnglishPluralizer is used.
	 *
	 * @param      string $relationName The name of the relation to initialize
	 * @return     void
	 */
	public function initRelation($relationName)
	{
		if ('Endereco' == $relationName) {
			return $this->initEnderecos();
		}
		if ('MensagemCliente' == $relationName) {
			return $this->initMensagemClientes();
		}
		if ('Telefone' == $relationName) {
			return $this->initTelefones();
		}
		if ('Ticket' == $relationName) {
			return $this->initTickets();
		}
	}

	/**
	 * Clears out the collEnderecos collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addEnderecos()
	 */
	public function clearEnderecos()
	{
		$this->collEnderecos = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collEnderecos collection.
	 *
	 * By default this just sets the collEnderecos collection to an empty array (like clearcollEnderecos());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initEnderecos($overrideExisting = true)
	{
		if (null !== $this->collEnderecos && !$overrideExisting) {
			return;
		}
		$this->collEnderecos = new PropelObjectCollection();
		$this->collEnderecos->setModel('Endereco');
	}

	/**
	 * Gets an array of Endereco objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Cliente is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Endereco[] List of Endereco objects
	 * @throws     PropelException
	 */
	public function getEnderecos($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collEnderecos || null !== $criteria) {
			if ($this->isNew() && null === $this->collEnderecos) {
				// return empty collection
				$this->initEnderecos();
			} else {
				$collEnderecos = EnderecoQuery::create(null, $criteria)
					->filterByCliente($this)
					->find($con);
				if (null !== $criteria) {
					return $collEnderecos;
				}
				$this->collEnderecos = $collEnderecos;
			}
		}
		return $this->collEnderecos;
	}

	/**
	 * Sets a collection of Endereco objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $enderecos A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setEnderecos(PropelCollection $enderecos, PropelPDO $con = null)
	{
		$this->enderecosScheduledForDeletion = $this->getEnderecos(new Criteria(), $con)->diff($enderecos);

		foreach ($enderecos as $endereco) {
			// Fix issue with collection modified by reference
			if ($endereco->isNew()) {
				$endereco->setCliente($this);
			}
			$this->addEndereco($endereco);
		}

		$this->collEnderecos = $enderecos;
	}

	/**
	 * Returns the number of related Endereco objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Endereco objects.
	 * @throws     PropelException
	 */
	public function countEnderecos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collEnderecos || null !== $criteria) {
			if ($this->isNew() && null === $this->collEnderecos) {
				return 0;
			} else {
				$query = EnderecoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCliente($this)
					->count($con);
			}
		} else {
			return count($this->collEnderecos);
		}
	}

	/**
	 * Method called to associate a Endereco object to this object
	 * through the Endereco foreign key attribute.
	 *
	 * @param      Endereco $l Endereco
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function addEndereco(Endereco $l)
	{
		if ($this->collEnderecos === null) {
			$this->initEnderecos();
		}
		if (!$this->collEnderecos->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddEndereco($l);
		}

		return $this;
	}

	/**
	 * @param	Endereco $endereco The endereco object to add.
	 */
	protected function doAddEndereco($endereco)
	{
		$this->collEnderecos[]= $endereco;
		$endereco->setCliente($this);
	}

	/**
	 * Clears out the collMensagemClientes collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addMensagemClientes()
	 */
	public function clearMensagemClientes()
	{
		$this->collMensagemClientes = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collMensagemClientes collection.
	 *
	 * By default this just sets the collMensagemClientes collection to an empty array (like clearcollMensagemClientes());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initMensagemClientes($overrideExisting = true)
	{
		if (null !== $this->collMensagemClientes && !$overrideExisting) {
			return;
		}
		$this->collMensagemClientes = new PropelObjectCollection();
		$this->collMensagemClientes->setModel('MensagemCliente');
	}

	/**
	 * Gets an array of MensagemCliente objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Cliente is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array MensagemCliente[] List of MensagemCliente objects
	 * @throws     PropelException
	 */
	public function getMensagemClientes($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collMensagemClientes || null !== $criteria) {
			if ($this->isNew() && null === $this->collMensagemClientes) {
				// return empty collection
				$this->initMensagemClientes();
			} else {
				$collMensagemClientes = MensagemClienteQuery::create(null, $criteria)
					->filterByCliente($this)
					->find($con);
				if (null !== $criteria) {
					return $collMensagemClientes;
				}
				$this->collMensagemClientes = $collMensagemClientes;
			}
		}
		return $this->collMensagemClientes;
	}

	/**
	 * Sets a collection of MensagemCliente objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $mensagemClientes A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setMensagemClientes(PropelCollection $mensagemClientes, PropelPDO $con = null)
	{
		$this->mensagemClientesScheduledForDeletion = $this->getMensagemClientes(new Criteria(), $con)->diff($mensagemClientes);

		foreach ($mensagemClientes as $mensagemCliente) {
			// Fix issue with collection modified by reference
			if ($mensagemCliente->isNew()) {
				$mensagemCliente->setCliente($this);
			}
			$this->addMensagemCliente($mensagemCliente);
		}

		$this->collMensagemClientes = $mensagemClientes;
	}

	/**
	 * Returns the number of related MensagemCliente objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related MensagemCliente objects.
	 * @throws     PropelException
	 */
	public function countMensagemClientes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collMensagemClientes || null !== $criteria) {
			if ($this->isNew() && null === $this->collMensagemClientes) {
				return 0;
			} else {
				$query = MensagemClienteQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCliente($this)
					->count($con);
			}
		} else {
			return count($this->collMensagemClientes);
		}
	}

	/**
	 * Method called to associate a MensagemCliente object to this object
	 * through the MensagemCliente foreign key attribute.
	 *
	 * @param      MensagemCliente $l MensagemCliente
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function addMensagemCliente(MensagemCliente $l)
	{
		if ($this->collMensagemClientes === null) {
			$this->initMensagemClientes();
		}
		if (!$this->collMensagemClientes->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddMensagemCliente($l);
		}

		return $this;
	}

	/**
	 * @param	MensagemCliente $mensagemCliente The mensagemCliente object to add.
	 */
	protected function doAddMensagemCliente($mensagemCliente)
	{
		$this->collMensagemClientes[]= $mensagemCliente;
		$mensagemCliente->setCliente($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Cliente is new, it will return
	 * an empty collection; or if this Cliente has previously
	 * been saved, it will retrieve related MensagemClientes from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Cliente.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array MensagemCliente[] List of MensagemCliente objects
	 */
	public function getMensagemClientesJoinMensagem($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = MensagemClienteQuery::create(null, $criteria);
		$query->joinWith('Mensagem', $join_behavior);

		return $this->getMensagemClientes($query, $con);
	}

	/**
	 * Clears out the collTelefones collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addTelefones()
	 */
	public function clearTelefones()
	{
		$this->collTelefones = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collTelefones collection.
	 *
	 * By default this just sets the collTelefones collection to an empty array (like clearcollTelefones());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initTelefones($overrideExisting = true)
	{
		if (null !== $this->collTelefones && !$overrideExisting) {
			return;
		}
		$this->collTelefones = new PropelObjectCollection();
		$this->collTelefones->setModel('Telefone');
	}

	/**
	 * Gets an array of Telefone objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Cliente is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Telefone[] List of Telefone objects
	 * @throws     PropelException
	 */
	public function getTelefones($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collTelefones || null !== $criteria) {
			if ($this->isNew() && null === $this->collTelefones) {
				// return empty collection
				$this->initTelefones();
			} else {
				$collTelefones = TelefoneQuery::create(null, $criteria)
					->filterByCliente($this)
					->find($con);
				if (null !== $criteria) {
					return $collTelefones;
				}
				$this->collTelefones = $collTelefones;
			}
		}
		return $this->collTelefones;
	}

	/**
	 * Sets a collection of Telefone objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $telefones A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setTelefones(PropelCollection $telefones, PropelPDO $con = null)
	{
		$this->telefonesScheduledForDeletion = $this->getTelefones(new Criteria(), $con)->diff($telefones);

		foreach ($telefones as $telefone) {
			// Fix issue with collection modified by reference
			if ($telefone->isNew()) {
				$telefone->setCliente($this);
			}
			$this->addTelefone($telefone);
		}

		$this->collTelefones = $telefones;
	}

	/**
	 * Returns the number of related Telefone objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Telefone objects.
	 * @throws     PropelException
	 */
	public function countTelefones(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collTelefones || null !== $criteria) {
			if ($this->isNew() && null === $this->collTelefones) {
				return 0;
			} else {
				$query = TelefoneQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCliente($this)
					->count($con);
			}
		} else {
			return count($this->collTelefones);
		}
	}

	/**
	 * Method called to associate a Telefone object to this object
	 * through the Telefone foreign key attribute.
	 *
	 * @param      Telefone $l Telefone
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function addTelefone(Telefone $l)
	{
		if ($this->collTelefones === null) {
			$this->initTelefones();
		}
		if (!$this->collTelefones->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddTelefone($l);
		}

		return $this;
	}

	/**
	 * @param	Telefone $telefone The telefone object to add.
	 */
	protected function doAddTelefone($telefone)
	{
		$this->collTelefones[]= $telefone;
		$telefone->setCliente($this);
	}

	/**
	 * Clears out the collTickets collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addTickets()
	 */
	public function clearTickets()
	{
		$this->collTickets = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collTickets collection.
	 *
	 * By default this just sets the collTickets collection to an empty array (like clearcollTickets());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initTickets($overrideExisting = true)
	{
		if (null !== $this->collTickets && !$overrideExisting) {
			return;
		}
		$this->collTickets = new PropelObjectCollection();
		$this->collTickets->setModel('Ticket');
	}

	/**
	 * Gets an array of Ticket objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Cliente is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Ticket[] List of Ticket objects
	 * @throws     PropelException
	 */
	public function getTickets($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collTickets || null !== $criteria) {
			if ($this->isNew() && null === $this->collTickets) {
				// return empty collection
				$this->initTickets();
			} else {
				$collTickets = TicketQuery::create(null, $criteria)
					->filterByCliente($this)
					->find($con);
				if (null !== $criteria) {
					return $collTickets;
				}
				$this->collTickets = $collTickets;
			}
		}
		return $this->collTickets;
	}

	/**
	 * Sets a collection of Ticket objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $tickets A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setTickets(PropelCollection $tickets, PropelPDO $con = null)
	{
		$this->ticketsScheduledForDeletion = $this->getTickets(new Criteria(), $con)->diff($tickets);

		foreach ($tickets as $ticket) {
			// Fix issue with collection modified by reference
			if ($ticket->isNew()) {
				$ticket->setCliente($this);
			}
			$this->addTicket($ticket);
		}

		$this->collTickets = $tickets;
	}

	/**
	 * Returns the number of related Ticket objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Ticket objects.
	 * @throws     PropelException
	 */
	public function countTickets(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collTickets || null !== $criteria) {
			if ($this->isNew() && null === $this->collTickets) {
				return 0;
			} else {
				$query = TicketQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCliente($this)
					->count($con);
			}
		} else {
			return count($this->collTickets);
		}
	}

	/**
	 * Method called to associate a Ticket object to this object
	 * through the Ticket foreign key attribute.
	 *
	 * @param      Ticket $l Ticket
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function addTicket(Ticket $l)
	{
		if ($this->collTickets === null) {
			$this->initTickets();
		}
		if (!$this->collTickets->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddTicket($l);
		}

		return $this;
	}

	/**
	 * @param	Ticket $ticket The ticket object to add.
	 */
	protected function doAddTicket($ticket)
	{
		$this->collTickets[]= $ticket;
		$ticket->setCliente($this);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->nome = null;
		$this->sobrenome = null;
		$this->nome_fantasia = null;
		$this->razao_social = null;
		$this->cpf = null;
		$this->cnpj = null;
		$this->tipo = null;
		$this->usuario = null;
		$this->senha = null;
		$this->ativo = null;
		$this->email = null;
		$this->url = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->applyDefaultValues();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collEnderecos) {
				foreach ($this->collEnderecos as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collMensagemClientes) {
				foreach ($this->collMensagemClientes as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collTelefones) {
				foreach ($this->collTelefones as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collTickets) {
				foreach ($this->collTickets as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collEnderecos instanceof PropelCollection) {
			$this->collEnderecos->clearIterator();
		}
		$this->collEnderecos = null;
		if ($this->collMensagemClientes instanceof PropelCollection) {
			$this->collMensagemClientes->clearIterator();
		}
		$this->collMensagemClientes = null;
		if ($this->collTelefones instanceof PropelCollection) {
			$this->collTelefones->clearIterator();
		}
		$this->collTelefones = null;
		if ($this->collTickets instanceof PropelCollection) {
			$this->collTickets->clearIterator();
		}
		$this->collTickets = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(ClientePeer::DEFAULT_STRING_FORMAT);
	}

} // BaseCliente
