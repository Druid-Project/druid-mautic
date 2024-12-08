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

/* @bundles/InstallBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_a3971f05bd1ebe93c2e1500d28e8dd0a extends Template
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
        yield "mautic.installer.error.adding.fields=\"An error occurred while attempting to populate the contact fields table: %exception%\"
mautic.installer.error.adding.fixtures=\"An error occurred while attempting to add default data: %exception%\"
mautic.installer.error.connecting.database=\"An error occured while attempting to connect to the database: %exception%\"
mautic.installer.error.creating.database=\"The database, %name%, could not be found or created due to permissions restrictions. Please manually create the database then try again.\"
mautic.installer.error.getting.role=\"An error occurred while attempting to get the admin role: %exception%\"
mautic.installer.error.creating.user=\"An error occurred while attempting to create the admin user: %exception%\"
mautic.installer.error.database.exists=\"The database you've specified already exists and contains Mautic data.\"
mautic.installer.error.database.version=\"Your database version (%currentversion%) is too old for Mautic to work correctly. Supported versions are MySQL %mysqlminversion% (or higher) and MariaDB %mariadbminversion% (or higher).\"
mautic.installer.error.installing.data=\"An error occurred while attempting to install the data: %exception%\"
mautic.installer.error.no.metadata=\"No metadata was found to create the database.\"
mautic.installer.error.writing.configuration=\"An error occurred while attempting to write the configuration to the filesystem.\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/InstallBundle/Translations/en_US/flashes.ini";
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
        return new Source("", "@bundles/InstallBundle/Translations/en_US/flashes.ini", "/app/docroot/app/bundles/InstallBundle/Translations/en_US/flashes.ini");
    }
}
