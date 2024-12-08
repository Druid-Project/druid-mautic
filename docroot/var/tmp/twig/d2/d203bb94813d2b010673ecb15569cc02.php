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

/* @bundles/FormBundle/Validator/Constraint/FileExtensionConstraint.php */
class __TwigTemplate_7a56603fd91829dca584938a5fda50df extends Template
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

namespace Mautic\\FormBundle\\Validator\\Constraint;

use Symfony\\Component\\Validator\\Constraint;

class FileExtensionConstraint extends Constraint
{
    public \$message = 'File extension contains an illegal extension: \"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["forbidden"]) || array_key_exists("forbidden", $context) ? $context["forbidden"] : (function () { throw new RuntimeError('Variable "forbidden" does not exist.', 9, $this->source); })()), "html", null, true);
        yield "\".';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/FormBundle/Validator/Constraint/FileExtensionConstraint.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  52 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/FormBundle/Validator/Constraint/FileExtensionConstraint.php", "/app/docroot/app/bundles/FormBundle/Validator/Constraint/FileExtensionConstraint.php");
    }
}
