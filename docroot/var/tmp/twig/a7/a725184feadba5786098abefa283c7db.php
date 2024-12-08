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

/* @bundles/CoreBundle/Assets/js/2.config.js */
class __TwigTemplate_076a4267270b3d30b4c0b2af59df0059 extends Template
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
        yield "Mautic.downloadIpLookupDataStore = function() {
    var ipService = mQuery('#config_coreconfig_ip_lookup_service').val();
    var ipAuth = mQuery('#config_coreconfig_ip_lookup_auth').val();

    mQuery('#iplookup_fetch_button_container .ri-loader-3-line').removeClass('hide');

    Mautic.ajaxActionRequest('downloadIpLookupDataStore', {
        service: ipService,
        auth: ipAuth
    }, function (response) {
        mQuery('#iplookup_fetch_button_container .ri-loader-3-line').addClass('hide');

        if (response.message) {
            mQuery('#iplookup_fetch_button_container').parent().removeClass('has-error').addClass('has-success');
            mQuery('#iplookup_fetch_button_container').next('.help-block').html(response.message);
        } else if (response.error) {
            mQuery('#iplookup_fetch_button_container').parent().removeClass('has-success').addClass('has-error');
            mQuery('#iplookup_fetch_button_container').next('.help-block').html(response.error);
        }
    }, false, false, 'GET');
};

Mautic.getIpLookupFormConfig = function() {
    var ipService = mQuery('#config_coreconfig_ip_lookup_service').val();

    Mautic.activateLabelLoadingIndicator('config_coreconfig_ip_lookup_service');

    Mautic.ajaxActionRequest('getIpLookupForm', {
        service: ipService
    }, function (response) {
        Mautic.removeLabelLoadingIndicator();

        mQuery('#ip_lookup_config_container').html(response.html);
        mQuery('#ip_lookup_attribution').html(response.attribution);
    }, false, false, \"GET\");
};";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/js/2.config.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/2.config.js", "/app/docroot/app/bundles/CoreBundle/Assets/js/2.config.js");
    }
}
