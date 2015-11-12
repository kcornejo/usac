<?php



/**
 * This class defines the structure of the 'producto' table.
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * 11/12/15 08:06:35
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class ProductoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.ProductoTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('producto');
        $this->setPhpName('Producto');
        $this->setClassname('Producto');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('DESCRIPCION', 'Descripcion', 'VARCHAR', true, 255, null);
        $this->getColumn('DESCRIPCION', false)->setPrimaryString(true);
        $this->addForeignKey('MARCA_ID', 'MarcaId', 'INTEGER', 'marca', 'ID', false, null, null);
        $this->addForeignKey('TIPO_PRODUCTO_ID', 'TipoProductoId', 'INTEGER', 'tipo_producto', 'ID', false, null, null);
        $this->addForeignKey('TIPO_PRESENTACION_ID', 'TipoPresentacionId', 'INTEGER', 'tipo_presentacion', 'ID', false, null, null);
        $this->addColumn('CANTIDAD_MINIMA', 'CantidadMinima', 'INTEGER', false, null, 20);
        $this->addColumn('IMAGEN', 'Imagen', 'VARCHAR', false, 255, null);
        $this->addColumn('CODIGO', 'Codigo', 'VARCHAR', false, 255, null);
        $this->addColumn('PRECIO', 'Precio', 'DOUBLE', false, null, null);
        $this->addColumn('COSTO', 'Costo', 'DOUBLE', false, null, null);
        $this->addColumn('CANTIDAD_MINIMA_PEDIDO', 'CantidadMinimaPedido', 'INTEGER', false, null, 20);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Marca', 'Marca', RelationMap::MANY_TO_ONE, array('marca_id' => 'id', ), null, null);
        $this->addRelation('TipoProducto', 'TipoProducto', RelationMap::MANY_TO_ONE, array('tipo_producto_id' => 'id', ), null, null);
        $this->addRelation('TipoPresentacion', 'TipoPresentacion', RelationMap::MANY_TO_ONE, array('tipo_presentacion_id' => 'id', ), null, null);
        $this->addRelation('DetallePedidoProveedor', 'DetallePedidoProveedor', RelationMap::ONE_TO_MANY, array('id' => 'producto_id', ), null, null, 'DetallePedidoProveedors');
        $this->addRelation('Promocion', 'Promocion', RelationMap::ONE_TO_MANY, array('id' => 'producto_id', ), null, null, 'Promocions');
        $this->addRelation('Inventario', 'Inventario', RelationMap::ONE_TO_MANY, array('id' => 'producto_id', ), null, null, 'Inventarios');
        $this->addRelation('FacturaDetalle', 'FacturaDetalle', RelationMap::ONE_TO_MANY, array('id' => 'producto_id', ), null, null, 'FacturaDetalles');
        $this->addRelation('Movimiento', 'Movimiento', RelationMap::ONE_TO_MANY, array('id' => 'producto_id', ), null, null, 'Movimientos');
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'symfony' => array('form' => 'true', 'filter' => 'true', ),
            'symfony_behaviors' => array(),
        );
    } // getBehaviors()

} // ProductoTableMap
