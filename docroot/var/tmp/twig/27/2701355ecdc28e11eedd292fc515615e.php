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

/* @bundles/CoreBundle/Tests/Unit/Helper/Update/PreUpdateChecks/CheckDatabaseDriverAndVersionTest.php */
class __TwigTemplate_1319a4cfb1662408a9e2051494561f37 extends Template
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

use Mautic\\CoreBundle\\Helper\\Update\\PreUpdateChecks\\CheckDatabaseDriverAndVersion;
use Mautic\\CoreBundle\\Release\\Metadata;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;

class CheckDatabaseDriverAndVersionTest extends MauticMysqlTestCase
{
    public function testDatabaseDriverAndVersionOk(): void
    {
        \$releaseMetadata = [
            'version'                           => '10.0.1',
            'stability'                         => 'stable',
            'minimum_php_version'               => '7.4.0',
            'maximum_php_version'               => '8.0.99',
            'show_php_version_warning_if_under' => '7.4.0',
            'minimum_mautic_version'            => '3.2.0',
            'announcement_url'                  => '',
            'minimum_mysql_version'             => '5.6.0', // Our CI has a higher version than this so we're good
            'minimum_mariadb_version'           => '10.1.0', // Our CI has a higher version than this so we're good
        ];

        \$check = new CheckDatabaseDriverAndVersion(\$this->em);
        \$check->setUpdateCandidateMetadata(new Metadata(\$releaseMetadata));
        \$result = \$check->runCheck();

        // Just checking if we can properly detect the database driver + version
        \$this->assertSame(true, \$result->success);
    }

    public function testDatabaseDriverAndVersionTooLow(): void
    {
        \$releaseMetadata = [
            'version'                           => '10.0.1',
            'stability'                         => 'stable',
            'minimum_php_version'               => '7.4.0',
            'maximum_php_version'               => '8.0.99',
            'show_php_version_warning_if_under' => '7.4.0',
            'minimum_mautic_version'            => '3.2.0',
            'announcement_url'                  => '',
            'minimum_mysql_version'             => '999.99.99', // Hopefully this version will never exist
            'minimum_mariadb_version'           => '999.99.99', // Hopefully this version will never exist
        ];

        \$check = new CheckDatabaseDriverAndVersion(\$this->em);
        \$check->setUpdateCandidateMetadata(new Metadata(\$releaseMetadata));
        \$result = \$check->runCheck();

        // The check should've failed as our current database version is lower than 99.99.99
        \$this->assertSame(false, \$result->success);
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/Update/PreUpdateChecks/CheckDatabaseDriverAndVersionTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/Update/PreUpdateChecks/CheckDatabaseDriverAndVersionTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/Update/PreUpdateChecks/CheckDatabaseDriverAndVersionTest.php");
    }
}
