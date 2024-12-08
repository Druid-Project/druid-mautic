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

/* @bundles/EmailBundle/Validator/DsnValidator.php */
class __TwigTemplate_d2fce4722746bf7661bb5efc6b4c94ee extends Template
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

namespace Mautic\\EmailBundle\\Validator;

use Mautic\\EmailBundle\\Mailer\\Transport\\TransportFactory;
use Mautic\\EmailBundle\\Validator\\Dsn as DsnConstraint;
use Symfony\\Component\\Mailer\\Exception\\ExceptionInterface;
use Symfony\\Component\\Mailer\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Mailer\\Exception\\UnsupportedSchemeException;
use Symfony\\Component\\Mailer\\Transport\\Dsn as MailerDsn;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

class DsnValidator extends ConstraintValidator
{
    public function __construct(
        private TransportFactory \$transportFactory
    ) {
    }

    public function validate(\$value, Constraint \$constraint): void
    {
        if (!is_string(\$value)) {
            throw new UnexpectedTypeException(\$value, 'string');
        }

        if (!\$constraint instanceof DsnConstraint) {
            throw new UnexpectedTypeException(\$constraint, DsnConstraint::class);
        }

        if (!\$value) {
            return;
        }

        try {
            \$dsn = MailerDsn::fromString(\$value);
        } catch (InvalidArgumentException \$e) {
            \$this->context->addViolation(\$e->getMessage() ?: 'mautic.email.dsn.invalid_dsn');

            return;
        }

        try {
            \$this->transportFactory->fromDsnObject(\$dsn);
        } catch (UnsupportedSchemeException \$e) {
            \$this->context->addViolation(\$e->getMessage() ?: 'mautic.email.dsn.unsupported_scheme');
        } catch (ExceptionInterface \$e) {
            \$this->context->addViolation(\$e->getMessage() ?: 'mautic.email.dsn.invalid_dsn');
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
        return "@bundles/EmailBundle/Validator/DsnValidator.php";
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
        return new Source("", "@bundles/EmailBundle/Validator/DsnValidator.php", "/app/docroot/app/bundles/EmailBundle/Validator/DsnValidator.php");
    }
}
