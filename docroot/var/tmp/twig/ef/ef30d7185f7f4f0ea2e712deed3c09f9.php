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

/* @bundles/LeadBundle/Model/CompanyReportData.php */
class __TwigTemplate_3195c360328e6456db25de63c2628b19 extends Template
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

namespace Mautic\\LeadBundle\\Model;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\ReportBundle\\Event\\ReportGeneratorEvent;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class CompanyReportData
{
    public function __construct(
        private FieldModel \$fieldModel,
        private TranslatorInterface \$translator
    ) {
    }

    public function getCompanyData(): array
    {
        \$companyColumns = \$this->getCompanyColumns();
        \$companyFields  = \$this->fieldModel->getEntities([
            'filter' => [
                'force' => [
                    [
                        'column' => 'f.object',
                        'expr'   => 'like',
                        'value'  => 'company',
                    ],
                ],
            ],
        ]);

        return array_merge(\$companyColumns, \$this->getFieldColumns(\$companyFields, 'comp.'));
    }

    public function eventHasCompanyColumns(ReportGeneratorEvent \$event): bool
    {
        \$companyColumns = \$this->getCompanyData();
        foreach (\$companyColumns as \$key => \$column) {
            if (\$event->hasColumn(\$key)) {
                return true;
            }
        }

        return false;
    }

    private function getCompanyColumns(): array
    {
        return [
            'comp.id' => [
                'alias' => 'comp_id',
                'label' => 'mautic.lead.report.company.company_id',
                'type'  => 'int',
                'link'  => 'mautic_company_action',
            ],
            'companies_lead.is_primary' => [
                'label' => 'mautic.lead.report.company.is_primary',
                'type'  => 'bool',
            ],
            'companies_lead.date_added' => [
                'label' => 'mautic.lead.report.company.date_added',
                'type'  => 'datetime',
            ],
        ];
    }

    /**
     * @param LeadField[] \$fields
     * @param string      \$prefix
     */
    private function getFieldColumns(\$fields, \$prefix): array
    {
        \$columns = [];
        foreach (\$fields as \$f) {
            \$type = match (\$f->getType()) {
                'boolean'  => 'bool',
                'date'     => 'date',
                'datetime' => 'datetime',
                'time'     => 'time',
                'url'      => 'url',
                'email'    => 'email',
                'number'   => 'float',
                default    => 'string',
            };
            \$columns[\$prefix.\$f->getAlias()] = [
                'label' => \$this->translator->trans('mautic.report.field.company.label', ['%field%' => \$f->getLabel()]),
                'type'  => \$type,
            ];
        }

        return \$columns;
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
        return "@bundles/LeadBundle/Model/CompanyReportData.php";
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
        return new Source("", "@bundles/LeadBundle/Model/CompanyReportData.php", "/app/docroot/app/bundles/LeadBundle/Model/CompanyReportData.php");
    }
}
