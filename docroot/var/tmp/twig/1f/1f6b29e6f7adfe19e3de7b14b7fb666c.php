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

/* @bundles/LeadBundle/EventListener/ImportCompanySubscriber.php */
class __TwigTemplate_775cb199ee1ebaeff9848e33c86b1d9b extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\ArrayHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\LeadBundle\\Event\\ImportInitEvent;
use Mautic\\LeadBundle\\Event\\ImportMappingEvent;
use Mautic\\LeadBundle\\Event\\ImportProcessEvent;
use Mautic\\LeadBundle\\Event\\ImportValidateEvent;
use Mautic\\LeadBundle\\Field\\FieldList;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Model\\CompanyModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

final class ImportCompanySubscriber implements EventSubscriberInterface
{
    public function __construct(
        private FieldList \$fieldList,
        private CorePermissions \$corePermissions,
        private CompanyModel \$companyModel,
        private TranslatorInterface \$translator
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::IMPORT_ON_INITIALIZE    => ['onImportInit'],
            LeadEvents::IMPORT_ON_FIELD_MAPPING => ['onFieldMapping'],
            LeadEvents::IMPORT_ON_PROCESS       => ['onImportProcess'],
            LeadEvents::IMPORT_ON_VALIDATE      => ['onValidateImport'],
        ];
    }

    /**
     * @throws AccessDeniedException
     */
    public function onImportInit(ImportInitEvent \$event): void
    {
        if (\$event->importIsForRouteObject('companies')) {
            if (!\$this->corePermissions->isGranted('lead:imports:create')) {
                throw new AccessDeniedException('You do not have permission to import companies');
            }

            \$event->objectSingular = 'company';
            \$event->objectName     = 'mautic.lead.lead.companies';
            \$event->activeLink     = '#mautic_company_index';
            \$event->setIndexRoute('mautic_company_index');
            \$event->stopPropagation();
        }
    }

    public function onFieldMapping(ImportMappingEvent \$event): void
    {
        if (\$event->importIsForRouteObject('companies')) {
            \$specialFields = [
                'dateAdded'      => 'mautic.lead.import.label.dateAdded',
                'createdByUser'  => 'mautic.lead.import.label.createdByUser',
                'dateModified'   => 'mautic.lead.import.label.dateModified',
                'modifiedByUser' => 'mautic.lead.import.label.modifiedByUser',
            ];

            \$event->fields = [
                'mautic.lead.company'        => \$this->fieldList->getFieldList(false, false, ['isPublished' => true, 'object' => 'company']),
                'mautic.lead.special_fields' => \$specialFields,
            ];
        }
    }

    public function onImportProcess(ImportProcessEvent \$event): void
    {
        if (\$event->importIsForObject('company')) {
            \$merged = \$this->companyModel->import(
                \$event->import->getMatchedFields(),
                \$event->rowData,
                \$event->import->getDefault('owner'),
                \$event->import->getDefault('skip_if_exists')
            );
            \$event->setWasMerged((bool) \$merged);
            \$event->stopPropagation();
        }
    }

    public function onValidateImport(ImportValidateEvent \$event): void
    {
        if (false === \$event->importIsForRouteObject('companies')) {
            return;
        }

        \$matchedFields = \$event->getForm()->getData();
        \$skipIfExists  = ArrayHelper::pickValue('skip_if_exists', \$matchedFields, false);
        \$event->setSkipIfExists((bool) \$skipIfExists);
        unset(\$matchedFields['skip_if_exists']);
        \$event->setOwnerId(\$this->handleValidateOwner(\$matchedFields));

        \$matchedFields = array_map(
            fn (\$value) => is_string(\$value) ? trim(\$value) : \$value,
            array_filter(\$matchedFields)
        );

        if (empty(\$matchedFields)) {
            \$event->getForm()->addError(
                new FormError(
                    \$this->translator->trans('mautic.lead.import.matchfields', [], 'validators')
                )
            );
        }

        \$this->handleValidateRequired(\$event, \$matchedFields);

        \$event->setMatchedFields(\$matchedFields);
    }

    /**
     * @param mixed[] \$matchedFields
     */
    private function handleValidateOwner(array &\$matchedFields): ?int
    {
        \$owner = ArrayHelper::pickValue('owner', \$matchedFields);

        return \$owner ? \$owner->getId() : null;
    }

    /**
     * Validate required fields.
     *
     * Required fields come through as ['alias' => 'label'], and
     * \$matchedFields is a zero indexed array, so to calculate the
     * diff, we must array_flip(\$matchedFields) and compare on key.
     *
     * @param mixed[] \$matchedFields
     */
    private function handleValidateRequired(ImportValidateEvent \$event, array &\$matchedFields): void
    {
        \$requiredFields = \$this->fieldList->getFieldList(false, false, [
            'isPublished' => true,
            'object'      => 'company',
            'isRequired'  => true,
        ]);

        \$missingRequiredFields = array_diff_key(\$requiredFields, array_flip(\$matchedFields));

        if (count(\$missingRequiredFields)) {
            \$event->getForm()->addError(
                new FormError(
                    \$this->translator->trans(
                        'mautic.import.missing.required.fields',
                        [
                            '%requiredFields%' => implode(', ', \$missingRequiredFields),
                            '%fieldOrFields%'  => 1 === count(\$missingRequiredFields) ? 'field' : 'fields',
                        ],
                        'validators'
                    )
                )
            );
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
        return "@bundles/LeadBundle/EventListener/ImportCompanySubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/ImportCompanySubscriber.php", "/app/docroot/app/bundles/LeadBundle/EventListener/ImportCompanySubscriber.php");
    }
}
