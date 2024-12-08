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

/* @bundles/EmailBundle/Validator/EmailListsValidator.php */
class __TwigTemplate_d4f196b4e3e839c855d81347a2223b75 extends Template
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

use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Form\\Validator\\Constraints\\LeadListAccess;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\ConstraintViolationInterface;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

final class EmailListsValidator extends ConstraintValidator
{
    public function validate(\$value, Constraint \$constraint): void
    {
        if (!\$value instanceof Email) {
            throw new UnexpectedTypeException(\$value, Email::class);
        }

        if ('list' !== \$value->getEmailType() || \$value->getTranslationParent()) {
            return;
        }

        \$this->validateLists(\$value);
        \$this->validateExcludedLists(\$value);
        \$this->validateConflictingLists(\$value);
    }

    private function validateLists(Email \$email): void
    {
        \$violations = \$this->context->getValidator()->validate(
            \$email->getLists(),
            [
                new LeadListAccess(),
                new NotBlank(
                    [
                        'message' => 'mautic.lead.lists.required',
                    ]
                ),
            ]
        );
        \$this->addViolationsAtPath(\$violations, 'lists');
    }

    private function validateExcludedLists(Email \$email): void
    {
        \$violations = \$this->context->getValidator()->validate(
            \$email->getExcludedLists(),
            [
                new LeadListAccess(['allowEmpty' => true]),
            ]
        );
        \$this->addViolationsAtPath(\$violations, 'excludedLists');
    }

    private function validateConflictingLists(Email \$email): void
    {
        \$listsIds         = \$this->getListsIds(\$email->getLists());
        \$excludedListsIds = \$this->getListsIds(\$email->getExcludedLists());
        \$isConflicting    = (bool) array_intersect(\$listsIds, \$excludedListsIds);

        if (\$isConflicting) {
            \$this->context->buildViolation('mautic.lead.excluded_lists.conflicting')
                ->atPath('excludedLists')
                ->addViolation();
        }
    }

    /**
     * @param LeadList[] \$lists
     *
     * @return string[]
     */
    private function getListsIds(iterable \$lists): array
    {
        \$ids = [];

        foreach (\$lists as \$list) {
            \$ids[] = (string) \$list->getId();
        }

        return \$ids;
    }

    /**
     * @param ConstraintViolationInterface[] \$violations
     */
    private function addViolationsAtPath(iterable \$violations, string \$path): void
    {
        foreach (\$violations as \$violation) {
            \$this->context->buildViolation(\$violation->getMessage())
                ->atPath(\$path)
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
        return "@bundles/EmailBundle/Validator/EmailListsValidator.php";
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
        return new Source("", "@bundles/EmailBundle/Validator/EmailListsValidator.php", "/app/docroot/app/bundles/EmailBundle/Validator/EmailListsValidator.php");
    }
}
