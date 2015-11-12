<?php

/**
* producto module configuration.
*
* @package    ##PROJECT_NAME##
* @subpackage producto
* @author     ##AUTHOR_NAME##
*/
abstract class BaseProductoGeneratorHelper extends sfModelGeneratorHelper
{
public function getUrlForAction($action)
{
return 'list' == $action ? 'producto' : 'producto_'.$action;
}

public function linkToMoveUp($object, $params)
{
if ($object->isFirst())
{
return '<li class="sf_admin_action_moveup disabled"><span>'.__($params['label'], array(), 'sf_admin').'</span></li>';
}

if (empty($params['action']))
{
$params['action'] = 'moveUp';
}

return '<li class="sf_admin_action_moveup">'.link_to(__($params['label'], array(), 'sf_admin'), 'producto/'.$params['action'].'?id='.$object->getId()).'</li>';
}

public function linkToDelete($object, $params)
{
if ($object->isNew())
{
return '';
}

return link_to(__($params['label'], array(), 'sf_admin'), $this->getUrlForAction('delete'), $object, array('method' => 'delete', 'class' => 'btn btn-xs btn-danger', 'confirm' => !empty($params['confirm']) ? __($params['confirm'], array(), 'sf_admin') : $params['confirm']));
}

public function linkToFormDelete($object, $params)
{
if ($object->isNew())
{
return '';
}

return link_to(__($params['label'], array(), 'sf_admin'), $this->getUrlForAction('delete'), $object, array('method' => 'delete', 'class' => 'btn red', 'confirm' => !empty($params['confirm']) ? __($params['confirm'], array(), 'sf_admin') : $params['confirm']));
}

public function linkToEdit($object, $params)
{
return link_to(__($params['label'], array(), 'sf_admin'), $this->getUrlForAction('edit'), $object, array('class'=>'btn btn-xs btn-warning'));
}

public function linkToList($params)
{
return link_to(__('Retornar a Lista', array(), 'sf_admin'), '@'.$this->getUrlForAction('list'), array('class'=>'btn btn-info btn-gradient'));
}

public function linkToSave($object, $params)
{
return '<input type="submit" class="btn btn-success btn-gradient" value="'.__($params['label'], array(), 'sf_admin').'" />';
}

public function linkToSaveAndAdd($object, $params)
{
if (!$object->isNew())
{
return '';
}

return '<input type="submit" class="btn btn-info btn-gradient" value="'.__($params['label'], array(), 'sf_admin').'" name="_save_and_add" />';
}





public function linkToMoveDown($object, $params)
{
if ($object->isLast())
{
return '<li class="sf_admin_action_movedown disabled"><span>'.__($params['label'], array(), 'sf_admin').'</span></li>';
}

if (empty($params['action']))
{
$params['action'] = 'moveDown';
}

return '<li class="sf_admin_action_movedown">'.link_to(__($params['label'], array(), 'sf_admin'), 'producto/'.$params['action'].'?id='.$object->getId()).'</li>';
}


public function linkToVelNew($params)
{
return link_to(__($params['label'], array(), 'sf_admin'), '@'.$this->getUrlForAction('new'),  array("class" => " btn btn-success btn-gradient", ));
}

}
