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

/* @bundles/CoreBundle/Doctrine/QueryFormatter/MysqlFormatter.php */
class __TwigTemplate_59a664c69eddabaa1fcca28e2619b93f extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\QueryFormatter;

/**
 * Help generate SQL statements to format column data.
 */
class MysqlFormatter extends AbstractFormatter
{
    /**
     * Format field to datetime.
     *
     * @param string \$format
     */
    public function toDateTime(\$field, \$format = '%Y-%m-%d %k:%i:%s'): string
    {
        return \"STR_TO_DATE(\$field, '\$format')\";
    }

    /**
     * Format field to date.
     *
     * @param string \$format
     */
    public function toDate(\$field, \$format = '%Y-%m-%d'): string
    {
        return \"STR_TO_DATE(\$field, '\$format')\";
    }

    /**
     * Format field to time.
     *
     * @param string \$format
     */
    public function toTime(\$field, \$format = '%k:%i:%s'): string
    {
        return \"STR_TO_DATE(\$field, '\$format')\";
    }

    /**
     * Format field to a numeric.
     *
     * @return mixed
     */
    public function toNumeric(\$field)
    {
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
        return "@bundles/CoreBundle/Doctrine/QueryFormatter/MysqlFormatter.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/QueryFormatter/MysqlFormatter.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/QueryFormatter/MysqlFormatter.php");
    }
}
