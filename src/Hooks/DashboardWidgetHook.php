<?php

namespace LibreNMS\Interfaces\Plugins\Hooks;

interface DashboardWidgetHook
{
    /**
     * Get the widget identifier that will be used in widget registration
     * This should be unique across all widgets.
     *
     * @return string
     */
    public function getWidgetName(): string;

    /**
     * Get the widget controller class that handles the widget rendering
     * This controller should extend App\Http\Controllers\Widgets\WidgetController
     *
     * @return string
     */
    public function getWidgetController(): string;

    /**
     * Get the widget title for display in the widget selection dropdown
     * This will be used as the default title if no custom title is set
     *
     * @return string
     */
    public function getWidgetTitle(): string;
}
