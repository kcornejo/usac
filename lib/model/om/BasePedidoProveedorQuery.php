<?php


/**
 * Base class that represents a query for the 'pedido_proveedor' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * 11/12/15 08:06:30
 *
 * @method PedidoProveedorQuery orderById($order = Criteria::ASC) Order by the id column
 * @method PedidoProveedorQuery orderByFecha($order = Criteria::ASC) Order by the fecha column
 * @method PedidoProveedorQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method PedidoProveedorQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 * @method PedidoProveedorQuery orderByUsuarioId($order = Criteria::ASC) Order by the usuario_id column
 * @method PedidoProveedorQuery orderByProveedorId($order = Criteria::ASC) Order by the proveedor_id column
 * @method PedidoProveedorQuery orderBySerie($order = Criteria::ASC) Order by the serie column
 * @method PedidoProveedorQuery orderByDocumento($order = Criteria::ASC) Order by the documento column
 *
 * @method PedidoProveedorQuery groupById() Group by the id column
 * @method PedidoProveedorQuery groupByFecha() Group by the fecha column
 * @method PedidoProveedorQuery groupByDescripcion() Group by the descripcion column
 * @method PedidoProveedorQuery groupByEstado() Group by the estado column
 * @method PedidoProveedorQuery groupByUsuarioId() Group by the usuario_id column
 * @method PedidoProveedorQuery groupByProveedorId() Group by the proveedor_id column
 * @method PedidoProveedorQuery groupBySerie() Group by the serie column
 * @method PedidoProveedorQuery groupByDocumento() Group by the documento column
 *
 * @method PedidoProveedorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PedidoProveedorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PedidoProveedorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PedidoProveedorQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method PedidoProveedorQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method PedidoProveedorQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method PedidoProveedorQuery leftJoinProveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedor relation
 * @method PedidoProveedorQuery rightJoinProveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedor relation
 * @method PedidoProveedorQuery innerJoinProveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedor relation
 *
 * @method PedidoProveedorQuery leftJoinDetallePedidoProveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the DetallePedidoProveedor relation
 * @method PedidoProveedorQuery rightJoinDetallePedidoProveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DetallePedidoProveedor relation
 * @method PedidoProveedorQuery innerJoinDetallePedidoProveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the DetallePedidoProveedor relation
 *
 * @method PedidoProveedor findOne(PropelPDO $con = null) Return the first PedidoProveedor matching the query
 * @method PedidoProveedor findOneOrCreate(PropelPDO $con = null) Return the first PedidoProveedor matching the query, or a new PedidoProveedor object populated from the query conditions when no match is found
 *
 * @method PedidoProveedor findOneById(int $id) Return the first PedidoProveedor filtered by the id column
 * @method PedidoProveedor findOneByFecha(string $fecha) Return the first PedidoProveedor filtered by the fecha column
 * @method PedidoProveedor findOneByDescripcion(string $descripcion) Return the first PedidoProveedor filtered by the descripcion column
 * @method PedidoProveedor findOneByEstado(string $estado) Return the first PedidoProveedor filtered by the estado column
 * @method PedidoProveedor findOneByUsuarioId(int $usuario_id) Return the first PedidoProveedor filtered by the usuario_id column
 * @method PedidoProveedor findOneByProveedorId(int $proveedor_id) Return the first PedidoProveedor filtered by the proveedor_id column
 * @method PedidoProveedor findOneBySerie(string $serie) Return the first PedidoProveedor filtered by the serie column
 * @method PedidoProveedor findOneByDocumento(string $documento) Return the first PedidoProveedor filtered by the documento column
 *
 * @method array findById(int $id) Return PedidoProveedor objects filtered by the id column
 * @method array findByFecha(string $fecha) Return PedidoProveedor objects filtered by the fecha column
 * @method array findByDescripcion(string $descripcion) Return PedidoProveedor objects filtered by the descripcion column
 * @method array findByEstado(string $estado) Return PedidoProveedor objects filtered by the estado column
 * @method array findByUsuarioId(int $usuario_id) Return PedidoProveedor objects filtered by the usuario_id column
 * @method array findByProveedorId(int $proveedor_id) Return PedidoProveedor objects filtered by the proveedor_id column
 * @method array findBySerie(string $serie) Return PedidoProveedor objects filtered by the serie column
 * @method array findByDocumento(string $documento) Return PedidoProveedor objects filtered by the documento column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePedidoProveedorQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePedidoProveedorQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'PedidoProveedor', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PedidoProveedorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     PedidoProveedorQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PedidoProveedorQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PedidoProveedorQuery) {
            return $criteria;
        }
        $query = new PedidoProveedorQuery();
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
     * @return   PedidoProveedor|PedidoProveedor[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PedidoProveedorPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PedidoProveedorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   PedidoProveedor A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `FECHA`, `DESCRIPCION`, `ESTADO`, `USUARIO_ID`, `PROVEEDOR_ID`, `SERIE`, `DOCUMENTO` FROM `pedido_proveedor` WHERE `ID` = :p0';
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
            $obj = new PedidoProveedor();
            $obj->hydrate($row);
            PedidoProveedorPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PedidoProveedor|PedidoProveedor[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PedidoProveedor[]|mixed the list of results, formatted by the current formatter
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
     * @return PedidoProveedorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PedidoProveedorPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PedidoProveedorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PedidoProveedorPeer::ID, $keys, Criteria::IN);
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
     * @return PedidoProveedorQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(PedidoProveedorPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByFecha('2011-03-14'); // WHERE fecha = '2011-03-14'
     * $query->filterByFecha('now'); // WHERE fecha = '2011-03-14'
     * $query->filterByFecha(array('max' => 'yesterday')); // WHERE fecha > '2011-03-13'
     * </code>
     *
     * @param     mixed $fecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidoProveedorQuery The current query, for fluid interface
     */
    public function filterByFecha($fecha = null, $comparison = null)
    {
        if (is_array($fecha)) {
            $useMinMax = false;
            if (isset($fecha['min'])) {
                $this->addUsingAlias(PedidoProveedorPeer::FECHA, $fecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecha['max'])) {
                $this->addUsingAlias(PedidoProveedorPeer::FECHA, $fecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidoProveedorPeer::FECHA, $fecha, $comparison);
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
     * @return PedidoProveedorQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PedidoProveedorPeer::DESCRIPCION, $descripcion, $comparison);
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
     * @return PedidoProveedorQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PedidoProveedorPeer::ESTADO, $estado, $comparison);
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
     * @return PedidoProveedorQuery The current query, for fluid interface
     */
    public function filterByUsuarioId($usuarioId = null, $comparison = null)
    {
        if (is_array($usuarioId)) {
            $useMinMax = false;
            if (isset($usuarioId['min'])) {
                $this->addUsingAlias(PedidoProveedorPeer::USUARIO_ID, $usuarioId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usuarioId['max'])) {
                $this->addUsingAlias(PedidoProveedorPeer::USUARIO_ID, $usuarioId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidoProveedorPeer::USUARIO_ID, $usuarioId, $comparison);
    }

    /**
     * Filter the query on the proveedor_id column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorId(1234); // WHERE proveedor_id = 1234
     * $query->filterByProveedorId(array(12, 34)); // WHERE proveedor_id IN (12, 34)
     * $query->filterByProveedorId(array('min' => 12)); // WHERE proveedor_id > 12
     * </code>
     *
     * @see       filterByProveedor()
     *
     * @param     mixed $proveedorId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidoProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorId($proveedorId = null, $comparison = null)
    {
        if (is_array($proveedorId)) {
            $useMinMax = false;
            if (isset($proveedorId['min'])) {
                $this->addUsingAlias(PedidoProveedorPeer::PROVEEDOR_ID, $proveedorId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($proveedorId['max'])) {
                $this->addUsingAlias(PedidoProveedorPeer::PROVEEDOR_ID, $proveedorId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidoProveedorPeer::PROVEEDOR_ID, $proveedorId, $comparison);
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
     * @return PedidoProveedorQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PedidoProveedorPeer::SERIE, $serie, $comparison);
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
     * @return PedidoProveedorQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PedidoProveedorPeer::DOCUMENTO, $documento, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PedidoProveedorQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(PedidoProveedorPeer::USUARIO_ID, $usuario->getId(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PedidoProveedorPeer::USUARIO_ID, $usuario->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return PedidoProveedorQuery The current query, for fluid interface
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
     * Filter the query by a related Proveedor object
     *
     * @param   Proveedor|PropelObjectCollection $proveedor The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PedidoProveedorQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByProveedor($proveedor, $comparison = null)
    {
        if ($proveedor instanceof Proveedor) {
            return $this
                ->addUsingAlias(PedidoProveedorPeer::PROVEEDOR_ID, $proveedor->getId(), $comparison);
        } elseif ($proveedor instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PedidoProveedorPeer::PROVEEDOR_ID, $proveedor->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByProveedor() only accepts arguments of type Proveedor or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Proveedor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PedidoProveedorQuery The current query, for fluid interface
     */
    public function joinProveedor($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Proveedor');

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
            $this->addJoinObject($join, 'Proveedor');
        }

        return $this;
    }

    /**
     * Use the Proveedor relation Proveedor object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProveedorQuery A secondary query class using the current class as primary query
     */
    public function useProveedorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinProveedor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Proveedor', 'ProveedorQuery');
    }

    /**
     * Filter the query by a related DetallePedidoProveedor object
     *
     * @param   DetallePedidoProveedor|PropelObjectCollection $detallePedidoProveedor  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PedidoProveedorQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByDetallePedidoProveedor($detallePedidoProveedor, $comparison = null)
    {
        if ($detallePedidoProveedor instanceof DetallePedidoProveedor) {
            return $this
                ->addUsingAlias(PedidoProveedorPeer::ID, $detallePedidoProveedor->getPedidoProveedorId(), $comparison);
        } elseif ($detallePedidoProveedor instanceof PropelObjectCollection) {
            return $this
                ->useDetallePedidoProveedorQuery()
                ->filterByPrimaryKeys($detallePedidoProveedor->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDetallePedidoProveedor() only accepts arguments of type DetallePedidoProveedor or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DetallePedidoProveedor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PedidoProveedorQuery The current query, for fluid interface
     */
    public function joinDetallePedidoProveedor($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DetallePedidoProveedor');

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
            $this->addJoinObject($join, 'DetallePedidoProveedor');
        }

        return $this;
    }

    /**
     * Use the DetallePedidoProveedor relation DetallePedidoProveedor object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DetallePedidoProveedorQuery A secondary query class using the current class as primary query
     */
    public function useDetallePedidoProveedorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinDetallePedidoProveedor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DetallePedidoProveedor', 'DetallePedidoProveedorQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   PedidoProveedor $pedidoProveedor Object to remove from the list of results
     *
     * @return PedidoProveedorQuery The current query, for fluid interface
     */
    public function prune($pedidoProveedor = null)
    {
        if ($pedidoProveedor) {
            $this->addUsingAlias(PedidoProveedorPeer::ID, $pedidoProveedor->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
