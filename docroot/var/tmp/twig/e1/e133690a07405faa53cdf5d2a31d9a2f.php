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

/* @bundles/ApiBundle/Form/Validator/Constraints/OAuthCallbackValidator.php */
class __TwigTemplate_9ce8acda2f32c5c6b287a60574e14480 extends Template
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

namespace Mautic\\ApiBundle\\Form\\Validator\\Constraints;

use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;

class OAuthCallbackValidator extends ConstraintValidator
{
    public const PATTERN = '~^[0-9a-z].*://(.*?)(:[0-9]+)?(/?|/\\S+)\$~ixu';

    /**
     * @param mixed \$value
     */
    public function validate(\$value, Constraint \$constraint): void
    {
        if (!\$constraint instanceof OAuthCallback) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\OAuthCallback');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_scalar(\$value) && !(is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedTypeException(\$value, 'string');
        }

        \$value = (string) \$value;
        if (!preg_match(static::PATTERN, \$value)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "', \$this->formatValue(\$value))
                ->addViolation();
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
        return "@bundles/ApiBundle/Form/Validator/Constraints/OAuthCallbackValidator.php";
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
        return array (  76 => 33,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/ApiBundle/Form/Validator/Constraints/OAuthCallbackValidator.php", "/app/docroot/app/bundles/ApiBundle/Form/Validator/Constraints/OAuthCallbackValidator.php");
    }
}
