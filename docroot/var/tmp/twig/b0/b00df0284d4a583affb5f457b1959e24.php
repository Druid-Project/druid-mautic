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

/* @bundles/LeadBundle/Tests/Form/Type/HtmlTypeTest.php */
class __TwigTemplate_91435fd97a8ea1d3c1700cc1755d0e74 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Form\\Type;

use Mautic\\LeadBundle\\Form\\Type\\HtmlType;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;

final class HtmlTypeTest extends TestCase
{
    /** @var HtmlType */
    private \$htmlType;

    public function setUp(): void
    {
        parent::setUp();
        \$this->htmlType = new HtmlType();
    }

    public function testGetParent(): void
    {
        \$this->assertSame(TextareaType::class, \$this->htmlType->getParent());
    }

    public function testGetName(): void
    {
        \$this->assertSame('html', \$this->htmlType->getName());
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
        return "@bundles/LeadBundle/Tests/Form/Type/HtmlTypeTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Form/Type/HtmlTypeTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Form/Type/HtmlTypeTest.php");
    }
}
