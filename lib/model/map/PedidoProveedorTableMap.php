<?php



/**
 * This class defines the structure of the 'pedido_proveedor' table.
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * 11/09/15 06:03:38
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class PedidoProveedorTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.PedidoProveedorTableMap';

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
        $this->setName('pedido_proveedor');
        $this->setPhpName('PedidoProveedor');
        $this->setClassname('PedidoProveedor');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('FECHA', 'Fecha', 'DATE', true, null, null);
        $this->addColumn('DESCRIPCION', 'Descripcion', 'VARCHAR', false, 25, null);
        $this->addColumn('ESTADO', 'Estado', 'VARCHAR', true, 30, null);
        $this->addForeignKey('USUARIO_ID', 'UsuarioId', 'INTEGER', 'usuario', 'ID', false, null, null);
        $this->addForeignKey('PROVEEDOR_ID', 'ProveedorId', 'INTEGER', 'proveedor', 'ID', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('usuario_id' => 'id', ), null, null);
        $this->addRelation('Proveedor', 'Proveedor', RelationMap::MANY_TO_ONE, array('proveedor_id' => 'id', ), null, null);
        $this->addRelation('DetallePedidoProveedor', 'DetallePedidoProveedor', RelationMap::ONE_TO_MANY, array('id' => 'pedido_proveedor_id', ), null, null, 'DetallePedidoProveedors');
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

} // PedidoProveedorTableMap
