<?php
if (WP_ENV !== 'development') {
    Stack\Config::loadDefaults();
    // new Stack\URLFixer();
    // new Stack\MediaStorage();
    new Stack\QuerySplit();
    new Stack\NginxHelperActivator();
}
