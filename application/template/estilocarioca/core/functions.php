<?php

function head() {
    require_once ROOT . '/partials/head.php';
}

function footer() {
    require_once ROOT . '/partials/footer.php';
}

function set_active($page, $item) {
    $item = explode(',', $item);
    foreach ($item as $k => $v) {
        if ($v == $page) {
            return 'active';
        }
    }
}

function navbar($items = array()) {

    $items = array(
        'ul navbar-nav navbar-right' => array(
            'Home' => array('url' => ''),
            'Dropdown' => array('url' => false)
        )
    );

    if (!empty($items)) {
        $out = '';
        $out .= '<nav class="collapse navbar-collapse">';
        foreach ($items as $k => $item) {
            
        }
        /*
          $out .= '<ul class="nav navbar-nav navbar-right">
          <li class="<?php echo set_active($page, 'home, '); ?>">
          <a href="<?php echo SITE; ?>/">Home</a>
          </li>
          <li class="dropdown-hover <?php echo set_active($page, 'dropdown, dropdown/page-1'); ?>">
          <a href="<?php echo SITE ?>/dropdown">Dropdown</a>
          <ul class="dropdown-menu">
          <li><a href="<?php echo SITE ?>/dropdown/page-1">Page 1</a></li>
          <li><a href="<?php echo SITE ?>/dropdown/page-2">Page 2</a></li>
          </ul>
          </li>
          </ul>
          </nav>';
         */
        $out .= '</nav>';
        echo $out;
    }
}

function link_to($url = '') {
    return SITE . $url;
}

function assets($url = '') {
    return SITE . 'assets' . DS . $url;
}

function assign_js($items = array(), $external = false) {
    $out = '';
    foreach ($items as $k => $src) {
        if ($external) {
            $out .= '<script src="' . $src . '" ></script>';
        } else {
            $out .= '<script src="' . assets('js/' . $src) . '" ></script>';
        }
    }
    echo $out;
}

function assign_css($items = array(), $external = false) {
    $out = '';
    foreach ($items as $k => $src) {
        if ($external) {
            $out .= '<link rel="stylesheet" href="' . $src . '" />';
        } else {
            $out .= '<link rel="stylesheet" href="' . assets('css/' . $src) . '" />';
        }
    }
    echo $out;
}

function assign_meta($items = array()) {
    $out = '';
    foreach ($items as $k => $src) {
        $out .= '<meta name="' . $k . '" content="' . $src . '">';
    }
    echo $out;
}
