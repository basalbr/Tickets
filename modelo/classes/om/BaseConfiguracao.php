<?php


/**
 * Base class that represents a row from the 'configuracao' table.
 *
 * 
 *
 * @package    propel.generator..om
 */
abstract class BaseConfiguracao extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'ConfiguracaoPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ConfiguracaoPeer
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
	 * The value for the manutencao field.
	 * Note: this column has a database default value of: 'N'
	 * @var        string
	 */
	protected $manutencao;

	/**
	 * The value for the host_bd field.
	 * @var        string
	 */
	protected $host_bd;

	/**
	 * The value for the porta_bd field.
	 * @var        string
	 */
	protected $porta_bd;

	/**
	 * The value for the usuario_bd field.
	 * @var        string
	 */
	protected $usuario_bd;

	/**
	 * The value for the nome_bd field.
	 * @var        string
	 */
	protected $nome_bd;

	/**
	 * The value for the senha_bd field.
	 * @var        string
	 */
	protected $senha_bd;

	/**
	 * The value for the senha_email field.
	 * @var        string
	 */
	protected $senha_email;

	/**
	 * The value for the host_email field.
	 * @var        string
	 */
	protected $host_email;

	/**
	 * The value for the usuario_email field.
	 * @var        string
	 */
	protected $usuario_email;

	/**
	 * The value for the porta_email field.
	 * @var        string
	 */
	protected $porta_email;

	/**
	 * The value for the smtp_email field.
	 * Note: this column has a database default value of: 'N'
	 * @var        string
	 */
	protected $smtp_email;

	/**
	 * The value for the remetente_email field.
	 * @var        string
	 */
	protected $remetente_email;

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
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->manutencao = 'N';
		$this->smtp_email = 'N';
	}

	/**
	 * Initializes internal state of BaseConfiguracao object.
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
	 * Get the [manutencao] column value.
	 * 
	 * @return     string
	 */
	public function getManutencao()
	{
		return $this->manutencao;
	}

	/**
	 * Get the [host_bd] column value.
	 * 
	 * @return     string
	 */
	public function getHostBd()
	{
		return $this->host_bd;
	}

	/**
	 * Get the [porta_bd] column value.
	 * 
	 * @return     string
	 */
	public function getPortaBd()
	{
		return $this->porta_bd;
	}

	/**
	 * Get the [usuario_bd] column value.
	 * 
	 * @return     string
	 */
	public function getUsuarioBd()
	{
		return $this->usuario_bd;
	}

	/**
	 * Get the [nome_bd] column value.
	 * 
	 * @return     string
	 */
	public function getNomeBd()
	{
		return $this->nome_bd;
	}

	/**
	 * Get the [senha_bd] column value.
	 * 
	 * @return     string
	 */
	public function getSenhaBd()
	{
		return $this->senha_bd;
	}

	/**
	 * Get the [senha_email] column value.
	 * 
	 * @return     string
	 */
	public function getSenhaEmail()
	{
		return $this->senha_email;
	}

	/**
	 * Get the [host_email] column value.
	 * 
	 * @return     string
	 */
	public function getHostEmail()
	{
		return $this->host_email;
	}

	/**
	 * Get the [usuario_email] column value.
	 * 
	 * @return     string
	 */
	public function getUsuarioEmail()
	{
		return $this->usuario_email;
	}

	/**
	 * Get the [porta_email] column value.
	 * 
	 * @return     string
	 */
	public function getPortaEmail()
	{
		return $this->porta_email;
	}

	/**
	 * Get the [smtp_email] column value.
	 * 
	 * @return     string
	 */
	public function getSmtpEmail()
	{
		return $this->smtp_email;
	}

	/**
	 * Get the [remetente_email] column value.
	 * 
	 * @return     string
	 */
	public function getRemetenteEmail()
	{
		return $this->remetente_email;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Configuracao The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ConfiguracaoPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [manutencao] column.
	 * 
	 * @param      string $v new value
	 * @return     Configuracao The current object (for fluent API support)
	 */
	public function setManutencao($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->manutencao !== $v) {
			$this->manutencao = $v;
			$this->modifiedColumns[] = ConfiguracaoPeer::MANUTENCAO;
		}

		return $this;
	} // setManutencao()

	/**
	 * Set the value of [host_bd] column.
	 * 
	 * @param      string $v new value
	 * @return     Configuracao The current object (for fluent API support)
	 */
	public function setHostBd($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->host_bd !== $v) {
			$this->host_bd = $v;
			$this->modifiedColumns[] = ConfiguracaoPeer::HOST_BD;
		}

		return $this;
	} // setHostBd()

	/**
	 * Set the value of [porta_bd] column.
	 * 
	 * @param      string $v new value
	 * @return     Configuracao The current object (for fluent API support)
	 */
	public function setPortaBd($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->porta_bd !== $v) {
			$this->porta_bd = $v;
			$this->modifiedColumns[] = ConfiguracaoPeer::PORTA_BD;
		}

		return $this;
	} // setPortaBd()

	/**
	 * Set the value of [usuario_bd] column.
	 * 
	 * @param      string $v new value
	 * @return     Configuracao The current object (for fluent API support)
	 */
	public function setUsuarioBd($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usuario_bd !== $v) {
			$this->usuario_bd = $v;
			$this->modifiedColumns[] = ConfiguracaoPeer::USUARIO_BD;
		}

		return $this;
	} // setUsuarioBd()

	/**
	 * Set the value of [nome_bd] column.
	 * 
	 * @param      string $v new value
	 * @return     Configuracao The current object (for fluent API support)
	 */
	public function setNomeBd($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nome_bd !== $v) {
			$this->nome_bd = $v;
			$this->modifiedColumns[] = ConfiguracaoPeer::NOME_BD;
		}

		return $this;
	} // setNomeBd()

	/**
	 * Set the value of [senha_bd] column.
	 * 
	 * @param      string $v new value
	 * @return     Configuracao The current object (for fluent API support)
	 */
	public function setSenhaBd($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->senha_bd !== $v) {
			$this->senha_bd = $v;
			$this->modifiedColumns[] = ConfiguracaoPeer::SENHA_BD;
		}

		return $this;
	} // setSenhaBd()

	/**
	 * Set the value of [senha_email] column.
	 * 
	 * @param      string $v new value
	 * @return     Configuracao The current object (for fluent API support)
	 */
	public function setSenhaEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->senha_email !== $v) {
			$this->senha_email = $v;
			$this->modifiedColumns[] = ConfiguracaoPeer::SENHA_EMAIL;
		}

		return $this;
	} // setSenhaEmail()

	/**
	 * Set the value of [host_email] column.
	 * 
	 * @param      string $v new value
	 * @return     Configuracao The current object (for fluent API support)
	 */
	public function setHostEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->host_email !== $v) {
			$this->host_email = $v;
			$this->modifiedColumns[] = ConfiguracaoPeer::HOST_EMAIL;
		}

		return $this;
	} // setHostEmail()

	/**
	 * Set the value of [usuario_email] column.
	 * 
	 * @param      string $v new value
	 * @return     Configuracao The current object (for fluent API support)
	 */
	public function setUsuarioEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usuario_email !== $v) {
			$this->usuario_email = $v;
			$this->modifiedColumns[] = ConfiguracaoPeer::USUARIO_EMAIL;
		}

		return $this;
	} // setUsuarioEmail()

	/**
	 * Set the value of [porta_email] column.
	 * 
	 * @param      string $v new value
	 * @return     Configuracao The current object (for fluent API support)
	 */
	public function setPortaEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->porta_email !== $v) {
			$this->porta_email = $v;
			$this->modifiedColumns[] = ConfiguracaoPeer::PORTA_EMAIL;
		}

		return $this;
	} // setPortaEmail()

	/**
	 * Set the value of [smtp_email] column.
	 * 
	 * @param      string $v new value
	 * @return     Configuracao The current object (for fluent API support)
	 */
	public function setSmtpEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->smtp_email !== $v) {
			$this->smtp_email = $v;
			$this->modifiedColumns[] = ConfiguracaoPeer::SMTP_EMAIL;
		}

		return $this;
	} // setSmtpEmail()

	/**
	 * Set the value of [remetente_email] column.
	 * 
	 * @param      string $v new value
	 * @return     Configuracao The current object (for fluent API support)
	 */
	public function setRemetenteEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->remetente_email !== $v) {
			$this->remetente_email = $v;
			$this->modifiedColumns[] = ConfiguracaoPeer::REMETENTE_EMAIL;
		}

		return $this;
	} // setRemetenteEmail()

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
			if ($this->manutencao !== 'N') {
				return false;
			}

			if ($this->smtp_email !== 'N') {
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
			$this->manutencao = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->host_bd = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->porta_bd = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->usuario_bd = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->nome_bd = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->senha_bd = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->senha_email = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->host_email = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->usuario_email = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->porta_email = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->smtp_email = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->remetente_email = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 13; // 13 = ConfiguracaoPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Configuracao object", $e);
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
			$con = Propel::getConnection(ConfiguracaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ConfiguracaoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

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
			$con = Propel::getConnection(ConfiguracaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = ConfiguracaoQuery::create()
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
			$con = Propel::getConnection(ConfiguracaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				ConfiguracaoPeer::addInstanceToPool($this);
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

		$this->modifiedColumns[] = ConfiguracaoPeer::ID;
		if (null !== $this->id) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . ConfiguracaoPeer::ID . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(ConfiguracaoPeer::ID)) {
			$modifiedColumns[':p' . $index++]  = '`ID`';
		}
		if ($this->isColumnModified(ConfiguracaoPeer::MANUTENCAO)) {
			$modifiedColumns[':p' . $index++]  = '`MANUTENCAO`';
		}
		if ($this->isColumnModified(ConfiguracaoPeer::HOST_BD)) {
			$modifiedColumns[':p' . $index++]  = '`HOST_BD`';
		}
		if ($this->isColumnModified(ConfiguracaoPeer::PORTA_BD)) {
			$modifiedColumns[':p' . $index++]  = '`PORTA_BD`';
		}
		if ($this->isColumnModified(ConfiguracaoPeer::USUARIO_BD)) {
			$modifiedColumns[':p' . $index++]  = '`USUARIO_BD`';
		}
		if ($this->isColumnModified(ConfiguracaoPeer::NOME_BD)) {
			$modifiedColumns[':p' . $index++]  = '`NOME_BD`';
		}
		if ($this->isColumnModified(ConfiguracaoPeer::SENHA_BD)) {
			$modifiedColumns[':p' . $index++]  = '`SENHA_BD`';
		}
		if ($this->isColumnModified(ConfiguracaoPeer::SENHA_EMAIL)) {
			$modifiedColumns[':p' . $index++]  = '`SENHA_EMAIL`';
		}
		if ($this->isColumnModified(ConfiguracaoPeer::HOST_EMAIL)) {
			$modifiedColumns[':p' . $index++]  = '`HOST_EMAIL`';
		}
		if ($this->isColumnModified(ConfiguracaoPeer::USUARIO_EMAIL)) {
			$modifiedColumns[':p' . $index++]  = '`USUARIO_EMAIL`';
		}
		if ($this->isColumnModified(ConfiguracaoPeer::PORTA_EMAIL)) {
			$modifiedColumns[':p' . $index++]  = '`PORTA_EMAIL`';
		}
		if ($this->isColumnModified(ConfiguracaoPeer::SMTP_EMAIL)) {
			$modifiedColumns[':p' . $index++]  = '`SMTP_EMAIL`';
		}
		if ($this->isColumnModified(ConfiguracaoPeer::REMETENTE_EMAIL)) {
			$modifiedColumns[':p' . $index++]  = '`REMETENTE_EMAIL`';
		}

		$sql = sprintf(
			'INSERT INTO `configuracao` (%s) VALUES (%s)',
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
					case '`MANUTENCAO`':
						$stmt->bindValue($identifier, $this->manutencao, PDO::PARAM_STR);
						break;
					case '`HOST_BD`':
						$stmt->bindValue($identifier, $this->host_bd, PDO::PARAM_STR);
						break;
					case '`PORTA_BD`':
						$stmt->bindValue($identifier, $this->porta_bd, PDO::PARAM_STR);
						break;
					case '`USUARIO_BD`':
						$stmt->bindValue($identifier, $this->usuario_bd, PDO::PARAM_STR);
						break;
					case '`NOME_BD`':
						$stmt->bindValue($identifier, $this->nome_bd, PDO::PARAM_STR);
						break;
					case '`SENHA_BD`':
						$stmt->bindValue($identifier, $this->senha_bd, PDO::PARAM_STR);
						break;
					case '`SENHA_EMAIL`':
						$stmt->bindValue($identifier, $this->senha_email, PDO::PARAM_STR);
						break;
					case '`HOST_EMAIL`':
						$stmt->bindValue($identifier, $this->host_email, PDO::PARAM_STR);
						break;
					case '`USUARIO_EMAIL`':
						$stmt->bindValue($identifier, $this->usuario_email, PDO::PARAM_STR);
						break;
					case '`PORTA_EMAIL`':
						$stmt->bindValue($identifier, $this->porta_email, PDO::PARAM_STR);
						break;
					case '`SMTP_EMAIL`':
						$stmt->bindValue($identifier, $this->smtp_email, PDO::PARAM_STR);
						break;
					case '`REMETENTE_EMAIL`':
						$stmt->bindValue($identifier, $this->remetente_email, PDO::PARAM_STR);
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


			if (($retval = ConfiguracaoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
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
		$pos = ConfiguracaoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getManutencao();
				break;
			case 2:
				return $this->getHostBd();
				break;
			case 3:
				return $this->getPortaBd();
				break;
			case 4:
				return $this->getUsuarioBd();
				break;
			case 5:
				return $this->getNomeBd();
				break;
			case 6:
				return $this->getSenhaBd();
				break;
			case 7:
				return $this->getSenhaEmail();
				break;
			case 8:
				return $this->getHostEmail();
				break;
			case 9:
				return $this->getUsuarioEmail();
				break;
			case 10:
				return $this->getPortaEmail();
				break;
			case 11:
				return $this->getSmtpEmail();
				break;
			case 12:
				return $this->getRemetenteEmail();
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
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
	{
		if (isset($alreadyDumpedObjects['Configuracao'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Configuracao'][$this->getPrimaryKey()] = true;
		$keys = ConfiguracaoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getManutencao(),
			$keys[2] => $this->getHostBd(),
			$keys[3] => $this->getPortaBd(),
			$keys[4] => $this->getUsuarioBd(),
			$keys[5] => $this->getNomeBd(),
			$keys[6] => $this->getSenhaBd(),
			$keys[7] => $this->getSenhaEmail(),
			$keys[8] => $this->getHostEmail(),
			$keys[9] => $this->getUsuarioEmail(),
			$keys[10] => $this->getPortaEmail(),
			$keys[11] => $this->getSmtpEmail(),
			$keys[12] => $this->getRemetenteEmail(),
		);
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
		$pos = ConfiguracaoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setManutencao($value);
				break;
			case 2:
				$this->setHostBd($value);
				break;
			case 3:
				$this->setPortaBd($value);
				break;
			case 4:
				$this->setUsuarioBd($value);
				break;
			case 5:
				$this->setNomeBd($value);
				break;
			case 6:
				$this->setSenhaBd($value);
				break;
			case 7:
				$this->setSenhaEmail($value);
				break;
			case 8:
				$this->setHostEmail($value);
				break;
			case 9:
				$this->setUsuarioEmail($value);
				break;
			case 10:
				$this->setPortaEmail($value);
				break;
			case 11:
				$this->setSmtpEmail($value);
				break;
			case 12:
				$this->setRemetenteEmail($value);
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
		$keys = ConfiguracaoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setManutencao($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setHostBd($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPortaBd($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setUsuarioBd($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setNomeBd($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSenhaBd($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setSenhaEmail($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setHostEmail($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setUsuarioEmail($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setPortaEmail($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setSmtpEmail($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setRemetenteEmail($arr[$keys[12]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ConfiguracaoPeer::DATABASE_NAME);

		if ($this->isColumnModified(ConfiguracaoPeer::ID)) $criteria->add(ConfiguracaoPeer::ID, $this->id);
		if ($this->isColumnModified(ConfiguracaoPeer::MANUTENCAO)) $criteria->add(ConfiguracaoPeer::MANUTENCAO, $this->manutencao);
		if ($this->isColumnModified(ConfiguracaoPeer::HOST_BD)) $criteria->add(ConfiguracaoPeer::HOST_BD, $this->host_bd);
		if ($this->isColumnModified(ConfiguracaoPeer::PORTA_BD)) $criteria->add(ConfiguracaoPeer::PORTA_BD, $this->porta_bd);
		if ($this->isColumnModified(ConfiguracaoPeer::USUARIO_BD)) $criteria->add(ConfiguracaoPeer::USUARIO_BD, $this->usuario_bd);
		if ($this->isColumnModified(ConfiguracaoPeer::NOME_BD)) $criteria->add(ConfiguracaoPeer::NOME_BD, $this->nome_bd);
		if ($this->isColumnModified(ConfiguracaoPeer::SENHA_BD)) $criteria->add(ConfiguracaoPeer::SENHA_BD, $this->senha_bd);
		if ($this->isColumnModified(ConfiguracaoPeer::SENHA_EMAIL)) $criteria->add(ConfiguracaoPeer::SENHA_EMAIL, $this->senha_email);
		if ($this->isColumnModified(ConfiguracaoPeer::HOST_EMAIL)) $criteria->add(ConfiguracaoPeer::HOST_EMAIL, $this->host_email);
		if ($this->isColumnModified(ConfiguracaoPeer::USUARIO_EMAIL)) $criteria->add(ConfiguracaoPeer::USUARIO_EMAIL, $this->usuario_email);
		if ($this->isColumnModified(ConfiguracaoPeer::PORTA_EMAIL)) $criteria->add(ConfiguracaoPeer::PORTA_EMAIL, $this->porta_email);
		if ($this->isColumnModified(ConfiguracaoPeer::SMTP_EMAIL)) $criteria->add(ConfiguracaoPeer::SMTP_EMAIL, $this->smtp_email);
		if ($this->isColumnModified(ConfiguracaoPeer::REMETENTE_EMAIL)) $criteria->add(ConfiguracaoPeer::REMETENTE_EMAIL, $this->remetente_email);

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
		$criteria = new Criteria(ConfiguracaoPeer::DATABASE_NAME);
		$criteria->add(ConfiguracaoPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of Configuracao (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setManutencao($this->getManutencao());
		$copyObj->setHostBd($this->getHostBd());
		$copyObj->setPortaBd($this->getPortaBd());
		$copyObj->setUsuarioBd($this->getUsuarioBd());
		$copyObj->setNomeBd($this->getNomeBd());
		$copyObj->setSenhaBd($this->getSenhaBd());
		$copyObj->setSenhaEmail($this->getSenhaEmail());
		$copyObj->setHostEmail($this->getHostEmail());
		$copyObj->setUsuarioEmail($this->getUsuarioEmail());
		$copyObj->setPortaEmail($this->getPortaEmail());
		$copyObj->setSmtpEmail($this->getSmtpEmail());
		$copyObj->setRemetenteEmail($this->getRemetenteEmail());
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
	 * @return     Configuracao Clone of current object.
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
	 * @return     ConfiguracaoPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ConfiguracaoPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->manutencao = null;
		$this->host_bd = null;
		$this->porta_bd = null;
		$this->usuario_bd = null;
		$this->nome_bd = null;
		$this->senha_bd = null;
		$this->senha_email = null;
		$this->host_email = null;
		$this->usuario_email = null;
		$this->porta_email = null;
		$this->smtp_email = null;
		$this->remetente_email = null;
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
		} // if ($deep)

	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(ConfiguracaoPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseConfiguracao
