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

/* @bundles/CoreBundle/Doctrine/Provider/VersionProvider.php */
class __TwigTemplate_28b1a079ffbf3121da3bf16110c6f177 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Provider;

use Doctrine\\DBAL\\Connection;

final class VersionProvider implements VersionProviderInterface
{
    private ?string \$version = null;

    public function __construct(
        private Connection \$connection
    ) {
    }

    public function getVersion(): string
    {
        if (null === \$this->version) {
            \$this->version = \$this->fetchVersionFromDb();
        }

        return \$this->version;
    }

    public function isMariaDb(): bool
    {
        return str_contains(\$this->getVersion(), 'MariaDB');
    }

    public function isMySql(): bool
    {
        return !\$this->isMariaDb();
    }

    private function fetchVersionFromDb(): string
    {
        return \$this->connection->executeQuery('SELECT VERSION()')->fetchOne();
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
        return "@bundles/CoreBundle/Doctrine/Provider/VersionProvider.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Provider/VersionProvider.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/Provider/VersionProvider.php");
    }
}
