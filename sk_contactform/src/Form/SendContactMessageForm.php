<?php

namespace Drupal\sk_contactform\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

class SendContactMessageForm extends ContentEntityForm {
  
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form = parent::buildForm($form, $form_state);
    kint($form);
    return $form;

  }
}