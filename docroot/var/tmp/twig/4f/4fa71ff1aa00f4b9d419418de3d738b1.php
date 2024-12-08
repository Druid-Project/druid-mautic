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

/* @bundles/ChannelBundle/Assets/js/channel.js */
class __TwigTemplate_cea39848cd350a7babe1f187d67822df extends Template
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
        yield "Mautic.messagesOnLoad = function(container) {
    mQuery(container + ' .sortable-panel-wrapper .modal').each(function() {
      // Move modals outside of the wrapper
      mQuery(this).closest('.panel').append(mQuery(this));
    });
};

Mautic.toggleChannelFormDisplay = function (el, channel) {
    Mautic.toggleTabPublished(el);

    if (mQuery(el).val() === \"1\" && mQuery(el).prop('checked')) {
        mQuery(el).closest('.tab-pane').find('.message_channel_properties_' + channel).removeClass('hide')
    } else {
        mQuery(el).closest('.tab-pane').find('.message_channel_properties_' + channel).addClass('hide');
    }
};

Mautic.cancelQueuedMessageEvent = function (channelId) {
    Mautic.ajaxActionRequest('channel:cancelQueuedMessageEvent',
        {
            channelId: channelId
        }, function (response) {
            if (response.success) {
                mQuery('#queued-message-'+channelId).addClass('disabled');
                mQuery('#queued-status-'+channelId).html(Mautic.translate('mautic.message.queue.status.cancelled'));
            }
        }, false
    );
};";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ChannelBundle/Assets/js/channel.js";
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
        return new Source("", "@bundles/ChannelBundle/Assets/js/channel.js", "/app/docroot/app/bundles/ChannelBundle/Assets/js/channel.js");
    }
}
