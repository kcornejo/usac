<?php


/**
 * Base class that represents a query for the 'bitacora_cambios' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * 11/09/15 06:03:43
 *
 * @method BitacoraCambiosQuery orderById($order = Criteria::ASC) Order by the id column
 * @method BitacoraCambiosQuery orderByModelo($order = Criteria::ASC) Order by the modelo column
 * @method BitacoraCambiosQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method BitacoraCambiosQuery orderByIp($order = Criteria::ASC) Order by the ip column
 * @method BitacoraCambiosQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method BitacoraCambiosQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method BitacoraCambiosQuery orderByCreatedBy($order = Criteria::ASC) Order by the created_by column
 * @method BitacoraCambiosQuery orderByUpdatedBy($order = Criteria::ASC) Order by the updated_by column
 *
 * @method BitacoraCambiosQuery groupById() Group by the id column
 * @method BitacoraCambiosQuery groupByModelo() Group by the modelo column
 * @method BitacoraCambiosQuery groupByDescripcion() Group by the descripcion column
 * @method BitacoraCambiosQuery groupByIp() Group by the ip column
 * @method BitacoraCambiosQuery groupByCreatedAt() Group by the created_at column
 * @method BitacoraCambiosQuery groupByUpdatedAt() Group by the updated_at column
 * @method BitacoraCambiosQuery groupByCreatedBy() Group by the created_by column
 * @method BitacoraCambiosQuery groupByUpdatedBy() Group by the updated_by column
 *
 * @method BitacoraCambiosQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method BitacoraCambiosQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method BitacoraCambiosQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method BitacoraCambios findOne(PropelPDO $con = null) Return the first BitacoraCambios matching the query
 * @method BitacoraCambios findOneOrCreate(PropelPDO $con = null) Return the first BitacoraCambios matching the query, or a new BitacoraCambios object populated from the query conditions when no match is found
 *
 * @method BitacoraCambios findOneById(int $id) Return the first BitacoraCambios filtered by the id column
 * @method BitacoraCambios findOneByModelo(string $modelo) Return the first BitacoraCambios filtered by the modelo column
 * @method BitacoraCambios findOneByDescripcion(string $descripcion) Return the first BitacoraCambios filtered by the descripcion column
 * @method BitacoraCambios findOneByIp(string $ip) Return the first BitacoraCambios filtered by the ip column
 * @method BitacoraCambios findOneByCreatedAt(string $created_at) Return the first BitacoraCambios filtered by the created_at column
 * @method BitacoraCambios findOneByUpdatedAt(string $updated_at) Return the first BitacoraCambios filtered by the updated_at column
 * @method BitacoraCambios findOneByCreatedBy(string $created_by) Return the first BitacoraCambios filtered by the created_by column
 * @method BitacoraCambios findOneByUpdatedBy(string $updated_by) Return the first BitacoraCambios filtered by the updated_by column
 *
 * @method array findById(int $id) Return BitacoraCambios objects filtered by the id column
 * @method array findByModelo(string $modelo) Return BitacoraCambios objects filtered by the modelo column
 * @method array findByDescripcion(string $descripcion) Return BitacoraCambios objects filtered by the descripcion column
 * @method array findByIp(string $ip) Return BitacoraCambios objects filtered by the ip column
 * @method array findByCreatedAt(string $created_at) Return BitacoraCambios objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return BitacoraCambios objects filtered by the updated_at column
 * @method array findByCreatedBy(string $created_by) Return BitacoraCambios objects filtered by the created_by column
 * @method array findByUpdatedBy(string $updated_by) Return BitacoraCambios objects filtered by the updated_by column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseBitacoraCambiosQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseBitacoraCambiosQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'BitacoraCambios', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new BitacoraCambiosQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     BitacoraCambiosQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return BitacoraCambiosQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof BitacoraCambiosQuery) {
            return $criteria;
        }
        $query = new BitacoraCambiosQuery();
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
     * @return   BitacoraCambios|BitacoraCambios[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = BitacoraCambiosPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(BitacoraCambiosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   BitacoraCambios A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `MODELO`, `DESCRIPCION`, `IP`, `CREATED_AT`, `UPDATED_AT`, `CREATED_BY`, `UPDATED_BY` FROM `bitacora_cambios` WHERE `ID` = :p0';
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
            $obj = new BitacoraCambios();
            $obj->hydrate($row);
            BitacoraCambiosPeer::addInstanceToPool($obj, (string) $key);
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
     * @return BitacoraCambios|BitacoraCambios[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|BitacoraCambios[]|mixed the list of results, formatted by the current formatter
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
     * @return BitacoraCambiosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(BitacoraCambiosPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return BitacoraCambiosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(BitacoraCambiosPeer::ID, $keys, Criteria::IN);
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
     * @return BitacoraCambiosQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(BitacoraCambiosPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the modelo column
     *
     * Example usage:
     * <code>
     * $query->filterByModelo('fooValue');   // WHERE modelo = 'fooValue'
     * $query->filterByModelo('%fooValue%'); // WHERE modelo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modelo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BitacoraCambiosQuery The current query, for fluid interface
     */
    public function filterByModelo($modelo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modelo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modelo)) {
                $modelo = str_replace('*', '%', $modelo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BitacoraCambiosPeer::MODELO, $modelo, $comparison);
    }

    /**
     * Filter the query on the descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByDescripcion('fooValue');   // WHERE descripcion = 'fooValue'
     * $query->filterByDescripcion('%fooValue%'); // WHERE descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BitacoraCambiosQuery The current query, for fluid interface
     */
    public function filterByDescripcion($descripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descripcion)) {
                $descripcion = str_replace('*', '%', $descripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BitacoraCambiosPeer::DESCRIPCION, $descripcion, $comparison);
    }

    /**
     * Filter the query on the ip column
     *
     * Example usage:
     * <code>
     * $query->filterByIp('fooValue');   // WHERE ip = 'fooValue'
     * $query->filterByIp('%fooValue%'); // WHERE ip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ip The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BitacoraCambiosQuery The current query, for fluid interface
     */
    public function filterByIp($ip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ip)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ip)) {
                $ip = str_replace('*', '%', $ip);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BitacoraCambiosPeer::IP, $ip, $comparison);
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
     * @return BitacoraCambiosQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(BitacoraCambiosPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(BitacoraCambiosPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BitacoraCambiosPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return BitacoraCambiosQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(BitacoraCambiosPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(BitacoraCambiosPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BitacoraCambiosPeer::UPDATED_AT, $updatedAt, $comparison);
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
     * @return BitacoraCambiosQuery The current query, for fluid interface
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

        return $this->addUsingAlias(BitacoraCambiosPeer::CREATED_BY, $createdBy, $comparison);
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
     * @return BitacoraCambiosQuery The current query, for fluid interface
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

        return $this->addUsingAlias(BitacoraCambiosPeer::UPDATED_BY, $updatedBy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   BitacoraCambios $bitacoraCambios Object to remove from the list of results
     *
     * @return BitacoraCambiosQuery The current query, for fluid interface
     */
    public function prune($bitacoraCambios = null)
    {
        if ($bitacoraCambios) {
            $this->addUsingAlias(BitacoraCambiosPeer::ID, $bitacoraCambios->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
