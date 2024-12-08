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

/* @bundles/CoreBundle/Helper/HashHelper/HashHelperInterface.php */
class __TwigTemplate_de845c8c88da38c8785a56fc6ede0620 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\HashHelper;

/**
 * Interface HashHelperInterface.
 */
interface HashHelperInterface
{
    /**
     * Generate a hash value.
     *
     * @param string \$algo       Name of selected hashing algorithm (i.e. \"md5\", \"sha256\", \"haval160,4\", etc..)
     * @param string \$data       Message to be hashed
     * @param bool   \$raw_output When set to TRUE, outputs raw binary data. FALSE outputs lowercase hexits.
     *
     * @return string a string containing the calculated message digest as lowercase hexits
     *                unless <i>raw_output</i> is set to true in which case the raw
     *                binary representation of the message digest is returned
     */
    public function hash(\$algo, \$data, \$raw_output = false);
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Helper/HashHelper/HashHelperInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/HashHelper/HashHelperInterface.php", "/app/docroot/app/bundles/CoreBundle/Helper/HashHelper/HashHelperInterface.php");
    }
}
