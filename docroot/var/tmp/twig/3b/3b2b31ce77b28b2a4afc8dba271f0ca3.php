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

/* @bundles/FormBundle/Tests/Controller/ActionControllerFunctionalTest.php */
class __TwigTemplate_b27f697b669ac5e93b4d56e3dffcc1ee extends Template
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

namespace Mautic\\FormBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\FormBundle\\Entity\\Form;
use Symfony\\Component\\DomCrawler\\Crawler;
use Symfony\\Component\\HttpFoundation\\Request;

final class ActionControllerFunctionalTest extends MauticMysqlTestCase
{
    /**
     * @throws \\Doctrine\\ORM\\OptimisticLockException
     * @throws \\Doctrine\\ORM\\ORMException
     */
    public function testNewActionWithJapanese(): void
    {
        // Create new form
        \$form = new Form();
        \$form->setName('Test Form');
        \$form->setAlias('testform');
        \$this->em->persist(\$form);
        \$this->em->flush();

        // Fetch the form
        \$this->client->request(Request::METHOD_GET, '/s/forms/action/new',
            [
                'formId' => \$form->getId(),
                'type'   => 'form.email',
            ],
            [],
            \$this->createAjaxHeaders(),
        );
        \$this->assertTrue(\$this->client->getResponse()->isOk());
        \$content     = \$this->client->getResponse()->getContent();
        \$content     = json_decode(\$content)->newContent;
        \$crawler     = new Crawler(\$content, \$this->client->getInternalRequest()->getUri());
        \$formCrawler = \$crawler->filter('form');
        \$this->assertCount(1, \$formCrawler);
        \$form = \$formCrawler->form();

        // Save new Send Form Results action
        \$form->setValues([
            'formaction[properties][subject]' => 'Test Japanese',
            'formaction[properties][message]' => '<p style=\"font-family: メイリオ\">Test</p>',
        ]);
        \$this->client->submit(\$form, [], \$this->createAjaxHeaders());
        \$this->assertTrue(\$this->client->getResponse()->isOk());
        \$content  = \$this->client->getResponse()->getContent();
        \$content  = json_decode(\$content)->actionHtml;
        \$crawler  = new Crawler(\$content);
        \$editPage = \$crawler->filter('.btn-edit')->attr('href');

        // Check the content was not changed
        \$this->client->request(Request::METHOD_GET, \$editPage, [], [], \$this->createAjaxHeaders());
        \$this->assertStringContainsString('&lt;p style=&quot;font-family: メイリオ&quot;&gt;Test&lt;/p&gt;', json_decode(\$this->client->getResponse()->getContent())->newContent);
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
        return "@bundles/FormBundle/Tests/Controller/ActionControllerFunctionalTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Controller/ActionControllerFunctionalTest.php", "/app/docroot/app/bundles/FormBundle/Tests/Controller/ActionControllerFunctionalTest.php");
    }
}
