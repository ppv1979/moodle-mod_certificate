<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Certificate external functions and service definitions.
 *
 * @package    mod_certificate
 * @category   external
 * @copyright  2016 Juan Leyva <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$functions = array(

    'mod_certificate_get_certificates_by_courses' => array(
        'classname'     => 'mod_certificate_external',
        'methodname'    => 'get_certificates_by_courses',
        'description'   => 'Returns a list of certificate instances in a provided set of courses, if
                            no courses are provided then all the certificate instances the user has access to will be returned.',
        'type'          => 'read',
        'capabilities'  => 'mod/certificate:view',
        'services'      => array(MOODLE_OFFICIAL_MOBILE_SERVICE, 'local_mobile'),
    ),

    'mod_certificate_view_certificate' => array(
        'classname'     => 'mod_certificate_external',
        'methodname'    => 'view_certificate',
        'description'   => 'Trigger the course module viewed event and update the module completion status.',
        'type'          => 'write',
        'capabilities'  => 'mod/certificate:view',
        'services'      => array(MOODLE_OFFICIAL_MOBILE_SERVICE, 'local_mobile'),
    ),

    'mod_certificate_issue_certificate' => array(
        'classname'     => 'mod_certificate_external',
        'methodname'    => 'issue_certificate',
        'description'   => 'Create new certificate record, or return existing record for the current user.',
        'type'          => 'write',
        'capabilities'  => 'mod/certificate:view',
        'services'      => array(MOODLE_OFFICIAL_MOBILE_SERVICE, 'local_mobile'),
    ),

    'mod_certificate_get_issued_certificates' => array(
        'classname'     => 'mod_certificate_external',
        'methodname'    => 'get_issued_certificates',
        'description'   => 'Get the list of issued certificates for the current user.',
        'type'          => 'read',
        'capabilities'  => 'mod/certificate:view',
        'services'      => array(MOODLE_OFFICIAL_MOBILE_SERVICE, 'local_mobile'),
    ),
);
