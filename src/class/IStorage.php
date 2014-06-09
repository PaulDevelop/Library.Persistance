<?php

namespace Com\PaulDevelop\Library\Persistence;

interface IStorage
{
    /**
     * @param IEntity $entity
     *
     * @return int
     */
    public function add(IEntity $entity);

    /**
     * @param $id
     *
     * @return IEntity
     */
    public function get($id);

    /**
     * @param         $id
     * @param IEntity $entity
     */
    public function set($id, IEntity $entity);

    /**
     * @param $id
     */
    public function delete($id);
}

/*
phptype(dbsyntax)://username:password@protocol+hostspec/database?option=value
phptype://username:password@protocol+hostspec:110//usr/db_file.db
phptype://username:password@hostspec/database
phptype://username:password@hostspec
phptype://username@hostspec
phptype://hostspec/database
phptype://hostspec
phptype:///database
phptype:///database?option=value&anotheroption=anothervalue
phptype(dbsyntax)
phptype

mysql://user@unix(/path/to/socket)/pear
pgsql://user:pass@tcp(localhost:5555)/pear
sqlite:////full/unix/path/to/file.db?mode=0666
sqlite:///c:/full/windows/path/to/file.db?mode=0666
mysqli://user:pass@localhost/pear?key=client-key.pem&cert=client-cert.pem
oci8://username:password@foo.example.com[:port]/?service=service
username/password@[//]host[:port][/service_name]
*/