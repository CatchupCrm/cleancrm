<?php
return [
  'role_structure' => [
    'owner' => [
      'users' => 'c,r,u,d',
      'acl' => 'c,r,u,d',
      'profile' => 'r,u'
    ],
    'administrator' => [
      'users' => 'c,r,u,d',
      'acl' => 'c,r,u,d',
      'profile' => 'r,u'
    ],
    'manager' => [
      'users' => 'c,r,u,d',
      'acl' => 'c,r,u,d',
      'profile' => 'r,u'
    ],
    'teamleader' => [
      'users' => 'c,r,u,d',
      'acl' => 'c,r,u,d',
      'profile' => 'r,u'
    ],
    'staff' => [
      'users' => 'c,r,u,d',
      'acl' => 'c,r,u,d',
      'profile' => 'r,u'
    ],
    'client_manager' => [
      'profile' => 'r,u'
    ],
    'user' => [
      'profile' => 'r,u'
    ],
  ],
  'permission_structure' => [
    'cru_user' => [
      'profile' => 'c,r,u'
    ],
  ],
  'permissions_map' => [
    'c' => 'create',
    'r' => 'read',
    'u' => 'update',
    'd' => 'delete'
  ]
];
