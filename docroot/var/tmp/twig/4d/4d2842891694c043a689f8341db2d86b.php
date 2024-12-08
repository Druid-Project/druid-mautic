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

/* @bundles/CoreBundle/Predis/Command/Unlink.php */
class __TwigTemplate_dbde6ad9f6f06f96bdee8f302380479d extends Template
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

namespace Mautic\\CoreBundle\\Predis\\Command;

use Predis\\Command\\Command;
use Predis\\Command\\PrefixableCommandInterface;

class Unlink extends Command implements PrefixableCommandInterface
{
    public const ID = 'UNLINK';

    public function getId(): string
    {
        return self::ID;
    }

    /**
     * @param mixed[] \$arguments
     *
     * @return mixed[]
     */
    protected function filterArguments(array \$arguments): array
    {
        return self::normalizeArguments(\$arguments);
    }

    public function prefixKeys(\$prefix): void
    {
        if (\$arguments = \$this->getArguments()) {
            foreach (\$arguments as &\$key) {
                \$key = \"\$prefix\$key\";
            }

            \$this->setRawArguments(\$arguments);
        }
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
        return "@bundles/CoreBundle/Predis/Command/Unlink.php";
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
        return new Source("", "@bundles/CoreBundle/Predis/Command/Unlink.php", "/app/docroot/app/bundles/CoreBundle/Predis/Command/Unlink.php");
    }
}
