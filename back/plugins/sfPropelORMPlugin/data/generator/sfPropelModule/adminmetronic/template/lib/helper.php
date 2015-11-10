[?php

/**
 * <?php echo $this->getModuleName() ?> module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage <?php echo $this->getModuleName()."\n" ?>
 * @author     ##AUTHOR_NAME##
 */
abstract class Base<?php echo ucfirst($this->getModuleName()) ?>GeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? '<?php echo $this->params['route_prefix'] ?>' : '<?php echo $this->params['route_prefix'] ?>_'.$action;
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

    return '<li class="sf_admin_action_moveup">'.link_to(__($params['label'], array(), 'sf_admin'), '<?php echo $this->params['route_prefix'] ?>/'.$params['action'].'?<?php echo $this->getPrimaryKeyUrlParams('$object', true); ?>).'</li>';
  }

  public function linkToDelete($object, $params)
  {
    if ($object->isNew())
    {
      return '';
    }

    return link_to(__($params['label'], array(), 'sf_admin'), $this->getUrlForAction('delete'), $object, array('method' => 'delete', 'class' => 'btn mini red', 'confirm' => !empty($params['confirm']) ? __($params['confirm'], array(), 'sf_admin') : $params['confirm']));
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
    return link_to(__($params['label'], array(), 'sf_admin'), $this->getUrlForAction('edit'), $object, array('class'=>'btn mini blue'));
  }
  
  public function linkToList($params)
  {
    return link_to(__($params['label'], array(), 'sf_admin'), '@'.$this->getUrlForAction('list'), array('class'=>'btn blue'));
  }

  public function linkToSave($object, $params)
  {
    return '<input type="submit" class="btn green" value="'.__($params['label'], array(), 'sf_admin').'" />';
  }

  public function linkToSaveAndAdd($object, $params)
  {
    if (!$object->isNew())
    {
      return '';
    }

    return '<input type="submit" class="btn green" value="'.__($params['label'], array(), 'sf_admin').'" name="_save_and_add" />';
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

    return '<li class="sf_admin_action_movedown">'.link_to(__($params['label'], array(), 'sf_admin'), '<?php echo $this->params['route_prefix'] ?>/'.$params['action'].'?<?php echo $this->getPrimaryKeyUrlParams('$object', true); ?>).'</li>';
  }

  
  public function linkToVelNew($params)
  {
    return '<li class="sf_admin_action_new">'.link_to(__($params['label'], array(), 'sf_admin'), '@'.$this->getUrlForAction('new'),  array("class" => " btn green", )).'</li>';
  }
  
}
