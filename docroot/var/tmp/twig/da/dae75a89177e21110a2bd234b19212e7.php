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

/* @bundles/ConfigBundle/Translations/en_US/messages.ini */
class __TwigTemplate_3fe6ca75f284490fedf2cd279a404170 extends Template
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
        yield "mautic.config.header.index=\"Configuration\"
mautic.config.menu.index=\"Configuration\"
mautic.config.restricted=\"Set by system\"
mautic.config.notwritable=\"The configuration file is not writable! Changes will not be saved.\"
mautic.config.remove_file_contents=\"Remove stored contents for this setting?\"
mautic.sysinfo.header.index=\"System Info\"
mautic.sysinfo.menu.index=\"System Info\"
mautic.sysinfo.tab.phpinfo=\"PHP Info\"
mautic.sysinfo.tab.recommendations=\"Recommendations\"
mautic.sysinfo.no.recommendations=\"There are no recommendations for you right now. Your server is configured properly!\"
mautic.sysinfo.tab.folders=\"Folder & File Permissions\"
mautic.sysinfo.folders.title=\"The following folders and files must be writable for Mautic to work correctly.\"
mautic.sysinfo.folder.path=\"Folder/File Path\"
mautic.sysinfo.is.writable=\"Is writable\"
mautic.sysinfo.writable=\"Writable\"
mautic.sysinfo.unwritable=\"Unwritable\"
mautic.sysinfo.tab.log=\"Log\"
mautic.sysinfo.log.title=\"Current Error Log\"
mautic.sysinfo.log.missing=\"Today's Mautic error log is empty. Check server error log for error messages Mautic didn't have a chance to catch.\"
mautic.sysinfo.phpinfo.missing=\"Information is not available. PHP function phpinfo() is disabled on your server.\"
mautic.sysinfo.phpinfo.phpversion=\"PHP function phpinfo() is disabled on your server. Your PHP version is <b>%phpversion%</b>.\"
mautic.sysinfo.tab.dbinfo=\"Database info\"
mautic.sysinfo.dbinfo.title=\"Database info\"
mautic.sysinfo.dbinfo.property=\"Property\"
mautic.sysinfo.dbinfo.value=\"Value\"
mautic.sysinfo.dbinfo.version=\"Version\"
mautic.sysinfo.dbinfo.driver=\"Doctrine driver\"
mautic.sysinfo.dbinfo.platform=\"Doctrine database platform (automatically detected)\"
mautic.config.dsn.scheme=\"Scheme\"
mautic.config.dsn.host=\"Host\"
mautic.config.dsn.port=\"Port\"
mautic.config.dsn.user=\"User\"
mautic.config.dsn.password=\"Password\"
mautic.config.dsn.path=\"Path\"
mautic.config.dsn.options=\"Options\"
mautic.config.dsn.using_current_dsn=\"Using currently saved DSN\"
mautic.config.dsn.save_to_test=\"Save changes to test the DSN.\"";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ConfigBundle/Translations/en_US/messages.ini";
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
        return new Source("", "@bundles/ConfigBundle/Translations/en_US/messages.ini", "/app/docroot/app/bundles/ConfigBundle/Translations/en_US/messages.ini");
    }
}
