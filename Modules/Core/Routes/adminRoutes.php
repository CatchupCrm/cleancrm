<?php
// Routes in this group must be authorized.
//'middleware' => 'authorize'
Route::group([], function () {

    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);
    Route::get('staff/profile', ['as' => 'staff.profile', 'uses' => 'StaffController@profile']);
    Route::patch('staff/profile', ['as' => 'staff.profile.patch', 'uses' => 'StaffController@profileUpdate']);
    // Site administration section
    Route::group(['prefix' => 'adminpanel'], function () {

        Route::get('', ['as' => 'adminpanel', 'uses' => 'DashboardController@index']);
        Route::get('companies/getcompany', ['as' => 'adminpanel', 'uses' => 'CompaniesController@getcompany']);
        Route::get('companies/deletelogo', ['as' => 'deletecompanylogo', 'uses' => 'CompaniesController@getcompany']);
        // Staff routes
        Route::post('staff/enableSelected',
          ['as' => 'admin.staff.enable-selected', 'uses' => 'StaffController@enableSelected']);
        Route::post('staff/disableSelected',
          ['as' => 'admin.staff.disable-selected', 'uses' => 'StaffController@disableSelected']);
        Route::get('staff/search', ['as' => 'admin.staff.search', 'uses' => 'StaffController@searchByName']);
        Route::get('staff/list', ['as' => 'admin.staff.list', 'uses' => 'StaffController@listByPage']);
        Route::post('staff/getInfo', ['as' => 'admin.staff.get-info', 'uses' => 'StaffController@getInfo']);
        Route::post('staff', ['as' => 'admin.staff.store', 'uses' => 'StaffController@store']);
        Route::get('staff', ['as' => 'admin.staff.index', 'uses' => 'StaffController@index']);
        Route::get('staff/manage', ['as' => 'admin.staff.manage', 'uses' => 'StaffController@index']);
        Route::get('staff/create', ['as' => 'admin.staff.create', 'uses' => 'StaffController@create']);
        Route::get('staff/{staffId}', ['as' => 'admin.staff.show', 'uses' => 'StaffController@show']);
        Route::patch('staff/{staffId}', ['as' => 'admin.staff.patch', 'uses' => 'StaffController@update']);
        Route::put('staff/{staffId}', ['as' => 'admin.staff.update', 'uses' => 'StaffController@update']);
        Route::delete('staff/{staffId}', ['as' => 'admin.staff.destroy', 'uses' => 'StaffController@destroy']);
        Route::get('staff/{staffId}/edit', ['as' => 'admin.staff.edit', 'uses' => 'StaffController@edit']);
        Route::get('staff/{staffId}/confirm-delete',
          ['as' => 'admin.staff.confirm-delete', 'uses' => 'StaffController@getModalDelete']);
        Route::get('staff/{staffId}/delete', ['as' => 'admin.staff.delete', 'uses' => 'StaffController@destroy']);
        Route::get('staff/{staffId}/enable', ['as' => 'admin.staff.enable', 'uses' => 'StaffController@enable']);
        Route::get('staff/{staffId}/disable', ['as' => 'admin.staff.disable', 'uses' => 'StaffController@disable']);
        Route::post('department', ['as' => 'admin.departments.store', 'uses' => 'DepartmentsController@store']);
        Route::get('departments', ['as' => 'admin.departments.index', 'uses' => 'DepartmentsController@index']);
        Route::get('departments/manage', ['as' => 'admin.departments.manage', 'uses' => 'DepartmentsController@index']);
        Route::get('department/create', ['as' => 'admin.departments.create', 'uses' => 'DepartmentsController@create']);
        Route::get('department/{departmentId}',
          ['as' => 'admin.departments.show', 'uses' => 'DepartmentsController@show']);
        Route::patch('department/{departmentId}',
          ['as' => 'admin.departments.patch', 'uses' => 'DepartmentsController@update']);
        Route::put('department/{departmentId}',
          ['as' => 'admin.departments.update', 'uses' => 'DepartmentsController@update']);
        Route::delete('department/{departmentId}',
          ['as' => 'admin.departments.destroy', 'uses' => 'DepartmentsController@destroy']);
        Route::get('department/{departmentId}/edit',
          ['as' => 'admin.departments.edit', 'uses' => 'DepartmentsController@edit']);
        Route::get('department/{departmentId}/confirm-delete',
          ['as' => 'admin.departments.confirm-delete', 'uses' => 'DepartmentsController@getModalDelete']);
        Route::get('department/{departmentId}/delete',
          ['as' => 'admin.departments.delete', 'uses' => 'DepartmentsController@destroy']);
        Route::post('team', ['as' => 'admin.teams.store', 'uses' => 'TeamsController@store']);
        Route::get('teams', ['as' => 'admin.teams.index', 'uses' => 'TeamsController@index']);
        Route::get('teams/manage', ['as' => 'admin.teams.manage', 'uses' => 'TeamsController@index']);
        Route::get('team/create', ['as' => 'admin.teams.create', 'uses' => 'TeamsController@create']);
        Route::get('team/{teamId}', ['as' => 'admin.teams.show', 'uses' => 'TeamsController@show']);
        Route::patch('team/{teamId}', ['as' => 'admin.teams.patch', 'uses' => 'TeamsController@update']);
        Route::put('team/{teamId}', ['as' => 'admin.teams.update', 'uses' => 'TeamsController@update']);
        Route::delete('team/{teamId}', ['as' => 'admin.teams.destroy', 'uses' => 'TeamsController@destroy']);
        Route::get('team/{teamId}/edit', ['as' => 'admin.teams.edit', 'uses' => 'TeamsController@edit']);
        Route::get('team/{teamId}/confirm-delete',
          ['as' => 'admin.teams.confirm-delete', 'uses' => 'TeamsController@getModalDelete']);
        Route::get('team/{teamId}/delete', ['as' => 'admin.teams.delete', 'uses' => 'TeamsController@destroy']);
        // Role routes
        Route::post('roles/enableSelected',
          ['as' => 'admin.roles.enable-selected', 'uses' => 'RolesController@enableSelected']);
        Route::post('roles/disableSelected',
          ['as' => 'admin.roles.disable-selected', 'uses' => 'RolesController@disableSelected']);
        Route::get('roles/search', ['as' => 'admin.roles.search', 'uses' => 'RolesController@searchByName']);
        Route::post('roles/getInfo', ['as' => 'admin.roles.get-info', 'uses' => 'RolesController@getInfo']);
        Route::post('roles', ['as' => 'admin.roles.store', 'uses' => 'RolesController@store']);
        Route::get('roles', ['as' => 'admin.roles.index', 'uses' => 'RolesController@index']);
        Route::get('roles/manage', ['as' => 'admin.roles.manage', 'uses' => 'RolesController@index']);
        Route::get('roles/create', ['as' => 'admin.roles.create', 'uses' => 'RolesController@create']);
        Route::get('roles/{roleId}', ['as' => 'admin.roles.show', 'uses' => 'RolesController@show']);
        Route::patch('roles/{roleId}', ['as' => 'admin.roles.patch', 'uses' => 'RolesController@update']);
        Route::put('roles/{roleId}', ['as' => 'admin.roles.update', 'uses' => 'RolesController@update']);
        Route::delete('roles/{roleId}', ['as' => 'admin.roles.destroy', 'uses' => 'RolesController@destroy']);
        Route::get('roles/{roleId}/edit', ['as' => 'admin.roles.edit', 'uses' => 'RolesController@edit']);
        Route::get('roles/{roleId}/confirm-delete',
          ['as' => 'admin.roles.confirm-delete', 'uses' => 'RolesController@getModalDelete']);
        Route::get('roles/{roleId}/delete', ['as' => 'admin.roles.delete', 'uses' => 'RolesController@destroy']);
        Route::get('roles/{roleId}/enable', ['as' => 'admin.roles.enable', 'uses' => 'RolesController@enable']);
        Route::get('roles/{roleId}/disable', ['as' => 'admin.roles.disable', 'uses' => 'RolesController@disable']);
        // Menu routes
        Route::post('menus', ['as' => 'admin.menus.save', 'uses' => 'MenusController@save']);
        Route::get('menus', ['as' => 'admin.menus.index', 'uses' => 'MenusController@index']);
        Route::get('menus/getData/{menuId}', ['as' => 'admin.menus.get-data', 'uses' => 'MenusController@getData']);
        Route::get('menus/{menuId}/confirm-delete',
          ['as' => 'admin.menus.confirm-delete', 'uses' => 'MenusController@getModalDelete']);
        Route::get('menus/{menuId}/delete', ['as' => 'admin.menus.delete', 'uses' => 'MenusController@destroy']);
        // Permission routes
        Route::get('permissions/generate',
          ['as' => 'admin.permissions.generate', 'uses' => 'PermissionsController@generate']);
        Route::post('permissions/enableSelected',
          ['as' => 'admin.permissions.enable-selected', 'uses' => 'PermissionsController@enableSelected']);
        Route::post('permissions/disableSelected',
          ['as' => 'admin.permissions.disable-selected', 'uses' => 'PermissionsController@disableSelected']);
        Route::post('permissions', ['as' => 'admin.permissions.store', 'uses' => 'PermissionsController@store']);
        Route::get('permissions', ['as' => 'admin.permissions.index', 'uses' => 'PermissionsController@index']);
        Route::get('permissions/create',
          ['as' => 'admin.permissions.create', 'uses' => 'PermissionsController@create']);
        Route::get('permissions/{permissionId}',
          ['as' => 'admin.permissions.show', 'uses' => 'PermissionsController@show']);
        Route::patch('permissions/{permissionId}',
          ['as' => 'admin.permissions.patch', 'uses' => 'PermissionsController@update']);
        Route::put('permissions/{permissionId}',
          ['as' => 'admin.permissions.update', 'uses' => 'PermissionsController@update']);
        Route::delete('permissions/{permissionId}',
          ['as' => 'admin.permissions.destroy', 'uses' => 'PermissionsController@destroy']);
        Route::get('permissions/{permissionId}/edit',
          ['as' => 'admin.permissions.edit', 'uses' => 'PermissionsController@edit']);
        Route::get('permissions/{permissionId}/confirm-delete',
          ['as' => 'admin.permissions.confirm-delete', 'uses' => 'PermissionsController@getModalDelete']);
        Route::get('permissions/{permissionId}/delete',
          ['as' => 'admin.permissions.delete', 'uses' => 'PermissionsController@destroy']);
        Route::get('permissions/{permissionId}/enable',
          ['as' => 'admin.permissions.enable', 'uses' => 'PermissionsController@enable']);
        Route::get('permissions/{permissionId}/disable',
          ['as' => 'admin.permissions.disable', 'uses' => 'PermissionsController@disable']);
        /*
         * Webhook
         */
        \Event::listen('ticket.details', function ($details) {
            $api_control = new \App\Http\Controllers\Common\ApiSettings();
            $api_control->ticketDetailEvent($details);
        });
    }); // End of ADMIN group
});
