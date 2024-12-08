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

/* @bundles/ConfigBundle/Form/DataTransformer/DsnTransformer.php */
class __TwigTemplate_26c470c2b2f1aadc6b0446e91f542258 extends Template
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

namespace Mautic\\ConfigBundle\\Form\\DataTransformer;

use Mautic\\ConfigBundle\\Form\\Type\\EscapeTransformer;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\Dsn\\Dsn;
use Symfony\\Component\\Form\\DataTransformerInterface;

/**
 * @implements DataTransformerInterface<string, array>
 */
class DsnTransformer implements DataTransformerInterface
{
    private const PASSWORD_MASK = '🔒';

    public function __construct(
        private CoreParametersHelper \$coreParametersHelper,
        private EscapeTransformer \$escapeTransformer,
        private string \$configKey,
        private bool \$allowEmpty
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function transform(\$value): array
    {
        // unescape the DSN before the transformation to array
        \$value = \$this->escapeTransformer->transform((string) \$value);

        try {
            \$dsn = Dsn::fromString(\$value);
        } catch (\\InvalidArgumentException) {
            return [];
        }

        return [
            'scheme'   => \$dsn->getScheme(),
            'host'     => \$dsn->getHost(),
            'user'     => \$dsn->getUser(),
            'password' => \$dsn->getPassword() ? self::PASSWORD_MASK : null,
            'port'     => \$dsn->getPort(),
            'path'     => \$dsn->getPath(),
            'options'  => \$dsn->getOptions(),
        ];
    }

    /**
     * @param array<string, mixed> \$value
     */
    public function reverseTransform(\$value): string
    {
        if (\$this->allowEmpty && !array_filter(\$value)) {
            return '';
        }

        // unescape the values as they are escaped by the escape transformer applied to the child elements
        \$value = \$this->escapeTransformer->transform(\$value);

        \$dsn = new Dsn(
            (string) \$value['scheme'],
            (string) \$value['host'],
            \$value['user'],
            \$value['password'],
            \$value['port'] ? (int) \$value['port'] : null,
            \$value['path'],
            \$value['options'],
        );

        if (self::PASSWORD_MASK === \$dsn->getPassword()) {
            \$previousDsn = Dsn::fromString(\$this->coreParametersHelper->get(\$this->configKey));
            \$dsn         = \$dsn->setPassword(\$previousDsn->getPassword());
        }

        // escape the DSN to prevent \"missing parameter\" errors
        return \$this->escapeTransformer->reverseTransform((string) \$dsn);
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
        return "@bundles/ConfigBundle/Form/DataTransformer/DsnTransformer.php";
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
        return new Source("", "@bundles/ConfigBundle/Form/DataTransformer/DsnTransformer.php", "/app/docroot/app/bundles/ConfigBundle/Form/DataTransformer/DsnTransformer.php");
    }
}
