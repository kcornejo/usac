<?php


/**
 * Base class that represents a query for the 'jugador' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * 10/31/15 22:35:49
 *
 * @method JugadorQuery orderById($order = Criteria::ASC) Order by the id column
 * @method JugadorQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method JugadorQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method JugadorQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method JugadorQuery orderByCreatedBy($order = Criteria::ASC) Order by the created_by column
 * @method JugadorQuery orderByUpdatedBy($order = Criteria::ASC) Order by the updated_by column
 *
 * @method JugadorQuery groupById() Group by the id column
 * @method JugadorQuery groupByNombre() Group by the nombre column
 * @method JugadorQuery groupByCreatedAt() Group by the created_at column
 * @method JugadorQuery groupByUpdatedAt() Group by the updated_at column
 * @method JugadorQuery groupByCreatedBy() Group by the created_by column
 * @method JugadorQuery groupByUpdatedBy() Group by the updated_by column
 *
 * @method JugadorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method JugadorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method JugadorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method JugadorQuery leftJoinJugadorMesa($relationAlias = null) Adds a LEFT JOIN clause to the query using the JugadorMesa relation
 * @method JugadorQuery rightJoinJugadorMesa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the JugadorMesa relation
 * @method JugadorQuery innerJoinJugadorMesa($relationAlias = null) Adds a INNER JOIN clause to the query using the JugadorMesa relation
 *
 * @method Jugador findOne(PropelPDO $con = null) Return the first Jugador matching the query
 * @method Jugador findOneOrCreate(PropelPDO $con = null) Return the first Jugador matching the query, or a new Jugador object populated from the query conditions when no match is found
 *
 * @method Jugador findOneById(int $id) Return the first Jugador filtered by the id column
 * @method Jugador findOneByNombre(string $nombre) Return the first Jugador filtered by the nombre column
 * @method Jugador findOneByCreatedAt(string $created_at) Return the first Jugador filtered by the created_at column
 * @method Jugador findOneByUpdatedAt(string $updated_at) Return the first Jugador filtered by the updated_at column
 * @method Jugador findOneByCreatedBy(string $created_by) Return the first Jugador filtered by the created_by column
 * @method Jugador findOneByUpdatedBy(string $updated_by) Return the first Jugador filtered by the updated_by column
 *
 * @method array findById(int $id) Return Jugador objects filtered by the id column
 * @method array findByNombre(string $nombre) Return Jugador objects filtered by the nombre column
 * @method array findByCreatedAt(string $created_at) Return Jugador objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return Jugador objects filtered by the updated_at column
 * @method array findByCreatedBy(string $created_by) Return Jugador objects filtered by the created_by column
 * @method array findByUpdatedBy(string $updated_by) Return Jugador objects filtered by the updated_by column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseJugadorQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseJugadorQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Jugador', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new JugadorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     JugadorQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return JugadorQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof JugadorQuery) {
            return $criteria;
        }
        $query = new JugadorQuery();
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
     * @return   Jugador|Jugador[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = JugadorPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(JugadorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Jugador A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `NOMBRE`, `CREATED_AT`, `UPDATED_AT`, `CREATED_BY`, `UPDATED_BY` FROM `jugador` WHERE `ID` = :p0';
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
            $obj = new Jugador();
            $obj->hydrate($row);
            JugadorPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Jugador|Jugador[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Jugador[]|mixed the list of results, formatted by the current formatter
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
     * @return JugadorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(JugadorPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return JugadorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(JugadorPeer::ID, $keys, Criteria::IN);
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
     * @return JugadorQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(JugadorPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByNombre('fooValue');   // WHERE nombre = 'fooValue'
     * $query->filterByNombre('%fooValue%'); // WHERE nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JugadorQuery The current query, for fluid interface
     */
    public function filterByNombre($nombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombre)) {
                $nombre = str_replace('*', '%', $nombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JugadorPeer::NOMBRE, $nombre, $comparison);
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
     * @return JugadorQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(JugadorPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(JugadorPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JugadorPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return JugadorQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(JugadorPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(JugadorPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JugadorPeer::UPDATED_AT, $updatedAt, $comparison);
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
     * @return JugadorQuery The current query, for fluid interface
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

        return $this->addUsingAlias(JugadorPeer::CREATED_BY, $createdBy, $comparison);
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
     * @return JugadorQuery The current query, for fluid interface
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

        return $this->addUsingAlias(JugadorPeer::UPDATED_BY, $updatedBy, $comparison);
    }

    /**
     * Filter the query by a related JugadorMesa object
     *
     * @param   JugadorMesa|PropelObjectCollection $jugadorMesa  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   JugadorQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByJugadorMesa($jugadorMesa, $comparison = null)
    {
        if ($jugadorMesa instanceof JugadorMesa) {
            return $this
                ->addUsingAlias(JugadorPeer::ID, $jugadorMesa->getJugadorId(), $comparison);
        } elseif ($jugadorMesa instanceof PropelObjectCollection) {
            return $this
                ->useJugadorMesaQuery()
                ->filterByPrimaryKeys($jugadorMesa->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByJugadorMesa() only accepts arguments of type JugadorMesa or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the JugadorMesa relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return JugadorQuery The current query, for fluid interface
     */
    public function joinJugadorMesa($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('JugadorMesa');

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
            $this->addJoinObject($join, 'JugadorMesa');
        }

        return $this;
    }

    /**
     * Use the JugadorMesa relation JugadorMesa object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   JugadorMesaQuery A secondary query class using the current class as primary query
     */
    public function useJugadorMesaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinJugadorMesa($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'JugadorMesa', 'JugadorMesaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Jugador $jugador Object to remove from the list of results
     *
     * @return JugadorQuery The current query, for fluid interface
     */
    public function prune($jugador = null)
    {
        if ($jugador) {
            $this->addUsingAlias(JugadorPeer::ID, $jugador->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
