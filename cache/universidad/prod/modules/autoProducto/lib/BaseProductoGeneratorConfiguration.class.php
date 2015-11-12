<?php

/**
 * producto module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage producto
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseProductoGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
        return array(  '_edit' => NULL,  '_delete' => NULL,);
      }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%descripcion%% - %%marca%% - %%_foto%% - %%tipo_producto%% - %%tipo_presentacion%% - %%cantidad_minima%% - %%costo%% - %%precio%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Listado de Productos';
  }

  public function getEditTitle()
  {
    return 'Editar Producto';
  }

  public function getNewTitle()
  {
    return 'Nuevo Producto';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'descripcion',  1 => 'marca_id',  2 => 'tipo_producto_id',);
  }

  public function getFormDisplay()
  {
    return array(  0 => 'descripcion',  1 => 'imagen',  2 => '_imagenFoto',  3 => 'marca_id',  4 => 'tipo_producto_id',  5 => 'tipo_presentacion_id',  6 => 'cantidad_minima',  7 => 'costo',  8 => 'precio',);
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'descripcion',  1 => 'marca',  2 => '_foto',  3 => 'tipo_producto',  4 => 'tipo_presentacion',  5 => 'cantidad_minima',  6 => 'costo',  7 => 'precio',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'descripcion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'marca_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'tipo_producto_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'tipo_presentacion_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'cantidad_minima' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Existencia Minima',),
      'imagen' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Imagen',),
      'codigo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'precio' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'costo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'descripcion' => array(),
      'marca_id' => array(),
      'tipo_producto_id' => array(),
      'tipo_presentacion_id' => array(),
      'cantidad_minima' => array(),
      'imagen' => array(),
      'codigo' => array(),
      'precio' => array(),
      'costo' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'descripcion' => array(),
      'marca_id' => array(),
      'tipo_producto_id' => array(),
      'tipo_presentacion_id' => array(),
      'cantidad_minima' => array(),
      'imagen' => array(),
      'codigo' => array(),
      'precio' => array(),
      'costo' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'descripcion' => array(),
      'marca_id' => array(),
      'tipo_producto_id' => array(),
      'tipo_presentacion_id' => array(),
      'cantidad_minima' => array(),
      'imagen' => array(),
      'codigo' => array(),
      'precio' => array(),
      'costo' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'descripcion' => array(),
      'marca_id' => array(),
      'tipo_producto_id' => array(),
      'tipo_presentacion_id' => array(),
      'cantidad_minima' => array(),
      'imagen' => array(),
      'codigo' => array(),
      'precio' => array(),
      'costo' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'descripcion' => array(),
      'marca_id' => array(),
      'tipo_producto_id' => array(),
      'tipo_presentacion_id' => array(),
      'cantidad_minima' => array(),
      'imagen' => array(),
      'codigo' => array(),
      'precio' => array(),
      'costo' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'productoForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'productoFormFilter';
  }

  public function getPaginateMethod()
  {
    return 'paginate';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getWiths()
  {
    return array();
  }

  public function getQueryMethods()
  {
    return array();
  }
}
