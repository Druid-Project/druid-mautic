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

/* @bundles/CoreBundle/Test/Session/FixedMockFileSessionStorage.php */
class __TwigTemplate_824f3c4bcb6bf9edc0855097d0dc904d extends Template
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

namespace Mautic\\CoreBundle\\Test\\Session;

use Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage;

/**
 * Work around for Symfony bug https://github.com/symfony/symfony/issues/13450.
 */
class FixedMockFileSessionStorage extends MockFileSessionStorage
{
    public function setId(string \$id): void
    {
        if (\$this->id !== \$id) {
            parent::setId(\$id);
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
        return "@bundles/CoreBundle/Test/Session/FixedMockFileSessionStorage.php";
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
        return new Source("", "@bundles/CoreBundle/Test/Session/FixedMockFileSessionStorage.php", "/app/docroot/app/bundles/CoreBundle/Test/Session/FixedMockFileSessionStorage.php");
    }
}
