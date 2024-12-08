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

/* @bundles/ConfigBundle/Assets/js/config.js */
class __TwigTemplate_b812d981980abc6f03ffb2123a801b01 extends Template
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
        yield "//ConfigBundle

Mautic.removeConfigValue = function(action, el) {
    Mautic.executeAction(action, function(response) {
    \tif (response.success) {
            mQuery(el).parent().addClass('hide');
        }
\t});
};

/**
 *
 * @returns string|false
 */
Mautic.parseQuery = function (query) {
    var vars = query.split('&');
    var queryString = {};
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        var key = decodeURIComponent(pair[0]);
        var value = decodeURIComponent(pair[1]);
        // If first entry with this name
        if (typeof queryString[key] === 'undefined') {
            queryString[key] = decodeURIComponent(value);
            // If second entry with this name
        } else if (typeof queryString[key] === 'string') {
            var arr = [queryString[key], decodeURIComponent(value)];
            queryString[key] = arr;
            // If third or later entry with this name
        } else {
            queryString[key].push(decodeURIComponent(value));
        }
    }
    return queryString;
}

Mautic.parseUrlHashParameter = function(url) {
    var url = url.split('#');
    if ('undefined' != typeof url[1]) {
        return url[1];
    }

    return false;
}

Mautic.observeConfigTabs = function() {

    if (!mQuery('#config_coreconfig_last_shown_tab').length) {
        return;
    }

    var parameters = Mautic.parseQuery(window.location.search.substr(1));
    if ('undefiend' != typeof parameters['tab']) {
        mQuery('#config_coreconfig_last_shown_tab').val(parameters['tab']);
        mQuery('a[data-toggle=\"tab\"]').each(function (i, tab) {
            if (mQuery(tab).attr('href') == ('#' + parameters['tab'])) {
                mQuery(tab).tab('show');
            }
        });
    }

    mQuery('a[data-toggle=\"tab\"]').on('show.bs.tab', function (e) {
        var tab = Mautic.parseUrlHashParameter(e.target.href);
        if (tab) {
            mQuery('#config_coreconfig_last_shown_tab').val(tab);
        }
    });
}

Mautic.resetEmailsToNotification = function(obj) {
    const send_to_owner = obj.value;
    if (parseInt(send_to_owner, 10) === 1)
    {
        mQuery(obj).closest('.panel-body').find('.notification_email_addresses').val('');
    }
};

Mautic.configDsnTestExecute = function(element, action, key) {
    const \$button = mQuery(element),
        \$container = \$button.closest('.config-dsn-container');

    \$container.find('.ri-loader-3-line').removeClass('hide');

    Mautic.ajaxActionRequest(action, {key: key}, function(response) {
        const theClass = (response.success) ? 'has-success' : 'has-error',
            theMessage = response.message;
        \$container.find('.config-dsn-test-container').removeClass('has-success has-error').addClass(theClass);
        \$container.find('.help-block .status-msg').html(theMessage);
        \$container.find('.ri-loader-3-line').addClass('hide');
    });
};

Mautic.configDsnTestDisable = function(element) {
    const \$container = mQuery(element).closest('.config-dsn-container');

    \$container.find('.help-block .status-msg').html('');
    \$container.find('.help-block .save-config-msg').removeClass('hide');
    \$container.find('.config-dsn-test-button').prop('disabled', true).addClass('disabled');
};


Mautic.showAnonymizeWarningMessage = function(anonymize_ip) {
    if (parseInt(anonymize_ip, 10) === 1)
    {
        mQuery('.anonymize_ip_address').removeClass('hide');
    }
    else
    {
        mQuery('.anonymize_ip_address').addClass('hide');
    }
};

mQuery(Mautic.observeConfigTabs);
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ConfigBundle/Assets/js/config.js";
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
        return new Source("", "@bundles/ConfigBundle/Assets/js/config.js", "/app/docroot/app/bundles/ConfigBundle/Assets/js/config.js");
    }
}
