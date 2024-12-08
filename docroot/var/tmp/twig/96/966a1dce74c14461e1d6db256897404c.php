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

/* @bundles/LeadBundle/Deduplicate/Helper/MergeValueHelper.php */
class __TwigTemplate_b2294ac766ef29e86310151713bc2734 extends Template
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

namespace Mautic\\LeadBundle\\Deduplicate\\Helper;

use Mautic\\LeadBundle\\Deduplicate\\Exception\\ValueNotMergeableException;

class MergeValueHelper
{
    /**
     * @param mixed \$newerValue
     * @param mixed \$olderValue
     * @param mixed \$currentValue
     * @param mixed \$defaultValue
     * @param bool  \$newIsAnonymous
     *
     * @return mixed
     *
     * @throws ValueNotMergeableException
     */
    public static function getMergeValue(\$newerValue, \$olderValue, \$currentValue = null, \$defaultValue = null, \$newIsAnonymous = false)
    {
        if (\$newerValue === \$olderValue) {
            throw new ValueNotMergeableException(\$newerValue, \$olderValue);
        }

        if (null !== \$currentValue && \$newerValue === \$currentValue) {
            throw new ValueNotMergeableException(\$newerValue, \$olderValue);
        }

        \$isDefaultValue = null !== \$defaultValue && \$newerValue === \$defaultValue;

        if (self::isNotEmpty(\$newerValue) && !(\$newIsAnonymous && \$isDefaultValue)) {
            return \$newerValue;
        }

        if (self::isNotEmpty(\$olderValue)) {
            return \$olderValue;
        }

        throw new ValueNotMergeableException(\$newerValue, \$olderValue);
    }

    public static function isNotEmpty(\$value): bool
    {
        return null !== \$value && '' !== \$value;
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
        return "@bundles/LeadBundle/Deduplicate/Helper/MergeValueHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Deduplicate/Helper/MergeValueHelper.php", "/app/docroot/app/bundles/LeadBundle/Deduplicate/Helper/MergeValueHelper.php");
    }
}
