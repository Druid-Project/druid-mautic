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

/* @bundles/UserBundle/Tests/Security/SAML/User/UserMapperTest.php */
class __TwigTemplate_ae1b01bd866615d9e5741bda782e5a2e extends Template
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

namespace Mautic\\UserBundle\\Tests\\Security\\SAML\\User;

use LightSaml\\Model\\Assertion\\Assertion;
use LightSaml\\Model\\Assertion\\Attribute;
use LightSaml\\Model\\Assertion\\AttributeStatement;
use LightSaml\\Model\\Protocol\\Response;
use Mautic\\UserBundle\\Security\\SAML\\User\\UserMapper;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class UserMapperTest extends TestCase
{
    private UserMapper \$mapper;

    /**
     * @var Response|MockObject
     */
    private MockObject \$response;

    protected function setUp(): void
    {
        \$this->mapper = new UserMapper(
            [
                'email'     => 'EmailAddress',
                'firstname' => 'FirstName',
                'lastname'  => 'LastName',
                'username'  => null,
            ]
        );

        \$emailAttribute = \$this->createMock(Attribute::class);
        \$emailAttribute->method('getFirstAttributeValue')
            ->willReturn('hello@there.com');

        \$firstnameAttribute = \$this->createMock(Attribute::class);
        \$firstnameAttribute->method('getFirstAttributeValue')
            ->willReturn('Joe');

        \$lastnameAttribute = \$this->createMock(Attribute::class);
        \$lastnameAttribute->method('getFirstAttributeValue')
            ->willReturn('Smith');

        \$defaultAttribute = \$this->createMock(Attribute::class);
        \$defaultAttribute->method('getFirstAttributeValue')
            ->willReturn('default');

        \$statement = \$this->createMock(AttributeStatement::class);
        \$statement->method('getFirstAttributeByName')
            ->willReturnCallback(
                fn (\$attributeName) => match (\$attributeName) {
                    'EmailAddress' => \$emailAttribute,
                    'FirstName'    => \$firstnameAttribute,
                    'LastName'     => \$lastnameAttribute,
                    default        => \$defaultAttribute,
                }
            );

        \$assertion = \$this->createMock(Assertion::class);
        \$assertion->method('getAllAttributeStatements')
            ->willReturn([\$statement]);

        \$this->response = \$this->createMock(Response::class);
        \$this->response->method('getAllAssertions')
            ->willReturn([\$assertion]);
    }

    public function testUserEntityIsPopulatedFromAssertions(): void
    {
        \$user = \$this->mapper->getUser(\$this->response);
        \$this->assertEquals('hello@there.com', \$user->getEmail());
        \$this->assertEquals('hello@there.com', \$user->getUserIdentifier());
        \$this->assertEquals('Joe', \$user->getFirstName());
        \$this->assertEquals('Smith', \$user->getLastName());
    }

    public function testUsernameIsReturned(): void
    {
        \$username = \$this->mapper->getUsername(\$this->response);
        \$this->assertEquals('hello@there.com', \$username);
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
        return "@bundles/UserBundle/Tests/Security/SAML/User/UserMapperTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/Security/SAML/User/UserMapperTest.php", "/app/docroot/app/bundles/UserBundle/Tests/Security/SAML/User/UserMapperTest.php");
    }
}
