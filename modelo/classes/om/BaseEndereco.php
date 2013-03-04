<?php


/**
 * Base class that represents a row from the 'endereco' table.
 *
 * 
 *
 * @package    propel.generator..om
 */
abstract class BaseEndereco extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'EnderecoPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        EnderecoPeer
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
	 * The value for the rua field.
	 * @var        string
	 */
	protected $rua;

	/**
	 * The value for the bairro field.
	 * @var        string
	 */
	protected $bairro;

	/**
	 * The value for the numero field.
	 * @var        int
	 */
	protected $numero;

	/**
	 * The value for the cidade field.
	 * @var        string
	 */
	protected $cidade;

	/**
	 * The value for the estado field.
	 * @var        int
	 */
	protected $estado;

	/**
	 * The value for the cep field.
	 * @var        string
	 */
	protected $cep;

	/**
	 * The value for the complemento field.
	 * @var        string
	 */
	protected $complemento;

	/**
	 * The value for the cliente field.
	 * @var        int
	 */
	protected $cliente;

	/**
	 * @var        Cliente
	 */
	protected $aCliente;

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
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [rua] column value.
	 * 
	 * @return     string
	 */
	public function getRua()
	{
		return $this->rua;
	}

	/**
	 * Get the [bairro] column value.
	 * 
	 * @return     string
	 */
	public function getBairro()
	{
		return $this->bairro;
	}

	/**
	 * Get the [numero] column value.
	 * 
	 * @return     int
	 */
	public function getNumero()
	{
		return $this->numero;
	}

	/**
	 * Get the [cidade] column value.
	 * 
	 * @return     string
	 */
	public function getCidade()
	{
		return $this->cidade;
	}

	/**
	 * Get the [estado] column value.
	 * 
	 * @return     int
	 */
	public function getEstado()
	{
		return $this->estado;
	}

	/**
	 * Get the [cep] column value.
	 * 
	 * @return     string
	 */
	public function getCep()
	{
		return $this->cep;
	}

	/**
	 * Get the [complemento] column value.
	 * 
	 * @return     string
	 */
	public function getComplemento()
	{
		return $this->complemento;
	}

	/**
	 * Get the [cliente] column value.
	 * 
	 * @return     int
	 */
	public function getClienteId()
	{
		return $this->cliente;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Endereco The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = EnderecoPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [rua] column.
	 * 
	 * @param      string $v new value
	 * @return     Endereco The current object (for fluent API support)
	 */
	public function setRua($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->rua !== $v) {
			$this->rua = $v;
			$this->modifiedColumns[] = EnderecoPeer::RUA;
		}

		return $this;
	} // setRua()

	/**
	 * Set the value of [bairro] column.
	 * 
	 * @param      string $v new value
	 * @return     Endereco The current object (for fluent API support)
	 */
	public function setBairro($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->bairro !== $v) {
			$this->bairro = $v;
			$this->modifiedColumns[] = EnderecoPeer::BAIRRO;
		}

		return $this;
	} // setBairro()

	/**
	 * Set the value of [numero] column.
	 * 
	 * @param      int $v new value
	 * @return     Endereco The current object (for fluent API support)
	 */
	public function setNumero($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->numero !== $v) {
			$this->numero = $v;
			$this->modifiedColumns[] = EnderecoPeer::NUMERO;
		}

		return $this;
	} // setNumero()

	/**
	 * Set the value of [cidade] column.
	 * 
	 * @param      string $v new value
	 * @return     Endereco The current object (for fluent API support)
	 */
	public function setCidade($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->cidade !== $v) {
			$this->cidade = $v;
			$this->modifiedColumns[] = EnderecoPeer::CIDADE;
		}

		return $this;
	} // setCidade()

	/**
	 * Set the value of [estado] column.
	 * 
	 * @param      int $v new value
	 * @return     Endereco The current object (for fluent API support)
	 */
	public function setEstado($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->estado !== $v) {
			$this->estado = $v;
			$this->modifiedColumns[] = EnderecoPeer::ESTADO;
		}

		return $this;
	} // setEstado()

	/**
	 * Set the value of [cep] column.
	 * 
	 * @param      string $v new value
	 * @return     Endereco The current object (for fluent API support)
	 */
	public function setCep($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->cep !== $v) {
			$this->cep = $v;
			$this->modifiedColumns[] = EnderecoPeer::CEP;
		}

		return $this;
	} // setCep()

	/**
	 * Set the value of [complemento] column.
	 * 
	 * @param      string $v new value
	 * @return     Endereco The current object (for fluent API support)
	 */
	public function setComplemento($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->complemento !== $v) {
			$this->complemento = $v;
			$this->modifiedColumns[] = EnderecoPeer::COMPLEMENTO;
		}

		return $this;
	} // setComplemento()

	/**
	 * Set the value of [cliente] column.
	 * 
	 * @param      int $v new value
	 * @return     Endereco The current object (for fluent API support)
	 */
	public function setClienteId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->cliente !== $v) {
			$this->cliente = $v;
			$this->modifiedColumns[] = EnderecoPeer::CLIENTE;
		}

		if ($this->aCliente !== null && $this->aCliente->getId() !== $v) {
			$this->aCliente = null;
		}

		return $this;
	} // setClienteId()

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
			$this->rua = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->bairro = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->numero = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->cidade = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->estado = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->cep = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->complemento = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->cliente = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 9; // 9 = EnderecoPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Endereco object", $e);
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

		if ($this->aCliente !== null && $this->cliente !== $this->aCliente->getId()) {
			$this->aCliente = null;
		}
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
			$con = Propel::getConnection(EnderecoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = EnderecoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aCliente = null;
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
			$con = Propel::getConnection(EnderecoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = EnderecoQuery::create()
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
			$con = Propel::getConnection(EnderecoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				EnderecoPeer::addInstanceToPool($this);
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

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aCliente !== null) {
				if ($this->aCliente->isModified() || $this->aCliente->isNew()) {
					$affectedRows += $this->aCliente->save($con);
				}
				$this->setCliente($this->aCliente);
			}

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

		$this->modifiedColumns[] = EnderecoPeer::ID;
		if (null !== $this->id) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . EnderecoPeer::ID . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(EnderecoPeer::ID)) {
			$modifiedColumns[':p' . $index++]  = '`ID`';
		}
		if ($this->isColumnModified(EnderecoPeer::RUA)) {
			$modifiedColumns[':p' . $index++]  = '`RUA`';
		}
		if ($this->isColumnModified(EnderecoPeer::BAIRRO)) {
			$modifiedColumns[':p' . $index++]  = '`BAIRRO`';
		}
		if ($this->isColumnModified(EnderecoPeer::NUMERO)) {
			$modifiedColumns[':p' . $index++]  = '`NUMERO`';
		}
		if ($this->isColumnModified(EnderecoPeer::CIDADE)) {
			$modifiedColumns[':p' . $index++]  = '`CIDADE`';
		}
		if ($this->isColumnModified(EnderecoPeer::ESTADO)) {
			$modifiedColumns[':p' . $index++]  = '`ESTADO`';
		}
		if ($this->isColumnModified(EnderecoPeer::CEP)) {
			$modifiedColumns[':p' . $index++]  = '`CEP`';
		}
		if ($this->isColumnModified(EnderecoPeer::COMPLEMENTO)) {
			$modifiedColumns[':p' . $index++]  = '`COMPLEMENTO`';
		}
		if ($this->isColumnModified(EnderecoPeer::CLIENTE)) {
			$modifiedColumns[':p' . $index++]  = '`CLIENTE`';
		}

		$sql = sprintf(
			'INSERT INTO `endereco` (%s) VALUES (%s)',
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
					case '`RUA`':
						$stmt->bindValue($identifier, $this->rua, PDO::PARAM_STR);
						break;
					case '`BAIRRO`':
						$stmt->bindValue($identifier, $this->bairro, PDO::PARAM_STR);
						break;
					case '`NUMERO`':
						$stmt->bindValue($identifier, $this->numero, PDO::PARAM_INT);
						break;
					case '`CIDADE`':
						$stmt->bindValue($identifier, $this->cidade, PDO::PARAM_STR);
						break;
					case '`ESTADO`':
						$stmt->bindValue($identifier, $this->estado, PDO::PARAM_INT);
						break;
					case '`CEP`':
						$stmt->bindValue($identifier, $this->cep, PDO::PARAM_STR);
						break;
					case '`COMPLEMENTO`':
						$stmt->bindValue($identifier, $this->complemento, PDO::PARAM_STR);
						break;
					case '`CLIENTE`':
						$stmt->bindValue($identifier, $this->cliente, PDO::PARAM_INT);
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


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aCliente !== null) {
				if (!$this->aCliente->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCliente->getValidationFailures());
				}
			}


			if (($retval = EnderecoPeer::doValidate($this, $columns)) !== true) {
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
		$pos = EnderecoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getRua();
				break;
			case 2:
				return $this->getBairro();
				break;
			case 3:
				return $this->getNumero();
				break;
			case 4:
				return $this->getCidade();
				break;
			case 5:
				return $this->getEstado();
				break;
			case 6:
				return $this->getCep();
				break;
			case 7:
				return $this->getComplemento();
				break;
			case 8:
				return $this->getClienteId();
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
		if (isset($alreadyDumpedObjects['Endereco'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Endereco'][$this->getPrimaryKey()] = true;
		$keys = EnderecoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getRua(),
			$keys[2] => $this->getBairro(),
			$keys[3] => $this->getNumero(),
			$keys[4] => $this->getCidade(),
			$keys[5] => $this->getEstado(),
			$keys[6] => $this->getCep(),
			$keys[7] => $this->getComplemento(),
			$keys[8] => $this->getClienteId(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aCliente) {
				$result['Cliente'] = $this->aCliente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
		$pos = EnderecoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setRua($value);
				break;
			case 2:
				$this->setBairro($value);
				break;
			case 3:
				$this->setNumero($value);
				break;
			case 4:
				$this->setCidade($value);
				break;
			case 5:
				$this->setEstado($value);
				break;
			case 6:
				$this->setCep($value);
				break;
			case 7:
				$this->setComplemento($value);
				break;
			case 8:
				$this->setClienteId($value);
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
		$keys = EnderecoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setRua($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setBairro($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNumero($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCidade($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setEstado($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCep($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setComplemento($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setClienteId($arr[$keys[8]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(EnderecoPeer::DATABASE_NAME);

		if ($this->isColumnModified(EnderecoPeer::ID)) $criteria->add(EnderecoPeer::ID, $this->id);
		if ($this->isColumnModified(EnderecoPeer::RUA)) $criteria->add(EnderecoPeer::RUA, $this->rua);
		if ($this->isColumnModified(EnderecoPeer::BAIRRO)) $criteria->add(EnderecoPeer::BAIRRO, $this->bairro);
		if ($this->isColumnModified(EnderecoPeer::NUMERO)) $criteria->add(EnderecoPeer::NUMERO, $this->numero);
		if ($this->isColumnModified(EnderecoPeer::CIDADE)) $criteria->add(EnderecoPeer::CIDADE, $this->cidade);
		if ($this->isColumnModified(EnderecoPeer::ESTADO)) $criteria->add(EnderecoPeer::ESTADO, $this->estado);
		if ($this->isColumnModified(EnderecoPeer::CEP)) $criteria->add(EnderecoPeer::CEP, $this->cep);
		if ($this->isColumnModified(EnderecoPeer::COMPLEMENTO)) $criteria->add(EnderecoPeer::COMPLEMENTO, $this->complemento);
		if ($this->isColumnModified(EnderecoPeer::CLIENTE)) $criteria->add(EnderecoPeer::CLIENTE, $this->cliente);

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
		$criteria = new Criteria(EnderecoPeer::DATABASE_NAME);
		$criteria->add(EnderecoPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of Endereco (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setRua($this->getRua());
		$copyObj->setBairro($this->getBairro());
		$copyObj->setNumero($this->getNumero());
		$copyObj->setCidade($this->getCidade());
		$copyObj->setEstado($this->getEstado());
		$copyObj->setCep($this->getCep());
		$copyObj->setComplemento($this->getComplemento());
		$copyObj->setClienteId($this->getClienteId());

		if ($deepCopy && !$this->startCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);
			// store object hash to prevent cycle
			$this->startCopy = true;

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
	 * @return     Endereco Clone of current object.
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
	 * @return     EnderecoPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new EnderecoPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Cliente object.
	 *
	 * @param      Cliente $v
	 * @return     Endereco The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCliente(Cliente $v = null)
	{
		if ($v === null) {
			$this->setClienteId(NULL);
		} else {
			$this->setClienteId($v->getId());
		}

		$this->aCliente = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Cliente object, it will not be re-added.
		if ($v !== null) {
			$v->addEndereco($this);
		}

		return $this;
	}


	/**
	 * Get the associated Cliente object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Cliente The associated Cliente object.
	 * @throws     PropelException
	 */
	public function getCliente(PropelPDO $con = null)
	{
		if ($this->aCliente === null && ($this->cliente !== null)) {
			$this->aCliente = ClienteQuery::create()->findPk($this->cliente, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aCliente->addEnderecos($this);
			 */
		}
		return $this->aCliente;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->rua = null;
		$this->bairro = null;
		$this->numero = null;
		$this->cidade = null;
		$this->estado = null;
		$this->cep = null;
		$this->complemento = null;
		$this->cliente = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
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

		$this->aCliente = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(EnderecoPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseEndereco
