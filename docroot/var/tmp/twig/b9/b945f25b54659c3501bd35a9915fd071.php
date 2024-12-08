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

/* @bundles/FormBundle/Tests/Controller/FieldControllerFunctionalTest.php */
class __TwigTemplate_5b2b18bbf7001474aa99d4dc989d3c33 extends Template
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

namespace Mautic\\FormBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\DomCrawler\\Crawler;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

final class FieldControllerFunctionalTest extends MauticMysqlTestCase
{
    protected \$useCleanupRollback = false;

    public function testNewEmailFieldFormIsPreMapped(): void
    {
        \$this->client->request(
            Request::METHOD_GET,
            '/s/forms/field/new?type=email&tmpl=field&formId=temporary_form_hash&inBuilder=1',
            [],
            [],
            \$this->createAjaxHeaders()
        );
        \$clientResponse = \$this->client->getResponse();
        \$payload        = json_decode(\$clientResponse->getContent(), true);
        Assert::assertSame(Response::HTTP_OK, \$clientResponse->getStatusCode());
        Assert::assertStringContainsString('<option value=\"email\" selected=\"selected\">', \$payload['newContent']);
    }

    public function testNewCaptchaFieldFormCanBeSaved(): void
    {
        \$payload = [
            'name'        => 'Submission test form',
            'description' => 'Form created via captcha test',
            'formType'    => 'standalone',
            'isPublished' => true,
            'fields'      => [
                [
                    'label'     => 'Email',
                    'type'      => 'email',
                    'alias'     => 'email',
                    'leadField' => 'email',
                ],
                [
                    'label' => 'Submit',
                    'type'  => 'button',
                ],
            ],
            'postAction'  => 'return',
        ];

        \$this->client->request(Request::METHOD_POST, '/api/forms/new', \$payload);
        \$clientResponse = \$this->client->getResponse();
        \$response       = json_decode(\$clientResponse->getContent(), true);
        \$formId         = \$response['form']['id'];

        \$this->assertSame(Response::HTTP_CREATED, \$clientResponse->getStatusCode(), \$clientResponse->getContent());

        \$crawler     = \$this->client->request(Request::METHOD_GET, \"/s/forms/field/new?type=captcha&tmpl=field&formId={\$formId}&inBuilder=1\", [], [], \$this->createAjaxHeaders());
        \$content     = \$this->client->getResponse()->getContent();
        Assert::assertTrue(\$this->client->getResponse()->isOk(), \$content);
        \$content     = json_decode(\$content)->newContent;
        \$crawler     = new Crawler(\$content, \$this->client->getInternalRequest()->getUri());
        \$formCrawler = \$crawler->filter('form[name=formfield]');
        \$this::assertSame(1, \$formCrawler->count(), \$this->client->getResponse()->getContent());
        \$form = \$formCrawler->form();
        \$form->setValues(
            [
                'formfield[formId]'              => \$formId,
                'formfield[type]'                => 'captcha',
                'formfield[label]'               => 'What is the capital of Czech Republic?',
                'formfield[properties][captcha]' => 'Prague',
            ]
        );
        \$this->client->request(\$form->getMethod(), \$form->getUri(), \$form->getPhpValues(), \$form->getPhpFiles(), \$this->createAjaxHeaders());

        Assert::assertTrue(\$this->client->getResponse()->isOk(), \$this->client->getResponse()->getContent());

        \$response = json_decode(\$this->client->getResponse()->getContent(), true);

        Assert::assertSame(1, \$response['success'], \$this->client->getResponse()->getContent());
        Assert::assertSame(1, \$response['closeModal'], \$this->client->getResponse()->getContent());
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
        return "@bundles/FormBundle/Tests/Controller/FieldControllerFunctionalTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Controller/FieldControllerFunctionalTest.php", "/app/docroot/app/bundles/FormBundle/Tests/Controller/FieldControllerFunctionalTest.php");
    }
}
