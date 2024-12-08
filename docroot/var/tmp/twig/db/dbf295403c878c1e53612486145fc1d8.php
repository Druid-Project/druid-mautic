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

/* @bundles/MessengerBundle/Translations/en_US/messages.ini */
class __TwigTemplate_ef89dd3e0b6b1b9fa12a5579db704d6a extends Template
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
        yield "mautic.config.tab.messengerconfig=\"Queue Settings\"
mautic.messenger.config.retry_strategy=\"Retry strategy\"
mautic.messenger.config.retry_strategy.max_retries=\"Max retries\"
mautic.messenger.config.retry_strategy.delay=\"Delay\"
mautic.messenger.config.retry_strategy.multiplier=\"Multiplier\"
mautic.messenger.config.retry_strategy.max_delay=\"Max delay\"
mautic.messenger.config.dsn_help_general=\"Queuing is not enabled by default (scheme is set to 'sync'). If you want to start using a queue, please follow the documentation at <a href=\"%link%\">%link%</a>.\"
mautic.messenger.config.dsn_help_retry_strategy=\"When the processing of a message fails, the message is sent back to the queue for another try. You can adjust this behaviour in the following section. See the documentation on <a href=\"%link%\">%link%</a> for more details.\"
mautic.messenger.config.dsn_help_failed=\"If a message fails all its retries, it's discarded by default. To avoid this happening, you can optionally configure a queue for failures. For more details see the documentation on  <a href=\"%link%\">%link%</a>.\"
mautic.messenger.config.dsn_email=\"Queue for email (SMS and push messages)\"
mautic.messenger.config.dsn_hit=\"Queue for hits (page and email)\"
mautic.messenger.config.dsn_failed=\"Queue for failures\"
mautic.messenger.config.dsn.send_test_message=\"Send test message\"
mautic.messenger.config.dsn.test_message_failed=\"The test message could not be sent due to the following error: '\"%message%\"'.\"
mautic.messenger.config.dsn.test_message_processed=\"The test message for DSN '\"%type%\"' was successfully processed.\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/MessengerBundle/Translations/en_US/messages.ini";
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
        return new Source("", "@bundles/MessengerBundle/Translations/en_US/messages.ini", "/app/docroot/app/bundles/MessengerBundle/Translations/en_US/messages.ini");
    }
}
