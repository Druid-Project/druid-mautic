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

/* @bundles/LeadBundle/Validator/CustomFieldValidator.php */
class __TwigTemplate_3d0a9b9231ca77ec43ec70dd10d34e7a extends Template
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

namespace Mautic\\LeadBundle\\Validator;

use Mautic\\CoreBundle\\Exception\\InvalidValueException;
use Mautic\\CoreBundle\\Exception\\RecordNotFoundException;
use Mautic\\CoreBundle\\Exception\\RecordNotPublishedException;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class CustomFieldValidator
{
    public function __construct(
        private FieldModel \$fieldModel,
        private TranslatorInterface \$translator
    ) {
    }

    /**
     * @throws RecordNotFoundException
     * @throws RecordNotPublishedException
     * @throws InvalidValueException
     */
    public function validateFieldType(string \$alias, string \$fieldType): void
    {
        \$field = \$this->getPublishedFieldByAlias(\$alias);

        if (\$field->getType() !== \$fieldType) {
            throw new InvalidValueException(\$this->translator->trans('mautic.lead.contact.wrong.field.type', ['%alias%' => \$alias, '%fieldType%' => \$field->getType(), '%expectedType%' => \$fieldType], 'validators'));
        }
    }

    /**
     * @throws RecordNotFoundException
     * @throws RecordNotPublishedException
     */
    private function getPublishedFieldByAlias(string \$alias): LeadField
    {
        \$field = \$this->getFieldByAlias(\$alias);

        if (!\$field->getIsPublished()) {
            throw new RecordNotPublishedException(\$this->translator->trans('mautic.lead.contact.field.not.published', ['%alias%' => \$alias], 'validators'));
        }

        return \$field;
    }

    /**
     * @throws RecordNotFoundException
     */
    private function getFieldByAlias(string \$alias): LeadField
    {
        \$field = \$this->fieldModel->getEntityByAlias(\$alias);

        if (!\$field instanceof LeadField) {
            throw new RecordNotFoundException(\$this->translator->trans('mautic.lead.contact.field.not.found', ['%alias%' => \$alias], 'validators'));
        }

        return \$field;
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
        return "@bundles/LeadBundle/Validator/CustomFieldValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Validator/CustomFieldValidator.php", "/app/docroot/app/bundles/LeadBundle/Validator/CustomFieldValidator.php");
    }
}
