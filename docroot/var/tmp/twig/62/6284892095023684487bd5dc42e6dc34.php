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

/* @bundles/CoreBundle/Assets/js/14.marketplace.js */
class __TwigTemplate_bbc86ab680a06fda171a6d4241bc8c93 extends Template
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
        yield "'use strict';

Mautic.Marketplace = {
    /**
     * @param string vendorName The packagist vendor name
     * @param string packageName The packagist package name to install
     * @param callback successCallback Callback to be executed on success (jQuery success object)
     * @param callback errorCallback Callback to be executed on error (jQuery error object)
     */
    installPackage: (vendorName, packageName, successCallback, errorCallback) => {
        mQuery.ajax({
            showLoadingBar: true,
            url: mauticAjaxUrl + `?action=marketplace:installPackage`,
            type: 'POST',
            data: JSON.stringify({
                vendor: vendorName,
                package: packageName
            }),
            dataType: 'json',
            success: successCallback,
            error: errorCallback
        });
    },

    /**
     * @param string vendorName The packagist vendor name
     * @param string packageName The packagist package name to remove
     * @param callback successCallback Callback to be executed on success (jQuery success object)
     * @param callback errorCallback Callback to be executed on error (jQuery error object)
     */
    removePackage: (vendorName, packageName, successCallback, errorCallback) => {
        mQuery.ajax({
            showLoadingBar: true,
            url: mauticAjaxUrl + `?action=marketplace:removePackage`,
            type: 'POST',
            data: JSON.stringify({
                vendor: vendorName,
                package: packageName
            }),
            dataType: 'json',
            success: successCallback,
            error: errorCallback
        });
    },
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/js/14.marketplace.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/14.marketplace.js", "/app/docroot/app/bundles/CoreBundle/Assets/js/14.marketplace.js");
    }
}
