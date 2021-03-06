<?php


/**
 * Base class that represents a query for the 'turno' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * 10/31/15 22:35:50
 *
 * @method TurnoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method TurnoQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 * @method TurnoQuery orderByNoTurno($order = Criteria::ASC) Order by the no_turno column
 * @method TurnoQuery orderByJugadorMesaId($order = Criteria::ASC) Order by the jugador_mesa_id column
 * @method TurnoQuery orderByMano($order = Criteria::ASC) Order by the mano column
 *
 * @method TurnoQuery groupById() Group by the id column
 * @method TurnoQuery groupByEstado() Group by the estado column
 * @method TurnoQuery groupByNoTurno() Group by the no_turno column
 * @method TurnoQuery groupByJugadorMesaId() Group by the jugador_mesa_id column
 * @method TurnoQuery groupByMano() Group by the mano column
 *
 * @method TurnoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TurnoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TurnoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TurnoQuery leftJoinJugadorMesa($relationAlias = null) Adds a LEFT JOIN clause to the query using the JugadorMesa relation
 * @method TurnoQuery rightJoinJugadorMesa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the JugadorMesa relation
 * @method TurnoQuery innerJoinJugadorMesa($relationAlias = null) Adds a INNER JOIN clause to the query using the JugadorMesa relation
 *
 * @method Turno findOne(PropelPDO $con = null) Return the first Turno matching the query
 * @method Turno findOneOrCreate(PropelPDO $con = null) Return the first Turno matching the query, or a new Turno object populated from the query conditions when no match is found
 *
 * @method Turno findOneById(int $id) Return the first Turno filtered by the id column
 * @method Turno findOneByEstado(string $estado) Return the first Turno filtered by the estado column
 * @method Turno findOneByNoTurno(int $no_turno) Return the first Turno filtered by the no_turno column
 * @method Turno findOneByJugadorMesaId(int $jugador_mesa_id) Return the first Turno filtered by the jugador_mesa_id column
 * @method Turno findOneByMano(string $mano) Return the first Turno filtered by the mano column
 *
 * @method array findById(int $id) Return Turno objects filtered by the id column
 * @method array findByEstado(string $estado) Return Turno objects filtered by the estado column
 * @method array findByNoTurno(int $no_turno) Return Turno objects filtered by the no_turno column
 * @method array findByJugadorMesaId(int $jugador_mesa_id) Return Turno objects filtered by the jugador_mesa_id column
 * @method array findByMano(string $mano) Return Turno objects filtered by the mano column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTurnoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTurnoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Turno', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TurnoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     TurnoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TurnoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TurnoQuery) {
            return $criteria;
        }
        $query = new TurnoQuery();
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
     * @return   Turno|Turno[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TurnoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TurnoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Turno A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ESTADO`, `NO_TURNO`, `JUGADOR_MESA_ID`, `MANO` FROM `turno` WHERE `ID` = :p0';
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
            $obj = new Turno();
            $obj->hydrate($row);
            TurnoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Turno|Turno[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Turno[]|mixed the list of results, formatted by the current formatter
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
     * @return TurnoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TurnoPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TurnoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TurnoPeer::ID, $keys, Criteria::IN);
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
     * @return TurnoQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(TurnoPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the estado column
     *
     * Example usage:
     * <code>
     * $query->filterByEstado('fooValue');   // WHERE estado = 'fooValue'
     * $query->filterByEstado('%fooValue%'); // WHERE estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $estado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TurnoQuery The current query, for fluid interface
     */
    public function filterByEstado($estado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($estado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $estado)) {
                $estado = str_replace('*', '%', $estado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TurnoPeer::ESTADO, $estado, $comparison);
    }

    /**
     * Filter the query on the no_turno column
     *
     * Example usage:
     * <code>
     * $query->filterByNoTurno(1234); // WHERE no_turno = 1234
     * $query->filterByNoTurno(array(12, 34)); // WHERE no_turno IN (12, 34)
     * $query->filterByNoTurno(array('min' => 12)); // WHERE no_turno > 12
     * </code>
     *
     * @param     mixed $noTurno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TurnoQuery The current query, for fluid interface
     */
    public function filterByNoTurno($noTurno = null, $comparison = null)
    {
        if (is_array($noTurno)) {
            $useMinMax = false;
            if (isset($noTurno['min'])) {
                $this->addUsingAlias(TurnoPeer::NO_TURNO, $noTurno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($noTurno['max'])) {
                $this->addUsingAlias(TurnoPeer::NO_TURNO, $noTurno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TurnoPeer::NO_TURNO, $noTurno, $comparison);
    }

    /**
     * Filter the query on the jugador_mesa_id column
     *
     * Example usage:
     * <code>
     * $query->filterByJugadorMesaId(1234); // WHERE jugador_mesa_id = 1234
     * $query->filterByJugadorMesaId(array(12, 34)); // WHERE jugador_mesa_id IN (12, 34)
     * $query->filterByJugadorMesaId(array('min' => 12)); // WHERE jugador_mesa_id > 12
     * </code>
     *
     * @see       filterByJugadorMesa()
     *
     * @param     mixed $jugadorMesaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TurnoQuery The current query, for fluid interface
     */
    public function filterByJugadorMesaId($jugadorMesaId = null, $comparison = null)
    {
        if (is_array($jugadorMesaId)) {
            $useMinMax = false;
            if (isset($jugadorMesaId['min'])) {
                $this->addUsingAlias(TurnoPeer::JUGADOR_MESA_ID, $jugadorMesaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jugadorMesaId['max'])) {
                $this->addUsingAlias(TurnoPeer::JUGADOR_MESA_ID, $jugadorMesaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TurnoPeer::JUGADOR_MESA_ID, $jugadorMesaId, $comparison);
    }

    /**
     * Filter the query on the mano column
     *
     * Example usage:
     * <code>
     * $query->filterByMano('fooValue');   // WHERE mano = 'fooValue'
     * $query->filterByMano('%fooValue%'); // WHERE mano LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mano The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TurnoQuery The current query, for fluid interface
     */
    public function filterByMano($mano = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mano)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mano)) {
                $mano = str_replace('*', '%', $mano);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TurnoPeer::MANO, $mano, $comparison);
    }

    /**
     * Filter the query by a related JugadorMesa object
     *
     * @param   JugadorMesa|PropelObjectCollection $jugadorMesa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TurnoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByJugadorMesa($jugadorMesa, $comparison = null)
    {
        if ($jugadorMesa instanceof JugadorMesa) {
            return $this
                ->addUsingAlias(TurnoPeer::JUGADOR_MESA_ID, $jugadorMesa->getId(), $comparison);
        } elseif ($jugadorMesa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TurnoPeer::JUGADOR_MESA_ID, $jugadorMesa->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return TurnoQuery The current query, for fluid interface
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
     * @param   Turno $turno Object to remove from the list of results
     *
     * @return TurnoQuery The current query, for fluid interface
     */
    public function prune($turno = null)
    {
        if ($turno) {
            $this->addUsingAlias(TurnoPeer::ID, $turno->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
