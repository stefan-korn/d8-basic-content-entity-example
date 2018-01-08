<?php

namespace Drupal\sk_contactform\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;

/**
 * Defines the Contactform entity.
 *
 * @ContentEntityType(
 *   id = "sk_contactform",
 *   label = @Translation("Contact form"),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\sk_contactform\Form\SendContactMessageForm",
 *     }
 *   },
 *   base_table = "sk_contactform",
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *   },
 * )
 */

class SKContactform extends ContentEntityBase implements ContentEntityInterface {

  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields['id'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('ID'))
      ->setDescription(t('ID of contact form content'))
      ->setReadOnly(TRUE);

    $fields['uuid'] = BaseFieldDefinition::create('uuid')
      ->setLabel(t('UUID'))
      ->setDescription(t('UUID of contact form content'))
      ->setReadOnly(TRUE);

    $fields['name'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Name'))
      ->setDescription(t('Name of contacting person'))
      ->setDisplayOptions('form',
        [
          'type' => 'string_textfield',
          'weight' => 0,
        ]
        )
      ->setRequired(TRUE);

    $fields['mail'] = BaseFieldDefinition::create('email')
      ->setLabel(t('eMail'))
      ->setDescription(t('eMail address of contacting person'))
      ->setDisplayOptions('form',
        [
          'type' => 'email_default',
          'weight' => 1,
        ]
      )
      ->setRequired(TRUE);

    $fields['message'] = BaseFieldDefinition::create('string_long')
      ->setLabel(t('Message'))
      ->setDescription(t('Message of contacting person'))
      ->setDisplayOptions('form',
        [
          'type' => 'string_textarea',
          'weight' => 2,
        ]
        );


    return $fields;
  }
}
