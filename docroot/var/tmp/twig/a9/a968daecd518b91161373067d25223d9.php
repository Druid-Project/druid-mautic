<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/CoreBundle/Assets/css/app/less/components/calendar.less */
class __TwigTemplate_cb11142da5e6451122b7ab055cd6b5f7 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ".xdsoft_datetimepicker {
\tbackground: var(--layer);
    border-bottom: 1px solid var(--layer);
    border-left: 1px solid var(--layer);
    border-right: 1px solid var(--layer);
    border-top: 1px solid var(--layer);
\tcolor: var(--text-secondary);
    border-radius: var(--border-radius-md);
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_default, .xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current, .xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div.xdsoft_current
{
\tbackground: var(--background-brand);
\tcolor: var(--text-on-color);
\tbox-shadow: none;
}

.xdsoft_datetimepicker .xdsoft_calendar td:hover, .xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div:hover
{
\tbackground: var(--layer-hover) !important;
    color: var(--text-primary) !important;
}

.xdsoft_datetimepicker .xdsoft_calendar th {
\tbackground: transparent;
\tcolor: var(--text-secondary);
}


.xdsoft_datetimepicker .xdsoft_calendar td {
\tbackground: transparent;
\tborder-radius: 20px;
    color: var(--text-secondary);
    padding: 10px;
\ttransition: var(--transition-all-productive);
}

.xdsoft_datetimepicker .xdsoft_calendar td, .xdsoft_datetimepicker .xdsoft_calendar th {
\ttext-align: center;
\theight: 38px;
\tborder: none;
}

.xdsoft_datetimepicker .xdsoft_datepicker {
    width: 290px;
\tmargin-top: 8px;
}

.xdsoft_datetimepicker .xdsoft_calendar td > div {padding-right: 0;}

.xdsoft_datetimepicker .xdsoft_calendar table {
    border-collapse: separate;
    border-spacing: 3px;
}

.xdsoft_datetimepicker .xdsoft_next,
.xdsoft_datetimepicker .xdsoft_prev,
.xdsoft_datetimepicker .xdsoft_today_button,
.xdsoft_datetimepicker .xdsoft_label i {transition: var(--transition-all-productive);}

.xdsoft_datetimepicker .xdsoft_today_button {
    background-color: var(--text-primary);
    background-repeat: no-repeat;
    -webkit-mask-image: url(\"data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27%3E%3Cpath d=%27M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM11 13V17H6V13H11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z%27/%3E%3C/svg%3E\");
    -webkit-mask-repeat: no-repeat;
    -webkit-mask-position: 0 6px;
    mask-image: url(\"data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27%3E%3Cpath d=%27M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM11 13V17H6V13H11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z%27/%3E%3C/svg%3E\");
    mask-repeat: no-repeat;
    mask-position: 0 6px;
    margin-left: 12px;
\tbackground-image: none;
}

.xdsoft_datetimepicker .xdsoft_prev, .xdsoft_datetimepicker .xdsoft_next {
    background-color: var(--text-primary);
    background-repeat: no-repeat;
    -webkit-mask-image: url(\"data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27%3E%3Cpath d=%27M8.36853 12L13.1162 3.03212L14.8838 3.9679L10.6315 12L14.8838 20.0321L13.1162 20.9679L8.36853 12Z%27 fill=%27black%27/%3E%3C/svg%3E\");
    -webkit-mask-repeat: no-repeat;
    mask-image: url(\"data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27%3E%3Cpath d=%27M8.36853 12L13.1162 3.03212L14.8838 3.9679L10.6315 12L14.8838 20.0321L13.1162 20.9679L8.36853 12Z%27 fill=%27black%27/%3E%3C/svg%3E\");
    mask-repeat: no-repeat;
    background-position: 0 6px;
    bottom: -5px;
\tbackground-image: none;
}


.xdsoft_datetimepicker .xdsoft_next {transform: scaleX(-1);}

.xdsoft_datetimepicker .xdsoft_label i {margin-left: 2px;}

.xdsoft_datetimepicker .xdsoft_label {
\ttext-wrap: nowrap;
\tbackground-color: var(--layer);
}

.xdsoft_datetimepicker .xdsoft_label:hover > span {text-decoration: none;}

.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option {
    padding: 6px 10px 6px 8px;
    text-decoration: none !important;
\ttransition: var(--transition-all-productive);
}

.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option:hover {
    color: var(--text-primary);
    background: var(--layer-hover);
}

.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option.xdsoft_current {
    box-shadow: none;
    color: var(--text-on-color);
    background: var(--background-brand);
}
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select {
\tmax-height: 180px;
\twidth: 130px;
}

.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div {
\tbackground: var(--layer-02);
    border-top: none;
\theight: 32px;
    line-height: 32px;
\tcolor: var(--text-secondary);
\ttransition: var(--transition-all-productive)
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/calendar.less";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/calendar.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/calendar.less");
    }
}
