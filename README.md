# Drupal 8 Basic Content Entity Example

This is a basic example for a content entity in Drupal 8

There is this documentation on Drupal.org for a basic content entity:
https://www.drupal.org/docs/8/api/entity-api/create-a-custom-content-entity

While this is valid and helpful for basic understanding, it is of limited
practical use imho.

Another example for a config is provided in Examples module
https://www.drupal.org/project/examples
Example given there has a lot more to it and if working from there it is maybe
a bit harder to get your head around all the things used there and to determine what
you might need and what you do not need.

So my intention here is to provide a very basic implementation (but with some more features
as the very basic example on drupal.org) and explain settings and effects here,
basically for my own reference.

At this moment the example provides the following:

* a content entity with three fields beside the id and uuid fields, these fields
are
    * name (string/text filed)
    * mail (email field)
    * message (long text field)
* a form for adding a content entity

Nothing more at this moment, will update it occasionally

src/Entity/SKContactForm.php defines the Entity by implementing ContentEntityBase class
https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Entity%21ContentEntityBase.php/class/ContentEntityBase/8.4.x
only function baseFieldDefintions is implemented. 
This is where the additional fields are added. Using the create method a field type plugin
is provided, you can find valid field types by searching annotations of @FieldType in code.

There is annotation code in the class file which is important for the Entity.
 
By enabling the module a table sk_contactform (base table annotation) is created, with
fields id, uuid, name, mail and message as defined in baseFieldDefintions function.

The handlers annotation specifies the class where the form for adding entities is provided.
This is src/Form/SendContactMessageForm.php. This class is extending ContentEntityForm class
and providing the form. To actually have the custom fields displayed in the form it
is necessary to set displayOptions() in baseFieldDefinitions() of Entity Class.
displayOptions() first sets the context (form or view), here form and then provides the
options for the context, type and weight. Type is a Field Widget Plugin, you can find
valid options searching annotations of @FieldWidget in code.

Finally there is a routing.yml file which maps the entity add handler to a custom url,
in this case /sk/contactform/add
