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

/* @bundles/PluginBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_60334f8dac5bc3fba81599f40329b1ae extends Template
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
        yield "mautic.plugin.notice.reloaded=\"%added% new plugins were installed and %updated% updated.\"
mautic.plugin.notice.saved=\"Settings for the %name% integration have been saved\"
mautic.integration.auth.invalid.state=\"Invalid session. Please try again.\"
mautic.integration.error.genericerror=\"There was an unknown error encountered when trying to obtain the access token.\"
mautic.integration.error.oauthfail=\"Authorization failed with the error message, '%error%'\"
mautic.integration.notfound=\"%name% was not found!\"
mautic.integration.notice.oauthsuccess=\"Authorization was successful.\"
mautic.integration.notice.saved=\"Settings saved\"
mautic.integration.sso.error.no_email=\"Authenticated user does not have an email.\"
mautic.integration.sso.error.no_name=\"Authenticated user does not have a first and last name.\"
mautic.integration.sso.error.no_role=\"Authenticated user does not have a role.\"
mautic.integration.sso.error.no_username=\"Authenticated user does not have a username.\"";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/PluginBundle/Translations/en_US/flashes.ini";
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
        return new Source("", "@bundles/PluginBundle/Translations/en_US/flashes.ini", "/app/docroot/app/bundles/PluginBundle/Translations/en_US/flashes.ini");
    }
}
