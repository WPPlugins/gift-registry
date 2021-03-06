<?php
/**
Copyright 2012 Sliverware Applications, Inc

This file is part of the WordPress Gift Registry Plugin.

WordPress Gift Registry Plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

WordPress Gift Registry Plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with WordPress Gift Registry Plugin.  If not, see <http://www.gnu.org/licenses/>.
*/


function gr_handle_paypal_cancelled() {
    require_once(dirname(__FILE__) . '/cart.php');

    $listUrl = get_option('gr_list_url');
    $html = $listUrl ? "<a href='$listUrl'>Back to Registry</a>" : "";

    $cart = (!empty($_COOKIE['GR_MyCart']) ? json_decode(stripslashes($_COOKIE['GR_MyCart'])) : '');
    $html .= gr_cart_html($cart);

    return $html;
}

