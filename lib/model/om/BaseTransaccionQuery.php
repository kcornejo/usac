<?php


/**
 * Base class that represents a query for the 'transaccion' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * 11/12/15 06:55:05
 *
 * @method TransaccionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method TransaccionQuery orderBySerie($order = Criteria::ASC) Order by the serie column
 * @method TransaccionQuery orderByDocumento($order = Criteria::ASC) Order by the documento column
 * @method TransaccionQuery orderByClienteId($order = Criteria::ASC) Order by the cliente_id column
 * @method TransaccionQuery orderByUsuarioId($order = Criteria::ASC) Order by the usuario_id column
 * @method TransaccionQuery orderByTipoTransaccionId($order = Criteria::ASC) Order by the tipo_transaccion_id column
 * @method TransaccionQuery orderByNoTarjeta($order = Criteria::ASC) Order by the no_tarjeta column
 * @method TransaccionQuery orderByTotal($order = Criteria::ASC) Order by the total column
 * @method TransaccionQuery orderByDireccion($order = Criteria::ASC) Order by the direccion column
 * @method TransaccionQuery orderByTipoPagoId($order = Criteria::ASC) Order by the tipo_pago_id column
 *
 * @method TransaccionQuery groupById() Group by the id column
 * @method TransaccionQuery groupBySerie() Group by the serie column
 * @method TransaccionQuery groupByDocumento() Group by the documento column
 * @method TransaccionQuery groupByClienteId() Group by the cliente_id column
 * @method TransaccionQuery groupByUsuarioId() Group by the usuario_id column
 * @method TransaccionQuery groupByTipoTransaccionId() Group by the tipo_transaccion_id column
 * @method TransaccionQuery groupByNoTarjeta() Group by the no_tarjeta column
 * @method TransaccionQuery groupByTotal() Group by the total column
 * @method TransaccionQuery groupByDireccion() Group by the direccion column
 * @method TransaccionQuery groupByTipoPagoId() Group by the tipo_pago_id column
 *
 * @method TransaccionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TransaccionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TransaccionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TransaccionQuery leftJoinCliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cliente relation
 * @method TransaccionQuery rightJoinCliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cliente relation
 * @method TransaccionQuery innerJoinCliente($relationAlias = null) Adds a INNER JOIN clause to the query using the Cliente relation
 *
 * @method TransaccionQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method TransaccionQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method TransaccionQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method TransaccionQuery leftJoinTipoTransaccion($relationAlias = null) Adds a LEFT JOIN clause to the query using the TipoTransaccion relation
 * @method TransaccionQuery rightJoinTipoTransaccion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TipoTransaccion relation
 * @method TransaccionQuery innerJoinTipoTransaccion($relationAlias = null) Adds a INNER JOIN clause to the query using the TipoTransaccion relation
 *
 * @method TransaccionQuery leftJoinTipoPago($relationAlias = null) Adds a LEFT JOIN clause to the query using the TipoPago relation
 * @method TransaccionQuery rightJoinTipoPago($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TipoPago relation
 * @method TransaccionQuery innerJoinTipoPago($relationAlias = null) Adds a INNER JOIN clause to the query using the TipoPago relation
 *
 * @method Transaccion findOne(PropelPDO $con = null) Return the first Transaccion matching the query
 * @method Transaccion findOneOrCreate(PropelPDO $con = null) Return the first Transaccion matching the query, or a new Transaccion object populated from the query conditions when no match is found
 *
 * @method Transaccion findOneById(int $id) Return the first Transaccion filtered by the id column
 * @method Transaccion findOneBySerie(string $serie) Return the first Transaccion filtered by the serie column
 * @method Transaccion findOneByDocumento(string $documento) Return the first Transaccion filtered by the documento column
 * @method Transaccion findOneByClienteId(int $cliente_id) Return the first Transaccion filtered by the cliente_id column
 * @method Transaccion findOneByUsuarioId(int $usuario_id) Return the first Transaccion filtered by the usuario_id column
 * @method Transaccion findOneByTipoTransaccionId(int $tipo_transaccion_id) Return the first Transaccion filtered by the tipo_transaccion_id column
 * @method Transaccion findOneByNoTarjeta(string $no_tarjeta) Return the first Transaccion filtered by the no_tarjeta column
 * @method Transaccion findOneByTotal(string $total) Return the first Transaccion filtered by the total column
 * @method Transaccion findOneByDireccion(string $direccion) Return the first Transaccion filtered by the direccion column
 * @method Transaccion findOneByTipoPagoId(int $tipo_pago_id) Return the first Transaccion filtered by the tipo_pago_id column
 *
 * @method array findById(int $id) Return Transaccion objects filtered by the id column
 * @method array findBySerie(string $serie) Return Transaccion objects filtered by the serie column
 * @method array findByDocumento(string $documento) Return Transaccion objects filtered by the documento column
 * @method array findByClienteId(int $cliente_id) Return Transaccion objects filtered by the cliente_id column
 * @method array findByUsuarioId(int $usuario_id) Return Transaccion objects filtered by the usuario_id column
 * @method array findByTipoTransaccionId(int $tipo_transaccion_id) Return Transaccion objects filtered by the tipo_transaccion_id column
 * @method array findByNoTarjeta(string $no_tarjeta) Return Transaccion objects filtered by the no_tarjeta column
 * @method array findByTotal(string $total) Return Transaccion objects filtered by the total column
 * @method array findByDireccion(string $direccion) Return Transaccion objects filtered by the direccion column
 * @method array findByTipoPagoId(int $tipo_pago_id) Return Transaccion objects filtered by the tipo_pago_id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTransaccionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTransaccionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Transaccion', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TransaccionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     TransaccionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TransaccionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TransaccionQuery) {
            return $criteria;
        }
        $query = new TransaccionQuery();
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
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Transaccion|Transaccion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TransaccionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TransaccionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Transaccion A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `SERIE`, `DOCUMENTO`, `CLIENTE_ID`, `USUARIO_ID`, `TIPO_TRANSACCION_ID`, `NO_TARJETA`, `TOTAL`, `DIRECCION`, `TIPO_PAGO_ID` FROM `transaccion` WHERE `ID` = :p0';
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
            $obj = new Transaccion();
            $obj->hydrate($row);
            TransaccionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Transaccion|Transaccion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Transaccion[]|mixed the list of results, formatted by the current formatter
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
     * @return TransaccionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TransaccionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TransaccionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TransaccionPeer::ID, $keys, Criteria::IN);
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
     * @return TransaccionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(TransaccionPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the serie column
     *
     * Example usage:
     * <code>
     * $query->filterBySerie('fooValue');   // WHERE serie = 'fooValue'
     * $query->filterBySerie('%fooValue%'); // WHERE serie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $serie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransaccionQuery The current query, for fluid interface
     */
    public function filterBySerie($serie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($serie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $serie)) {
                $serie = str_replace('*', '%', $serie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TransaccionPeer::SERIE, $serie, $comparison);
    }

    /**
     * Filter the query on the documento column
     *
     * Example usage:
     * <code>
     * $query->filterByDocumento('fooValue');   // WHERE documento = 'fooValue'
     * $query->filterByDocumento('%fooValue%'); // WHERE documento LIKE '%fooValue%'
     * </code>
     *
     * @param     string $documento The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransaccionQuery The current query, for fluid interface
     */
    public function filterByDocumento($documento = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($documento)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $documento)) {
                $documento = str_replace('*', '%', $documento);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TransaccionPeer::DOCUMENTO, $documento, $comparison);
    }

    /**
     * Filter the query on the cliente_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteId(1234); // WHERE cliente_id = 1234
     * $query->filterByClienteId(array(12, 34)); // WHERE cliente_id IN (12, 34)
     * $query->filterByClienteId(array('min' => 12)); // WHERE cliente_id > 12
     * </code>
     *
     * @see       filterByCliente()
     *
     * @param     mixed $clienteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransaccionQuery The current query, for fluid interface
     */
    public function filterByClienteId($clienteId = null, $comparison = null)
    {
        if (is_array($clienteId)) {
            $useMinMax = false;
            if (isset($clienteId['min'])) {
                $this->addUsingAlias(TransaccionPeer::CLIENTE_ID, $clienteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clienteId['max'])) {
                $this->addUsingAlias(TransaccionPeer::CLIENTE_ID, $clienteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransaccionPeer::CLIENTE_ID, $clienteId, $comparison);
    }

    /**
     * Filter the query on the usuario_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuarioId(1234); // WHERE usuario_id = 1234
     * $query->filterByUsuarioId(array(12, 34)); // WHERE usuario_id IN (12, 34)
     * $query->filterByUsuarioId(array('min' => 12)); // WHERE usuario_id > 12
     * </code>
     *
     * @see       filterByUsuario()
     *
     * @param     mixed $usuarioId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransaccionQuery The current query, for fluid interface
     */
    public function filterByUsuarioId($usuarioId = null, $comparison = null)
    {
        if (is_array($usuarioId)) {
            $useMinMax = false;
            if (isset($usuarioId['min'])) {
                $this->addUsingAlias(TransaccionPeer::USUARIO_ID, $usuarioId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usuarioId['max'])) {
                $this->addUsingAlias(TransaccionPeer::USUARIO_ID, $usuarioId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransaccionPeer::USUARIO_ID, $usuarioId, $comparison);
    }

    /**
     * Filter the query on the tipo_transaccion_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTipoTransaccionId(1234); // WHERE tipo_transaccion_id = 1234
     * $query->filterByTipoTransaccionId(array(12, 34)); // WHERE tipo_transaccion_id IN (12, 34)
     * $query->filterByTipoTransaccionId(array('min' => 12)); // WHERE tipo_transaccion_id > 12
     * </code>
     *
     * @see       filterByTipoTransaccion()
     *
     * @param     mixed $tipoTransaccionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransaccionQuery The current query, for fluid interface
     */
    public function filterByTipoTransaccionId($tipoTransaccionId = null, $comparison = null)
    {
        if (is_array($tipoTransaccionId)) {
            $useMinMax = false;
            if (isset($tipoTransaccionId['min'])) {
                $this->addUsingAlias(TransaccionPeer::TIPO_TRANSACCION_ID, $tipoTransaccionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tipoTransaccionId['max'])) {
                $this->addUsingAlias(TransaccionPeer::TIPO_TRANSACCION_ID, $tipoTransaccionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransaccionPeer::TIPO_TRANSACCION_ID, $tipoTransaccionId, $comparison);
    }

    /**
     * Filter the query on the no_tarjeta column
     *
     * Example usage:
     * <code>
     * $query->filterByNoTarjeta('fooValue');   // WHERE no_tarjeta = 'fooValue'
     * $query->filterByNoTarjeta('%fooValue%'); // WHERE no_tarjeta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noTarjeta The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransaccionQuery The current query, for fluid interface
     */
    public function filterByNoTarjeta($noTarjeta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noTarjeta)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noTarjeta)) {
                $noTarjeta = str_replace('*', '%', $noTarjeta);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TransaccionPeer::NO_TARJETA, $noTarjeta, $comparison);
    }

    /**
     * Filter the query on the total column
     *
     * Example usage:
     * <code>
     * $query->filterByTotal(1234); // WHERE total = 1234
     * $query->filterByTotal(array(12, 34)); // WHERE total IN (12, 34)
     * $query->filterByTotal(array('min' => 12)); // WHERE total > 12
     * </code>
     *
     * @param     mixed $total The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransaccionQuery The current query, for fluid interface
     */
    public function filterByTotal($total = null, $comparison = null)
    {
        if (is_array($total)) {
            $useMinMax = false;
            if (isset($total['min'])) {
                $this->addUsingAlias(TransaccionPeer::TOTAL, $total['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($total['max'])) {
                $this->addUsingAlias(TransaccionPeer::TOTAL, $total['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransaccionPeer::TOTAL, $total, $comparison);
    }

    /**
     * Filter the query on the direccion column
     *
     * Example usage:
     * <code>
     * $query->filterByDireccion('fooValue');   // WHERE direccion = 'fooValue'
     * $query->filterByDireccion('%fooValue%'); // WHERE direccion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $direccion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransaccionQuery The current query, for fluid interface
     */
    public function filterByDireccion($direccion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($direccion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $direccion)) {
                $direccion = str_replace('*', '%', $direccion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TransaccionPeer::DIRECCION, $direccion, $comparison);
    }

    /**
     * Filter the query on the tipo_pago_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTipoPagoId(1234); // WHERE tipo_pago_id = 1234
     * $query->filterByTipoPagoId(array(12, 34)); // WHERE tipo_pago_id IN (12, 34)
     * $query->filterByTipoPagoId(array('min' => 12)); // WHERE tipo_pago_id > 12
     * </code>
     *
     * @see       filterByTipoPago()
     *
     * @param     mixed $tipoPagoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransaccionQuery The current query, for fluid interface
     */
    public function filterByTipoPagoId($tipoPagoId = null, $comparison = null)
    {
        if (is_array($tipoPagoId)) {
            $useMinMax = false;
            if (isset($tipoPagoId['min'])) {
                $this->addUsingAlias(TransaccionPeer::TIPO_PAGO_ID, $tipoPagoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tipoPagoId['max'])) {
                $this->addUsingAlias(TransaccionPeer::TIPO_PAGO_ID, $tipoPagoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransaccionPeer::TIPO_PAGO_ID, $tipoPagoId, $comparison);
    }

    /**
     * Filter the query by a related Cliente object
     *
     * @param   Cliente|PropelObjectCollection $cliente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TransaccionQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByCliente($cliente, $comparison = null)
    {
        if ($cliente instanceof Cliente) {
            return $this
                ->addUsingAlias(TransaccionPeer::CLIENTE_ID, $cliente->getId(), $comparison);
        } elseif ($cliente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TransaccionPeer::CLIENTE_ID, $cliente->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCliente() only accepts arguments of type Cliente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cliente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TransaccionQuery The current query, for fluid interface
     */
    public function joinCliente($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cliente');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Cliente');
        }

        return $this;
    }

    /**
     * Use the Cliente relation Cliente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClienteQuery A secondary query class using the current class as primary query
     */
    public function useClienteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCliente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cliente', 'ClienteQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TransaccionQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(TransaccionPeer::USUARIO_ID, $usuario->getId(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TransaccionPeer::USUARIO_ID, $usuario->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUsuario() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Usuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TransaccionQuery The current query, for fluid interface
     */
    public function joinUsuario($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Usuario');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Usuario');
        }

        return $this;
    }

    /**
     * Use the Usuario relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUsuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Usuario', 'UsuarioQuery');
    }

    /**
     * Filter the query by a related TipoTransaccion object
     *
     * @param   TipoTransaccion|PropelObjectCollection $tipoTransaccion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TransaccionQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTipoTransaccion($tipoTransaccion, $comparison = null)
    {
        if ($tipoTransaccion instanceof TipoTransaccion) {
            return $this
                ->addUsingAlias(TransaccionPeer::TIPO_TRANSACCION_ID, $tipoTransaccion->getId(), $comparison);
        } elseif ($tipoTransaccion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TransaccionPeer::TIPO_TRANSACCION_ID, $tipoTransaccion->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByTipoTransaccion() only accepts arguments of type TipoTransaccion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TipoTransaccion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TransaccionQuery The current query, for fluid interface
     */
    public function joinTipoTransaccion($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TipoTransaccion');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'TipoTransaccion');
        }

        return $this;
    }

    /**
     * Use the TipoTransaccion relation TipoTransaccion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TipoTransaccionQuery A secondary query class using the current class as primary query
     */
    public function useTipoTransaccionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTipoTransaccion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TipoTransaccion', 'TipoTransaccionQuery');
    }

    /**
     * Filter the query by a related TipoPago object
     *
     * @param   TipoPago|PropelObjectCollection $tipoPago The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TransaccionQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTipoPago($tipoPago, $comparison = null)
    {
        if ($tipoPago instanceof TipoPago) {
            return $this
                ->addUsingAlias(TransaccionPeer::TIPO_PAGO_ID, $tipoPago->getId(), $comparison);
        } elseif ($tipoPago instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TransaccionPeer::TIPO_PAGO_ID, $tipoPago->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByTipoPago() only accepts arguments of type TipoPago or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TipoPago relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TransaccionQuery The current query, for fluid interface
     */
    public function joinTipoPago($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TipoPago');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'TipoPago');
        }

        return $this;
    }

    /**
     * Use the TipoPago relation TipoPago object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TipoPagoQuery A secondary query class using the current class as primary query
     */
    public function useTipoPagoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTipoPago($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TipoPago', 'TipoPagoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Transaccion $transaccion Object to remove from the list of results
     *
     * @return TransaccionQuery The current query, for fluid interface
     */
    public function prune($transaccion = null)
    {
        if ($transaccion) {
            $this->addUsingAlias(TransaccionPeer::ID, $transaccion->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
