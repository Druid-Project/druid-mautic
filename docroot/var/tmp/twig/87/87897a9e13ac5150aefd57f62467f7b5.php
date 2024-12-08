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

/* @bundles/CoreBundle/Helper/PageHelper.php */
class __TwigTemplate_32d0446179b593519f46859074a86a83 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;

final class PageHelper implements PageHelperInterface
{
    public function __construct(
        private SessionInterface \$session,
        private CoreParametersHelper \$coreParametersHelper,
        private string \$sessionPrefix,
        private int \$page
    ) {
    }

    public function getLimit(): int
    {
        return (int) \$this->session->get(
            \"{\$this->sessionPrefix}.limit\",
            \$this->coreParametersHelper->get('default_pagelimit')
        );
    }

    public function countPage(int \$count): int
    {
        \$currentPage = (int) (ceil(\$count / \$this->getLimit())) ?: 1;

        return (1 === \$count) ? 1 : \$currentPage;
    }

    public function getStart(): int
    {
        \$start = (\$this->page - 1) * \$this->getLimit();

        if (\$start < 0) {
            return 0;
        }

        return \$start;
    }

    public function rememberPage(int \$page): void
    {
        \$this->session->set(\"{\$this->sessionPrefix}.page\", \$page);
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
        return "@bundles/CoreBundle/Helper/PageHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/PageHelper.php", "/app/docroot/app/bundles/CoreBundle/Helper/PageHelper.php");
    }
}
