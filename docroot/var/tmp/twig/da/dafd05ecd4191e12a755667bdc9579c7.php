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

/* @bundles/IntegrationsBundle/Form/Type/NotBlankIfPublishedConstraintTrait.php */
class __TwigTemplate_57cd82a240e9cba9cf7e8878138d5dd7 extends Template
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

namespace Mautic\\IntegrationsBundle\\Form\\Type;

use Mautic\\PluginBundle\\Entity\\Integration;
use Symfony\\Component\\Validator\\Constraints\\Callback;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;

trait NotBlankIfPublishedConstraintTrait
{
    /**
     * Get not blank restraint if published.
     *
     * @return callable
     */
    private function getNotBlankConstraint(): Callback
    {
        return new Callback(
            function (\$validateMe, ExecutionContextInterface \$context): void {
                /** @var Integration \$data */
                \$data = \$context->getRoot()->getData();
                if (!empty(\$data->getIsPublished()) && empty(\$validateMe)) {
                    \$context->buildViolation('mautic.core.value.required')->addViolation();
                }
            }
        );
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
        return "@bundles/IntegrationsBundle/Form/Type/NotBlankIfPublishedConstraintTrait.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Form/Type/NotBlankIfPublishedConstraintTrait.php", "/app/docroot/app/bundles/IntegrationsBundle/Form/Type/NotBlankIfPublishedConstraintTrait.php");
    }
}
