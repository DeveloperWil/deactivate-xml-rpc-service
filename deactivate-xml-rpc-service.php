<?php
/*
Plugin Name: Deactivate XML-RPC Service
Plugin URI: https://zeropointdevelopment.com/wordpress-plugins/deactivate-xml-rpc-service-wordpress-plugin/
Description: Deactivates the XMP-RPC API service.
Version: 1.0.1
Author: DeveloperWil
Author URI: https://profiles.wordpress.org/developerwil
License: GPLv2
*/
/*
    Copyright © 2017 Zero Point Development.  (https://zeropointdevelopment.com)

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/
add_filter( 'xmlrpc_enabled', '__return_false' );