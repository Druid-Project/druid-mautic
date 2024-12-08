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

/* @bundles/PageBundle/Helper/TokenHelper.php */
class __TwigTemplate_f7cc764ba802faf8380d84eebc0a68b8 extends Template
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

namespace Mautic\\PageBundle\\Helper;

use Mautic\\PageBundle\\Model\\PageModel;

class TokenHelper
{
    public function __construct(
        protected PageModel \$model
    ) {
    }

    public function findPageTokens(\$content, \$clickthrough = []): array
    {
        preg_match_all('/{pagelink=(.*?)}/', \$content, \$matches);

        \$tokens = [];
        if (!empty(\$matches[1])) {
            foreach (\$matches[1] as \$key => \$pageId) {
                \$token = \$matches[0][\$key];
                if (!empty(\$tokens[\$token])) {
                    continue;
                }

                \$page = \$this->model->getEntity(\$pageId);

                if (!\$page) {
                    continue;
                }

                \$tokens[\$token] = \$this->model->generateUrl(\$page, true, \$clickthrough);
            }

            unset(\$matches);
        }

        return \$tokens;
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
        return "@bundles/PageBundle/Helper/TokenHelper.php";
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
        return new Source("", "@bundles/PageBundle/Helper/TokenHelper.php", "/app/docroot/app/bundles/PageBundle/Helper/TokenHelper.php");
    }
}
