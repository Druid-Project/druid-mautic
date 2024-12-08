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

/* @bundles/CoreBundle/Helper/Update/PreUpdateChecks/PreUpdateCheckResult.php */
class __TwigTemplate_e6baca887d0a66481152288b157e28af extends Template
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

class PreUpdateCheckResult
{
    /**
     * @var PreUpdateCheckError[]
     */
    public array \$errors;

    /**
     * @param PreUpdateCheckError[] \$errors
     */
    public function __construct(
        public bool \$success,
        public ?AbstractPreUpdateCheck \$check,
        array \$errors = []
    ) {
        foreach (\$errors as \$error) {
            if (!(\$error instanceof PreUpdateCheckError)) {
                throw new \\InvalidArgumentException('Error must be of type PreUpdateCheckError');
            }
        }

        \$this->errors = \$errors;
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
        return "@bundles/CoreBundle/Helper/Update/PreUpdateChecks/PreUpdateCheckResult.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Update/PreUpdateChecks/PreUpdateCheckResult.php", "/app/docroot/app/bundles/CoreBundle/Helper/Update/PreUpdateChecks/PreUpdateCheckResult.php");
    }
}
