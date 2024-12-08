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

/* @bundles/CoreBundle/Event/ComponentValidationTrait.php */
class __TwigTemplate_bc68d4199e4e18d6a56e263c8b3fde8b extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Mautic\\CoreBundle\\Exception\\BadConfigurationException;

trait ComponentValidationTrait
{
    private function verifyComponent(array \$keys, array \$component, array \$callbacks = []): void
    {
        foreach (\$keys as \$k) {
            if (is_array(\$k)) {
                // Check that at least one option exists
                if (empty(array_intersect(\$k, array_keys(\$component)))) {
                    throw new BadConfigurationException(\"At least one of the following keys are required: '\".implode(', ', \$k));
                }
            } elseif (!array_key_exists(\$k, \$component)) {
                throw new BadConfigurationException(\"The key, '\$k' is missing.\");
            }
        }

        foreach (\$callbacks as \$m) {
            if (isset(\$component[\$m]) && !is_callable(\$component[\$m])) {
                throw new BadConfigurationException(\$component[\$m].' is not callable.');
            }
        }
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
        return "@bundles/CoreBundle/Event/ComponentValidationTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Event/ComponentValidationTrait.php", "/app/docroot/app/bundles/CoreBundle/Event/ComponentValidationTrait.php");
    }
}
