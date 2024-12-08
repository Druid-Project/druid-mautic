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

/* @bundles/CategoryBundle/Tests/Entity/CategoryTest.php */
class __TwigTemplate_2b0786c373e6b2505027cabe045cec4b extends Template
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

namespace Mautic\\CategoryBundle\\Tests\\Entity;

use Mautic\\CategoryBundle\\Entity\\Category;
use PHPUnit\\Framework\\TestCase;

class CategoryTest extends TestCase
{
    public function testCategoryUpdatesReflectsInChanges(): void
    {
        \$category = new Category();
        \$category->setTitle('New Category');
        \$category->setAlias('category');
        \$category->setBundle('bundle');

        \$category->setTitle('Title Changed of Category');
        \$category->setAlias('changed alias of category');
        \$category->setBundle('campaigns');
        \$category->setColor('Blue');
        \$category->setDescription('My Description');

        \$this->assertIsArray(\$category->getChanges());
        \$this->assertNotEmpty(\$category->getChanges());
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
        return "@bundles/CategoryBundle/Tests/Entity/CategoryTest.php";
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
        return new Source("", "@bundles/CategoryBundle/Tests/Entity/CategoryTest.php", "/app/docroot/app/bundles/CategoryBundle/Tests/Entity/CategoryTest.php");
    }
}
