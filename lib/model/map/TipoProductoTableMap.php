<?php



/**
 * This class defines the structure of the 'tipo_producto' table.
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * 11/12/15 06:55:04
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class TipoProductoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.TipoProductoTableMap';

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
        $this->setName('tipo_producto');
        $this->setPhpName('TipoProducto');
        $this->setClassname('TipoProducto');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', true, 255, null);
        $this->getColumn('NOMBRE', false)->setPrimaryString(true);
        $this->addColumn('DESCRIPCION', 'Descripcion', 'VARCHAR', false, 120, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Producto', 'Producto', RelationMap::ONE_TO_MANY, array('id' => 'tipo_producto_id', ), null, null, 'Productos');
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

} // TipoProductoTableMap
