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

/* @bundles/UserBundle/Tests/Functional/Controller/PublicControllerTest.php */
class __TwigTemplate_8f860cd82567cb6bd007ca185015cfd5 extends Template
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

namespace Mautic\\UserBundle\\Tests\\Functional\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;

class PublicControllerTest extends MauticMysqlTestCase
{
    /**
     * Tests to ensure that xss is prevented on password reset page.
     */
    public function testXssFilterOnPasswordReset(): void
    {
        \$this->client->request('GET', '/passwordreset?bundle=%27-alert(\"XSS%20TEST%20Mautic\")-%27');
        \$clientResponse = \$this->client->getResponse();
        \$this->assertSame(200, \$clientResponse->getStatusCode(), 'Return code must be 200.');
        \$responseData = \$clientResponse->getContent();
        // Tests that actual string is not present.
        \$this->assertStringNotContainsString('-alert(\"xss test mautic\")-', \$responseData, 'XSS injection attempt is filtered.');
        // Tests that sanitized string is passed.
        \$this->assertStringContainsString('alertxsstestmautic', \$responseData, 'XSS sanitized string is present.');
    }

    public function testPasswordResetPage(): void
    {
        \$this->client->request('GET', '/passwordreset');
        \$clientResponse = \$this->client->getResponse();
        \$this->assertSame(200, \$clientResponse->getStatusCode(), 'Return code must be 200.');
        \$responseData = \$clientResponse->getContent();
        \$this->assertStringContainsString('Enter either your username or email to reset your password. Instructions to reset your password will be sent to the email in your profile.', \$responseData);
    }

    public function testPasswordResetAction(): void
    {
        \$crawler    = \$this->client->request('GET', '/passwordreset');
        \$saveButton = \$crawler->selectButton('reset password');
        \$form       = \$saveButton->form();
        \$form['passwordreset[identifier]']->setValue('test@example.com');

        \$crawler        = \$this->client->submit(\$form);
        \$clientResponse = \$this->client->getResponse();
        \$this->assertTrue(\$clientResponse->isOk(), \$clientResponse->getContent());

        \$responseData = \$clientResponse->getContent();
        \$this->assertStringContainsString('A new password has been generated and will be emailed to you, if this user exists. If you do not receive it within a few minutes, check your spam box and/or contact the system administrator.', \$responseData);
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
        return "@bundles/UserBundle/Tests/Functional/Controller/PublicControllerTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/Functional/Controller/PublicControllerTest.php", "/app/docroot/app/bundles/UserBundle/Tests/Functional/Controller/PublicControllerTest.php");
    }
}
