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

/* @bundles/CoreBundle/Validator/EntityEventValidator.php */
class __TwigTemplate_19b59c79582ffb4e776c1e849aaacf04 extends Template
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

namespace Mautic\\CoreBundle\\Validator;

use Mautic\\CoreBundle\\Event\\EntityValidateEvent;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

final class EntityEventValidator extends ConstraintValidator
{
    public function __construct(private EventDispatcherInterface \$dispatcher)
    {
    }

    public function validate(\$value, Constraint \$constraint): void
    {
        if (!is_object(\$value)) {
            throw new UnexpectedTypeException(\$value, 'object');
        }

        if (!\$constraint instanceof EntityEvent) {
            throw new UnexpectedTypeException(\$constraint, EntityEvent::class);
        }

        \$this->dispatcher->dispatch(new EntityValidateEvent(\$value, \$constraint, \$this->context));
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
        return "@bundles/CoreBundle/Validator/EntityEventValidator.php";
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
        return new Source("", "@bundles/CoreBundle/Validator/EntityEventValidator.php", "/app/docroot/app/bundles/CoreBundle/Validator/EntityEventValidator.php");
    }
}
