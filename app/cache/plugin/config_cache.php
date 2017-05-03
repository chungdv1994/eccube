<?php return array (
  'EccubeApi' => 
  array (
    'config' => 
    array (
      'name' => 'EccubeApi',
      'code' => 'EccubeApi',
      'version' => '1.0.3',
      'event' => 'EccubeApiEvent',
      'service' => 
      array (
        0 => 'EccubeApiServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
        1 => '/Resource/doctrine/oauth2',
        2 => '/Resource/doctrine/oauth2/openid',
      ),
    ),
    'event' => 
    array (
      'eccube.event.app.request' => 
      array (
        0 => 
        array (
          0 => 'onAppRequest',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.app.response' => 
      array (
        0 => 
        array (
          0 => 'onAppResponse',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.route.admin_setting_system_member_edit.response' => 
      array (
        0 => 
        array (
          0 => 'onRouteAdminMemberResponse',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
);