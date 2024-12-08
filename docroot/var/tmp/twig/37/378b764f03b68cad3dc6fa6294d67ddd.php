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

/* @bundles/IntegrationsBundle/Facade/EncryptionService.php */
class __TwigTemplate_e9dc0a26d094716ed67e342c65681b22 extends Template
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

namespace Mautic\\IntegrationsBundle\\Facade;

use Mautic\\CoreBundle\\Helper\\EncryptionHelper;

class EncryptionService
{
    public function __construct(
        private EncryptionHelper \$encryptionHelper
    ) {
    }

    /**
     * @param mixed \$keys
     *
     * @return array|string
     */
    public function encrypt(\$keys)
    {
        if (!is_array(\$keys)) {
            return \$this->encryptionHelper->encrypt(\$keys);
        }

        foreach (\$keys as \$name => \$key) {
            \$keys[\$name] = \$this->encryptionHelper->encrypt(\$key);
        }

        return \$keys;
    }

    /**
     * @param bool \$onlyPrimaryCipher
     *
     * @return array|string
     */
    public function decrypt(\$keys, \$onlyPrimaryCipher = false)
    {
        if (!is_array(\$keys)) {
            return \$this->encryptionHelper->decrypt(\$keys, \$onlyPrimaryCipher);
        }

        foreach (\$keys as \$name => \$key) {
            \$keys[\$name] = \$this->encryptionHelper->decrypt(\$key, \$onlyPrimaryCipher);
        }

        return \$keys;
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
        return "@bundles/IntegrationsBundle/Facade/EncryptionService.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Facade/EncryptionService.php", "/app/docroot/app/bundles/IntegrationsBundle/Facade/EncryptionService.php");
    }
}
