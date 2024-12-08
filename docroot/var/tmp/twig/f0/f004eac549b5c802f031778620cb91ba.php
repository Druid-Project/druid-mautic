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

/* @bundles/LeadBundle/Provider/TypeOperatorProviderInterface.php */
class __TwigTemplate_e20a0dfe40cc059569e671c95651f8c2 extends Template
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

namespace Mautic\\LeadBundle\\Provider;

use Mautic\\LeadBundle\\Exception\\OperatorsNotFoundException;

interface TypeOperatorProviderInterface
{
    /**
     * @param mixed[] \$operators
     *
     * @return mixed[]
     */
    public function getOperatorsIncluding(array \$operators): array;

    /**
     * @param mixed[] \$operators
     *
     * @return mixed[]
     */
    public function getOperatorsExcluding(array \$operators): array;

    /**
     * @return mixed[]
     *
     * @throws OperatorsNotFoundException
     */
    public function getOperatorsForFieldType(string \$fieldType): array;

    /**
     * @return mixed[]
     */
    public function getAllTypeOperators(): array;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/Provider/TypeOperatorProviderInterface.php";
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
        return new Source("", "@bundles/LeadBundle/Provider/TypeOperatorProviderInterface.php", "/app/docroot/app/bundles/LeadBundle/Provider/TypeOperatorProviderInterface.php");
    }
}
