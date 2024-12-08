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

/* @bundles/IntegrationsBundle/Assets/js/integrations.js */
class __TwigTemplate_1ad16b05bf4dc3a80fd9482cf43e0eab extends Template
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
        yield "Mautic.integrationsConfigOnLoad = function () {
    mQuery('.integration-keyword-filter').each(function() {
        mQuery(this).off(\"keyup.integration-filter\").on(\"keyup.integration-filter\", function (event) {
            var integration = mQuery(this).attr('data-integration');
            var object = mQuery(this).attr('data-object');
            Mautic.getPaginatedIntegrationFields(
                {
                    'integration': integration,
                    'object': object,
                    'keyword': mQuery(this).val()
                },
                1,
                this
            );
        });
    });

    Mautic.activateIntegrationFieldUpdateActions();
};

Mautic.getPaginatedIntegrationFields = function(settings, page, element) {
    var requestName = settings.integration + '-' + settings.object;
    var action = mauticBaseUrl + 's/integration/' + settings.integration + '/config/' + settings.object + '/' + page;
    if (settings.keyword) {
        action = action + '?keyword=' + settings.keyword;
    }

    if (typeof Mautic.activeActions == 'undefined') {
        Mautic.activeActions = {};
    } else if (typeof Mautic.activeActions[requestName] != 'undefined') {
        Mautic.activeActions[requestName].abort();
    }

    var object    = settings.object;
    var fieldsTab = '#field-mappings-'+object+'-container';

    if (element && mQuery(element).is('input')) {
        Mautic.activateLabelLoadingIndicator(mQuery(element).attr('id'));
    }
    var fieldsContainer = '#field-mappings-'+object;

    var modalId = '#'+mQuery(fieldsContainer).closest('.modal').attr('id');
    Mautic.startModalLoadingBar(modalId);

    Mautic.activeActions[requestName] = mQuery.ajax({
        showLoadingBar: false,
        url: action,
        type: \"POST\",
        dataType: \"json\",
        success: function (response) {
            if (response.success) {
                mQuery(fieldsContainer).html(response.html);
                Mautic.onPageLoad(fieldsContainer);
                Mautic.activateIntegrationFieldUpdateActions();
                if (mQuery(fieldsTab).length) {
                    mQuery(fieldsTab).removeClass('hide');
                }
            } else if (mQuery(fieldsTab).length) {
                mQuery(fieldsTab).addClass('hide');
            }

            if (element) {
                Mautic.removeLabelLoadingIndicator();
            }

            Mautic.stopModalLoadingBar(modalId);
        },
        error: function (request, textStatus, errorThrown) {
            Mautic.processAjaxError(request, textStatus, errorThrown);
        },
        complete: function () {
            delete Mautic.activeActions[requestName]
        }
    });
};

Mautic.updateIntegrationField = function(integration, object, field, fieldOption, fieldValue) {
    var action = mauticBaseUrl + 's/integration/' + integration + '/config/' + object + '/field/' + field;
    var modal = mQuery('form[name=integration_config]').closest('.modal');
    var requestName = integration + object + field + fieldOption;

    // Disable submit buttons until the action is done so nothing is lost
    mQuery(modal).find('.modal-form-buttons .btn').prop('disabled', true);

    if (typeof Mautic.activeActions == 'undefined') {
        Mautic.activeActions = {};
    } else if (typeof Mautic.activeActions[requestName] != 'undefined') {
        Mautic.activeActions[requestName].abort();
    }

    Mautic.startModalLoadingBar(mQuery(modal).attr('id'));

    // Must use bracket notation to use variable for key
    var obj = {};
    obj[fieldOption] = fieldValue;

    Mautic.activeActions[requestName] = mQuery.ajax({
        showLoadingBar: false,
        url: action,
        type: \"POST\",
        dataType: \"json\",
        data: obj,
        error: function (request, textStatus, errorThrown) {
            Mautic.processAjaxError(request, textStatus, errorThrown);
        },
        complete: function () {
            modal.find('.modal-form-buttons .btn').prop('disabled', false);
            delete Mautic.activeActions[requestName];
        }
    });
};

Mautic.activateIntegrationFieldUpdateActions = function () {
    mQuery('.integration-mapped-field').each(function() {
        mQuery(this).off(\"change.integration-mapped-field\").on(\"change.integration-mapped-field\", function (event) {
            var integration = mQuery(this).attr('data-integration');
            var object = mQuery(this).attr('data-object');
            var field = mQuery(this).attr('data-field');
            Mautic.updateIntegrationField(integration, object, field, 'mappedField', mQuery(this).val());
        });
    });

    mQuery('.integration-sync-direction').each(function() {
        mQuery(this).off(\"change.integration-sync-direction\").on(\"change.integration-sync-direction\", function (event) {
            var integration = mQuery(this).attr('data-integration');
            var object = mQuery(this).attr('data-object');
            var field = mQuery(this).attr('data-field');
            Mautic.updateIntegrationField(integration, object, field, 'syncDirection', mQuery(this).val());
        });
    });
};

Mautic.authorizeIntegration = function () {
    mQuery('#integration_details_in_auth').val(1);
    Mautic.postForm(mQuery('form[name=\"integration_config\"]'), 'loadIntegrationAuthWindow');
};";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/IntegrationsBundle/Assets/js/integrations.js";
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
        return new Source("", "@bundles/IntegrationsBundle/Assets/js/integrations.js", "/app/docroot/app/bundles/IntegrationsBundle/Assets/js/integrations.js");
    }
}