<?php



/**
 * This class defines the structure of the 'proveedor' table.
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * 11/09/15 23:08:05
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class ProveedorTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.ProveedorTableMap';

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
        $this->setName('proveedor');
        $this->setPhpName('Proveedor');
        $this->setClassname('Proveedor');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', true, 255, null);
        $this->getColumn('NOMBRE', false)->setPrimaryString(true);
        $this->addColumn('DIRECCION', 'Direccion', 'VARCHAR', true, 70, null);
        $this->addColumn('CORREO_ELETRONICO', 'CorreoEletronico', 'VARCHAR', true, 70, null);
        $this->addColumn('NOMBRE_CONTACTO', 'NombreContacto', 'VARCHAR', false, 70, null);
        $this->addColumn('TELEFONO', 'Telefono', 'VARCHAR', true, 30, null);
        $this->addColumn('CIUDAD', 'Ciudad', 'VARCHAR', false, 30, null);
        $this->addColumn('OBSERVACION', 'Observacion', 'VARCHAR', false, 70, null);
        $this->addColumn('NIT', 'Nit', 'VARCHAR', false, 255, null);
        $this->addColumn('RAZON_SOCIAL', 'RazonSocial', 'VARCHAR', false, 255, null);
        $this->addColumn('CONTACTO', 'Contacto', 'VARCHAR', false, 255, null);
        $this->addColumn('REFERENCIA', 'Referencia', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('PedidoProveedor', 'PedidoProveedor', RelationMap::ONE_TO_MANY, array('id' => 'proveedor_id', ), null, null, 'PedidoProveedors');
        $this->addRelation('Inventario', 'Inventario', RelationMap::ONE_TO_MANY, array('id' => 'proveedor_id', ), null, null, 'Inventarios');
        $this->addRelation('FacturaDetalle', 'FacturaDetalle', RelationMap::ONE_TO_MANY, array('id' => 'proveedor_id', ), null, null, 'FacturaDetalles');
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

} // ProveedorTableMap
