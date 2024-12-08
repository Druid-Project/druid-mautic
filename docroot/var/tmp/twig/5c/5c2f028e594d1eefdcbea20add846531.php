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

/* @bundles/CoreBundle/Tests/Unit/Helper/Update/PreUpdateChecks/CheckPhpVersionTest.php */
class __TwigTemplate_e828eb918c1854d83cb1960dd37d706d extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper\\Update\\PreUpdateChecks;

use Mautic\\CoreBundle\\Helper\\Update\\PreUpdateChecks\\CheckPhpVersion;
use Mautic\\CoreBundle\\Release\\Metadata;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;

class CheckPhpVersionTest extends MauticMysqlTestCase
{
    public function testPhpVersionOk(): void
    {
        \$releaseMetadata = [
            'version'                           => '10.0.1',
            'stability'                         => 'stable',
            'minimum_php_version'               => '7.4.0', // Our CI is always this or a higher version so we're good
            'maximum_php_version'               => '999.99.99', // Hopefully this version will never exist
            'show_php_version_warning_if_under' => '7.4.0',
            'minimum_mautic_version'            => '3.2.0',
            'announcement_url'                  => '',
            'minimum_mysql_version'             => '5.6.0',
            'minimum_mariadb_version'           => '10.1.0',
        ];

        \$check = new CheckPhpVersion();
        \$check->setUpdateCandidateMetadata(new Metadata(\$releaseMetadata));
        \$result = \$check->runCheck();

        // Just checking if we can properly detect the PHP version
        \$this->assertSame(true, \$result->success);
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/Update/PreUpdateChecks/CheckPhpVersionTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/Update/PreUpdateChecks/CheckPhpVersionTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/Update/PreUpdateChecks/CheckPhpVersionTest.php");
    }
}
