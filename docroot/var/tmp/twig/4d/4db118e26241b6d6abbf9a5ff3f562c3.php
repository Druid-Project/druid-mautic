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

/* @bundles/PointBundle/Assets/js/point.js */
class __TwigTemplate_8f5214e8e4de366206d9caff3c8c2708 extends Template
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
        yield "//PointBundle
Mautic.pointOnLoad = function (container) {
    if (mQuery(container + ' #list-search').length) {
        Mautic.activateSearchAutocomplete('list-search', 'point');
    }
};

Mautic.pointTriggerOnLoad = function (container) {
    if (mQuery(container + ' #list-search').length) {
        Mautic.activateSearchAutocomplete('list-search', 'point.trigger');
    }

    if (mQuery('#triggerEvents')) {
        //make the fields sortable
        mQuery('#triggerEvents').sortable({
            items: '.trigger-event-row',
            handle: '.reorder-handle',
            stop: function(i) {
                mQuery.ajax({
                    type: \"POST\",
                    url: mauticAjaxUrl + \"?action=point:reorderTriggerEvents\",
                    data: mQuery('#triggerEvents').sortable(\"serialize\") + \"&triggerId=\" + mQuery('#pointtrigger_sessionId').val()
                });
            }
        });

        mQuery('#triggerEvents .trigger-event-row').on('mouseover.triggerevents', function() {
            mQuery(this).find('.form-buttons').removeClass('hide');
        }).on('mouseout.triggerevents', function() {
            mQuery(this).find('.form-buttons').addClass('hide');
        }).on('dblclick.triggerevents', function(event) {
            event.preventDefault();
            mQuery(this).find('.btn-edit').first().click();
        });
    }
};

Mautic.pointTriggerEventOnLoad = function (container, response) {
    //new action created so append it to the form
    if (response.eventHtml) {
        var newHtml = response.eventHtml;
        var eventId = '#triggerEvent_' + response.eventId;
        if (mQuery(eventId).length) {
            //replace content
            mQuery(eventId).replaceWith(newHtml);
            var newField = false;
        } else {
            //append content
            mQuery(newHtml).appendTo('#triggerEvents');
            var newField = true;
        }

        //initialize tooltips
        mQuery(eventId + \" *[data-toggle='tooltip']\").tooltip({html: true});

        //activate new stuff
        mQuery(eventId + \" a[data-toggle='ajax']\").click(function (event) {
            event.preventDefault();
            return Mautic.ajaxifyLink(this, event);
        });

        //initialize ajax'd modals
        mQuery(eventId + \" a[data-toggle='ajaxmodal']\").on('click.ajaxmodal', function (event) {
            event.preventDefault();

            Mautic.ajaxifyModal(this, event);
        });

        mQuery('#triggerEvents .trigger-event-row').off(\".triggerevents\");
        mQuery('#triggerEvents .trigger-event-row').on('mouseover.triggerevents', function() {
            mQuery(this).find('.form-buttons').removeClass('hide');
        }).on('mouseout.triggerevents', function() {
            mQuery(this).find('.form-buttons').addClass('hide');
        }).on('dblclick.triggerevents', function(event) {
            event.preventDefault();
            mQuery(this).find('.btn-edit').first().click();
        });

        //show events panel
        if (!mQuery('#events-panel').hasClass('in')) {
            mQuery('a[href=\"#events-panel\"]').trigger('click');
        }

        if (mQuery('#triggerEventPlaceholder').length) {
            mQuery('#triggerEventPlaceholder').remove();
        }
    }
};

Mautic.getPointActionPropertiesForm = function(actionType) {
    Mautic.activateLabelLoadingIndicator('point_type');

    var query = \"action=point:getActionForm&actionType=\" + actionType;
    mQuery.ajax({
        url: mauticAjaxUrl,
        type: \"POST\",
        data: query,
        dataType: \"json\",
        success: function (response) {
            if (typeof response.html != 'undefined') {
                mQuery('#pointActionProperties').html(response.html);
                Mautic.onPageLoad('#pointActionProperties', response);
            }
        },
        error: function (request, textStatus, errorThrown) {
            Mautic.processAjaxError(request, textStatus, errorThrown);
        },
        complete: function() {
            Mautic.removeLabelLoadingIndicator();
        }
    });
};
Mautic.EnablesOption = function (urlActionProperty) {
    if (urlActionProperty === 'point_properties_returns_within' && mQuery('#point_properties_returns_within').val() > 0) {
        mQuery('#point_properties_returns_after').val(0);
    } else {
        if (urlActionProperty === 'point_properties_returns_after' && mQuery('#point_properties_returns_after').val() > 0) {
            mQuery('#point_properties_returns_within').val(0);
        }
    }
};";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/PointBundle/Assets/js/point.js";
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
        return new Source("", "@bundles/PointBundle/Assets/js/point.js", "/app/docroot/app/bundles/PointBundle/Assets/js/point.js");
    }
}
