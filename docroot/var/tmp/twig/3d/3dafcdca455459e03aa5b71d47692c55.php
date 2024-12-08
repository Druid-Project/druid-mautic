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

/* @bundles/LeadBundle/Event/SegmentDictionaryGenerationEvent.php */
class __TwigTemplate_fef2d3d9be9b8a6ad29b2ab10eaa13ab extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;

/**
 * SegmentDictionaryGenerationEvent is dispatched while dictionary to transform frontend filters into
 *  translation understandable by segment service is run.
 *
 * This is not related to language translations at all
 */
class SegmentDictionaryGenerationEvent extends CommonEvent
{
    /**
     * @param array<string,mixed[]> \$translations
     */
    public function __construct(
        private array \$translations = []
    ) {
    }

    /**
     * @param mixed[] \$attributes
     *
     * @return SegmentDictionaryGenerationEvent
     */
    public function addTranslation(string \$key, \$attributes)
    {
        \$this->translations[\$key] = \$attributes;

        return \$this;
    }

    /**
     * @return array<string,mixed[]>
     */
    public function getTranslations()
    {
        return \$this->translations;
    }

    public function hasTranslation(string \$key): bool
    {
        return isset(\$this->translations[\$key]);
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
        return "@bundles/LeadBundle/Event/SegmentDictionaryGenerationEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/SegmentDictionaryGenerationEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/SegmentDictionaryGenerationEvent.php");
    }
}
