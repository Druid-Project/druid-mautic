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

/* @bundles/InstallBundle/Translations/en_US/validators.ini */
class __TwigTemplate_e140a01c9309a4ccc396b02adbd6444b extends Template
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
        yield "mautic.install.database.driver.invalid=\"Invalid database driver given. Must be one of %drivers%\"
mautic.install.database.path.invalid=\"The path is invalid or not writable.\"
mautic.install.database.path.warning=\"WARNING!! The path is within the public web root. This is not recommended due to the security risks. Consider changing the path to be outside of %root%.\"
mautic.install.database.port.invalid=\"The port must be an integer greater than 0.\"
mautic.install.password.minlength=\"Password must be at least 6 characters.\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/InstallBundle/Translations/en_US/validators.ini";
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
        return new Source("", "@bundles/InstallBundle/Translations/en_US/validators.ini", "/app/docroot/app/bundles/InstallBundle/Translations/en_US/validators.ini");
    }
}
