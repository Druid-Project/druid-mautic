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

/* @bundles/CoreBundle/Helper/EncryptionHelper.php */
class __TwigTemplate_0eba4c848644fabc32f5cabb757f8184 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Mautic\\CoreBundle\\Security\\Cryptography\\Cipher\\Symmetric\\SymmetricCipherInterface;
use Mautic\\CoreBundle\\Security\\Exception\\Cryptography\\Symmetric\\InvalidDecryptionException;

class EncryptionHelper
{
    /**
     * @var SymmetricCipherInterface[]
     */
    private ?array \$availableCiphers = null;

    /**
     * @var string
     */
    private \$key;

    public function __construct(
        CoreParametersHelper \$coreParametersHelper
    ) {
        \$nonCipherArgs = 1;
        for (\$i = \$nonCipherArgs; \$i < func_num_args(); ++\$i) {
            \$possibleCipher = func_get_arg(\$i);
            if (!(\$possibleCipher instanceof SymmetricCipherInterface)) {
                throw new \\InvalidArgumentException(\$possibleCipher::class.' has to implement '.SymmetricCipherInterface::class);
            }
            if (!\$possibleCipher->isSupported()) {
                continue;
            }
            \$this->availableCiphers[] = \$possibleCipher;
        }

        if (!\$this->availableCiphers || 0 === count(\$this->availableCiphers)) {
            throw new \\RuntimeException('None of possible cryptography libraries is supported');
        }

        \$this->key = \$coreParametersHelper->get('mautic.secret_key');
    }

    /**
     * Returns a 64 character string.
     */
    public static function generateKey(): string
    {
        return hash('sha256', uniqid(mt_rand(), true));
    }

    /**
     * Encrypt string.
     *
     * @param mixed \$data
     */
    public function encrypt(\$data): string
    {
        \$encryptionCipher = reset(\$this->availableCiphers);
        \$initVector       = \$encryptionCipher->getRandomInitVector();
        \$encrypted        = \$encryptionCipher->encrypt(serialize(\$data), \$this->key, \$initVector);

        return base64_encode(\$encrypted).'|'.base64_encode(\$initVector);
    }

    /**
     * Decrypt string.
     * Returns false in case of failed decryption.
     *
     * @param string \$data
     * @param bool   \$mainDecryptOnly
     *
     * @return mixed|false
     */
    public function decrypt(\$data, \$mainDecryptOnly = false)
    {
        \$encryptData      = explode('|', \$data);
        \$encryptedMessage = base64_decode(\$encryptData[0]);
        \$initVector       = base64_decode(\$encryptData[1]);
        \$mainTried        = false;
        foreach (\$this->availableCiphers as \$availableCipher) {
            if (\$mainDecryptOnly && \$mainTried) {
                return false;
            }
            try {
                return Serializer::decode(\$availableCipher->decrypt(\$encryptedMessage, \$this->key, \$initVector));
            } catch (InvalidDecryptionException) {
            }
            \$mainTried = true;
        }

        return false;
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
        return "@bundles/CoreBundle/Helper/EncryptionHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/EncryptionHelper.php", "/app/docroot/app/bundles/CoreBundle/Helper/EncryptionHelper.php");
    }
}
