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

/* @bundles/AssetBundle/Helper/TokenHelper.php */
class __TwigTemplate_a1dd991bb507d6d816206103fd973d9d extends Template
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

namespace Mautic\\AssetBundle\\Helper;

use Mautic\\AssetBundle\\Model\\AssetModel;

class TokenHelper
{
    public function __construct(
        protected AssetModel \$model
    ) {
    }

    public function findAssetTokens(\$content, \$clickthrough = []): array
    {
        \$tokens = [];

        preg_match_all('/{assetlink=(.*?)}/', \$content, \$matches);
        if (!empty(\$matches[1])) {
            foreach (\$matches[1] as \$key => \$assetId) {
                \$token = \$matches[0][\$key];

                if (isset(\$tokens[\$token])) {
                    continue;
                }

                \$asset          = \$this->model->getEntity(\$assetId);
                \$tokens[\$token] = (null !== \$asset) ? \$this->model->generateUrl(\$asset, true, \$clickthrough) : '';
            }
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
        return "@bundles/AssetBundle/Helper/TokenHelper.php";
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
        return new Source("", "@bundles/AssetBundle/Helper/TokenHelper.php", "/app/docroot/app/bundles/AssetBundle/Helper/TokenHelper.php");
    }
}
