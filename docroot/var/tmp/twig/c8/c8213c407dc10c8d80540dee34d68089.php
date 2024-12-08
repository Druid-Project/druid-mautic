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

/* @bundles/CoreBundle/Doctrine/Helper/FulltextKeyword.php */
class __TwigTemplate_a8c9ce6cbd028fb44bf33a1ceb0944e4 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Helper;

class FulltextKeyword implements \\Stringable
{
    public function __construct(
        private string \$value,
        private bool \$booleanMode = true,
        private bool \$wordSearch = true,
        private bool \$wordInflecting = false
    ) {
    }

    public function __toString(): string
    {
        return \$this->format();
    }

    public function format(): string
    {
        \$return = '';
        \$value  = mb_substr(\$this->value, 0, 255);

        if (\$this->wordSearch) {
            \$words     = explode(' ', preg_replace('/[^\\p{L}\\p{N}_]+/u', ' ', \$value));
            \$wordCount = count(\$words);

            for (\$i = 0; \$i < \$wordCount; ++\$i) {
                \$word = \$words[\$i];

                if (\$this->booleanMode) {
                    // strip boolean operators
                    \$word = str_replace(['+', '-', '@', '<', '>', '(', ')', '~', '*', '\"'], '', \$word);
                }

                \$wordLength = mb_strlen(\$word);

                if (\$wordLength > 0) {
                    if (\$this->booleanMode) {
                        if (\$this->wordInflecting && \$wordLength > 3) {
                            \$return .= '+('.\$word.'* <'.mb_substr(\$word, 0, \$wordLength - 1).'*)';
                        } else {
                            \$return .= '+'.\$word.'*';
                        }
                    } else {
                        \$return .= \$word;
                    }

                    \$return .= ' ';
                }
            }

            \$return = trim(\$return);
        }

        // append phrase search with a higher rank
        if (\$this->booleanMode && \$value) {
            \$return = sprintf('%s\"%s\"', \$return ? '('.\$return.') >' : '', trim(str_replace('\"', \"'\", \$value)));
        }

        return \$return;
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
        return "@bundles/CoreBundle/Doctrine/Helper/FulltextKeyword.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Helper/FulltextKeyword.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/Helper/FulltextKeyword.php");
    }
}
