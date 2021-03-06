<?php


/**
 * Base class that represents a query for the 'factura' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * 11/12/15 08:06:36
 *
 * @method FacturaQuery orderById($order = Criteria::ASC) Order by the id column
 * @method FacturaQuery orderByClienteId($order = Criteria::ASC) Order by the cliente_id column
 * @method FacturaQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method FacturaQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method FacturaQuery orderByCreatedBy($order = Criteria::ASC) Order by the created_by column
 * @method FacturaQuery orderByUpdatedBy($order = Criteria::ASC) Order by the updated_by column
 * @method FacturaQuery orderByTotal($order = Criteria::ASC) Order by the total column
 * @method FacturaQuery orderByTipoPagoId($order = Criteria::ASC) Order by the tipo_pago_id column
 * @method FacturaQuery orderByActivo($order = Criteria::ASC) Order by the activo column
 * @method FacturaQuery orderByFecha($order = Criteria::ASC) Order by the fecha column
 * @method FacturaQuery orderBySerie($order = Criteria::ASC) Order by the serie column
 * @method FacturaQuery orderByDocumento($order = Criteria::ASC) Order by the documento column
 *
 * @method FacturaQuery groupById() Group by the id column
 * @method FacturaQuery groupByClienteId() Group by the cliente_id column
 * @method FacturaQuery groupByCreatedAt() Group by the created_at column
 * @method FacturaQuery groupByUpdatedAt() Group by the updated_at column
 * @method FacturaQuery groupByCreatedBy() Group by the created_by column
 * @method FacturaQuery groupByUpdatedBy() Group by the updated_by column
 * @method FacturaQuery groupByTotal() Group by the total column
 * @method FacturaQuery groupByTipoPagoId() Group by the tipo_pago_id column
 * @method FacturaQuery groupByActivo() Group by the activo column
 * @method FacturaQuery groupByFecha() Group by the fecha column
 * @method FacturaQuery groupBySerie() Group by the serie column
 * @method FacturaQuery groupByDocumento() Group by the documento column
 *
 * @method FacturaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FacturaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FacturaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FacturaQuery leftJoinCliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cliente relation
 * @method FacturaQuery rightJoinCliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cliente relation
 * @method FacturaQuery innerJoinCliente($relationAlias = null) Adds a INNER JOIN clause to the query using the Cliente relation
 *
 * @method FacturaQuery leftJoinTipoPago($relationAlias = null) Adds a LEFT JOIN clause to the query using the TipoPago relation
 * @method FacturaQuery rightJoinTipoPago($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TipoPago relation
 * @method FacturaQuery innerJoinTipoPago($relationAlias = null) Adds a INNER JOIN clause to the query using the TipoPago relation
 *
 * @method FacturaQuery leftJoinFacturaDetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the FacturaDetalle relation
 * @method FacturaQuery rightJoinFacturaDetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FacturaDetalle relation
 * @method FacturaQuery innerJoinFacturaDetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the FacturaDetalle relation
 *
 * @method Factura findOne(PropelPDO $con = null) Return the first Factura matching the query
 * @method Factura findOneOrCreate(PropelPDO $con = null) Return the first Factura matching the query, or a new Factura object populated from the query conditions when no match is found
 *
 * @method Factura findOneById(int $id) Return the first Factura filtered by the id column
 * @method Factura findOneByClienteId(int $cliente_id) Return the first Factura filtered by the cliente_id column
 * @method Factura findOneByCreatedAt(string $created_at) Return the first Factura filtered by the created_at column
 * @method Factura findOneByUpdatedAt(string $updated_at) Return the first Factura filtered by the updated_at column
 * @method Factura findOneByCreatedBy(string $created_by) Return the first Factura filtered by the created_by column
 * @method Factura findOneByUpdatedBy(string $updated_by) Return the first Factura filtered by the updated_by column
 * @method Factura findOneByTotal(double $total) Return the first Factura filtered by the total column
 * @method Factura findOneByTipoPagoId(int $tipo_pago_id) Return the first Factura filtered by the tipo_pago_id column
 * @method Factura findOneByActivo(boolean $activo) Return the first Factura filtered by the activo column
 * @method Factura findOneByFecha(string $fecha) Return the first Factura filtered by the fecha column
 * @method Factura findOneBySerie(string $serie) Return the first Factura filtered by the serie column
 * @method Factura findOneByDocumento(string $documento) Return the first Factura filtered by the documento column
 *
 * @method array findById(int $id) Return Factura objects filtered by the id column
 * @method array findByClienteId(int $cliente_id) Return Factura objects filtered by the cliente_id column
 * @method array findByCreatedAt(string $created_at) Return Factura objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return Factura objects filtered by the updated_at column
 * @method array findByCreatedBy(string $created_by) Return Factura objects filtered by the created_by column
 * @method array findByUpdatedBy(string $updated_by) Return Factura objects filtered by the updated_by column
 * @method array findByTotal(double $total) Return Factura objects filtered by the total column
 * @method array findByTipoPagoId(int $tipo_pago_id) Return Factura objects filtered by the tipo_pago_id column
 * @method array findByActivo(boolean $activo) Return Factura objects filtered by the activo column
 * @method array findByFecha(string $fecha) Return Factura objects filtered by the fecha column
 * @method array findBySerie(string $serie) Return Factura objects filtered by the serie column
 * @method array findByDocumento(string $documento) Return Factura objects filtered by the documento column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseFacturaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFacturaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Factura', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FacturaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     FacturaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FacturaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FacturaQuery) {
            return $criteria;
        }
        $query = new FacturaQuery();
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
     * @return   Factura|Factura[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FacturaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Factura A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `CLIENTE_ID`, `CREATED_AT`, `UPDATED_AT`, `CREATED_BY`, `UPDATED_BY`, `TOTAL`, `TIPO_PAGO_ID`, `ACTIVO`, `FECHA`, `SERIE`, `DOCUMENTO` FROM `factura` WHERE `ID` = :p0';
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
            $obj = new Factura();
            $obj->hydrate($row);
            FacturaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Factura|Factura[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Factura[]|mixed the list of results, formatted by the current formatter
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
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FacturaPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FacturaPeer::ID, $keys, Criteria::IN);
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
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(FacturaPeer::ID, $id, $comparison);
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
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByClienteId($clienteId = null, $comparison = null)
    {
        if (is_array($clienteId)) {
            $useMinMax = false;
            if (isset($clienteId['min'])) {
                $this->addUsingAlias(FacturaPeer::CLIENTE_ID, $clienteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clienteId['max'])) {
                $this->addUsingAlias(FacturaPeer::CLIENTE_ID, $clienteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturaPeer::CLIENTE_ID, $clienteId, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(FacturaPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(FacturaPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturaPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(FacturaPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(FacturaPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturaPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query on the created_by column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedBy('fooValue');   // WHERE created_by = 'fooValue'
     * $query->filterByCreatedBy('%fooValue%'); // WHERE created_by LIKE '%fooValue%'
     * </code>
     *
     * @param     string $createdBy The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByCreatedBy($createdBy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createdBy)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $createdBy)) {
                $createdBy = str_replace('*', '%', $createdBy);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturaPeer::CREATED_BY, $createdBy, $comparison);
    }

    /**
     * Filter the query on the updated_by column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedBy('fooValue');   // WHERE updated_by = 'fooValue'
     * $query->filterByUpdatedBy('%fooValue%'); // WHERE updated_by LIKE '%fooValue%'
     * </code>
     *
     * @param     string $updatedBy The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByUpdatedBy($updatedBy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($updatedBy)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $updatedBy)) {
                $updatedBy = str_replace('*', '%', $updatedBy);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturaPeer::UPDATED_BY, $updatedBy, $comparison);
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
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByTotal($total = null, $comparison = null)
    {
        if (is_array($total)) {
            $useMinMax = false;
            if (isset($total['min'])) {
                $this->addUsingAlias(FacturaPeer::TOTAL, $total['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($total['max'])) {
                $this->addUsingAlias(FacturaPeer::TOTAL, $total['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturaPeer::TOTAL, $total, $comparison);
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
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByTipoPagoId($tipoPagoId = null, $comparison = null)
    {
        if (is_array($tipoPagoId)) {
            $useMinMax = false;
            if (isset($tipoPagoId['min'])) {
                $this->addUsingAlias(FacturaPeer::TIPO_PAGO_ID, $tipoPagoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tipoPagoId['max'])) {
                $this->addUsingAlias(FacturaPeer::TIPO_PAGO_ID, $tipoPagoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturaPeer::TIPO_PAGO_ID, $tipoPagoId, $comparison);
    }

    /**
     * Filter the query on the activo column
     *
     * Example usage:
     * <code>
     * $query->filterByActivo(true); // WHERE activo = true
     * $query->filterByActivo('yes'); // WHERE activo = true
     * </code>
     *
     * @param     boolean|string $activo The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByActivo($activo = null, $comparison = null)
    {
        if (is_string($activo)) {
            $activo = in_array(strtolower($activo), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(FacturaPeer::ACTIVO, $activo, $comparison);
    }

    /**
     * Filter the query on the fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByFecha('fooValue');   // WHERE fecha = 'fooValue'
     * $query->filterByFecha('%fooValue%'); // WHERE fecha LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fecha The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByFecha($fecha = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fecha)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fecha)) {
                $fecha = str_replace('*', '%', $fecha);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturaPeer::FECHA, $fecha, $comparison);
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
     * @return FacturaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FacturaPeer::SERIE, $serie, $comparison);
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
     * @return FacturaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FacturaPeer::DOCUMENTO, $documento, $comparison);
    }

    /**
     * Filter the query by a related Cliente object
     *
     * @param   Cliente|PropelObjectCollection $cliente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   FacturaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByCliente($cliente, $comparison = null)
    {
        if ($cliente instanceof Cliente) {
            return $this
                ->addUsingAlias(FacturaPeer::CLIENTE_ID, $cliente->getId(), $comparison);
        } elseif ($cliente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FacturaPeer::CLIENTE_ID, $cliente->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return FacturaQuery The current query, for fluid interface
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
     * Filter the query by a related TipoPago object
     *
     * @param   TipoPago|PropelObjectCollection $tipoPago The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   FacturaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTipoPago($tipoPago, $comparison = null)
    {
        if ($tipoPago instanceof TipoPago) {
            return $this
                ->addUsingAlias(FacturaPeer::TIPO_PAGO_ID, $tipoPago->getId(), $comparison);
        } elseif ($tipoPago instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FacturaPeer::TIPO_PAGO_ID, $tipoPago->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return FacturaQuery The current query, for fluid interface
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
     * Filter the query by a related FacturaDetalle object
     *
     * @param   FacturaDetalle|PropelObjectCollection $facturaDetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   FacturaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByFacturaDetalle($facturaDetalle, $comparison = null)
    {
        if ($facturaDetalle instanceof FacturaDetalle) {
            return $this
                ->addUsingAlias(FacturaPeer::ID, $facturaDetalle->getFacturaId(), $comparison);
        } elseif ($facturaDetalle instanceof PropelObjectCollection) {
            return $this
                ->useFacturaDetalleQuery()
                ->filterByPrimaryKeys($facturaDetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFacturaDetalle() only accepts arguments of type FacturaDetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FacturaDetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function joinFacturaDetalle($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FacturaDetalle');

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
            $this->addJoinObject($join, 'FacturaDetalle');
        }

        return $this;
    }

    /**
     * Use the FacturaDetalle relation FacturaDetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FacturaDetalleQuery A secondary query class using the current class as primary query
     */
    public function useFacturaDetalleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFacturaDetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FacturaDetalle', 'FacturaDetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Factura $factura Object to remove from the list of results
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function prune($factura = null)
    {
        if ($factura) {
            $this->addUsingAlias(FacturaPeer::ID, $factura->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
