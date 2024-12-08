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

/* @bundles/ReportBundle/Form/DataTransformer/ReportFilterDataTransformer.php */
class __TwigTemplate_775f77d6ce870a8930e0df664f14c4c2 extends Template
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

namespace Mautic\\ReportBundle\\Form\\DataTransformer;

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType;

/**
 * @implements DataTransformerInterface<array<mixed>, array<mixed>>
 */
class ReportFilterDataTransformer implements DataTransformerInterface
{
    /**
     * @param array \$columns
     */
    public function __construct(
        private \$columns
    ) {
    }

    /**
     * @return array
     */
    public function transform(\$filters)
    {
        if (!is_array(\$filters)) {
            return [];
        }

        foreach (\$filters as &\$f) {
            if (!isset(\$this->columns[\$f['column']])) {
                // Likely being called by form.pre_set_data after post
                return \$filters;
            }
            \$type = \$this->columns[\$f['column']]['type'];
            if (in_array(\$type, ['datetime', 'time', DateTimeType::class, DateType::class, TimeType::class])) {
                \$dt         = new DateTimeHelper(\$f['value'], '', 'utc');
                \$f['value'] = \$dt->toLocalString();
            }
        }

        return \$filters;
    }

    /**
     * @return array
     */
    public function reverseTransform(\$filters)
    {
        if (!is_array(\$filters)) {
            return [];
        }

        foreach (\$filters as &\$f) {
            if (!isset(\$this->columns[\$f['column']])) {
                // Likely being called by form.pre_set_data after post
                return \$filters;
            }
            \$type = \$this->columns[\$f['column']]['type'];
            if (in_array(\$type, ['datetime', 'time'])) {
                \$dt         = new DateTimeHelper(\$f['value'], '', 'local');
                \$f['value'] = \$dt->toUtcString();
            }
        }

        return \$filters;
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
        return "@bundles/ReportBundle/Form/DataTransformer/ReportFilterDataTransformer.php";
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
        return new Source("", "@bundles/ReportBundle/Form/DataTransformer/ReportFilterDataTransformer.php", "/app/docroot/app/bundles/ReportBundle/Form/DataTransformer/ReportFilterDataTransformer.php");
    }
}
