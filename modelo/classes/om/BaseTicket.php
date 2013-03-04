<?php


/**
 * Base class that represents a row from the 'ticket' table.
 *
 * 
 *
 * @package    propel.generator..om
 */
abstract class BaseTicket extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'TicketPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        TicketPeer
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
	 * The value for the cliente field.
	 * @var        int
	 */
	protected $cliente;

	/**
	 * The value for the ativo field.
	 * Note: this column has a database default value of: 'S'
	 * @var        string
	 */
	protected $ativo;

	/**
	 * The value for the data_inicio field.
	 * @var        string
	 */
	protected $data_inicio;

	/**
	 * The value for the data_final field.
	 * @var        string
	 */
	protected $data_final;

	/**
	 * The value for the hora_inicio field.
	 * @var        string
	 */
	protected $hora_inicio;

	/**
	 * The value for the hora_final field.
	 * @var        string
	 */
	protected $hora_final;

	/**
	 * The value for the senha field.
	 * @var        string
	 */
	protected $senha;

	/**
	 * The value for the andamento field.
	 * @var        int
	 */
	protected $andamento;

	/**
	 * The value for the data_prazo field.
	 * @var        string
	 */
	protected $data_prazo;

	/**
	 * The value for the hora_prazo field.
	 * @var        string
	 */
	protected $hora_prazo;

	/**
	 * The value for the valor field.
	 * @var        double
	 */
	protected $valor;

	/**
	 * @var        Cliente
	 */
	protected $aCliente;

	/**
	 * @var        array Comentario[] Collection to store aggregation of Comentario objects.
	 */
	protected $collComentarios;

	/**
	 * @var        array Email[] Collection to store aggregation of Email objects.
	 */
	protected $collEmails;

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
	protected $comentariosScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $emailsScheduledForDeletion = null;

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->ativo = 'S';
	}

	/**
	 * Initializes internal state of BaseTicket object.
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
	 * Get the [cliente] column value.
	 * 
	 * @return     int
	 */
	public function getClienteId()
	{
		return $this->cliente;
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
	 * Get the [optionally formatted] temporal [data_inicio] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDataInicio($format = '%x')
	{
		if ($this->data_inicio === null) {
			return null;
		}


		if ($this->data_inicio === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->data_inicio);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->data_inicio, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [data_final] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDataFinal($format = '%x')
	{
		if ($this->data_final === null) {
			return null;
		}


		if ($this->data_final === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->data_final);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->data_final, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [hora_inicio] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getHoraInicio($format = '%X')
	{
		if ($this->hora_inicio === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->hora_inicio);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->hora_inicio, true), $x);
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [hora_final] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getHoraFinal($format = '%X')
	{
		if ($this->hora_final === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->hora_final);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->hora_final, true), $x);
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
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
	 * Get the [andamento] column value.
	 * 
	 * @return     int
	 */
	public function getAndamento()
	{
		return $this->andamento;
	}

	/**
	 * Get the [optionally formatted] temporal [data_prazo] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDataPrazo($format = '%x')
	{
		if ($this->data_prazo === null) {
			return null;
		}


		if ($this->data_prazo === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->data_prazo);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->data_prazo, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [hora_prazo] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getHoraPrazo($format = '%X')
	{
		if ($this->hora_prazo === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->hora_prazo);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->hora_prazo, true), $x);
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [valor] column value.
	 * 
	 * @return     double
	 */
	public function getValor()
	{
		return $this->valor;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Ticket The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = TicketPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [cliente] column.
	 * 
	 * @param      int $v new value
	 * @return     Ticket The current object (for fluent API support)
	 */
	public function setClienteId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->cliente !== $v) {
			$this->cliente = $v;
			$this->modifiedColumns[] = TicketPeer::CLIENTE;
		}

		if ($this->aCliente !== null && $this->aCliente->getId() !== $v) {
			$this->aCliente = null;
		}

		return $this;
	} // setClienteId()

	/**
	 * Set the value of [ativo] column.
	 * 
	 * @param      string $v new value
	 * @return     Ticket The current object (for fluent API support)
	 */
	public function setAtivo($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ativo !== $v) {
			$this->ativo = $v;
			$this->modifiedColumns[] = TicketPeer::ATIVO;
		}

		return $this;
	} // setAtivo()

	/**
	 * Sets the value of [data_inicio] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Ticket The current object (for fluent API support)
	 */
	public function setDataInicio($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->data_inicio !== null || $dt !== null) {
			$currentDateAsString = ($this->data_inicio !== null && $tmpDt = new DateTime($this->data_inicio)) ? $tmpDt->format('Y-m-d') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->data_inicio = $newDateAsString;
				$this->modifiedColumns[] = TicketPeer::DATA_INICIO;
			}
		} // if either are not null

		return $this;
	} // setDataInicio()

	/**
	 * Sets the value of [data_final] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Ticket The current object (for fluent API support)
	 */
	public function setDataFinal($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->data_final !== null || $dt !== null) {
			$currentDateAsString = ($this->data_final !== null && $tmpDt = new DateTime($this->data_final)) ? $tmpDt->format('Y-m-d') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->data_final = $newDateAsString;
				$this->modifiedColumns[] = TicketPeer::DATA_FINAL;
			}
		} // if either are not null

		return $this;
	} // setDataFinal()

	/**
	 * Sets the value of [hora_inicio] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Ticket The current object (for fluent API support)
	 */
	public function setHoraInicio($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->hora_inicio !== null || $dt !== null) {
			$currentDateAsString = ($this->hora_inicio !== null && $tmpDt = new DateTime($this->hora_inicio)) ? $tmpDt->format('H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->hora_inicio = $newDateAsString;
				$this->modifiedColumns[] = TicketPeer::HORA_INICIO;
			}
		} // if either are not null

		return $this;
	} // setHoraInicio()

	/**
	 * Sets the value of [hora_final] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Ticket The current object (for fluent API support)
	 */
	public function setHoraFinal($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->hora_final !== null || $dt !== null) {
			$currentDateAsString = ($this->hora_final !== null && $tmpDt = new DateTime($this->hora_final)) ? $tmpDt->format('H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->hora_final = $newDateAsString;
				$this->modifiedColumns[] = TicketPeer::HORA_FINAL;
			}
		} // if either are not null

		return $this;
	} // setHoraFinal()

	/**
	 * Set the value of [senha] column.
	 * 
	 * @param      string $v new value
	 * @return     Ticket The current object (for fluent API support)
	 */
	public function setSenha($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->senha !== $v) {
			$this->senha = $v;
			$this->modifiedColumns[] = TicketPeer::SENHA;
		}

		return $this;
	} // setSenha()

	/**
	 * Set the value of [andamento] column.
	 * 
	 * @param      int $v new value
	 * @return     Ticket The current object (for fluent API support)
	 */
	public function setAndamento($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->andamento !== $v) {
			$this->andamento = $v;
			$this->modifiedColumns[] = TicketPeer::ANDAMENTO;
		}

		return $this;
	} // setAndamento()

	/**
	 * Sets the value of [data_prazo] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Ticket The current object (for fluent API support)
	 */
	public function setDataPrazo($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->data_prazo !== null || $dt !== null) {
			$currentDateAsString = ($this->data_prazo !== null && $tmpDt = new DateTime($this->data_prazo)) ? $tmpDt->format('Y-m-d') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->data_prazo = $newDateAsString;
				$this->modifiedColumns[] = TicketPeer::DATA_PRAZO;
			}
		} // if either are not null

		return $this;
	} // setDataPrazo()

	/**
	 * Sets the value of [hora_prazo] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Ticket The current object (for fluent API support)
	 */
	public function setHoraPrazo($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->hora_prazo !== null || $dt !== null) {
			$currentDateAsString = ($this->hora_prazo !== null && $tmpDt = new DateTime($this->hora_prazo)) ? $tmpDt->format('H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->hora_prazo = $newDateAsString;
				$this->modifiedColumns[] = TicketPeer::HORA_PRAZO;
			}
		} // if either are not null

		return $this;
	} // setHoraPrazo()

	/**
	 * Set the value of [valor] column.
	 * 
	 * @param      double $v new value
	 * @return     Ticket The current object (for fluent API support)
	 */
	public function setValor($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->valor !== $v) {
			$this->valor = $v;
			$this->modifiedColumns[] = TicketPeer::VALOR;
		}

		return $this;
	} // setValor()

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
			$this->cliente = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->ativo = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->data_inicio = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->data_final = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->hora_inicio = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->hora_final = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->senha = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->andamento = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->data_prazo = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->hora_prazo = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->valor = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 12; // 12 = TicketPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Ticket object", $e);
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
			$con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = TicketPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aCliente = null;
			$this->collComentarios = null;

			$this->collEmails = null;

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
			$con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = TicketQuery::create()
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
			$con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				TicketPeer::addInstanceToPool($this);
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

			if ($this->comentariosScheduledForDeletion !== null) {
				if (!$this->comentariosScheduledForDeletion->isEmpty()) {
					ComentarioQuery::create()
						->filterByPrimaryKeys($this->comentariosScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->comentariosScheduledForDeletion = null;
				}
			}

			if ($this->collComentarios !== null) {
				foreach ($this->collComentarios as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->emailsScheduledForDeletion !== null) {
				if (!$this->emailsScheduledForDeletion->isEmpty()) {
					EmailQuery::create()
						->filterByPrimaryKeys($this->emailsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->emailsScheduledForDeletion = null;
				}
			}

			if ($this->collEmails !== null) {
				foreach ($this->collEmails as $referrerFK) {
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

		$this->modifiedColumns[] = TicketPeer::ID;
		if (null !== $this->id) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . TicketPeer::ID . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(TicketPeer::ID)) {
			$modifiedColumns[':p' . $index++]  = '`ID`';
		}
		if ($this->isColumnModified(TicketPeer::CLIENTE)) {
			$modifiedColumns[':p' . $index++]  = '`CLIENTE`';
		}
		if ($this->isColumnModified(TicketPeer::ATIVO)) {
			$modifiedColumns[':p' . $index++]  = '`ATIVO`';
		}
		if ($this->isColumnModified(TicketPeer::DATA_INICIO)) {
			$modifiedColumns[':p' . $index++]  = '`DATA_INICIO`';
		}
		if ($this->isColumnModified(TicketPeer::DATA_FINAL)) {
			$modifiedColumns[':p' . $index++]  = '`DATA_FINAL`';
		}
		if ($this->isColumnModified(TicketPeer::HORA_INICIO)) {
			$modifiedColumns[':p' . $index++]  = '`HORA_INICIO`';
		}
		if ($this->isColumnModified(TicketPeer::HORA_FINAL)) {
			$modifiedColumns[':p' . $index++]  = '`HORA_FINAL`';
		}
		if ($this->isColumnModified(TicketPeer::SENHA)) {
			$modifiedColumns[':p' . $index++]  = '`SENHA`';
		}
		if ($this->isColumnModified(TicketPeer::ANDAMENTO)) {
			$modifiedColumns[':p' . $index++]  = '`ANDAMENTO`';
		}
		if ($this->isColumnModified(TicketPeer::DATA_PRAZO)) {
			$modifiedColumns[':p' . $index++]  = '`DATA_PRAZO`';
		}
		if ($this->isColumnModified(TicketPeer::HORA_PRAZO)) {
			$modifiedColumns[':p' . $index++]  = '`HORA_PRAZO`';
		}
		if ($this->isColumnModified(TicketPeer::VALOR)) {
			$modifiedColumns[':p' . $index++]  = '`VALOR`';
		}

		$sql = sprintf(
			'INSERT INTO `ticket` (%s) VALUES (%s)',
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
					case '`CLIENTE`':
						$stmt->bindValue($identifier, $this->cliente, PDO::PARAM_INT);
						break;
					case '`ATIVO`':
						$stmt->bindValue($identifier, $this->ativo, PDO::PARAM_STR);
						break;
					case '`DATA_INICIO`':
						$stmt->bindValue($identifier, $this->data_inicio, PDO::PARAM_STR);
						break;
					case '`DATA_FINAL`':
						$stmt->bindValue($identifier, $this->data_final, PDO::PARAM_STR);
						break;
					case '`HORA_INICIO`':
						$stmt->bindValue($identifier, $this->hora_inicio, PDO::PARAM_STR);
						break;
					case '`HORA_FINAL`':
						$stmt->bindValue($identifier, $this->hora_final, PDO::PARAM_STR);
						break;
					case '`SENHA`':
						$stmt->bindValue($identifier, $this->senha, PDO::PARAM_STR);
						break;
					case '`ANDAMENTO`':
						$stmt->bindValue($identifier, $this->andamento, PDO::PARAM_INT);
						break;
					case '`DATA_PRAZO`':
						$stmt->bindValue($identifier, $this->data_prazo, PDO::PARAM_STR);
						break;
					case '`HORA_PRAZO`':
						$stmt->bindValue($identifier, $this->hora_prazo, PDO::PARAM_STR);
						break;
					case '`VALOR`':
						$stmt->bindValue($identifier, $this->valor, PDO::PARAM_STR);
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


			if (($retval = TicketPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collComentarios !== null) {
					foreach ($this->collComentarios as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collEmails !== null) {
					foreach ($this->collEmails as $referrerFK) {
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
		$pos = TicketPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getClienteId();
				break;
			case 2:
				return $this->getAtivo();
				break;
			case 3:
				return $this->getDataInicio();
				break;
			case 4:
				return $this->getDataFinal();
				break;
			case 5:
				return $this->getHoraInicio();
				break;
			case 6:
				return $this->getHoraFinal();
				break;
			case 7:
				return $this->getSenha();
				break;
			case 8:
				return $this->getAndamento();
				break;
			case 9:
				return $this->getDataPrazo();
				break;
			case 10:
				return $this->getHoraPrazo();
				break;
			case 11:
				return $this->getValor();
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
		if (isset($alreadyDumpedObjects['Ticket'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Ticket'][$this->getPrimaryKey()] = true;
		$keys = TicketPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getClienteId(),
			$keys[2] => $this->getAtivo(),
			$keys[3] => $this->getDataInicio(),
			$keys[4] => $this->getDataFinal(),
			$keys[5] => $this->getHoraInicio(),
			$keys[6] => $this->getHoraFinal(),
			$keys[7] => $this->getSenha(),
			$keys[8] => $this->getAndamento(),
			$keys[9] => $this->getDataPrazo(),
			$keys[10] => $this->getHoraPrazo(),
			$keys[11] => $this->getValor(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aCliente) {
				$result['Cliente'] = $this->aCliente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->collComentarios) {
				$result['Comentarios'] = $this->collComentarios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collEmails) {
				$result['Emails'] = $this->collEmails->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = TicketPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setClienteId($value);
				break;
			case 2:
				$this->setAtivo($value);
				break;
			case 3:
				$this->setDataInicio($value);
				break;
			case 4:
				$this->setDataFinal($value);
				break;
			case 5:
				$this->setHoraInicio($value);
				break;
			case 6:
				$this->setHoraFinal($value);
				break;
			case 7:
				$this->setSenha($value);
				break;
			case 8:
				$this->setAndamento($value);
				break;
			case 9:
				$this->setDataPrazo($value);
				break;
			case 10:
				$this->setHoraPrazo($value);
				break;
			case 11:
				$this->setValor($value);
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
		$keys = TicketPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setClienteId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAtivo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDataInicio($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDataFinal($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setHoraInicio($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setHoraFinal($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setSenha($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setAndamento($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDataPrazo($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setHoraPrazo($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setValor($arr[$keys[11]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(TicketPeer::DATABASE_NAME);

		if ($this->isColumnModified(TicketPeer::ID)) $criteria->add(TicketPeer::ID, $this->id);
		if ($this->isColumnModified(TicketPeer::CLIENTE)) $criteria->add(TicketPeer::CLIENTE, $this->cliente);
		if ($this->isColumnModified(TicketPeer::ATIVO)) $criteria->add(TicketPeer::ATIVO, $this->ativo);
		if ($this->isColumnModified(TicketPeer::DATA_INICIO)) $criteria->add(TicketPeer::DATA_INICIO, $this->data_inicio);
		if ($this->isColumnModified(TicketPeer::DATA_FINAL)) $criteria->add(TicketPeer::DATA_FINAL, $this->data_final);
		if ($this->isColumnModified(TicketPeer::HORA_INICIO)) $criteria->add(TicketPeer::HORA_INICIO, $this->hora_inicio);
		if ($this->isColumnModified(TicketPeer::HORA_FINAL)) $criteria->add(TicketPeer::HORA_FINAL, $this->hora_final);
		if ($this->isColumnModified(TicketPeer::SENHA)) $criteria->add(TicketPeer::SENHA, $this->senha);
		if ($this->isColumnModified(TicketPeer::ANDAMENTO)) $criteria->add(TicketPeer::ANDAMENTO, $this->andamento);
		if ($this->isColumnModified(TicketPeer::DATA_PRAZO)) $criteria->add(TicketPeer::DATA_PRAZO, $this->data_prazo);
		if ($this->isColumnModified(TicketPeer::HORA_PRAZO)) $criteria->add(TicketPeer::HORA_PRAZO, $this->hora_prazo);
		if ($this->isColumnModified(TicketPeer::VALOR)) $criteria->add(TicketPeer::VALOR, $this->valor);

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
		$criteria = new Criteria(TicketPeer::DATABASE_NAME);
		$criteria->add(TicketPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of Ticket (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setClienteId($this->getClienteId());
		$copyObj->setAtivo($this->getAtivo());
		$copyObj->setDataInicio($this->getDataInicio());
		$copyObj->setDataFinal($this->getDataFinal());
		$copyObj->setHoraInicio($this->getHoraInicio());
		$copyObj->setHoraFinal($this->getHoraFinal());
		$copyObj->setSenha($this->getSenha());
		$copyObj->setAndamento($this->getAndamento());
		$copyObj->setDataPrazo($this->getDataPrazo());
		$copyObj->setHoraPrazo($this->getHoraPrazo());
		$copyObj->setValor($this->getValor());

		if ($deepCopy && !$this->startCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);
			// store object hash to prevent cycle
			$this->startCopy = true;

			foreach ($this->getComentarios() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addComentario($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getEmails() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addEmail($relObj->copy($deepCopy));
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
	 * @return     Ticket Clone of current object.
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
	 * @return     TicketPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new TicketPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Cliente object.
	 *
	 * @param      Cliente $v
	 * @return     Ticket The current object (for fluent API support)
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
			$v->addTicket($this);
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
				$this->aCliente->addTickets($this);
			 */
		}
		return $this->aCliente;
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
		if ('Comentario' == $relationName) {
			return $this->initComentarios();
		}
		if ('Email' == $relationName) {
			return $this->initEmails();
		}
	}

	/**
	 * Clears out the collComentarios collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addComentarios()
	 */
	public function clearComentarios()
	{
		$this->collComentarios = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collComentarios collection.
	 *
	 * By default this just sets the collComentarios collection to an empty array (like clearcollComentarios());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initComentarios($overrideExisting = true)
	{
		if (null !== $this->collComentarios && !$overrideExisting) {
			return;
		}
		$this->collComentarios = new PropelObjectCollection();
		$this->collComentarios->setModel('Comentario');
	}

	/**
	 * Gets an array of Comentario objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Ticket is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Comentario[] List of Comentario objects
	 * @throws     PropelException
	 */
	public function getComentarios($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collComentarios || null !== $criteria) {
			if ($this->isNew() && null === $this->collComentarios) {
				// return empty collection
				$this->initComentarios();
			} else {
				$collComentarios = ComentarioQuery::create(null, $criteria)
					->filterByTicket($this)
					->find($con);
				if (null !== $criteria) {
					return $collComentarios;
				}
				$this->collComentarios = $collComentarios;
			}
		}
		return $this->collComentarios;
	}

	/**
	 * Sets a collection of Comentario objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $comentarios A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setComentarios(PropelCollection $comentarios, PropelPDO $con = null)
	{
		$this->comentariosScheduledForDeletion = $this->getComentarios(new Criteria(), $con)->diff($comentarios);

		foreach ($comentarios as $comentario) {
			// Fix issue with collection modified by reference
			if ($comentario->isNew()) {
				$comentario->setTicket($this);
			}
			$this->addComentario($comentario);
		}

		$this->collComentarios = $comentarios;
	}

	/**
	 * Returns the number of related Comentario objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Comentario objects.
	 * @throws     PropelException
	 */
	public function countComentarios(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collComentarios || null !== $criteria) {
			if ($this->isNew() && null === $this->collComentarios) {
				return 0;
			} else {
				$query = ComentarioQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByTicket($this)
					->count($con);
			}
		} else {
			return count($this->collComentarios);
		}
	}

	/**
	 * Method called to associate a Comentario object to this object
	 * through the Comentario foreign key attribute.
	 *
	 * @param      Comentario $l Comentario
	 * @return     Ticket The current object (for fluent API support)
	 */
	public function addComentario(Comentario $l)
	{
		if ($this->collComentarios === null) {
			$this->initComentarios();
		}
		if (!$this->collComentarios->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddComentario($l);
		}

		return $this;
	}

	/**
	 * @param	Comentario $comentario The comentario object to add.
	 */
	protected function doAddComentario($comentario)
	{
		$this->collComentarios[]= $comentario;
		$comentario->setTicket($this);
	}

	/**
	 * Clears out the collEmails collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addEmails()
	 */
	public function clearEmails()
	{
		$this->collEmails = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collEmails collection.
	 *
	 * By default this just sets the collEmails collection to an empty array (like clearcollEmails());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initEmails($overrideExisting = true)
	{
		if (null !== $this->collEmails && !$overrideExisting) {
			return;
		}
		$this->collEmails = new PropelObjectCollection();
		$this->collEmails->setModel('Email');
	}

	/**
	 * Gets an array of Email objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Ticket is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Email[] List of Email objects
	 * @throws     PropelException
	 */
	public function getEmails($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collEmails || null !== $criteria) {
			if ($this->isNew() && null === $this->collEmails) {
				// return empty collection
				$this->initEmails();
			} else {
				$collEmails = EmailQuery::create(null, $criteria)
					->filterByTicket($this)
					->find($con);
				if (null !== $criteria) {
					return $collEmails;
				}
				$this->collEmails = $collEmails;
			}
		}
		return $this->collEmails;
	}

	/**
	 * Sets a collection of Email objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $emails A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setEmails(PropelCollection $emails, PropelPDO $con = null)
	{
		$this->emailsScheduledForDeletion = $this->getEmails(new Criteria(), $con)->diff($emails);

		foreach ($emails as $email) {
			// Fix issue with collection modified by reference
			if ($email->isNew()) {
				$email->setTicket($this);
			}
			$this->addEmail($email);
		}

		$this->collEmails = $emails;
	}

	/**
	 * Returns the number of related Email objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Email objects.
	 * @throws     PropelException
	 */
	public function countEmails(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collEmails || null !== $criteria) {
			if ($this->isNew() && null === $this->collEmails) {
				return 0;
			} else {
				$query = EmailQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByTicket($this)
					->count($con);
			}
		} else {
			return count($this->collEmails);
		}
	}

	/**
	 * Method called to associate a Email object to this object
	 * through the Email foreign key attribute.
	 *
	 * @param      Email $l Email
	 * @return     Ticket The current object (for fluent API support)
	 */
	public function addEmail(Email $l)
	{
		if ($this->collEmails === null) {
			$this->initEmails();
		}
		if (!$this->collEmails->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddEmail($l);
		}

		return $this;
	}

	/**
	 * @param	Email $email The email object to add.
	 */
	protected function doAddEmail($email)
	{
		$this->collEmails[]= $email;
		$email->setTicket($this);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->cliente = null;
		$this->ativo = null;
		$this->data_inicio = null;
		$this->data_final = null;
		$this->hora_inicio = null;
		$this->hora_final = null;
		$this->senha = null;
		$this->andamento = null;
		$this->data_prazo = null;
		$this->hora_prazo = null;
		$this->valor = null;
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
			if ($this->collComentarios) {
				foreach ($this->collComentarios as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collEmails) {
				foreach ($this->collEmails as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collComentarios instanceof PropelCollection) {
			$this->collComentarios->clearIterator();
		}
		$this->collComentarios = null;
		if ($this->collEmails instanceof PropelCollection) {
			$this->collEmails->clearIterator();
		}
		$this->collEmails = null;
		$this->aCliente = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(TicketPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseTicket
