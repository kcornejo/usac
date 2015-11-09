<?php



/**
 * This class defines the structure of the 'transaccion' table.
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * 11/09/15 23:08:07
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class TransaccionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.TransaccionTableMap';

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
        $this->setName('transaccion');
        $this->setPhpName('Transaccion');
        $this->setClassname('Transaccion');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('SERIE', 'Serie', 'VARCHAR', false, 120, null);
        $this->addColumn('DOCUMENTO', 'Documento', 'VARCHAR', false, 120, null);
        $this->addForeignKey('CLIENTE_ID', 'ClienteId', 'INTEGER', 'cliente', 'ID', false, null, null);
        $this->addForeignKey('USUARIO_ID', 'UsuarioId', 'INTEGER', 'usuario', 'ID', false, null, null);
        $this->addForeignKey('TIPO_TRANSACCION_ID', 'TipoTransaccionId', 'INTEGER', 'tipo_transaccion', 'ID', false, null, null);
        $this->addColumn('NO_TARJETA', 'NoTarjeta', 'VARCHAR', false, 60, null);
        $this->addColumn('TOTAL', 'Total', 'DECIMAL', false, null, null);
        $this->addColumn('DIRECCION', 'Direccion', 'VARCHAR', false, 60, null);
        $this->addForeignKey('TIPO_PAGO_ID', 'TipoPagoId', 'INTEGER', 'tipo_pago', 'ID', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Cliente', 'Cliente', RelationMap::MANY_TO_ONE, array('cliente_id' => 'id', ), null, null);
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('usuario_id' => 'id', ), null, null);
        $this->addRelation('TipoTransaccion', 'TipoTransaccion', RelationMap::MANY_TO_ONE, array('tipo_transaccion_id' => 'id', ), null, null);
        $this->addRelation('TipoPago', 'TipoPago', RelationMap::MANY_TO_ONE, array('tipo_pago_id' => 'id', ), null, null);
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

} // TransaccionTableMap
