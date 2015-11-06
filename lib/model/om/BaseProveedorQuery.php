<?php


/**
 * Base class that represents a query for the 'proveedor' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * 11/06/15 07:27:12
 *
 * @method ProveedorQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ProveedorQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method ProveedorQuery orderByDireccion($order = Criteria::ASC) Order by the direccion column
 * @method ProveedorQuery orderByCorreoEletronico($order = Criteria::ASC) Order by the correo_eletronico column
 * @method ProveedorQuery orderByNombreContacto($order = Criteria::ASC) Order by the nombre_contacto column
 * @method ProveedorQuery orderByTelefono($order = Criteria::ASC) Order by the telefono column
 * @method ProveedorQuery orderByCiudad($order = Criteria::ASC) Order by the ciudad column
 * @method ProveedorQuery orderByObservacion($order = Criteria::ASC) Order by the observacion column
 *
 * @method ProveedorQuery groupById() Group by the id column
 * @method ProveedorQuery groupByNombre() Group by the nombre column
 * @method ProveedorQuery groupByDireccion() Group by the direccion column
 * @method ProveedorQuery groupByCorreoEletronico() Group by the correo_eletronico column
 * @method ProveedorQuery groupByNombreContacto() Group by the nombre_contacto column
 * @method ProveedorQuery groupByTelefono() Group by the telefono column
 * @method ProveedorQuery groupByCiudad() Group by the ciudad column
 * @method ProveedorQuery groupByObservacion() Group by the observacion column
 *
 * @method ProveedorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProveedorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProveedorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProveedorQuery leftJoinPedidoProveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the PedidoProveedor relation
 * @method ProveedorQuery rightJoinPedidoProveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PedidoProveedor relation
 * @method ProveedorQuery innerJoinPedidoProveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the PedidoProveedor relation
 *
 * @method Proveedor findOne(PropelPDO $con = null) Return the first Proveedor matching the query
 * @method Proveedor findOneOrCreate(PropelPDO $con = null) Return the first Proveedor matching the query, or a new Proveedor object populated from the query conditions when no match is found
 *
 * @method Proveedor findOneById(int $id) Return the first Proveedor filtered by the id column
 * @method Proveedor findOneByNombre(string $nombre) Return the first Proveedor filtered by the nombre column
 * @method Proveedor findOneByDireccion(string $direccion) Return the first Proveedor filtered by the direccion column
 * @method Proveedor findOneByCorreoEletronico(string $correo_eletronico) Return the first Proveedor filtered by the correo_eletronico column
 * @method Proveedor findOneByNombreContacto(string $nombre_contacto) Return the first Proveedor filtered by the nombre_contacto column
 * @method Proveedor findOneByTelefono(string $telefono) Return the first Proveedor filtered by the telefono column
 * @method Proveedor findOneByCiudad(string $ciudad) Return the first Proveedor filtered by the ciudad column
 * @method Proveedor findOneByObservacion(string $observacion) Return the first Proveedor filtered by the observacion column
 *
 * @method array findById(int $id) Return Proveedor objects filtered by the id column
 * @method array findByNombre(string $nombre) Return Proveedor objects filtered by the nombre column
 * @method array findByDireccion(string $direccion) Return Proveedor objects filtered by the direccion column
 * @method array findByCorreoEletronico(string $correo_eletronico) Return Proveedor objects filtered by the correo_eletronico column
 * @method array findByNombreContacto(string $nombre_contacto) Return Proveedor objects filtered by the nombre_contacto column
 * @method array findByTelefono(string $telefono) Return Proveedor objects filtered by the telefono column
 * @method array findByCiudad(string $ciudad) Return Proveedor objects filtered by the ciudad column
 * @method array findByObservacion(string $observacion) Return Proveedor objects filtered by the observacion column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseProveedorQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProveedorQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Proveedor', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProveedorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     ProveedorQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProveedorQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProveedorQuery) {
            return $criteria;
        }
        $query = new ProveedorQuery();
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
     * @return   Proveedor|Proveedor[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProveedorPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Proveedor A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `NOMBRE`, `DIRECCION`, `CORREO_ELETRONICO`, `NOMBRE_CONTACTO`, `TELEFONO`, `CIUDAD`, `OBSERVACION` FROM `proveedor` WHERE `ID` = :p0';
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
            $obj = new Proveedor();
            $obj->hydrate($row);
            ProveedorPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Proveedor|Proveedor[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Proveedor[]|mixed the list of results, formatted by the current formatter
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
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProveedorPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProveedorPeer::ID, $keys, Criteria::IN);
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
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ProveedorPeer::ID, $id, $comparison);
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
     * @return ProveedorQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProveedorPeer::NOMBRE, $nombre, $comparison);
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
     * @return ProveedorQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProveedorPeer::DIRECCION, $direccion, $comparison);
    }

    /**
     * Filter the query on the correo_eletronico column
     *
     * Example usage:
     * <code>
     * $query->filterByCorreoEletronico('fooValue');   // WHERE correo_eletronico = 'fooValue'
     * $query->filterByCorreoEletronico('%fooValue%'); // WHERE correo_eletronico LIKE '%fooValue%'
     * </code>
     *
     * @param     string $correoEletronico The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByCorreoEletronico($correoEletronico = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($correoEletronico)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $correoEletronico)) {
                $correoEletronico = str_replace('*', '%', $correoEletronico);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::CORREO_ELETRONICO, $correoEletronico, $comparison);
    }

    /**
     * Filter the query on the nombre_contacto column
     *
     * Example usage:
     * <code>
     * $query->filterByNombreContacto('fooValue');   // WHERE nombre_contacto = 'fooValue'
     * $query->filterByNombreContacto('%fooValue%'); // WHERE nombre_contacto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombreContacto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByNombreContacto($nombreContacto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombreContacto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombreContacto)) {
                $nombreContacto = str_replace('*', '%', $nombreContacto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::NOMBRE_CONTACTO, $nombreContacto, $comparison);
    }

    /**
     * Filter the query on the telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByTelefono('fooValue');   // WHERE telefono = 'fooValue'
     * $query->filterByTelefono('%fooValue%'); // WHERE telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByTelefono($telefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telefono)) {
                $telefono = str_replace('*', '%', $telefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::TELEFONO, $telefono, $comparison);
    }

    /**
     * Filter the query on the ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByCiudad('fooValue');   // WHERE ciudad = 'fooValue'
     * $query->filterByCiudad('%fooValue%'); // WHERE ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ciudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByCiudad($ciudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ciudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ciudad)) {
                $ciudad = str_replace('*', '%', $ciudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::CIUDAD, $ciudad, $comparison);
    }

    /**
     * Filter the query on the observacion column
     *
     * Example usage:
     * <code>
     * $query->filterByObservacion('fooValue');   // WHERE observacion = 'fooValue'
     * $query->filterByObservacion('%fooValue%'); // WHERE observacion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $observacion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByObservacion($observacion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($observacion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $observacion)) {
                $observacion = str_replace('*', '%', $observacion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::OBSERVACION, $observacion, $comparison);
    }

    /**
     * Filter the query by a related PedidoProveedor object
     *
     * @param   PedidoProveedor|PropelObjectCollection $pedidoProveedor  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ProveedorQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPedidoProveedor($pedidoProveedor, $comparison = null)
    {
        if ($pedidoProveedor instanceof PedidoProveedor) {
            return $this
                ->addUsingAlias(ProveedorPeer::ID, $pedidoProveedor->getProveedorId(), $comparison);
        } elseif ($pedidoProveedor instanceof PropelObjectCollection) {
            return $this
                ->usePedidoProveedorQuery()
                ->filterByPrimaryKeys($pedidoProveedor->getPrimaryKeys())
                ->endUse();
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
     * @return ProveedorQuery The current query, for fluid interface
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
     * @param   Proveedor $proveedor Object to remove from the list of results
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function prune($proveedor = null)
    {
        if ($proveedor) {
            $this->addUsingAlias(ProveedorPeer::ID, $proveedor->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
