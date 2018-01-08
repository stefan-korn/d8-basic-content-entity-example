#Drupal 8 Basic Content Entity Example

This is a basic example for a content entity in Drupal 8

There is this documentation on Drupal.org for a basic content entity:
https://www.drupal.org/docs/8/api/entity-api/create-a-custom-content-entity

While this is valid and helpful for basic understanding, it is of limited
practical use imho.

Another example for a config is provided in Examples module
https://www.drupal.org/project/examples
Example given there has a lot more to it and if working from there it is maybe
a bit harder to get your head around all the things used there and to determine what
you might need and what you do not need

So my intention here is to provide a very basic implementation and explain options
and effects basically for my own reference.

At this moment the example provides the following:

* a content entity with three fields beside the id and uuid fields, these fields
are
    * name (string/text filed)
    * mail (email field)
    * message (long text field)
* a form for adding a content entity

Nothing more at this moment, will update it occasionally

