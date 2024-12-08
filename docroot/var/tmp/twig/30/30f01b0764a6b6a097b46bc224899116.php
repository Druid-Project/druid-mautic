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

/* @bundles/FormBundle/Tests/Collection/ObjectCollectionTest.php */
class __TwigTemplate_017a84e2fa5bee12d2024ce8b12be00a extends Template
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

namespace Mautic\\FormBundle\\Tests\\Collection;

use Mautic\\FormBundle\\Collection\\ObjectCollection;
use Mautic\\FormBundle\\Crate\\ObjectCrate;

final class ObjectCollectionTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testToChoicesWithObjects(): void
    {
        \$collection = new ObjectCollection(
            [
                new ObjectCrate('contact', 'Contact'),
                new ObjectCrate('company', 'Company'),
            ]
        );

        \$this->assertSame(
            [
                'Contact' => 'contact',
                'Company' => 'company',
            ],
            \$collection->toChoices()
        );
    }

    public function testToChoicesWithoutObjects(): void
    {
        \$collection = new ObjectCollection();

        \$this->assertSame([], \$collection->toChoices());
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
        return "@bundles/FormBundle/Tests/Collection/ObjectCollectionTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Collection/ObjectCollectionTest.php", "/app/docroot/app/bundles/FormBundle/Tests/Collection/ObjectCollectionTest.php");
    }
}
