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

/* @bundles/LeadBundle/Field/FieldList.php */
class __TwigTemplate_1771e21e6f80103be659619239f116c1 extends Template
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

namespace Mautic\\LeadBundle\\Field;

use Mautic\\CoreBundle\\Cache\\ResultCacheOptions;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Entity\\LeadFieldRepository;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class FieldList
{
    public function __construct(
        private LeadFieldRepository \$leadFieldRepository,
        private TranslatorInterface \$translator
    ) {
    }

    /**
     * @param mixed[] \$filters
     *
     * @return mixed[]
     */
    public function getFieldList(bool \$byGroup = true, bool \$alphabetical = true, array \$filters = ['isPublished' => true, 'object' => 'lead']): array
    {
        \$forceFilters = [];
        foreach (\$filters as \$col => \$val) {
            \$forceFilters[] = [
                'column' => \"f.{\$col}\",
                'expr'   => 'eq',
                'value'  => \$val,
            ];
        }
        // Get a list of custom form fields
        \$fields = \$this->leadFieldRepository->getEntities([
            'filter' => [
                'force' => \$forceFilters,
            ],
            'orderBy'      => 'f.order',
            'orderByDir'   => 'asc',
            'result_cache' => new ResultCacheOptions(LeadField::CACHE_NAMESPACE),
        ]);

        \$leadFields = [];

        foreach (\$fields as \$f) {
            if (\$byGroup) {
                \$fieldName                              = \$this->translator->trans('mautic.lead.field.group.'.\$f->getGroup());
                \$leadFields[\$fieldName][\$f->getAlias()] = \$f->getLabel();
            } else {
                \$leadFields[\$f->getAlias()] = \$f->getLabel();
            }
        }

        if (\$alphabetical) {
            // Sort the groups
            uksort(\$leadFields, 'strnatcmp');

            if (\$byGroup) {
                // Sort each group by translation
                foreach (\$leadFields as &\$fieldGroup) {
                    uasort(\$fieldGroup, 'strnatcmp');
                }
            }
        }

        return \$leadFields;
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
        return "@bundles/LeadBundle/Field/FieldList.php";
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
        return new Source("", "@bundles/LeadBundle/Field/FieldList.php", "/app/docroot/app/bundles/LeadBundle/Field/FieldList.php");
    }
}
