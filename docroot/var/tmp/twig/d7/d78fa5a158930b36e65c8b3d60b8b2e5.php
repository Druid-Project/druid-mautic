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

/* @bundles/FormBundle/Exception/ValidationException.php */
class __TwigTemplate_2815297acdb1559b85c4ee5715ce4c62 extends Template
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

namespace Mautic\\FormBundle\\Exception;

class ValidationException extends \\Exception
{
    /**
     * @var mixed[]
     */
    private array \$violations = [];

    public function __construct(\$message = 'Validation failed', \$code = 0, \\Exception \$previous = null)
    {
        parent::__construct(\$message, \$code, \$previous);
    }

    /**
     * @return mixed[]
     */
    public function getViolations(): array
    {
        return \$this->violations;
    }

    /**
     * @param mixed[] \$violations
     */
    public function setViolations(array \$violations): self
    {
        \$this->violations = \$violations;

        return \$this;
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
        return "@bundles/FormBundle/Exception/ValidationException.php";
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
        return new Source("", "@bundles/FormBundle/Exception/ValidationException.php", "/app/docroot/app/bundles/FormBundle/Exception/ValidationException.php");
    }
}
