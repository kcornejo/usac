<?php

require_once(dirname(__FILE__).'/../lib/BaseProductoGeneratorConfiguration.class.php');
require_once(dirname(__FILE__).'/../lib/BaseProductoGeneratorHelper.class.php');

/**
 * producto actions.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage producto
 * @author     ##AUTHOR_NAME##
 */
abstract class autoProductoActions extends sfActions
{
  public function preExecute()
  {
    $this->configuration = new productoGeneratorConfiguration();

    if (!$this->getUser()->hasCredential($this->configuration->getCredentials($this->getActionName())))
    {
      $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
    }

    $this->dispatcher->notify(new sfEvent($this, 'admin.pre_execute', array('configuration' => $this->configuration)));

    $this->helper = new productoGeneratorHelper();
  }

  public function executeIndex(sfWebRequest $request)
  {
    // filtering
    if ($request->getParameter('filters'))
    {
      $this->setFilters($request->getParameter('filters'));
    }

    // sorting
    if ($request->getParameter('sort'))
    {
      $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
    }

    // pager
    if ($request->getParameter('page'))
    {
      $this->setPage($request->getParameter('page'));
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();
  }

  public function executeFilter(sfWebRequest $request)
  {
    $this->setPage(1);

    if ($request->hasParameter('_reset'))
    {
      $this->setFilters($this->configuration->getFilterDefaults());

      $this->redirect('@producto');
    }

    $this->filters = $this->configuration->getFilterForm($this->getFilters());
    unset($this->filters['tipo_presentacion_id']);
    unset($this->filters['cantidad_minima']);
    unset($this->filters['imagen']);
    unset($this->filters['codigo']);
    unset($this->filters['precio']);
    unset($this->filters['costo']);

    $this->filters->bind($request->getParameter($this->filters->getName()));
    if ($this->filters->isValid())
    {
      $this->setFilters($this->filters->getValues());

      $this->redirect('@producto');
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();

    $this->setTemplate('index');
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->producto = $this->form->getObject();
    unset($this->form['codigo']);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    unset($this->form['codigo']);
    $this->producto = $this->form->getObject();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->producto = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->producto);
    unset($this->form['codigo']);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->producto = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->producto);
    unset($this->form['codigo']);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

public function executeDelete(sfWebRequest $request)
{
try{
$request->checkCSRFProtection();

$this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));

$this->getRoute()->getObject()->delete();

$this->getUser()->setFlash('notice', 'The item was deleted successfully.');
}catch(Exception $e){
    $this->getUser()->setFlash('error', 'No se puede eliminar este objeto, ya que tiene referencias');
}
    $this->redirect('@producto');
}

  public function executeBatch(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    if (!$ids = $request->getParameter('ids'))
    {
      $this->getUser()->setFlash('error', 'You must at least select one item.');

      $this->redirect('@producto');
    }

    if (!$action = $request->getParameter('batch_action'))
    {
      $this->getUser()->setFlash('error', 'You must select an action to execute on the selected items.');

      $this->redirect('@producto');
    }

    if (!method_exists($this, $method = 'execute'.ucfirst($action)))
    {
      throw new InvalidArgumentException(sprintf('You must create a "%s" method for action "%s"', $method, $action));
    }

    if (!$this->getUser()->hasCredential($this->configuration->getCredentials($action)))
    {
      $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
    }

    $validator = new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'producto'));
    try
    {
      // validate ids
      $ids = $validator->clean($ids);

      // execute batch
      $this->$method($request);
    }
    catch (sfValidatorError $e)
    {
      $this->getUser()->setFlash('error', 'A problem occurs when deleting the selected items as some items do not exist anymore.');
    }

    $this->redirect('@producto');
  }

  protected function executeBatchDelete(sfWebRequest $request)
  {
    $ids = $request->getParameter('ids');

    $count = 0;
    foreach (ProductoPeer::retrieveByPks($ids) as $object)
    {
      $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $object)));

      // check if object is in a tree
      if ($count && method_exists($object, 'isInTree') && $object->isInTree())
      {
        // test if we can reload an object
        try
        {
          $object->reload(); // reload to avoid breaking nested set structure
        }
        catch (Exception $e)
        {
          // will fail if object does not exist in the database anymore
          // happens when trying to delete children of already deleted object
          // so increase the counter and move on
          $count++;
          continue;
        }
      }

      $object->delete();
      if ($object->isDeleted())
      {
        $count++;
      }
    }

    if ($count >= count($ids))
    {
      $this->getUser()->setFlash('notice', 'The selected items have been deleted successfully.');
    }
    else
    {
      $this->getUser()->setFlash('error', 'A problem occurs when deleting the selected items.');
    }

    $this->redirect('@producto');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      $producto = $form->save();

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $producto)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@producto_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);

        $this->redirect(array('sf_route' => 'producto_edit', 'sf_subject' => $producto));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }

  protected function getFilters()
  {
    return $this->getUser()->getAttribute('producto.filters', $this->configuration->getFilterDefaults(), 'admin_module');
  }

  protected function setFilters(array $filters)
  {
    return $this->getUser()->setAttribute('producto.filters', $filters, 'admin_module');
  }

  protected function getPager()
  {
    $query = $this->buildQuery();
    $paginateMethod = $this->configuration->getPaginateMethod();
    $pager = $query->$paginateMethod($this->getPage(), $this->configuration->getPagerMaxPerPage());

    return $pager;
  }

  protected function setPage($page)
  {
    $this->getUser()->setAttribute('producto.page', $page, 'admin_module');
  }

  protected function getPage()
  {
    return $this->getUser()->getAttribute('producto.page', 1, 'admin_module');
  }

  protected function buildQuery()
  {
    if (null === $this->filters)
    {
      $this->filters = $this->configuration->getFilterForm($this->getFilters());
    unset($this->filters['tipo_presentacion_id']);
    unset($this->filters['cantidad_minima']);
    unset($this->filters['imagen']);
    unset($this->filters['codigo']);
    unset($this->filters['precio']);
    unset($this->filters['costo']);
    }

    $query = $this->filters->buildCriteria($this->getFilters());

    foreach ($this->configuration->getWiths() as $with) {
      $query->joinWith($with);
    }

    foreach ($this->configuration->getQueryMethods() as $methodName => $methodParams) {
      if(is_array($methodParams))
      {
        call_user_func_array(array($query, $methodName), $methodParams);
      }
      else
      {
        $query->$methodParams();
      }
    }

    $this->processSort($query);

    $event = $this->dispatcher->filter(new sfEvent($this, 'admin.build_criteria'), $query);
    $query = $event->getReturnValue();

    return $query;
  }


  protected function processSort($query)
  {
    $sort = $this->getSort();
    if (array(null, null) == $sort)
    {
      return;
    }

    try
    {
      $column = ProductoPeer::translateFieldName($sort[0], BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME);
    }
    catch (PropelException $e)
    {
      // probably a fake column, using a custom orderByXXX() query method
      $column = sfInflector::camelize($sort[0]);
    }

    $method = sprintf('orderBy%s', $column);

    try
    {
      $query->$method('asc' == $sort[1] ? 'asc' : 'desc');
    }
    catch(PropelException $e)
    {
      // non-existent sorting method
      // ignore the sort parameter
      $this->setSort(array(null, null));
    }
  }

  protected function getSort()
  {
    $sort = $this->getUser()->getAttribute('producto.sort', null, 'admin_module');
    if (null === $sort)
    {
      $sort = $this->configuration->getDefaultSort();
      $this->setSort($sort);
    }

    return $sort;
  }

  protected function setSort(array $sort)
  {
    if (null !== $sort[0] && null === $sort[1])
    {
      $sort[1] = 'asc';
    }

    $this->getUser()->setAttribute('producto.sort', $sort, 'admin_module');
  }

}
