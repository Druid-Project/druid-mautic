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

/* @bundles/CoreBundle/Assets/js/5.variant.js */
class __TwigTemplate_dd27bea652b8194ae5c7d414b84c3071 extends Template
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
        yield "Mautic.getAbTestWinnerForm = function(bundle, formName, abKey) {
    if (abKey && mQuery(abKey).val() && mQuery(abKey).closest('.form-group').hasClass('has-error')) {
        mQuery(abKey).closest('.form-group').removeClass('has-error');
        if (mQuery(abKey).next().hasClass('help-block')) {
            mQuery(abKey).next().remove();
        }
    }

    Mautic.activateLabelLoadingIndicator(formName+'_variantSettings_winnerCriteria');
    var id    = mQuery('#'+formName+'_sessionId').val();
    var query = \"action=\"+bundle+\":getAbTestForm&abKey=\" + mQuery(abKey).val() + \"&id=\" + id;

    mQuery.ajax({
        url: mauticAjaxUrl,
        type: \"POST\",
        data: query,
        dataType: \"json\",
        success: function (response) {
            if (typeof response.html != 'undefined') {
                if (mQuery('#'+formName+'_variantSettings_properties').length) {
                    mQuery('#'+formName+'_variantSettings_properties').replaceWith(response.html);
                } else {
                    mQuery('#'+formName+'_variantSettings').append(response.html);
                }

                if (response.html != '') {
                    Mautic.onPageLoad('#'+formName+'_variantSettings_properties', response);
                }
            }
        },
        error: function (request, textStatus, errorThrown) {
            Mautic.processAjaxError(request, textStatus, errorThrown);
        },
        complete: function() {
            Mautic.removeLabelLoadingIndicator();
        }
    });
};";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/js/5.variant.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/5.variant.js", "/app/docroot/app/bundles/CoreBundle/Assets/js/5.variant.js");
    }
}
