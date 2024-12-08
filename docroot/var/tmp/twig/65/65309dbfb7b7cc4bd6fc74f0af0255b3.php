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

/* @bundles/LeadBundle/Segment/RandomParameterName.php */
class __TwigTemplate_00468da070fb2ef5bafd3ef932c730ef extends Template
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

namespace Mautic\\LeadBundle\\Segment;

class RandomParameterName
{
    /**
     * @var int
     */
    protected \$lastUsedParameterId = 0;

    /**
     * Generate a unique parameter name from int using base conversion.
     * This eliminates chance for parameter name collision and provides unique result for each number.
     *
     * @see https://stackoverflow.com/questions/307486/short-unique-id-in-php/1516430#1516430
     */
    public function generateRandomParameterName(): string
    {
        \$value = base_convert((string) \$this->lastUsedParameterId, 10, 36);

        ++\$this->lastUsedParameterId;

        return 'par'.\$value;
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
        return "@bundles/LeadBundle/Segment/RandomParameterName.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/RandomParameterName.php", "/app/docroot/app/bundles/LeadBundle/Segment/RandomParameterName.php");
    }
}
