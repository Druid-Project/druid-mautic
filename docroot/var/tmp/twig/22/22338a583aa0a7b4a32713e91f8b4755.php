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

/* @bundles/CoreBundle/Helper/Update/PreUpdateChecks/PreUpdateCheckError.php */
class __TwigTemplate_79b6d8746fb89f4a750548610fa7f8ce extends Template
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
        yield "<?php

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Helper\\Update\\PreUpdateChecks;

class PreUpdateCheckError
{
    /**
     * Create a new error. Errors are supposed to be translatable, so please provide proper translation keys. If that's not possible, please provide a clear error message in English.
     *
     * @param string               \$key        The translation key (e.g. mautic.core.update.check.phpversion)
     * @param array<string,string> \$parameters Optional parameters that you want to pass to the translation key, e.g. ['%currentversion%' => '7.4.2']
     */
    public function __construct(
        public string \$key,
        public array \$parameters = []
    ) {
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Helper/Update/PreUpdateChecks/PreUpdateCheckError.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Update/PreUpdateChecks/PreUpdateCheckError.php", "/app/docroot/app/bundles/CoreBundle/Helper/Update/PreUpdateChecks/PreUpdateCheckError.php");
    }
}
