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

/* @bundles/LeadBundle/Event/TypeOperatorsEvent.php */
class __TwigTemplate_49ff0dc88773dc50f5fa5286ea09af45 extends Template
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

use Symfony\\Contracts\\EventDispatcher\\Event;

/**
 * Event that collects operators for different field types.
 */
final class TypeOperatorsEvent extends Event
{
    /**
     * @var array<string,mixed[]>
     */
    private array \$operators = [];

    /**
     * \$operators example:
     * [
     *      'include' => ['=' => 'like'],
     *      'exclude' => ['!=' => '!like'],
     * ].
     *
     * @param array<string,mixed[]> \$operators
     */
    public function setOperatorsForFieldType(string \$fieldType, array \$operators): void
    {
        \$this->operators[\$fieldType] = \$operators;
    }

    /**
     * @return array<string,mixed[]>
     */
    public function getOperatorsForAllFieldTypes(): array
    {
        return \$this->operators;
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
        return "@bundles/LeadBundle/Event/TypeOperatorsEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/TypeOperatorsEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/TypeOperatorsEvent.php");
    }
}
