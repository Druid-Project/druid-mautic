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

/* @bundles/LeadBundle/Form/DataTransformer/FieldFilterTransformer.php */
class __TwigTemplate_e5c7162720a231dd7b59f2b6b7b9f669 extends Template
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

namespace Mautic\\LeadBundle\\Form\\DataTransformer;

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\LeadBundle\\Entity\\LeadListRepository;
use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @implements DataTransformerInterface<mixed, array<mixed>|mixed>
 */
class FieldFilterTransformer implements DataTransformerInterface
{
    /**
     * @var string[]
     */
    private array \$relativeDateStrings;

    public function __construct(
        TranslatorInterface \$translator,
        private array \$default = []
    ) {
        \$this->relativeDateStrings = LeadListRepository::getRelativeDateTranslationKeys();
        foreach (\$this->relativeDateStrings as &\$string) {
            \$string = \$translator->trans(\$string);
        }
    }

    /**
     * From DB format to form format.
     *
     * @param mixed \$rawFilters
     *
     * @return array|mixed
     */
    public function transform(\$rawFilters)
    {
        if (!is_array(\$rawFilters)) {
            return [];
        }

        foreach (\$rawFilters as \$key => \$filter) {
            if (!empty(\$this->default)) {
                \$rawFilters[\$key] = array_merge(\$this->default, \$rawFilters[\$key]);
            }
            if ('datetime' === \$filter['type']) {
                \$bcFilter = \$filter['filter'] ?? '';
                \$filter   = \$filter['properties']['filter'] ?? \$bcFilter;
                if (empty(\$filter) || in_array(\$filter, \$this->relativeDateStrings) || stristr(\$filter[0], '-') || stristr(\$filter[0], '+')) {
                    continue;
                }

                \$dt = new DateTimeHelper(\$filter, 'Y-m-d H:i');

                \$rawFilters[\$key]['properties']['filter'] = \$dt->toLocalString();
            }
        }

        return \$rawFilters;
    }

    /**
     * Form format to database format.
     *
     * @param mixed \$rawFilters
     *
     * @return array|mixed
     */
    public function reverseTransform(\$rawFilters)
    {
        if (!is_array(\$rawFilters)) {
            return [];
        }

        \$rawFilters = array_values(\$rawFilters);

        foreach (\$rawFilters as \$k => \$f) {
            if ('datetime' == \$f['type']) {
                \$bcFilter = \$f['filter'] ?? '';
                \$filter   = \$f['properties']['filter'] ?? \$bcFilter;
                if (empty(\$filter) || in_array(\$filter, \$this->relativeDateStrings) || stristr(\$filter[0], '-') || stristr(\$filter[0], '+')) {
                    continue;
                }

                \$dt = new DateTimeHelper(\$filter, 'Y-m-d H:i', 'local');

                \$rawFilters[\$k]['properties']['filter'] = \$dt->toUtcString();
            }
        }

        return \$rawFilters;
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
        return "@bundles/LeadBundle/Form/DataTransformer/FieldFilterTransformer.php";
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
        return new Source("", "@bundles/LeadBundle/Form/DataTransformer/FieldFilterTransformer.php", "/app/docroot/app/bundles/LeadBundle/Form/DataTransformer/FieldFilterTransformer.php");
    }
}
