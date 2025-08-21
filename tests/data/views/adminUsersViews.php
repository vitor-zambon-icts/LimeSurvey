<?php
/**
 * This contains a list of survey-related admin views that we can loop for testing
 * // TODO not complete views list
 */
return [

    // My profile/account settings
    ['personalsettings', ['route'=>'user/sa/personalsettings']],

    // Users ---------------------------------------
    // --------------------------------------------------

    // TODO needs a POST
    //['setUserPermissions', ['route'=>'user/sa/setuserpermissions/uid/{UID}']],

    ['modifyUser', ['route'=>'user/sa/modifyuser/uid/{UID}']],

    // FIXME bug, also: needs a POST
    //['setUserTemplates', ['route'=>'user/sa/setusertemplates/uid/{UID}']],

    ['usersIndex', ['route' => 'userManagement/index', 'noAdminInFront' => true]]
];
