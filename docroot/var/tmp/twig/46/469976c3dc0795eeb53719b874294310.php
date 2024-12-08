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

/* @bundles/LeadBundle/Form/Validator/Constraints/UniqueCustomFieldValidator.php */
class __TwigTemplate_82cfcb6802809d0e98d1a5bc9ea8344b extends Template
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

namespace Mautic\\LeadBundle\\Form\\Validator\\Constraints;

use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Field\\FieldsWithUniqueIdentifier;
use Mautic\\LeadBundle\\Model\\CompanyModel;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;

class UniqueCustomFieldValidator extends ConstraintValidator
{
    public function __construct(
        private LeadModel \$leadModel,
        private CompanyModel \$companyModel,
        private FieldsWithUniqueIdentifier \$fieldsWithUniqueIdentifier
    ) {
    }

    /**
     * @param Lead|Company|mixed \$object
     */
    public function validate(\$object, Constraint \$constraint): void
    {
        \\assert(\$constraint instanceof UniqueCustomField);
        \\assert(\$object instanceof Lead || \$object instanceof Company);

        \$form = \$this->context->getRoot();
        \\assert(\$form instanceof Form);

        \$publishedUniqueFields = \$this->fieldsWithUniqueIdentifier->getFieldsWithUniqueIdentifier([
            'isPublished'       => true,
            'isUniqueIdentifer' => true,
            'object'            => \$constraint->object,
        ]);

        \$publishedUniqueFields = array_keys(\$publishedUniqueFields);

        \$uniqueFieldsData = [];
        foreach (\$publishedUniqueFields as \$publishedUniqueField) {
            if (!\$form->has(\$publishedUniqueField)) {
                continue;
            }

            \$data = \$form->get(\$publishedUniqueField)->getData();
            if (null === \$data || '' === \$data) {
                continue;
            }

            \$uniqueFieldsData[\$publishedUniqueField] = \$data;
        }

        \$validatedFields = [];
        if (\$object instanceof Lead) {
            \$validatedFields = \$this->getLeadFieldsValid(\$object, \$uniqueFieldsData);
        }

        if (\$object instanceof Company) {
            \$validatedFields = \$this->getCompanyFieldsValid(\$object, \$uniqueFieldsData);
        }

        foreach (\$validatedFields as \$fieldName => \$isValid) {
            if (\$isValid) {
                continue;
            }

            \$this->context->buildViolation(\$constraint->message)
                ->setCode((string) Response::HTTP_UNPROCESSABLE_ENTITY)
                ->atPath(\$fieldName)
                ->addViolation();
        }
    }

    /**
     * @param array<mixed> \$fieldsData
     *
     * @return array<bool>
     */
    private function getLeadFieldsValid(Lead \$lead, array \$fieldsData): array
    {
        \$leadRepository = \$this->leadModel->getRepository();
        if ('orWhere' === \$leadRepository->getUniqueIdentifiersWherePart()) {
            \$fieldsValidation = [];
            foreach (\$fieldsData as \$field => \$data) {
                \$leads = \$leadRepository->getLeadIdsByUniqueFields([\$field => \$data]);

                \$fieldsValidation[] = \$this->isValid(\$leads, [\$field], (int) \$lead->getId());
            }

            return array_merge(...\$fieldsValidation);
        }

        // Can't use getEntities, because it refreshes some field data, that can be used in the form
        \$leads = \$leadRepository->getLeadIdsByUniqueFields(\$fieldsData);

        return \$this->isValid(\$leads, array_keys(\$fieldsData), (int) \$lead->getId());
    }

    /**
     * @param array<mixed> \$fieldsData
     *
     * @return array<bool>
     */
    private function getCompanyFieldsValid(Company \$company, array \$fieldsData): array
    {
        \$companyRepository = \$this->companyModel->getRepository();
        if ('orWhere' === \$companyRepository->getUniqueIdentifiersWherePart()) {
            \$fieldsValidation = [];
            foreach (\$fieldsData as \$field => \$data) {
                \$companies = \$companyRepository->getCompanyIdsByUniqueFields([\$field => \$data]);

                \$fieldsValidation[] = \$this->isValid(\$companies, [\$field], (int) \$company->getId());
            }

            return array_merge(...\$fieldsValidation);
        }

        // Can't use getEntities, because it refreshes some field data, that can be used in the form
        \$companies = \$companyRepository->getCompanyIdsByUniqueFields(\$fieldsData);

        return \$this->isValid(\$companies, array_keys(\$fieldsData), (int) \$company->getId());
    }

    /**
     * @param array<array<mixed>> \$objects
     * @param array<string>       \$fields
     *
     * @return array<bool>
     */
    private function isValid(array \$objects, array \$fields, int \$objectId): array
    {
        \$objectsCount = count(\$objects);
        if (0 === \$objectsCount) {
            return array_fill_keys(\$fields, true);
        }

        if (\$objectsCount > 1) {
            return array_fill_keys(\$fields, false);
        }

        if ((int) \$objects[0]['id'] === \$objectId) {
            return array_fill_keys(\$fields, true);
        }

        return array_fill_keys(\$fields, false);
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
        return "@bundles/LeadBundle/Form/Validator/Constraints/UniqueCustomFieldValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Validator/Constraints/UniqueCustomFieldValidator.php", "/app/docroot/app/bundles/LeadBundle/Form/Validator/Constraints/UniqueCustomFieldValidator.php");
    }
}
