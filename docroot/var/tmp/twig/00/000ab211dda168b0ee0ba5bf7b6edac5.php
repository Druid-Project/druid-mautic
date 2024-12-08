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

/* @bundles/CoreBundle/Tests/Unit/Helper/EncryptionHelperTest.php */
class __TwigTemplate_33fe48dcbda56a331a61bca7e7c470ef extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\EncryptionHelper;
use Mautic\\CoreBundle\\Security\\Cryptography\\Cipher\\Symmetric\\OpenSSLCipher;
use Mautic\\CoreBundle\\Security\\Cryptography\\Cipher\\Symmetric\\SymmetricCipherInterface;
use Mautic\\CoreBundle\\Security\\Exception\\Cryptography\\Symmetric\\InvalidDecryptionException;
use PHPUnit\\Framework\\MockObject\\MockObject;

class EncryptionHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|CoreParametersHelper
     */
    private MockObject \$coreParametersHelperMock;

    /**
     * @var MockObject|OpenSSLCipher
     */
    private MockObject \$mainCipherMock;

    /**
     * @var MockObject|SymmetricCipherInterface
     */
    private MockObject \$secondaryCipherMock;

    /**
     * @var string
     */
    private \$key = 'totallySecretKeyHere';

    protected function setUp(): void
    {
        parent::setUp();
        \$this->coreParametersHelperMock = \$this->createMock(CoreParametersHelper::class);
        \$this->mainCipherMock           = \$this->createMock(OpenSSLCipher::class);
        \$this->secondaryCipherMock      = \$this->createMock(SymmetricCipherInterface::class);
    }

    public function testEncryptMainSupported(): void
    {
        \$initVector       = 'totallyRandomInitializationVector';
        \$secretMessage    = 'totallySecretMessage';
        \$encryptedMessage = 'encryptionIsMagical';
        \$expectedReturn   = base64_encode(\$encryptedMessage).'|'.base64_encode(\$initVector);

        \$this->mainCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->coreParametersHelperMock->expects(\$this->once())
            ->method('get')
            ->with('mautic.secret_key')
            ->willReturn(\$this->key);

        \$this->mainCipherMock->expects(\$this->once())
            ->method('getRandomInitVector')
            ->willReturn(\$initVector);

        \$this->mainCipherMock->expects(\$this->once())
            ->method('encrypt')
            ->with(serialize(\$secretMessage), \$this->key, \$initVector)
            ->willReturn(\$encryptedMessage);

        \$encryptionHelper = \$this->getEncryptionHelper();
        \$actualReturn     = \$encryptionHelper->encrypt(\$secretMessage);
        \$this->assertSame(\$expectedReturn, \$actualReturn);
    }

    public function testEncryptMainNotSupported(): void
    {
        \$initVector       = 'totallyRandomInitializationVector';
        \$secretMessage    = 'totallySecretMessage';
        \$encryptedMessage = 'encryptionIsMagical';
        \$expectedReturn   = base64_encode(\$encryptedMessage).'|'.base64_encode(\$initVector);

        \$this->mainCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(false);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->coreParametersHelperMock->expects(\$this->once())
            ->method('get')
            ->with('mautic.secret_key')
            ->willReturn(\$this->key);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('getRandomInitVector')
            ->willReturn(\$initVector);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('encrypt')
            ->with(serialize(\$secretMessage), \$this->key, \$initVector)
            ->willReturn(\$encryptedMessage);

        \$encryptionHelper = \$this->getEncryptionHelper();
        \$actualReturn     = \$encryptionHelper->encrypt(\$secretMessage);
        \$this->assertSame(\$expectedReturn, \$actualReturn);
    }

    public function testDecryptMain(): void
    {
        \$toDecrypt      = 'ZW5jcnlwdGlvbklzTWFnaWNhbA==|dG90YWxseVJhbmRvbUluaXRpYWxpemF0aW9uVmVjdG9y';
        \$expectedReturn = 'totallySecretMessage';

        \$this->mainCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->coreParametersHelperMock->expects(\$this->once())
            ->method('get')
            ->with('mautic.secret_key')
            ->willReturn(\$this->key);

        \$this->mainCipherMock->expects(\$this->once())
            ->method('decrypt')
            ->with('encryptionIsMagical', \$this->key, 'totallyRandomInitializationVector')
            ->willReturn('s:20:\"totallySecretMessage\";');

        \$encryptionHelper = \$this->getEncryptionHelper();
        \$actualReturn     = \$encryptionHelper->decrypt(\$toDecrypt);
        \$this->assertSame(\$expectedReturn, \$actualReturn);
    }

    public function testDecryptSecondary(): void
    {
        \$toDecrypt      = 'ZW5jcnlwdGlvbklzTWFnaWNhbA==|dG90YWxseVJhbmRvbUluaXRpYWxpemF0aW9uVmVjdG9y';
        \$expectedReturn = 'totallySecretMessage';

        \$this->mainCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->coreParametersHelperMock->expects(\$this->once())
            ->method('get')
            ->with('mautic.secret_key')
            ->willReturn(\$this->key);

        \$this->mainCipherMock->expects(\$this->once())
            ->method('decrypt')
            ->with('encryptionIsMagical', \$this->key, 'totallyRandomInitializationVector')
            ->willThrowException(new InvalidDecryptionException());

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('decrypt')
            ->with('encryptionIsMagical', \$this->key, 'totallyRandomInitializationVector')
            ->willReturn('s:20:\"totallySecretMessage\";');

        \$encryptionHelper = \$this->getEncryptionHelper();
        \$actualReturn     = \$encryptionHelper->decrypt(\$toDecrypt, false);
        \$this->assertSame(\$expectedReturn, \$actualReturn);
    }

    public function testDecryptFalse(): void
    {
        \$toDecrypt = 'ZW5jcnlwdGlvbklzTWFnaWNhbA==|dG90YWxseVJhbmRvbUluaXRpYWxpemF0aW9uVmVjdG9y';

        \$this->mainCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->coreParametersHelperMock->expects(\$this->once())
            ->method('get')
            ->with('mautic.secret_key')
            ->willReturn(\$this->key);

        \$this->mainCipherMock->expects(\$this->once())
            ->method('decrypt')
            ->with('encryptionIsMagical', \$this->key, 'totallyRandomInitializationVector')
            ->willThrowException(new InvalidDecryptionException());

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('decrypt')
            ->with('encryptionIsMagical', \$this->key, 'totallyRandomInitializationVector')
            ->willThrowException(new InvalidDecryptionException());

        \$encryptionHelper = \$this->getEncryptionHelper();
        \$actualReturn     = \$encryptionHelper->decrypt(\$toDecrypt, false);
        \$this->assertFalse(\$actualReturn);
    }

    public function testMainSupported(): void
    {
        \$this->mainCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(false);

        \$this->coreParametersHelperMock->expects(\$this->once())
            ->method('get')
            ->with('mautic.secret_key')
            ->willReturn(\$this->key);

        \$this->getEncryptionHelper();
    }

    public function testSecondarySupported(): void
    {
        \$this->mainCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(false);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->coreParametersHelperMock->expects(\$this->once())
            ->method('get')
            ->with('mautic.secret_key')
            ->willReturn(\$this->key);

        \$this->getEncryptionHelper();
    }

    public function testNoneSupported(): void
    {
        \$this->mainCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(false);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(false);

        \$this->expectException(\\RuntimeException::class);
        \$this->getEncryptionHelper();
    }

    private function getEncryptionHelper(): EncryptionHelper
    {
        return new EncryptionHelper(
            \$this->coreParametersHelperMock,
            \$this->mainCipherMock,
            \$this->secondaryCipherMock
        );
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/EncryptionHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/EncryptionHelperTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/EncryptionHelperTest.php");
    }
}
