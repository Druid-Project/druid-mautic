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

/* @bundles/CampaignBundle/Tests/Model/CampaignModelTest.php */
class __TwigTemplate_38d2a8fc86f04431fe4fad11ac2c9144 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Model;

use Mautic\\CampaignBundle\\Tests\\CampaignTestAbstract;

class CampaignModelTest extends CampaignTestAbstract
{
    public function testGetSourceListsWithNull(): void
    {
        \$model = \$this->initCampaignModel();
        \$lists = \$model->getSourceLists();
        \$this->assertTrue(isset(\$lists['lists']));
        \$this->assertSame([parent::\$mockId => parent::\$mockName], \$lists['lists']);
        \$this->assertTrue(isset(\$lists['forms']));
        \$this->assertSame([parent::\$mockId => parent::\$mockName], \$lists['forms']);
    }

    public function testGetSourceListsWithLists(): void
    {
        \$model = \$this->initCampaignModel();
        \$lists = \$model->getSourceLists('lists');
        \$this->assertSame([parent::\$mockId => parent::\$mockName], \$lists);
    }

    public function testGetSourceListsWithForms(): void
    {
        \$model = \$this->initCampaignModel();
        \$lists = \$model->getSourceLists('forms');
        \$this->assertSame([parent::\$mockId => parent::\$mockName], \$lists);
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
        return "@bundles/CampaignBundle/Tests/Model/CampaignModelTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Model/CampaignModelTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Model/CampaignModelTest.php");
    }
}
