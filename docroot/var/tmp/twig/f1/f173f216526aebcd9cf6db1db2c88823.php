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

/* @bundles/PageBundle/Tests/Entity/HitTest.php */
class __TwigTemplate_d20308fa37ac0705e19b4ce9f9213aae extends Template
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

namespace Mautic\\PageBundle\\Tests\\Entity;

use Mautic\\PageBundle\\Entity\\Hit;
use PHPUnit\\Framework\\Assert;

class HitTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @dataProvider setUrlTitle
     */
    public function testSetUrlTitle(string \$urlTitle, int \$expected): void
    {
        \$hit = new Hit();
        \$hit->setUrlTitle(\$urlTitle);

        Assert::assertEquals(\$expected, mb_strlen(\$hit->getUrlTitle()));
    }

    /**
     * @return iterable<array<int,int|string>>
     */
    public function setUrlTitle(): iterable
    {
        yield ['custom', 6];
        yield ['Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars ', 191];
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
        return "@bundles/PageBundle/Tests/Entity/HitTest.php";
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
        return new Source("", "@bundles/PageBundle/Tests/Entity/HitTest.php", "/app/docroot/app/bundles/PageBundle/Tests/Entity/HitTest.php");
    }
}
