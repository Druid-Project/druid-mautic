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

/* @bundles/EmailBundle/Validator/EmailOrEmailTokenListValidator.php */
class __TwigTemplate_2b37b2462e413dacfbb0f3deffa83f88 extends Template
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

use Mautic\\CoreBundle\\Exception\\InvalidValueException;
use Mautic\\CoreBundle\\Exception\\RecordException;
use Mautic\\CoreBundle\\Form\\DataTransformer\\ArrayStringTransformer;
use Mautic\\EmailBundle\\Exception\\InvalidEmailException;
use Mautic\\EmailBundle\\Helper\\EmailValidator;
use Mautic\\LeadBundle\\DataObject\\ContactFieldToken;
use Mautic\\LeadBundle\\Exception\\InvalidContactFieldTokenException;
use Mautic\\LeadBundle\\Validator\\CustomFieldValidator;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

final class EmailOrEmailTokenListValidator extends ConstraintValidator
{
    private ArrayStringTransformer \$transformer;

    public function __construct(
        private EmailValidator \$emailValidator,
        private CustomFieldValidator \$customFieldValidator
    ) {
        \$this->transformer          = new ArrayStringTransformer();
    }

    public function validate(\$csv, Constraint \$constraint): void
    {
        if (!\$constraint instanceof EmailOrEmailTokenList) {
            throw new UnexpectedTypeException(\$constraint, EmailOrEmailTokenList::class);
        }

        if (null === \$csv || '' === \$csv) {
            return;
        }

        if (!is_string(\$csv)) {
            throw new UnexpectedTypeException(\$csv, 'string');
        }

        array_map(
            \$this->makeEmailOrEmailTokenValidator(),
            \$this->transformer->reverseTransform(\$csv)
        );
    }

    private function makeEmailOrEmailTokenValidator(): callable
    {
        return function (string \$emailOrToken): void {
            try {
                // Try to validate if the value is an email address.
                \$this->emailValidator->validate(\$emailOrToken);
            } catch (InvalidEmailException) {
                try {
                    // The token syntax is validated during creation of new ContactFieldToken object.
                    \$contactFieldToken = new ContactFieldToken(\$emailOrToken);

                    // Validate that the token default value is a valid email address if set.
                    if (\$contactFieldToken->getDefaultValue()) {
                        \$this->emailValidator->validate(\$contactFieldToken->getDefaultValue());
                    }

                    // Validate that the contact field exists and is type of email.
                    \$this->customFieldValidator->validateFieldType(\$contactFieldToken->getFieldAlias(), 'email');
                } catch (RecordException|InvalidValueException|InvalidContactFieldTokenException \$tokenException) {
                    \$this->context->addViolation(
                        'mautic.email.email_or_token.not_valid',
                        ['%value%' => \$emailOrToken, '%details%' => \$tokenException->getMessage()]
                    );
                }
            }
        };
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
        return "@bundles/EmailBundle/Validator/EmailOrEmailTokenListValidator.php";
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
        return new Source("", "@bundles/EmailBundle/Validator/EmailOrEmailTokenListValidator.php", "/app/docroot/app/bundles/EmailBundle/Validator/EmailOrEmailTokenListValidator.php");
    }
}
