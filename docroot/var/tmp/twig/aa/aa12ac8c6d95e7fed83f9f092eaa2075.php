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

/* @bundles/CampaignBundle/Tests/Controller/SourceControllerTest.php */
class __TwigTemplate_43ca4e17ce0dd3ebf01ecd5d72f4e542 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\FormBundle\\Entity\\Form;

class SourceControllerTest extends MauticMysqlTestCase
{
    public function testTwoSourcesWithSameName(): void
    {
        \$form1 = new Form();
        \$form1->setName('test');
        \$form1->setAlias('test');
        \$form1->setFormType('campaign');

        \$form2 = new Form();
        \$form2->setName('test');
        \$form2->setAlias('test');
        \$form2->setFormType('campaign');

        \$this->em->persist(\$form1);
        \$this->em->persist(\$form2);

        \$this->em->flush();
        \$this->em->detach(\$form1);
        \$this->em->detach(\$form2);

        \$this->client->request('GET', '/s/campaigns/sources/new/random_object_id?sourceType=forms', [], [], \$this->createAjaxHeaders());
        \$clientResponse  = \$this->client->getResponse();
        \$responseContent = \$clientResponse->getContent();
        \$this->assertSame(200, \$clientResponse->getStatusCode(), \$responseContent);

        \$html = json_decode(\$responseContent, true)['newContent'];
        \$this->assertStringContainsString(\"<option value=\\\"{\$form1->getId()}\\\">test ({\$form1->getId()})</option>\", \$html);
        \$this->assertStringContainsString(\"<option value=\\\"{\$form2->getId()}\\\">test ({\$form2->getId()})</option>\", \$html);
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
        return "@bundles/CampaignBundle/Tests/Controller/SourceControllerTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Controller/SourceControllerTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Controller/SourceControllerTest.php");
    }
}
