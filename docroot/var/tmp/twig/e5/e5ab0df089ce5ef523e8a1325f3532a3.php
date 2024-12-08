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

/* @bundles/LeadBundle/Tests/DataFixtures/ORM/LoadTagData.php */
class __TwigTemplate_a9d0c8738c976cc158c54666d21f42fd extends Template
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

namespace Mautic\\LeadBundle\\Tests\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\Tag;

class LoadTagData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager \$manager): void
    {
        \$tag = new Tag('Tag A');
        \$manager->persist(\$tag);
        \$manager->flush();

        \$contact1 = \$this->getReference('lead-1');
        \\assert(\$contact1 instanceof Lead);
        \$contact1->addTag(\$tag);

        \$contact3 = \$this->getReference('lead-3');
        \\assert(\$contact1 instanceof Lead);
        \$contact3->addTag(\$tag);

        \$manager->persist(\$contact1);
        \$manager->persist(\$contact3);
        \$manager->flush();
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return 8;
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
        return "@bundles/LeadBundle/Tests/DataFixtures/ORM/LoadTagData.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/DataFixtures/ORM/LoadTagData.php", "/app/docroot/app/bundles/LeadBundle/Tests/DataFixtures/ORM/LoadTagData.php");
    }
}
