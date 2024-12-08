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

/* @bundles/EmailBundle/Tests/Helper/DTO/AddressDTOTest.php */
class __TwigTemplate_2f383e17049cbc8c994eb1e7411404e9 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Helper\\DTO;

use Mautic\\EmailBundle\\Helper\\DTO\\AddressDTO;
use Mautic\\EmailBundle\\Helper\\Exception\\TokenNotFoundOrEmptyException;
use PHPUnit\\Framework\\TestCase;

class AddressDTOTest extends TestCase
{
    public function testNameTokenReturnsTrue(): void
    {
        \$this->assertTrue(AddressDTO::fromAddressArray(['someone@somewhere.com' => '{contactfield=other_name}'])->isNameTokenized());
    }

    public function testNameTokenReturnsFalse(): void
    {
        \$this->assertFalse((new AddressDTO('someone@somewhere.com', 'Someone Somewhere'))->isNameTokenized());
    }

    public function testNameTokenEmptyThrowsException(): void
    {
        \$this->expectException(TokenNotFoundOrEmptyException::class);

        AddressDTO::fromAddressArray(['someone@somewhere.com' => '{contactfield=other_name}'])->getNameTokenValue([]);
    }

    public function testNameTokenIsReturned(): void
    {
        \$contact = ['other_name' => 'Thing Two'];

        \$this->assertEquals(
            'Thing Two',
            (new AddressDTO('someone@somewhere.com', '{contactfield=other_name}'))->getNameTokenValue(\$contact)
        );
    }

    public function testEmailTokenReturnsTrue(): void
    {
        \$this->assertTrue((new AddressDTO('{contactfield=other_email}', 'Someone Somewhere'))->isEmailTokenized());
    }

    public function testEmailTokenReturnsFalse(): void
    {
        \$this->assertFalse((new AddressDTO('someone@somewhere.com', 'Someone Somewhere'))->isEmailTokenized());
    }

    public function testEmailTokenEmptyThrowsException(): void
    {
        \$this->expectException(TokenNotFoundOrEmptyException::class);

        (new AddressDTO('{contactfield=other_email}', 'Thing One'))->getEmailTokenValue([]);
    }

    public function testEmailTokenIsReturned(): void
    {
        \$contact = ['other_email' => 'other@somewhere.com'];

        \$this->assertEquals(
            'other@somewhere.com',
            (new AddressDTO('{contactfield=other_email}', ''))->getEmailTokenValue(\$contact)
        );
    }

    public function testTokenValuesReturned(): void
    {
        \$contact = [
            'other_email' => 'thingtwo@somewhere.com',
            'other_name'  => 'Thing Two',
        ];

        \$addressDTO = new AddressDTO('{contactfield=other_email}', '{contactfield=other_name}');

        \$this->assertEquals('thingtwo@somewhere.com', \$addressDTO->getEmailTokenValue(\$contact));
        \$this->assertEquals('Thing Two', \$addressDTO->getNameTokenValue(\$contact));
    }

    public function testDefaultsAreReturned(): void
    {
        \$addressDTO = new AddressDTO('someone@somewhere.com', 'Someone Somewhere');

        \$this->assertEquals('someone@somewhere.com', \$addressDTO->getEmail());
        \$this->assertEquals('Someone Somewhere', \$addressDTO->getName());
    }

    public function testSpecialCharactersAreDecoded(): void
    {
        \$addressDTO = new AddressDTO('someone@somewhere.com', 'No Body&#39;s Business');

        \$this->assertEquals('someone@somewhere.com', \$addressDTO->getEmail());
        \$this->assertEquals(\"No Body's Business\", \$addressDTO->getName());
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
        return "@bundles/EmailBundle/Tests/Helper/DTO/AddressDTOTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Helper/DTO/AddressDTOTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/Helper/DTO/AddressDTOTest.php");
    }
}
