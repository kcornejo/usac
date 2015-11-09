<?php

/**
 * Producto form.
 *
 * @package    universidad
 * @subpackage form
 * @author     Univ
 */
class ProductoForm extends BaseProductoForm {

    public function configure() {
        $this->setWidget('imagen', new sfWidgetFormInputFile());

        $this->validatorSchema['imagen'] = new sfValidatorFile(array(
            'path' => sfConfig::get('sf_upload_dir') . '/carga',
            'mime_types' => 'web_images'
                )
        );
    }

}
