<?php


/**
 * Base class that represents a query for the 'detalle_pedido_proveedor' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * 11/12/15 06:27:02
 *
 * @method DetallePedidoProveedorQuery orderById($order = Criteria::ASC) Order by the id column
 * @method DetallePedidoProveedorQuery orderByProductoId($order = Criteria::ASC) Order by the producto_id column
 * @method DetallePedidoProveedorQuery orderByCantidad($order = Criteria::ASC) Order by the cantidad column
 * @method DetallePedidoProveedorQuery orderByPrecio($order = Criteria::ASC) Order by the precio column
 * @method DetallePedidoProveedorQuery orderByPedidoProveedorId($order = Criteria::ASC) Order by the pedido_proveedor_id column
 * @method DetallePedidoProveedorQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 *
 * @method DetallePedidoProveedorQuery groupById() Group by the id column
 * @method DetallePedidoProveedorQuery groupByProductoId() Group by the producto_id column
 * @method DetallePedidoProveedorQuery groupByCantidad() Group by the cantidad column
 * @method DetallePedidoProveedorQuery groupByPrecio() Group by the precio column
 * @method DetallePedidoProveedorQuery groupByPedidoProveedorId() Group by the pedido_proveedor_id column
 * @method DetallePedidoProveedorQuery groupByEstado() Group by the estado column
 *
 * @method DetallePedidoProveedorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DetallePedidoProveedorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DetallePedidoProveedorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DetallePedidoProveedorQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method DetallePedidoProveedorQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method DetallePedidoProveedorQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method DetallePedidoProveedorQuery leftJoinPedidoProveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the PedidoProveedor relation
 * @method DetallePedidoProveedorQuery rightJoinPedidoProveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PedidoProveedor relation
 * @method DetallePedidoProveedorQuery innerJoinPedidoProveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the PedidoProveedor relation
 *
 * @method DetallePedidoProveedor findOne(PropelPDO $con = null) Return the first DetallePedidoProveedor matching the query
 * @method DetallePedidoProveedor findOneOrCreate(PropelPDO $con = null) Return the first DetallePedidoProveedor matching the query, or a new DetallePedidoProveedor object populated from the query conditions when no match is found
 *
 * @method DetallePedidoProveedor findOneById(int $id) Return the first DetallePedidoProveedor filtered by the id column
 * @method DetallePedidoProveedor findOneByProductoId(int $producto_id) Return the first DetallePedidoProveedor filtered by the producto_id column
 * @method DetallePedidoProveedor findOneByCantidad(int $cantidad) Return the first DetallePedidoProveedor filtered by the cantidad column
 * @method DetallePedidoProveedor findOneByPrecio(string $precio) Return the first DetallePedidoProveedor filtered by the precio column
 * @method DetallePedidoProveedor findOneByPedidoProveedorId(int $pedido_proveedor_id) Return the first DetallePedidoProveedor filtered by the pedido_proveedor_id column
 * @method DetallePedidoProveedor findOneByEstado(string $estado) Return the first DetallePedidoProveedor filtered by the estado column
 *
 * @method array findById(int $id) Return DetallePedidoProveedor objects filtered by the id column
 * @method array findByProductoId(int $producto_id) Return DetallePedidoProveedor objects filtered by the producto_id column
 * @method array findByCantidad(int $cantidad) Return DetallePedidoProveedor objects filtered by the cantidad column
 * @method array findByPrecio(string $precio) Return DetallePedidoProveedor objects filtered by the precio column
 * @method array findByPedidoProveedorId(int $pedido_proveedor_id) Return DetallePedidoProveedor objects filtered by the pedido_proveedor_id column
 * @method array findByEstado(string $estado) Return DetallePedidoProveedor objects filtered by the estado column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseDetallePedidoProveedorQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDetallePedidoProveedorQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'DetallePedidoProveedor', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DetallePedidoProveedorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     DetallePedidoProveedorQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DetallePedidoProveedorQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DetallePedidoProveedorQuery) {
            return $criteria;
        }
        $query = new DetallePedidoProveedorQuery();
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
     * @return   DetallePedidoProveedor|DetallePedidoProveedor[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DetallePedidoProveedorPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DetallePedidoProveedorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   DetallePedidoProveedor A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `PRODUCTO_ID`, `CANTIDAD`, `PRECIO`, `PEDIDO_PROVEEDOR_ID`, `ESTADO` FROM `detalle_pedido_proveedor` WHERE `ID` = :p0';
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
            $obj = new DetallePedidoProveedor();
            $obj->hydrate($row);
            DetallePedidoProveedorPeer::addInstanceToPool($obj, (string) $key);
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
     * @return DetallePedidoProveedor|DetallePedidoProveedor[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|DetallePedidoProveedor[]|mixed the list of results, formatted by the current formatter
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
     * @return DetallePedidoProveedorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DetallePedidoProveedorPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DetallePedidoProveedorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DetallePedidoProveedorPeer::ID, $keys, Criteria::IN);
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
     * @return DetallePedidoProveedorQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(DetallePedidoProveedorPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the producto_id column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoId(1234); // WHERE producto_id = 1234
     * $query->filterByProductoId(array(12, 34)); // WHERE producto_id IN (12, 34)
     * $query->filterByProductoId(array('min' => 12)); // WHERE producto_id > 12
     * </code>
     *
     * @see       filterByProducto()
     *
     * @param     mixed $productoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DetallePedidoProveedorQuery The current query, for fluid interface
     */
    public function filterByProductoId($productoId = null, $comparison = null)
    {
        if (is_array($productoId)) {
            $useMinMax = false;
            if (isset($productoId['min'])) {
                $this->addUsingAlias(DetallePedidoProveedorPeer::PRODUCTO_ID, $productoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoId['max'])) {
                $this->addUsingAlias(DetallePedidoProveedorPeer::PRODUCTO_ID, $productoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DetallePedidoProveedorPeer::PRODUCTO_ID, $productoId, $comparison);
    }

    /**
     * Filter the query on the cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByCantidad(1234); // WHERE cantidad = 1234
     * $query->filterByCantidad(array(12, 34)); // WHERE cantidad IN (12, 34)
     * $query->filterByCantidad(array('min' => 12)); // WHERE cantidad > 12
     * </code>
     *
     * @param     mixed $cantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DetallePedidoProveedorQuery The current query, for fluid interface
     */
    public function filterByCantidad($cantidad = null, $comparison = null)
    {
        if (is_array($cantidad)) {
            $useMinMax = false;
            if (isset($cantidad['min'])) {
                $this->addUsingAlias(DetallePedidoProveedorPeer::CANTIDAD, $cantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cantidad['max'])) {
                $this->addUsingAlias(DetallePedidoProveedorPeer::CANTIDAD, $cantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DetallePedidoProveedorPeer::CANTIDAD, $cantidad, $comparison);
    }

    /**
     * Filter the query on the precio column
     *
     * Example usage:
     * <code>
     * $query->filterByPrecio('fooValue');   // WHERE precio = 'fooValue'
     * $query->filterByPrecio('%fooValue%'); // WHERE precio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $precio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DetallePedidoProveedorQuery The current query, for fluid interface
     */
    public function filterByPrecio($precio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($precio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $precio)) {
                $precio = str_replace('*', '%', $precio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DetallePedidoProveedorPeer::PRECIO, $precio, $comparison);
    }

    /**
     * Filter the query on the pedido_proveedor_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPedidoProveedorId(1234); // WHERE pedido_proveedor_id = 1234
     * $query->filterByPedidoProveedorId(array(12, 34)); // WHERE pedido_proveedor_id IN (12, 34)
     * $query->filterByPedidoProveedorId(array('min' => 12)); // WHERE pedido_proveedor_id > 12
     * </code>
     *
     * @see       filterByPedidoProveedor()
     *
     * @param     mixed $pedidoProveedorId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DetallePedidoProveedorQuery The current query, for fluid interface
     */
    public function filterByPedidoProveedorId($pedidoProveedorId = null, $comparison = null)
    {
        if (is_array($pedidoProveedorId)) {
            $useMinMax = false;
            if (isset($pedidoProveedorId['min'])) {
                $this->addUsingAlias(DetallePedidoProveedorPeer::PEDIDO_PROVEEDOR_ID, $pedidoProveedorId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pedidoProveedorId['max'])) {
                $this->addUsingAlias(DetallePedidoProveedorPeer::PEDIDO_PROVEEDOR_ID, $pedidoProveedorId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DetallePedidoProveedorPeer::PEDIDO_PROVEEDOR_ID, $pedidoProveedorId, $comparison);
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
     * @return DetallePedidoProveedorQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DetallePedidoProveedorPeer::ESTADO, $estado, $comparison);
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   DetallePedidoProveedorQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(DetallePedidoProveedorPeer::PRODUCTO_ID, $producto->getId(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DetallePedidoProveedorPeer::PRODUCTO_ID, $producto->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByProducto() only accepts arguments of type Producto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Producto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DetallePedidoProveedorQuery The current query, for fluid interface
     */
    public function joinProducto($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Producto');

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
            $this->addJoinObject($join, 'Producto');
        }

        return $this;
    }

    /**
     * Use the Producto relation Producto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductoQuery A secondary query class using the current class as primary query
     */
    public function useProductoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinProducto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Producto', 'ProductoQuery');
    }

    /**
     * Filter the query by a related PedidoProveedor object
     *
     * @param   PedidoProveedor|PropelObjectCollection $pedidoProveedor The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   DetallePedidoProveedorQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPedidoProveedor($pedidoProveedor, $comparison = null)
    {
        if ($pedidoProveedor instanceof PedidoProveedor) {
            return $this
                ->addUsingAlias(DetallePedidoProveedorPeer::PEDIDO_PROVEEDOR_ID, $pedidoProveedor->getId(), $comparison);
        } elseif ($pedidoProveedor instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DetallePedidoProveedorPeer::PEDIDO_PROVEEDOR_ID, $pedidoProveedor->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByPedidoProveedor() only accepts arguments of type PedidoProveedor or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PedidoProveedor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DetallePedidoProveedorQuery The current query, for fluid interface
     */
    public function joinPedidoProveedor($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PedidoProveedor');

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
            $this->addJoinObject($join, 'PedidoProveedor');
        }

        return $this;
    }

    /**
     * Use the PedidoProveedor relation PedidoProveedor object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PedidoProveedorQuery A secondary query class using the current class as primary query
     */
    public function usePedidoProveedorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPedidoProveedor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PedidoProveedor', 'PedidoProveedorQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   DetallePedidoProveedor $detallePedidoProveedor Object to remove from the list of results
     *
     * @return DetallePedidoProveedorQuery The current query, for fluid interface
     */
    public function prune($detallePedidoProveedor = null)
    {
        if ($detallePedidoProveedor) {
            $this->addUsingAlias(DetallePedidoProveedorPeer::ID, $detallePedidoProveedor->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
