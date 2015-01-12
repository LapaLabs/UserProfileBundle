# Getting Started

## Install

Install bundle with `Composer` dependency manager first by running the command:

`$ composer require "lapalabs/user-profile-bundle:dev-master"`

## Include

Enable the bundle in application kernel for `prod` environment:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // other bundles...
        new LapaLabs\UserProfileBundle\LapaLabsUserProfileBundle(),
    );
}
```

## Create your Profile class

``` php
<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use LapaLabs\UserProfileBundle\Model\AbstractProfile as BaseProfile;

/**
 * Profile
 *
 * @ORM\Entity()
 * @ORM\Table(name="user_profile")
 */
class Profile extends BaseProfile
{
    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }
}
```

## Resolve UserInterface entity with your User entity

Profile relates to User entity with `OneToOne` relationship by default.

``` yaml
doctrine:
    orm:
        resolve_target_entities:
            Symfony\Component\Security\Core\User\UserInterface: Acme\UserBundle\Entity\User
```

* Meaning that you already have your `User` entity. Create it if not.
You can easy use amazing [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle) for it.

## Update database schema

``` bash
$ php app/console doctrine:schema:update --force
```

## Congratulations!

You're ready to use it!
