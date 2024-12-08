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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/Mapper/CategoryMapperTest.php */
class __TwigTemplate_f0ab6dc8b90efe96f19790fd2c5702bd extends Template
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

namespace Mautic\\EmailBundle\\Tests\\MonitoredEmail\\Processor\\Bounce\\Mapper;

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\CategoryNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Definition\\Category as Definition;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Mapper\\Category;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Mapper\\CategoryMapper;

class CategoryMapperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Test that the Category object is returned
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Mapper\\CategoryMapper::map
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Definition\\Category
     */
    public function testCategoryIsMapped(): void
    {
        \$category = CategoryMapper::map(Definition::ANTISPAM);

        \$this->assertInstanceOf(Category::class, \$category);
    }

    /**
     * @testdox Test that exception is thrown if a category is not found
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Mapper\\CategoryMapper::map
     */
    public function testExceptionIsThrownWithUnrecognizedCategory(): void
    {
        \$this->expectException(CategoryNotFound::class);

        CategoryMapper::map('bippitybop');
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
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/Mapper/CategoryMapperTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/Mapper/CategoryMapperTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/Mapper/CategoryMapperTest.php");
    }
}
