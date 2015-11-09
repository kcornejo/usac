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
    $this->redirect('@<?php echo $this->getUrlForAction('list') ?>');
}
