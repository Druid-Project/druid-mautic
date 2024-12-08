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

/* @bundles/LeadBundle/Form/Validator/Constraints/FieldAliasKeywordValidator.php */
class __TwigTemplate_cabc95ba2039a5bd32550f2a1744250d extends Template
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

namespace Mautic\\LeadBundle\\Form\\Validator\\Constraints;

use Doctrine\\ORM\\EntityManager;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Helper\\FieldAliasHelper;
use Mautic\\LeadBundle\\Model\\ListModel;
use Mautic\\LeadBundle\\Services\\ContactSegmentFilterDictionary;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * Throws an exception if the field alias is equal some segment filter keyword.
 * It would cause odd behavior with segment filters otherwise.
 */
class FieldAliasKeywordValidator extends ConstraintValidator
{
    public const RESTRICTED_ALIASES = [
        'contact_id',
        'company_id',
    ];

    public function __construct(
        private ListModel \$listModel,
        private FieldAliasHelper \$aliasHelper,
        private EntityManager \$em,
        private TranslatorInterface \$translator,
        private ContactSegmentFilterDictionary \$contactSegmentFilterDictionary
    ) {
    }

    /**
     * @param LeadField \$field
     */
    public function validate(\$field, Constraint \$constraint): void
    {
        \$oldValue = \$this->em->getUnitOfWork()->getOriginalEntityData(\$field);
        \$this->aliasHelper->makeAliasUnique(\$field);

        // If empty it's a new object else it's an edit
        if (empty(\$oldValue) || (!empty(\$oldValue) && is_array(\$oldValue) && \$oldValue['alias'] != \$field->getAlias())) {
            if (in_array(\$field->getAlias(), self::RESTRICTED_ALIASES)) {
                \$this->context->addViolation(
                    \$this->translator->trans(
                        'mautic.lead.field.keyword.restricted',
                        ['%alias%' => \$field->getAlias()],
                        'validators'
                    )
                );

                return;
            }
            \$choices = array_merge(\$this->listModel->getChoiceFields()[\$field->getObject()] ?? [], \$this->contactSegmentFilterDictionary->getFilters());

            if (isset(\$choices[\$field->getAlias()])) {
                \$this->context->addViolation(\$constraint->message, ['%keyword%' => \$field->getAlias()]);
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
        return "@bundles/LeadBundle/Form/Validator/Constraints/FieldAliasKeywordValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Validator/Constraints/FieldAliasKeywordValidator.php", "/app/docroot/app/bundles/LeadBundle/Form/Validator/Constraints/FieldAliasKeywordValidator.php");
    }
}
