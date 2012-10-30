Currently just the design with bootstrap!

Tables:
=======

* Tickets
  * id [int - index]
  * time [int]
  * content [string]

* Users (extended)
  * tripcode
  * username

Pages:
======

* Issues
  * Browse
    * open|close
    * <tag> (extended)
    * <assignee> (extended)
  * New
* New
* Register (extended)
  
Bangs:
=====

Data here, when on it's own line, and matches the pattern properly, will be pushed into the object info, and removed from the text.

Minimal:
--------

* !reply:<id>
  * Identifies the ticket that you're responding to.
* !identify:keyphrase
  * renders a tripcode to identify user (minimal). if in registry, shows user. (extended)
* !set:[open|close]
  * assigns a status to the ticket

Extended:
---------

* !tag:<tag name>
  * adds a tag to the root ticket
* !untag:<tag name>
  * removes a tag from the root ticket
* !assign:<registered username>
  * assigns a user to the root ticket

Config:
=======

Salt:
`$salt = <random garble build by init()>`

Categories:`cat(<tag|tags>,<color>)`
