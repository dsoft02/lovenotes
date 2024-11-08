<?php

if (!function_exists('getPageTitle')) {
    /**
     * Get site name and page title.
     *
     * @param string $pageTitle
     * @return string
     */
    function getPageTitle($pageTitle = '') {
        $siteName = 'Love Notes To My Baby';
        return $pageTitle ? "{$siteName} - {$pageTitle}" : $siteName;
    }
}

if (!function_exists('isActiveRoute')) {
    /**
     * Check if the given route name is active.
     *
     * @param string|array $routeNames
     * @return string
     */
    function isActiveRoute($routeNames)
    {
        if (is_array($routeNames)) {
            return in_array(Route::currentRouteName(), $routeNames) ? 'active' : '';
        }

        return Route::currentRouteName() === $routeNames ? 'active' : '';
    }
}
