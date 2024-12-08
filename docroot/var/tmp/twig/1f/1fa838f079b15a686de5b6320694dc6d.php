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

/* @bundles/CoreBundle/Security/Cryptography/Cipher/Symmetric/SymmetricCipherInterface.php */
class __TwigTemplate_2aa60710dfb8af49e90a276d23a240c9 extends Template
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

namespace Mautic\\CoreBundle\\Security\\Cryptography\\Cipher\\Symmetric;

use Mautic\\CoreBundle\\Security\\Exception\\Cryptography\\Symmetric\\InvalidDecryptionException;

/**
 * Interface SymmetricCipherInterface.
 */
interface SymmetricCipherInterface
{
    /**
     * @param string \$secretMessage
     * @param string \$key
     * @param string \$randomInitVector
     *
     * @return string
     */
    public function encrypt(\$secretMessage, \$key, \$randomInitVector);

    /**
     * @param string \$encryptedMessage
     * @param string \$key
     * @param string \$originalInitVector
     *
     * @return string
     *
     * @throws InvalidDecryptionException
     */
    public function decrypt(\$encryptedMessage, \$key, \$originalInitVector);

    /**
     * @return string
     */
    public function getRandomInitVector();

    /**
     * @return bool
     */
    public function isSupported();
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Security/Cryptography/Cipher/Symmetric/SymmetricCipherInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Security/Cryptography/Cipher/Symmetric/SymmetricCipherInterface.php", "/app/docroot/app/bundles/CoreBundle/Security/Cryptography/Cipher/Symmetric/SymmetricCipherInterface.php");
    }
}
