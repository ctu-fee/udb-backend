<?php
return array(
    'router' => array(
        'routes' => array(
            'udb-backend.rest.users' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/users[/:user_id]',
                    'defaults' => array(
                        'controller' => 'UdbBackend\\V1\\Rest\\Users\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'udb-backend.rest.users',
        ),
    ),
    'service_manager' => array(
        'invokables' => array(
            'UdbBackend\\V1\\Rest\\Users\\UsersResource' => 'UdbBackend\\V1\\Rest\\Users\\UsersResource',
        ),
    ),
    'zf-rest' => array(
        'UdbBackend\\V1\\Rest\\Users\\Controller' => array(
            'listener' => 'UdbBackend\\V1\\Rest\\Users\\UsersResource',
            'route_name' => 'udb-backend.rest.users',
            'route_identifier_name' => 'user_id',
            'collection_name' => 'users',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'UdbBackend\\V1\\Rest\\Users\\UsersEntity',
            'collection_class' => 'UdbBackend\\V1\\Rest\\Users\\UsersCollection',
            'service_name' => 'users',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'UdbBackend\\V1\\Rest\\Users\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'UdbBackend\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.udb-backend.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'UdbBackend\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.udb-backend.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'UdbBackend\\V1\\Rest\\Users\\UsersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'udb-backend.rest.users',
                'route_identifier_name' => 'user_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'UdbBackend\\V1\\Rest\\Users\\UsersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'udb-backend.rest.users',
                'route_identifier_name' => 'user_id',
                'is_collection' => true,
            ),
        ),
    ),
);
