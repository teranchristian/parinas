# Simple Authentication

Simple authentication for [Kohana](http://kohanaframework.org) with [Bonafide](https://github.com/shadowhand/bonafide) hashing method.

SimpleAuth is not attempt to be a replacement for other authentication module such as [Kohana Auth](https://github.com/kohana/auth). Think SimpleAuth as a starting point to build your own authentication method.

## How to use this stuff ?

Not much different with Kohana [Auth](https://github.com/kohana/auth).

### Login

    SimpleAuth::instance()->login('username', 'password');

### Logout

    SimpleAuth::instance()->logout();

### Check

    if (SimpleAuth::instance()->logged_in())
    {
        //do some stuff
    }

## Basic database schema

Considering there are different [mechanism](https://github.com/shadowhand/bonafide/wiki) in Bonafide, adjust <code>password</code> field type with your Bonafide mechanism config.

### MySQL

    CREATE TABLE IF NOT EXISTS `users` (
       `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
      `email` varchar(127) NOT NULL,
      `username` varchar(32) NOT NULL DEFAULT '',
      `password` tinytext NOT NULL,
      `salt` varchar(100) DEFAULT NULL,
      `last_login` int(10) unsigned DEFAULT NULL,
      PRIMARY KEY (`id`),
      UNIQUE KEY `uniq_username` (`username`),
      UNIQUE KEY `uniq_email` (`email`)
    ) DEFAULT CHARSET=utf8;
