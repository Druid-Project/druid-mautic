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

/* @bundles/FormBundle/Helper/TokenHelper.php */
class __TwigTemplate_5455c8fd3315564f7b017a193ba54008 extends Template
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

namespace Mautic\\FormBundle\\Helper;

use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\FormBundle\\Model\\FormModel;

class TokenHelper
{
    public function __construct(
        protected FormModel \$formModel,
        protected CorePermissions \$security
    ) {
    }

    public function findFormTokens(\$content): array
    {
        \$tokens = [];

        preg_match_all('/{form=(.*?)}/', \$content, \$matches);

        if (count(\$matches[0])) {
            foreach (\$matches[1] as \$k => \$id) {
                \$token = \$matches[0][\$k];

                if (isset(\$tokens[\$token])) {
                    continue;
                }
                \$form = \$this->formModel->getEntity(\$id);
                if (null !== \$form
                    && (
                        \$form->isPublished(false)
                        || \$this->security->hasEntityAccess(
                            'form:forms:viewown', 'form:forms:viewother', \$form->getCreatedBy()
                        )
                    )
                ) {
                    \$formHtml = (\$form->isPublished()) ? \$this->formModel->getContent(\$form) :
                        '';

                    // pouplate get parameters
                    \$this->formModel->populateValuesWithGetParameters(\$form, \$formHtml);

                    \$tokens[\$token] = \$formHtml;
                } else {
                    \$tokens[\$token] = '';
                }
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
        return "@bundles/FormBundle/Helper/TokenHelper.php";
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
        return new Source("", "@bundles/FormBundle/Helper/TokenHelper.php", "/app/docroot/app/bundles/FormBundle/Helper/TokenHelper.php");
    }
}
