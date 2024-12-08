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

/* @bundles/CoreBundle/Helper/PreUpdateCheckHelper.php */
class __TwigTemplate_3bcdaee9145851bb670e30b9f826fb64 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Mautic\\CoreBundle\\Helper\\Update\\PreUpdateChecks\\AbstractPreUpdateCheck;

class PreUpdateCheckHelper
{
    /**
     * @var AbstractPreUpdateCheck[]
     */
    private array \$checks = [];

    public function addCheck(AbstractPreUpdateCheck \$check): void
    {
        \$this->checks[] = \$check;
    }

    /**
     * Get all registered pre-update checks.
     *
     * @return AbstractPreUpdateCheck[]
     */
    public function getChecks(): array
    {
        return \$this->checks;
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
        return "@bundles/CoreBundle/Helper/PreUpdateCheckHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/PreUpdateCheckHelper.php", "/app/docroot/app/bundles/CoreBundle/Helper/PreUpdateCheckHelper.php");
    }
}
