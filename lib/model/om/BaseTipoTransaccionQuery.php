<?php


/**
 * Base class that represents a query for the 'tipo_transaccion' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * 11/09/15 23:08:07
 *
 * @method TipoTransaccionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method TipoTransaccionQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method TipoTransaccionQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method TipoTransaccionQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method TipoTransaccionQuery orderByCreatedBy($order = Criteria::ASC) Order by the created_by column
 * @method TipoTransaccionQuery orderByUpdatedBy($order = Criteria::ASC) Order by the updated_by column
 *
 * @method TipoTransaccionQuery groupById() Group by the id column
 * @method TipoTransaccionQuery groupByDescripcion() Group by the descripcion column
 * @method TipoTransaccionQuery groupByCreatedAt() Group by the created_at column
 * @method TipoTransaccionQuery groupByUpdatedAt() Group by the updated_at column
 * @method TipoTransaccionQuery groupByCreatedBy() Group by the created_by column
 * @method TipoTransaccionQuery groupByUpdatedBy() Group by the updated_by column
 *
 * @method TipoTransaccionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TipoTransaccionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TipoTransaccionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TipoTransaccionQuery leftJoinTransaccion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Transaccion relation
 * @method TipoTransaccionQuery rightJoinTransaccion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Transaccion relation
 * @method TipoTransaccionQuery innerJoinTransaccion($relationAlias = null) Adds a INNER JOIN clause to the query using the Transaccion relation
 *
 * @method TipoTransaccion findOne(PropelPDO $con = null) Return the first TipoTransaccion matching the query
 * @method TipoTransaccion findOneOrCreate(PropelPDO $con = null) Return the first TipoTransaccion matching the query, or a new TipoTransaccion object populated from the query conditions when no match is found
 *
 * @method TipoTransaccion findOneById(int $id) Return the first TipoTransaccion filtered by the id column
 * @method TipoTransaccion findOneByDescripcion(string $descripcion) Return the first TipoTransaccion filtered by the descripcion column
 * @method TipoTransaccion findOneByCreatedAt(string $created_at) Return the first TipoTransaccion filtered by the created_at column
 * @method TipoTransaccion findOneByUpdatedAt(string $updated_at) Return the first TipoTransaccion filtered by the updated_at column
 * @method TipoTransaccion findOneByCreatedBy(string $created_by) Return the first TipoTransaccion filtered by the created_by column
 * @method TipoTransaccion findOneByUpdatedBy(string $updated_by) Return the first TipoTransaccion filtered by the updated_by column
 *
 * @method array findById(int $id) Return TipoTransaccion objects filtered by the id column
 * @method array findByDescripcion(string $descripcion) Return TipoTransaccion objects filtered by the descripcion column
 * @method array findByCreatedAt(string $created_at) Return TipoTransaccion objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return TipoTransaccion objects filtered by the updated_at column
 * @method array findByCreatedBy(string $created_by) Return TipoTransaccion objects filtered by the created_by column
 * @method array findByUpdatedBy(string $updated_by) Return TipoTransaccion objects filtered by the updated_by column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTipoTransaccionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTipoTransaccionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'TipoTransaccion', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TipoTransaccionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     TipoTransaccionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TipoTransaccionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TipoTransaccionQuery) {
            return $criteria;
        }
        $query = new TipoTransaccionQuery();
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
     * @return   TipoTransaccion|TipoTransaccion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TipoTransaccionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TipoTransaccionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   TipoTransaccion A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `DESCRIPCION`, `CREATED_AT`, `UPDATED_AT`, `CREATED_BY`, `UPDATED_BY` FROM `tipo_transaccion` WHERE `ID` = :p0';
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
            $obj = new TipoTransaccion();
            $obj->hydrate($row);
            TipoTransaccionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TipoTransaccion|TipoTransaccion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TipoTransaccion[]|mixed the list of results, formatted by the current formatter
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
     * @return TipoTransaccionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TipoTransaccionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TipoTransaccionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TipoTransaccionPeer::ID, $keys, Criteria::IN);
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
     * @return TipoTransaccionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(TipoTransaccionPeer::ID, $id, $comparison);
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
     * @return TipoTransaccionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TipoTransaccionPeer::DESCRIPCION, $descripcion, $comparison);
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
     * @return TipoTransaccionQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(TipoTransaccionPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(TipoTransaccionPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TipoTransaccionPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return TipoTransaccionQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(TipoTransaccionPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(TipoTransaccionPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TipoTransaccionPeer::UPDATED_AT, $updatedAt, $comparison);
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
     * @return TipoTransaccionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TipoTransaccionPeer::CREATED_BY, $createdBy, $comparison);
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
     * @return TipoTransaccionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TipoTransaccionPeer::UPDATED_BY, $updatedBy, $comparison);
    }

    /**
     * Filter the query by a related Transaccion object
     *
     * @param   Transaccion|PropelObjectCollection $transaccion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TipoTransaccionQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTransaccion($transaccion, $comparison = null)
    {
        if ($transaccion instanceof Transaccion) {
            return $this
                ->addUsingAlias(TipoTransaccionPeer::ID, $transaccion->getTipoTransaccionId(), $comparison);
        } elseif ($transaccion instanceof PropelObjectCollection) {
            return $this
                ->useTransaccionQuery()
                ->filterByPrimaryKeys($transaccion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTransaccion() only accepts arguments of type Transaccion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Transaccion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TipoTransaccionQuery The current query, for fluid interface
     */
    public function joinTransaccion($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Transaccion');

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
            $this->addJoinObject($join, 'Transaccion');
        }

        return $this;
    }

    /**
     * Use the Transaccion relation Transaccion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TransaccionQuery A secondary query class using the current class as primary query
     */
    public function useTransaccionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTransaccion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Transaccion', 'TransaccionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   TipoTransaccion $tipoTransaccion Object to remove from the list of results
     *
     * @return TipoTransaccionQuery The current query, for fluid interface
     */
    public function prune($tipoTransaccion = null)
    {
        if ($tipoTransaccion) {
            $this->addUsingAlias(TipoTransaccionPeer::ID, $tipoTransaccion->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
