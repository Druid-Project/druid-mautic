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

/* @bundles/PluginBundle/Helper/Cleaner.php */
class __TwigTemplate_77578639dde5ccb1b9949a944eccb06d extends Template
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

namespace Mautic\\PluginBundle\\Helper;

class Cleaner
{
    public const FIELD_TYPE_STRING   = 'string';

    public const FIELD_TYPE_BOOL     = 'boolean';

    public const FIELD_TYPE_NUMBER   = 'number';

    public const FIELD_TYPE_DATETIME = 'datetime';

    public const FIELD_TYPE_DATE     = 'date';

    /**
     * @return bool|float|string
     */
    public static function clean(\$value, \$fieldType = self::FIELD_TYPE_STRING)
    {
        \$clean = strip_tags(html_entity_decode(\$value, ENT_QUOTES));
        switch (\$fieldType) {
            case self::FIELD_TYPE_BOOL:
                return (bool) \$clean;
            case self::FIELD_TYPE_NUMBER:
                return (float) \$clean;
            case self::FIELD_TYPE_DATETIME:
                \$dateTimeValue = new \\DateTime(\$value);

                return (!empty(\$clean)) ? \$dateTimeValue->format('c') : '';
            case self::FIELD_TYPE_DATE:
                \$dateTimeValue = new \\DateTime(\$value);

                return (!empty(\$clean)) ? \$dateTimeValue->format('Y-m-d') : '';
            default:
                return \$clean;
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
        return "@bundles/PluginBundle/Helper/Cleaner.php";
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
        return new Source("", "@bundles/PluginBundle/Helper/Cleaner.php", "/app/docroot/app/bundles/PluginBundle/Helper/Cleaner.php");
    }
}
