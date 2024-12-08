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

/* @bundles/WebhookBundle/Assets/js/webhook.js */
class __TwigTemplate_846510c3d6c65640fc7afdbe549350cc extends Template
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
        yield "Mautic.sendHookTest = function() {

    var url = mQuery('#webhook_webhookUrl').val();
    var secret = mQuery('#webhook_secret').val();
    var eventTypes = mQuery(\"#event-types input[type='checkbox']\");
    var selectedTypes = [];

    eventTypes.each(function() {
        var item = mQuery(this);
        if (item.is(':checked')) {
            selectedTypes.push(item.val());
        }
    });

    var data = {
        action: 'webhook:sendHookTest',
        url: url,
        secret: secret,
        types: selectedTypes
    };

    var spinner = mQuery('#spinner');

    // show the spinner
    spinner.removeClass('hide');

    mQuery.ajax({
        url: mauticAjaxUrl,
        data: data,
        type: 'POST',
        dataType: \"json\",
        success: function(response) {
            if (response.success) {
                mQuery('#tester').html(response.html);
            }
        },
        error: function (request, textStatus, errorThrown) {
            Mautic.processAjaxError(request, textStatus, errorThrown);
        },
        complete: function(response) {
            spinner.addClass('hide');
        }
    })
};";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/WebhookBundle/Assets/js/webhook.js";
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
        return new Source("", "@bundles/WebhookBundle/Assets/js/webhook.js", "/app/docroot/app/bundles/WebhookBundle/Assets/js/webhook.js");
    }
}
